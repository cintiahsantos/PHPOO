<?php

/**
 * Created by PhpStorm.
 * User: csantos
 * Date: 05/11/2015
 * Time: 10:51
 */

namespace PMRO\Cliente;
use PMRO\Cliente\Util\EnderecoCobrancaInterface;

class Cliente implements EnderecoCobrancaInterface
{
    protected $codigo;
    protected $nome;
    protected $endereco;
    protected $cidade;
    protected $estado;
    protected $telefone;
    protected $email;
    protected $enderecoCobranca;
    protected $cidadeCobranca;
    protected $estadoCobranca;

    public function __construct($codigo, $nome, $endereco, $cidade, $estado, $telefone, $email,
                                $enderecoCobranca,$cidadeCobranca,$estadoCobranca )
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->telefone = $telefone;
        $this->email = $email;
        $this->enderecoCobranca = $enderecoCobranca;
        $this->cidadeCobranca = $cidadeCobranca;
        $this->estadoCobranca = $estadoCobranca;
    }
    public function getCodigo()
    {
        return $this->codigo;
    }
        public function getNome()
    {
        return $this->nome;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }
    public function getCidade()
    {
        return $this->cidade;
    }
    public function getEstado()
    {
        return $this->estado;
    }
    public function getTelefone()
    {
        return $this->telefone;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function getEnderecoCobranca()
    {
        return $this->enderecoCobranca;
    }

    public function setEnderecoCobranca($enderecoCobranca)
    {
        $this->enderecoCobranca = $enderecoCobranca;
    }

    public function getCidadeCobranca()
    {
        return $this->cidadeCobranca;
    }

    public function setCidadeCobranca($cidadeCobranca)
    {
        $this->cidadeCobranca = $cidadeCobranca;
    }

    public function getEstadoCobranca()
    {
        return $this->estadoCobranca;
    }

    public function setEstadoCobranca($estadoCobranca)
    {
        $this->estadoCobranca = $estadoCobranca;
    }

}