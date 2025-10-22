<?php
require 'vendor/autoload.php';

use Minishlink\WebPush\Subscription;
use Minishlink\WebPush\WebPush;

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

// --- Configuração VAPID (MUDAR PARA SUAS CHAVES REAIS) ---
const VAPID_PUBLIC_KEY = 'SUA_CHAVE_PUBLICA_VAPID_AQUI'; // Ex: BExFkY...
const VAPID_PRIVATE_KEY = 'SUA_CHAVE_PRIVADA_VAPID_AQUI'; // Ex: xQ8g8J...
const VAPID_SUBJECT = 'mailto:seu@email.com'; // Seu e-mail ou URL

// --- Simulação de Armazenamento (Em produção, use um banco de dados) ---
// Iremos armazenar a subscrição em um arquivo simples para demonstração.
const SUBSCRIPTION_FILE = 'subscription.json';

function getSubscriptionStoragePath() {
    return __DIR__ . '/' . SUBSCRIPTION_FILE;
}

// --- Funções Auxiliares ---

function saveSubscription($subscription) {
    $path = getSubscriptionStoragePath();
    file_put_contents($path, json_encode($subscription));
}

function getSubscription() {
    $path = getSubscriptionStoragePath();
    if (file_exists($path)) {
        $content = file_get_contents($path);
        return json_decode($content, true);
    }
    return null;
}

function sendPushNotification($subscriptionData, $payload) {
    if (!$subscriptionData) {
        throw new Exception("Nenhuma subscrição encontrada.");
    }
    
    $auth = [
        'VAPID' => [
            'subject' => VAPID_SUBJECT,
            'publicKey' => VAPID_PUBLIC_KEY,
            'privateKey' => VAPID_PRIVATE_KEY,
        ],
    ];

    $webPush = new WebPush($auth);

    // Cria o objeto Subscription a partir dos dados armazenados
    $subscription = Subscription::create($subscriptionData);
    
    // O payload é o que o Service Worker do cliente vai receber
    $notificationPayload = json_encode(['title' => 'Notificação do Servidor PHP', 'body' => $payload]);

    $report = $webPush->sendOneNotification(
        $subscription,
        $notificationPayload
    );

    $endpoint = $report->getSubscription()->getEndpoint();

    if ($report->isSuccess()) {
        return "Notificação enviada com sucesso para {$endpoint}.";
    } else {
        // Se falhar por 'expired', você deve remover a subscrição do seu BD
        return "Falha ao enviar notificação para {$endpoint}: " . $report->getReason();
    }
}


// --- Lógica da API ---

$method = $_SERVER['REQUEST_METHOD'] ?? '';

if ($method === 'POST') {
    $input = file_get_contents('php://input');
    $data = json_decode($input, true);

    $action = $data['action'] ?? '';
    $payload = $data['payload'] ?? '';
    $subscription = $data['subscription'] ?? null;

    $result = ['success' => false, 'message' => '', 'error' => ''];

    try {
        switch ($action) {
            case 'subscribe':
                if (empty($subscription)) {
                    throw new Exception("Dados de subscrição inválidos.");
                }
                saveSubscription($subscription);
                $result['success'] = true;
                $result['message'] = 'Subscrição salva com sucesso.';
                break;

            case 'send_php':
                $savedSubscription = getSubscription();
                $message = sendPushNotification($savedSubscription, $payload);
                $result['success'] = true;
                $result['message'] = $message;
                break;
                
            default:
                throw new Exception('Ação inválida.');
        }
    } catch (Exception $e) {
        http_response_code(400);
        $result['error'] = $e->getMessage();
    }

    echo json_encode($result);
    
} elseif ($method === 'OPTIONS') {
    http_response_code(200);
    exit();
} else {
    http_response_code(405);
    echo json_encode(['success' => false, 'error' => 'Método não permitido.']);
}
?>
