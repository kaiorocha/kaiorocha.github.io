<?php

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
$headers .= "From: eu@seudominio.com\r\n"; // remetente
$headers .= "Return-Path: eu@seudominio.com\r\n"; // return-path
$envio = mail("kaio.f.roch@gmail.com", "Assunto teste", "Texto teste", $headers);

if($envio)
    echo "Mensagem enviada com sucesso";
else
    echo "A mensagem não pode ser enviada";