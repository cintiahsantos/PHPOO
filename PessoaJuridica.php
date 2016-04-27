<?php

/**
 * Created by PhpStorm.
 * User: csantos
 * Date: 19/11/2015
 * Time: 11:09
 */

require_once "Cliente.php";
require_once "ClienteInterface.php";

class PessoaJuridica extends Cliente implements ClienteInterface
{
    private $cnpj;
    private $grauCliente;
    public function __construct($codigo, $nome, $cnpj, $endereco, $cidade, $estado, $telefone, $email,$grauCliente,
                                $enderecoCobranca,$cidadeCobranca,$estadoCobranca)
    {
        parent::__construct($codigo, $nome,$endereco, $cidade, $estado, $telefone, $email, $enderecoCobranca,$cidadeCobranca,$estadoCobranca);
        $this->cnpj = $cnpj;
        $this->grauCliente = $grauCliente;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getGrauCliente()
    {
        return $this->grauCliente;
    }

    public function setGrauCliente($grauCliente)
    {
        $this->grauCliente = $grauCliente;
        return $this;
    }

}