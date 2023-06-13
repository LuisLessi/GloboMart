<?php

Class Config {

    //Infos básicas do site
    const SITE_URL = "http://localhost:8070";
    const SITE_PASTA = "";
    const SITE_NOME = "GloboMart";
    const SITE_EMAIL_ADM = "assassinsonic1@gmail.com";

    //Infos básicas do DB
    const BD_HOST = "localhost",
          BD_USER = "root",
          BD_SENHA = "",
          BD_BANCO = "GloboMart";

    //Infos para PHP MAILLER
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_USER = "assassinsonic1@gmail.com";
    const EMAIL_NOME = "Contato GlobalMart";
    const EMAIL_SENHA = "Assassin5@";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = 'tls';
    const EMAIL_COPIA = 'assassinsonic1@gmail.com';
}

?>