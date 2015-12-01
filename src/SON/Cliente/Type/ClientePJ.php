<?php

namespace SON\Cliente\Type;

use SON\Cliente\ClienteAbstract;

class ClientePJ extends ClienteAbstract
{
    public function __construct($nome, $cpf, $endereco)
    {
        parent::__construct($nome, $cpf, $endereco);

        $this->tipo = 2;
    }

}