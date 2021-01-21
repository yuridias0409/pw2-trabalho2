<?php
include_once("../Model/Games.php");
include_once("../DAO/GamesDAO.php");

class GamesController{
    
    public function listaTodosGames(){
        $gamesDAO = new GamesDAO();
        return $gamesDAO->readAll();
    }

    public function listaUmGame($id){
        $gamesDAO = new GamesDAO();
        return $gamesDAO->readOne($id);
    }

    public function addGame($game){
        $gamesDAO = new GamesDAO();
        $gamesDAO->insert($game);
        header('Location: ../Views/ListaGames.php');
    }

    public function updateGame($game){
        $gamesDAO = new GamesDAO();
        $gamesDAO->update($game);
        header('Location: ../Views/ListaGames.php');
    }

    public function deleteGame($id){
        $gamesDAO = new GamesDAO();
        $gamesDAO->delete($id);
        header('Location: ../Views/ListaGames.php');
    }

}

//Própria classe
$GamesController = new GamesController(); // instancia sua classe

//Adição de um Game
if(isset($_POST['nomeInput']) && isset($_POST['desenvolvedoraSelect']) && !isset($_GET['edit'])){ // Quando existir o post nome:
    $GamesController->addGame(new Games(null, $_POST['nomeInput'],$_POST['personagemPrincipalInput'],$_POST['categoriaInput'],$_POST['sinopseInput'],$_POST['desenvolvedoraSelect']));
}

//Remoção de um Game
if(isset($_GET['delete']) && isset($_GET['id'])){
    $GamesController->deleteGame($_GET['id']);
}

//Edição de um Game
if(isset($_GET['edit']) && isset($_POST['nomeInput']) && isset($_POST['desenvolvedoraSelect'])){
    $GamesController->updateGame(new Games($_GET['id'], $_POST['nomeInput'],$_POST['personagemPrincipalInput'],$_POST['categoriaInput'],$_POST['sinopseInput'],$_POST['desenvolvedoraSelect']));
}

?>