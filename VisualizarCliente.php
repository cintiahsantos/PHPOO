<?php
/**
 * Created by PhpStorm.
 * User: csantos
 * Date: 12/11/2015
 * Time: 11:41
 */

require_once "header.php";
IF(isset($_GET)) {
        $indice = $_GET["codigo"] - 1;
}
?>
<h1>Dados do Cliente</h1>
<div class="jumbotron">
<?php

if($vCliente[$indice] instanceof PessoaFisica)
{
     echo "<table class='table table-striped'>
        <thead><tr>
                <th>C�digo</th>
                <th>Nome</th>
			    <th>CPF</th>
			    <th>Dt Nasc</th>
                <th>Endere�o</th>
			    <th>Cidade</th>
			    <th>UF</th>
			    <th>Telefone</th>
			    <th>Email</th>
			    <th>Grau </th>
			    <th>Endere�o Cobran�a</th>
			    <th>Cidade </th>
			    <th>UF</th>
        </tr></thead>
        <tbody>";
                echo "<tr><td>" . $vCliente[$indice]->getCodigo() . "</td>";
                echo "<td>" . $vCliente[$indice]->getNome() . "</td>";
                echo "<td>" . $vCliente[$indice]->getCpf() . "</td>";
                echo "<td>" . $vCliente[$indice]->getDtNascimento() . "</td>";
                echo "<td>" . $vCliente[$indice]->getEndereco() . "</td>";
                echo "<td>" . $vCliente[$indice]->getCidade() . "</td>";
                echo "<td>" . $vCliente[$indice]->getEstado() . "</td>";
                echo "<td>" . $vCliente[$indice]->getTelefone() . "</td>";
                echo "<td>" . $vCliente[$indice]->getEmail() . "</td>";
                echo "<td>" . $vCliente[$indice]->getGrauCliente() . "</td>";
                echo "<td>" . $vCliente[$indice]->getEnderecoCobranca() . "</td>";
                echo "<td>" . $vCliente[$indice]->getCidadeCobranca() . "</td>";
                echo "<td>" . $vCliente[$indice]->getEstadoCobranca() . "</td>";
        echo "</tr></tbody>
        </table>";
}
else
{
        echo "<table class='table table-striped'>
        <thead><tr>
                <th>C�digo</th>
                <th>Nome</th>
				<th>CNPJ</th>
				<th>Endere�o</th>
				<th>Cidade</th>
				<th>UF</th>
				<th>Telefone</th>
				<th>Email</th>
				<th>Grau Cliente</th>
				<th>Endere�o Cobran�a</th>
			    <th>Cidade</th>
			    <th>UF</th>
        </tr></thead>
        <tbody>";
                echo "<tr><td>" . $vCliente[$indice]->getCodigo() . "</td>";
                echo "<td>" . $vCliente[$indice]->getNome() . "</td>";
                echo "<td>" . $vCliente[$indice]->getCnpj() . "</td>";
                echo "<td>" . $vCliente[$indice]->getEndereco() . "</td>";
                echo "<td>" . $vCliente[$indice]->getCidade() . "</td>";
                echo "<td>" . $vCliente[$indice]->getEstado() . "</td>";
                echo "<td>" . $vCliente[$indice]->getTelefone() . "</td>";
                echo "<td>" . $vCliente[$indice]->getEmail() . "</td>";
                echo "<td>" . $vCliente[$indice]->getGrauCliente() . "</td>";
                echo "<td>" . $vCliente[$indice]->getEnderecoCobranca() . "</td>";
                echo "<td>" . $vCliente[$indice]->getCidadeCobranca() . "</td>";
                echo "<td>" . $vCliente[$indice]->getEstadoCobranca() . "</td>";
        echo "</tr></tbody>
        </table>";
};
?>
<a href="index.php"><button class="btn btn-info " >Voltar</button></a>
</div><!-- /jumbotron -->

<?php
require_once "footer.php";
?>


