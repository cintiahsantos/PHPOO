<?php
/**
 * Created by PhpStorm.
 * User: csantos
 * Date: 09/11/2015
 * Time: 13:24
 */
require_once "PessoaFisica.php";
require_once "PessoaJuridica.php";
$vCliente[0] = new PessoaFisica(1,"Cintia","000.000.000-00","01/10/2000","Rua A","Macaé","RJ","(22)99999-0000","teste1@gmail.com",1,"Rua X","Teresopolis", "RJ");
$vCliente[1] = new PessoaFisica(2,"Aline","111.111.111-11","02/10/2000","Rua B","Teresópolis","RJ","(22)99999-1111","teste2@gmail.com", 2,'','','');
$vCliente[2] = new PessoaFisica(3,"Maria Lúcia","222.222.222-22","03/10/2000","Rua C","Belo Horizonte","MG","(22)99999-2222","teste3@gmail.com",3,'','','');
$vCliente[3] = new PessoaFisica(4,"Marcos","333.333.333-33","04/10/2000","Rua D","São Paulo","SP","(22)99999-3333","teste4@gmail.com",3,'','','');
$vCliente[4] = new PessoaFisica(5,"Neto","444.444.444-44","05/10/2000","Rua E","Macaé","RJ","(22)99999-4444","teste5@gmail.com",5,'','','');
$vCliente[5] = new PessoaJuridica(6,"Chico","555.555.555-55","Rua F","Macaé","RJ","(22)99999-5555","teste6@gmail.com",3,'','','');
$vCliente[6] = new PessoaJuridica(7,"Jorgito","666.666.666-66","Rua G","Rio das Ostras","RJ","(22)99999-6666","teste7@gmail.com",2,"Rua Y","Belo Horizante", "BH");
$vCliente[7] = new PessoaJuridica(8,"Hermenegildo","777.777.777-77","Rua H","Rio de Janeiro","RJ","(22)99999-7777","teste8@gmail.com",1,'','','');
$vCliente[8] = new PessoaJuridica(9,"Vinicius","888.888.888-88","Rua I","Campos","RJ","(22)99999-8888","teste9@gmail.com",5,'','','');
$vCliente[9] = new PessoaJuridica(10,"Cissa","999.999.999-99","Rua J","Macaé","RJ","(22)99999-9999","teste10@gmail.com",3,'','','');
