<?php
include_once("../Controller/DesenvolvedoraController.php");
include_once("../Model/Desenvolvedora.php");
$DesenvolvedoraController = new DesenvolvedoraController();
$desenvolvedoras = $DesenvolvedoraController->listaTodasDesenvolvedoras();
?>
<form method="POST" action="../Controller/GamesController.php">
   <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nomeInput" name="nomeInput" placeholder="Nome" required>
   </div>
   <div class="form-group">
      <label for="personagemPrincipal">Personagem Principal</label>
      <input type="text" class="form-control" id="personagemPrincipalInput" name="personagemPrincipalInput" placeholder="Personagem Principal" required>
   </div>
   <div class="form-group">
      <label for="categoria">Categoria</label>
      <input type="text" class="form-control" id="categoriaInput" name="categoriaInput" placeholder="Categoria" required>
   </div>
   <div class="form-group">
      <label for="sinopse">Sinopse</label>
      <input type="text" class="form-control" id="sinopseInput" name="sinopseInput" placeholder="Sinopse" required>
   </div>
   <div class="form-group">
        <label for="sinopse">Desenvolvedora</label>
        <select class="form-control" name="desenvolvedoraSelect" id="desenvolvedoraSelect">
            <?php
                foreach ($desenvolvedoras as $key => $desenvolvedora) {
            ?>
                <option id="<?php echo $desenvolvedora->getId();?>" value="<?php echo $desenvolvedora->getId();?>"><?php echo $desenvolvedora->getNome();?></option>
            <?php }?>
        </select>
   </div>
   <br>
   <button type="submit" class="btn btn-primary">Adicionar</button>
</form>