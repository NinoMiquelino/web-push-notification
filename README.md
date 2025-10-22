## 👨‍💻 Autor

<div align="center">
  <img src="https://avatars.githubusercontent.com/ninomiquelino" width="100" height="100" style="border-radius: 50%">
  <br>
  <strong>Onivaldo Miquelino</strong>
  <br>
  <a href="https://github.com/ninomiquelino">@ninomiquelino</a>
</div>

---

# 🔒 Crypto Tool AES-256-GCM (PHP & Tailwind CSS)

![Made with PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)
![Frontend JavaScript](https://img.shields.io/badge/Frontend-JavaScript-F7DF1E?logo=javascript&logoColor=black)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-38B2AC?logo=tailwindcss&logoColor=white)
![License MIT](https://img.shields.io/badge/License-MIT-green)
![Status Stable](https://img.shields.io/badge/Status-Stable-success)
![Version 1.0.0](https://img.shields.io/badge/Version-1.0.0-blue)
![GitHub stars](https://img.shields.io/github/stars/NinoMiquelino/aes-gcm-hkdf-php-webtool?style=social)
![GitHub forks](https://img.shields.io/github/forks/NinoMiquelino/aes-gcm-hkdf-php-webtool?style=social)
![GitHub issues](https://img.shields.io/github/issues/NinoMiquelino/aes-gcm-hkdf-php-webtool)

Este projeto é uma ferramenta de demonstração simples, mas robusta, para criptografar e descriptografar dados usando o algoritmo **AES-256-GCM (Galois/Counter Mode)**. O backend é implementado em PHP, aproveitando as funções nativas de criptografia, e o frontend utiliza **Tailwind CSS** para uma interface de usuário limpa e responsiva.

---

## 🌟 Recursos Principais

- 🔒 Criptografia Forte: Utiliza AES-256-GCM, um padrão de criptografia autenticada.
- 🧬 Derivação de Chave Segura: Implementa hash_hkdf para derivar uma chave de criptografia de 32 bytes (256 bits) a partir de uma chave hexadecimal de 64 caracteres fornecida pelo usuário.
 🛡️ AAD (Authenticated Additional Data): Utiliza uma URL fornecida pelo usuário como AAD, garantindo que a descriptografia só funcione se a URL original for fornecida.
- 💻 Frontend Amigável: Interface construída com Tailwind CSS e JavaScript Vanilla para fácil uso e demonstração.
- ⚙️ Geração de Chave: Botão para gerar automaticamente chaves hexadecimais de 64 caracteres.

---

## 🧠 Tecnologias utilizadas

- 💻 HTML5 / CSS3
- 🎨 Tailwind CSS
- ⚡ JavaScript (ES6+)
- 🐘 PHP 8.3+

---

## 🧩 Estrutura do Projeto
```
aes-gcm-hkdf-php-webtool/
├── index.html
├── api.php
├── README.md
├── .gitignore
└── LICENSE
```

---

## 📦 Como usar

### Pré-requisitos

Você precisa de um ambiente de desenvolvimento web com suporte a PHP (ex: XAMPP, WAMP, MAMP, ou Docker). O PHP deve ter a extensão `openssl` habilitada.

1. Clone este repositório:
   ```bash
   git clone https://github.com/ninomiquelino/aes-gcm-hkdf-php-webtool.git
   ```

---

## 🤝 Contribuições
Contribuições são sempre bem-vindas!  
Sinta-se à vontade para abrir uma [*issue*](https://github.com/NinoMiquelino/aes-gcm-hkdf-php-webtool/issues) com sugestões ou enviar um [*pull request*](https://github.com/NinoMiquelino/aes-gcm-hkdf-php-webtool/pulls) com melhorias.

---

## 💬 Contato
📧 [Entre em contato pelo LinkedIn](https://www.linkedin.com/in/onivaldomiquelino/)  
💻 Desenvolvido por **Onivaldo Miquelino**

---

v1.0.0 — Primeira versão estável

Nome do repositorio:
web-push-notification

Título Recomendado: 
WebPush Maestro: PHP & Tailwind Notification Demo

Descrição Curta (GitHub "About")
Demonstração completa de notificações Web Push. Inclui Service Worker em JavaScript para o cliente e um Backend em PHP que utiliza a biblioteca minishlink/web-push para enviar as mensagens.


## 👨‍💻 Autor

<div align="center">
  <img src="https://avatars.githubusercontent.com/ninomiquelino" width="100" height="100" style="border-radius: 50%">
  <br>
  <strong>Onivaldo Miquelino</strong>
  <br>
  <a href="https://github.com/ninomiquelino">@ninomiquelino</a>
</div>

---

# 🔔 WebPush Maestro: PHP & Tailwind Notification Demo

![Made with PHP](https://img.shields.io/badge/PHP-777BB4?logo=php&logoColor=white)
![Frontend JavaScript](https://img.shields.io/badge/Frontend-JavaScript-F7DF1E?logo=javascript&logoColor=black)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-38B2AC?logo=tailwindcss&logoColor=white)
![License MIT](https://img.shields.io/badge/License-MIT-green)
![Status Stable](https://img.shields.io/badge/Status-Stable-success)
![Version 1.0.0](https://img.shields.io/badge/Version-1.0.0-blue)
![GitHub stars](https://img.shields.io/github/stars/NinoMiquelino/web-push-notification?style=social)
![GitHub forks](https://img.shields.io/github/forks/NinoMiquelino/web-push-notification?style=social)
![GitHub issues](https://img.shields.io/github/issues/NinoMiquelino/web-push-notification)

Este projeto é uma demonstração completa e funcional de como implementar notificações **Web Push** utilizando um backend PHP e um frontend moderno estilizado com Tailwind CSS. Ele ilustra os dois principais métodos de envio de notificações: local (via JavaScript) e via servidor (Web Push real).

---

## 🌟 Recursos Principais

* **Web Push Funcional:** Implementação completa do fluxo de Web Push, incluindo Service Worker para o cliente e o envio pelo servidor.
* **PHP Backend:** Utiliza a biblioteca `minishlink/web-push` para enviar notificações de forma assíncrona para os navegadores via VAPID.
* **Gestão de Subscrição:** O backend PHP (simuladamente) armazena a subscrição do usuário para que o servidor possa enviar notificações posteriormente.
* **Duplo Método de Envio:**
    1.  **JavaScript Local:** Notificação instantânea (apenas demonstrativa, não é Push).
    2.  **PHP Web Push:** Notificação real enviada pelo servidor, que funciona mesmo quando o navegador está em segundo plano.
* **Status Dinâmico:** Componente de status no frontend que guia o usuário pelo processo de registro e subscrição.
* **Estilização Profissional:** Interface de usuário limpa e moderna com **Tailwind CSS**.

---

## 🧠 Tecnologias utilizadas

* **Backend:** PHP 7.4+
    * `minishlink/web-push` (Para a comunicação VAPID)
    * Composer (Gerenciador de dependências)
* **Frontend:** HTML5, JavaScript Vanilla, Service Worker
* **Estilização:** Tailwind CSS (via CDN)

---

## 🧩 Estrutura do Projeto
```
web-push-notification/
├── index.html
├── api.php
├── service-worker.js
├── composer.json
├── README.md
├── .gitignore
└── LICENSE
```

---

## ⚙️ Configuração e Instalação

### Pré-requisitos

1.  Um ambiente de servidor web com PHP (Apache, Nginx, ou servidor embutido do PHP).
2.  **Obrigatório:** Acesso via `https://` ou **localhost** (Service Workers e Push Notifications não funcionam em `http` comum).

### 1. Clonar o Repositório

   ```bash
   git clone https://github.com/ninomiquelino/web-push-notification.git
   ```

2. Instalar Dependências PHP
​Navegue até a pasta  e utilize o Composer:

```bash
composer install
cd .. # Voltar para a raiz do projeto
   ```

3. Gerar e Configurar Chaves VAPID
​O Web Push requer um par de chaves VAPID (Public e Private Key).
​Gere suas chaves: Você pode usar ferramentas online ou o próprio PHP.
​Substitua as chaves nos seguintes arquivos:
​api.php: Preencha as constantes VAPID_PUBLIC_KEY e VAPID_PRIVATE_KEY.
​public/index.html: Preencha a constante VAPID_PUBLIC_KEY no bloco <script>.
​Importante: O VAPID_SUBJECT em src/api.php deve ser um mailto: válido (ex: mailto:voce@exemplo.com).

​4. Executar o Servidor
​Para testes rápidos, você pode usar o servidor embutido do PHP:

# Execute na raiz do projeto
```bash
php -S localhost:8001
```

​• Verifique: O frontend (index.html) deve estar acessível em http://localhost:8001/public/index.html e o backend em http://localhost:8001/api.php.

​5. Configurar o Endpoint da API
​Edite o arquivo public/index.html e ajuste a constante API_URL para o endpoint correto da sua API:

// public/index.html
```bash
const API_URL = 'http://localhost:8001/api.php'; 
```

---

## 📝 Instruções de Uso

​Acesso: Abra http://localhost:8001/public/index.html no seu navegador (Chrome ou Firefox são recomendados).
​Permissão: O navegador pedirá permissão para exibir notificações. Permita.
​Status: O componente de status irá indicar:
​Service Worker registrado
​Usuário inscrito com sucesso
​Subscrição salva no backend (Um arquivo subscription.json deve ter sido criado em src/).
​Teste 1 (JS Local): Clique em Enviar Notificação (Frontend - JS). Uma notificação aparecerá instantaneamente (este é o método local, não usa o servidor).
​Teste 2 (PHP Web Push): Clique em Enviar Notificação (Backend - PHP Push).
​O frontend envia uma requisição ao api.php.
​O api.php usa sua chave privada VAPID para assinar a mensagem e envia o push para o provedor (ex: FCM do Google).
​O provedor envia a notificação para o Service Worker do seu navegador, que a exibe. Esta notificação funciona mesmo com o navegador minimizado!
​
🛑 Notas de Segurança e Produção
​Chaves VAPID: Em produção, NUNCA exponha a VAPID_PRIVATE_KEY em nenhum lugar do código frontend ou arquivos públicos. Ela deve ser usada apenas no backend.
​Armazenamento de Subscrição: O método de salvar a subscrição em um arquivo (subscription.json) é apenas para demonstração. Em produção, use um banco de dados para armazenar as subscrições de forma persistente.
​HTTPS: Para qualquer ambiente que não seja localhost, o Web Push requer o uso de HTTPS.

---

## 🤝 Contribuições
Contribuições são sempre bem-vindas!  
Sinta-se à vontade para abrir uma [*issue*](https://github.com/NinoMiquelino/web-push-notification/issues) com sugestões ou enviar um [*pull request*](https://github.com/NinoMiquelino/web-push-notification/pulls) com melhorias.

---

## 💬 Contato
📧 [Entre em contato pelo LinkedIn](https://www.linkedin.com/in/onivaldomiquelino/)  
💻 Desenvolvido por **Onivaldo Miquelino**

---
