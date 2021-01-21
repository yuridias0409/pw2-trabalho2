<?php
include_once("../Controller/DesenvolvedoraController.php");
include_once("../Controller/GamesController.php");
include_once("../Model/Desenvolvedora.php");

if(isset($_GET["id"])){
    //Controllers
    $DesenvolvedoraController = new DesenvolvedoraController();

    //Retorna os dados da desenvolvedora a serem editados
    $desenvolvedora = $DesenvolvedoraController->listaUmaDesenvolvedora($_GET["id"]);

}   else{
    header('Location: ../Views/ListaDesenvolvedoras.php');
}

?>
<form method="POST" action="../Controller/DesenvolvedoraController.php?edit=true&id=<?php echo $desenvolvedora->getId();?>">
  <div class="form-group">
    <label for="cnpj">CNPJ</label>
    <input type="text" class="form-control" id="cnpjInput" name="cnpjInput" value="<?php echo $desenvolvedora->getCNPJ();?>" aria-describedby="cnpj" placeholder="CNPJ" required>
  </div>
  <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" class="form-control" id="nomeInput" name="nomeInput" value="<?php echo $desenvolvedora->getNome();?>" placeholder="Nome" required>
  </div>
  <div class="form-group">
    <label for="responsavel">Responsável</label>
    <input type="text" class="form-control" id="responsavelInput" name="responsavelInput" value="<?php echo $desenvolvedora->getResponsavel();?>" placeholder="Responsável" required>
  </div>
  <div class="form-group">
    <label for="endereco">Endereço</label>
    <input type="text" class="form-control" id="enderecoInput" name="enderecoInput" value="<?php echo $desenvolvedora->getEndereco();?>" placeholder="Endereço" required>
  </div>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>
