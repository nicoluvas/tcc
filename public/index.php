<?php

    // Desenvolvimento
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);


    // TimeZone
    date_default_timezone_set('America/Sao_Paulo');

    // Sessão
    ini_set('session.cookie_lifetime', 0); // A sessão expira quando o navegador é fechado se 0
    ini_set('session.gc_maxlifetime', 1440); // Tempo de vida da sessão em segundos
    ini_set('session.use_cookies', 1); // Usar cookies para gerenciar a sessão
    ini_set('session.use_only_cookies', 1); // Não usar IDs de sessão na URL
    ini_set('session.cookie_httponly', 1); // Impede acesso ao cookie via JavaScript
    ini_set('session.cookie_secure', 1); // O cookie só será enviado via HTTPS (se aplicável)
    ini_set('session.gc_maxlifetime', 1209600); // 2 semanas
    ini_set('session.cookie_lifetime', 1209600); // 2 semanas
    // ini_set('session.save_path', dirname(__FILE__, 2)); // Caminho para salvar sessões

    session_start();

    require '../vendor/autoload.php';
    
    ob_start();
    new \App\Bootstrap;
    ob_end_flush();
?>
