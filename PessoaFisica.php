<?php

/**
 * Created by PhpStorm.
 * User: csantos
 * Date: 19/11/2015
 * Time: 11:04
 */

require_once "Cliente.php";
require_once "ClienteInterface.php";


class PessoaFisica extends Cliente implements ClienteInterface
{
    private $cpf;
    private $dt_nascimento;
    private $grauCliente;
    public function __construct($codigo, $nome, $cpf, $dt_nascimento, $endereco, $cidade, $estado, $telefone, $email, $grauCliente,
                                $enderecoCobranca,$cidadeCobranca,$estadoCobranca)
    {
        parent::__construct($codigo, $nome,$endereco, $cidade, $estado, $telefone, $email,$enderecoCobranca,$cidadeCobranca,$estadoCobranca);
        $this->cpf = $cpf;
        $this->dt_nascimento = $dt_nascimento;
        $this->grauCliente = $grauCliente;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }

    public function getDtNascimento()
    {
        return $this->dt_nascimento;
    }

    public function setDtNascimento($dt_nascimento)
    {
        $this->dt_nascimento = $dt_nascimento;
        return $this;
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