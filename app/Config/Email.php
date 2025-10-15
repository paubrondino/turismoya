<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Email extends BaseConfig
{
    public string $fromEmail  = 'viajesturismoya@gmail.com';
    public string $fromName   = 'Viajes Turismo Ya';
    public string $protocol   = 'smtp';
    public string $SMTPHost   = 'smtp.gmail.com';
    public string $SMTPUser   = 'viajesturismoya@gmail.com';
    public string $SMTPPass   = 'rukeyqtcxwijswug'; // tu contraseña de app de Gmail
    public int    $SMTPPort   = 587;
    public string $SMTPCrypto = 'tls';
    public string $mailType   = 'html';
    public string $charset    = 'utf-8';
    public bool   $wordWrap   = true;
    public string $newline    = "\r\n";
    public string $CRLF       = "\r\n";
}
