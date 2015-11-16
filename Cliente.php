<?php

/**
 * Created by PhpStorm.
 * User: csantos
 * Date: 05/11/2015
 * Time: 10:51
 */
class Cliente
{
    private $codigo;
    private $nome;
    private $cpf;
    private $dt_nascimento;
    private $endereco;
    private $cidade;
    private $estado;
    private $telefone;
    private $email;

    public function __construct($codigo, $nome, $cpf, $dt_nascimento, $endereco, $cidade, $estado, $telefone, $email)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->dt_nascimento = $dt_nascimento;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->telefone = $telefone;
        $this->email = $email;
    }
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function getCPF()
    {
        return $this->cpf;
    }
    public function getDtNascimento()
    {
        return $this->dt_nascimento;
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
}