<?php

// tambem podemos garantir ou forçar uma nova identificação para a sessão, um novo id para nossa sessão
// muito usado para segurança, a gente cria uma sessão para o usuario e dps força a criação de outra para ter certeza que o usuario esta seguro de um roupa de sessão

@session_start();

echo session_id();

// podemos passar o true para excluir o ultimo id que foi criado
session_regenerate_id();