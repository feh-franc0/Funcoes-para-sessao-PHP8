<?php

@session_start();

echo "Escrevendo na segunda página: " . $_SESSION["nome"];