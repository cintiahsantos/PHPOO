<?php
/**
 * Created by PhpStorm.
 * User: csantos
 * Date: 12/11/2015
 * Time: 11:41
 */

require_once "header.php";
require_once "CadastroClientes.php";
IF(isset($_GET)) {
    $indice = $_GET["codigo"] - 1;
}
?>

<h1>Dados do Cliente</h1>
<div class="jumbotron">
<?php
        echo "<table class='table table-striped'>
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Nome</th>
									<th>CPF</th>
									<th>Dt Nascimento</th>
                                    <th>Endereço</th>
									<th>Cidade</th>
									<th>Estado</th>
									<th>Telefone</th>
									<th>Email</th>
                                </tr>
								</thead>
                            <tbody>";
        echo "<tr>
		      <td>".$vCliente[$indice]->getCodigo()."</td>";
        echo "<td>".$vCliente[$indice]->getNome()."</td>";
        echo "<td>".$vCliente[$indice]->getCPF()."</td>";
        echo "<td>".$vCliente[$indice]->getDtNascimento()."</td>";
        echo "<td>".$vCliente[$indice]->getEndereco()."</td>";
        echo "<td>".$vCliente[$indice]->getCidade()."</td>";
        echo "<td>".$vCliente[$indice]->getEstado()."</td>";
        echo "<td>".$vCliente[$indice]->getTelefone()."</td>";
        echo "<td>".$vCliente[$indice]->getEmail()."</td>";
        echo " </tr> </tbody>
              </table>";

?>
<a href="index.php"><button class="btn btn-info " >Voltar</button></a>
</div><!-- /jumbotron -->

<?php
require_once "footer.php";
?>


