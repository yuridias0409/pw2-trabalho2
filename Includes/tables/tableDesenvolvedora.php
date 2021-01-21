<?php
include_once("../Controller/DesenvolvedoraController.php");
include_once("../Model/Desenvolvedora.php");
$DesenvolvedoraController = new DesenvolvedoraController();
$desenvolvedoras = $DesenvolvedoraController->listaTodasDesenvolvedoras();
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Nome</th>
            <th scope="col">Responsável</th>
            <th scope="col">Endereço</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($desenvolvedoras as $key => $desenvolvedora) {
        ?>
        <tr>
            <td><?php echo $desenvolvedora->getId();?></td>
            <td><?php echo $desenvolvedora->getCNPJ();?></td>
            <td><?php echo $desenvolvedora->getNome();?></td>
            <td><?php echo $desenvolvedora->getResponsavel();?></td>
            <td><?php echo $desenvolvedora->getEndereco();?></td>
            <td><a href="../Views/EditarDesenvolvedora.php?id=<?php echo $desenvolvedora->getId()?>" class="btn btn-outline-success">Editar</a> <a href="../Controller/DesenvolvedoraController.php?delete=true&id=<?php echo $desenvolvedora->getId()?>" class="btn btn-outline-danger">Excluir</a></td>
        </tr>
        <?php }?>
    </tbody>
</table>