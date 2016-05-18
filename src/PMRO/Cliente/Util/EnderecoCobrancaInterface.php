<?php

/**
 * Created by PhpStorm.
 * User: cintia.santos
 * Date: 18/04/2016
 * Time: 09:39
 */
namespace PMRO\Cliente\Util;

interface EnderecoCobrancaInterface
{
    public function getEnderecoCobranca();

    public function setEnderecoCobranca($enderecoCobranca);

    public function getCidadeCobranca();

    public function setCidadeCobranca($cidadeCobranca);

    public function getEstadoCobranca();

    public function setEstadoCobranca($estadoCobranca);
}