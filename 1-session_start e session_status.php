<?php

// sessao que tem inicio e termino 

// inicia sessao
@session_start(); // para caso o servidor tenha auto start n mostrar erro

echo match(session_status()) {
    PHP_SESSION_DISABLED => "Desabilitado",
    PHP_SESSION_NONE => "Nenhum",
    PHP_SESSION_ACTIVE => "Ativa",
};