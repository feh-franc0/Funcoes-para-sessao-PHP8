<?php

$_SESSION["empresa"] = "Treinamentos";

session_commit(); // confirma as mudanças que ja foram feitas, como se fosse as originais

session_abort(); // devolve ou cancela o que aconteceu,anula o processo antes feito
// session_reset(); // vai resetar nossa sessão, ira voltar ao estado inicial


echo $_SESSION["empresa"];