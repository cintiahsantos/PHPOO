<?php
/**
 * Created by PhpStorm.
 * User: csantos
 * Date: 12/11/2015
 * Time: 11:18
 */
require_once 'Util/header.php';
require_once 'CadastroClientes.php';
use PMRO\Cliente\Types\PessoaFisica;

?><h1>Lista de Clientes</h1>
<div class="jumbotron">
    <?php
    if(isset($_POST['cres'])){
        ksort($vCliente);
    }elseif(isset($_POST['dec'])){
        krsort($vCliente);
    }else{
        ksort($vCliente);
    }
    ?>
<form method="post">
    <button class="btn btn-warning" type="submit" value="cres" name="cres">Ordem Crescente</button>
    <button class="btn btn-warning " type="submit" value="dec" name="dec">Ordem Decrescente</button>
</form>
<table class="table table-striped">
    <thead>
    <tr>
        <th>C�digo</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Tipo Pessoa</th>
        <th>Visualizar</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($vCliente as $key => $value) {
        if($value instanceof PessoaFisica)
        {"PF";}else{"PJ";};
        ?>
        <tr>
            <td><?php echo $value->getCodigo();?></td>
            <td><?php echo $value->getNome();?></td>
            <td><?php echo $value->getEmail();?></td>
            <td><?php echo $value->getTelefone();?></td>
            <td><?php if($value instanceof PessoaFisica){echo 'PF';}else{echo 'PJ';};?></td>
            <td><a href="App/VisualizarCliente.php?codigo=<?php echo $value->getCodigo();?>">
                    <button class="btn btn-info " type="submit" name="visualizar" >Visualizar</button>
                </a></td>
        </tr>
        <?php
    }
    ?>
    </tbody>
</table>
</div>
<?php
require_once 'Util/footer.php';
?>