// A URL de onde o service worker foi carregado. 
// Isso é importante para o escopo.

self.addEventListener('push', function(event) {
    // Recebe o payload (dados) enviados pelo servidor
    const data = event.data.json(); 
    
    const title = data.title || 'Nova Notificação';
    const options = {
        body: data.body || 'Você recebeu uma notificação.',
        icon: 'push-icon.png', // Adicione um ícone, se quiser.
        badge: 'push-badge.png' // Adicione um badge, se quiser.
    };

    // Exibe a notificação
    event.waitUntil(
        self.registration.showNotification(title, options)
    );
});

self.addEventListener('notificationclick', function(event) {
    event.notification.close();
    // Ação ao clicar na notificação (ex: abrir uma nova janela)
    event.waitUntil(
        clients.openWindow('https://github.com/google/web-push-php')
    );
});
