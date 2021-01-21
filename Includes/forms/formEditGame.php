<?php
include_once("../Controller/DesenvolvedoraController.php");
include_once("../Controller/GamesController.php");
include_once("../Model/Desenvolvedora.php");

if(isset($_GET["id"])){
    //Controllers
    $DesenvolvedoraController = new DesenvolvedoraController();
    $GamesController = new GamesController();

    //Retorna todos as desenvolvedoras
    $desenvolvedoras = $DesenvolvedoraController->listaTodasDesenvolvedoras();

    //Retorna os dados do game a serem editadas
    $game = $GamesController->listaUmGame($_GET["id"]);

}   else{
    header('Location: ../Views/ListaGames.php');
}

?>
<form method="POST" action="../Controller/GamesController.php?edit=true&id=<?php echo $game->getId();?>">
   <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nomeInput" name="nomeInput" value="<?php echo $game->getNome();?>" placeholder="Nome" required>
   </div>
   <div class="form-group">
      <label for="personagemPrincipal">Personagem Principal</label>
      <input type="text" class="form-control" id="personagemPrincipalInput" name="personagemPrincipalInput" value="<?php echo $game->getPersonagemPrincipal();?>" placeholder="Personagem Principal" required>
   </div>
   <div class="form-group">
      <label for="categoria">Categoria</label>
      <input type="text" class="form-control" id="categoriaInput" name="categoriaInput" value="<?php echo $game->getCategoria();?>" placeholder="Categoria" required>
   </div>
   <div class="form-group">
      <label for="sinopse">Sinopse</label>
      <input type="text" class="form-control" id="sinopseInput" name="sinopseInput" value="<?php echo $game->getSinopse();?>" placeholder="Sinopse" required>
   </div>
   <div class="form-group">
        <label for="sinopse">Desenvolvedora</label>
        <select class="form-control" name="desenvolvedoraSelect" id="desenvolvedoraSelect">
            <?php
                foreach ($desenvolvedoras as $key => $desenvolvedora) {
            ?>
                <option id="<?php echo $desenvolvedora->getId();?>" value="<?php echo $desenvolvedora->getId();?>" <?=($desenvolvedora->getId() == $game->getDesenvolvedora())?'selected':''?>><?php echo $desenvolvedora->getNome();?></option>
            <?php }?>
        </select>
   </div>
   <br>
   <button type="submit" class="btn btn-primary">Editar</button>
</form>