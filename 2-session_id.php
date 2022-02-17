<?php

// identificação da sessao

@session_start();

echo session_id()."<br/>";

// uma variavel existir em uma sessao, podendo ser vista em outra pagina que esta amarrado a sessao
$_SESSION["nome"] = "João Rangel";

echo "session-id: " . $_SESSION["nome"];