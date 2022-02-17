<?php

// podemos destruir e apagar os dados

$_SESSION["empresa"] = "Hcode";

//session_unset(); // limpa e libera todas as variaveis de sessão, a chave e valor da var empresa serao limpadas. Limpa e acaba ate com o array local

session_destroy(); // não limpa o dado da variavel, mas elimina os dados da sessão,destruiu os valores sem trocar o id da sessão. Não acaba com o array local, elimina para as proximas paginas na pagina local ela mantem como array local

echo $_SESSION["empresa"];