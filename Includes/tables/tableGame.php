<?php
include_once("../Controller/GamesController.php");
include_once("../Model/Games.php");
$GamesController = new GamesController();
$games = $GamesController->listaTodosGames();
?>
<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Personagem Principal</th>
            <th scope="col">Categoria</th>
            <th scope="col">Sinopse</th>
            <th scope="col">Desenvolvedora</th>
            <th scope="col">Ação</th>
        </tr>
    </thead>
    <tbody>
        <?php
            foreach ($games as $key => $game) {
        ?>
        <tr>
            <td><?php echo $game->getId();?></td>
            <td><?php echo $game->getNome();?></td>
            <td><?php echo $game->getPersonagemPrincipal();?></td>
            <td><?php echo $game->getCategoria();?></td>
            <td><?php echo $game->getSinopse();?></td>
            <td><?php echo $game->getDesenvolvedora();?></td>
            <td><a href="../Views/EditarGame.php?id=<?php echo $game->getId()?>" class="btn btn-outline-success">Editar</a> <a href="../Controller/GamesController.php?delete=true&id=<?php echo $game->getId()?>" class="btn btn-outline-danger">Excluir</a></td>
        </tr>
        <?php }?>
    </tbody>
</table>