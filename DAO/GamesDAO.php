<?php
include_once("../Model/Games.php");
include_once("../Utils/connect.php");

class GamesDAO{
    public function readAll(){
        //Array com todas os games
        $games = array();

        //Pega conexão com o banco
        $connect = new connectDB();

        //Banco
        $query = "SELECT * FROM game";
        $con = mysqli_query($connect->getConectaBanco(),$query);

        //Salva o objeto
        while ($dado = $con->fetch_array()) {
            $game = new Games($dado["id"],$dado["nome"],$dado["personagemprincipal"],$dado["categoria"],$dado["sinopse"],$dado["desenvolvedora"]);
            array_push($games, $game);
        }

        //Disconect Banco
        $connect->disconect($connect->getConectaBanco());

        //Retorna
        return $games;
    }

    public function readOne($id){
        //Pega conexão com o banco
        $connect = new connectDB();

        //Banco
        $query = "SELECT * FROM game WHERE id =".$id;
        $con = mysqli_query($connect->getConectaBanco(),$query);

        //Dados
        $dado = $con->fetch_array();

        //Disconect Banco
        $connect->disconect($connect->getConectaBanco());
        
        //Retorna
        return new Games($dado["id"],$dado["nome"],$dado["personagemprincipal"],$dado["categoria"],$dado["sinopse"],$dado["desenvolvedora"]);
    }

    public function insert($game){
        //Pega conexão com o banco
        $connect = new connectDB();

        //Dados
        $nome = $game->getNome();
        $personagemPrincipal = $game->getPersonagemPrincipal();
        $categoria = $game->getCategoria();
        $sinopse = $game->getSinopse();
        $desenvolvedora = $game->getDesenvolvedora();

        //Insert
        $query = "INSERT INTO game (nome, personagemprincipal, categoria, sinopse, desenvolvedora) VALUES ('$nome','$personagemPrincipal','$categoria','$sinopse','$desenvolvedora')";
        $con = mysqli_query($connect->getConectaBanco(), $query);

        //Disconect Banco
        $connect->disconect($connect->getConectaBanco());
    }

    public function update($game){
        //Pega conexão com o banco
        $connect = new connectDB();

        //Dados
        $id = $game->getId();
        $nome = $game->getNome();
        $personagemPrincipal = $game->getPersonagemPrincipal();
        $categoria = $game->getCategoria();
        $sinopse = $game->getSinopse();
        $desenvolvedora = $game->getDesenvolvedora();
        
        //Update
        $query= "UPDATE game SET nome = '$nome', personagemprincipal='$personagemPrincipal', categoria = '$categoria', sinopse='$sinopse', desenvolvedora='$desenvolvedora' WHERE id = '$id'";
        $con = mysqli_query($connect->getConectaBanco(),$query);

        //Disconect Banco
        $connect->disconect($connect->getConectaBanco());
    }

    public function delete($id){
        //Pega conexão com o banco
        $connect = new connectDB();

        //Delete
        $query= "DELETE FROM game WHERE id = '$id'";
        $con = mysqli_query($connect->getConectaBanco(),$query);

        //Disconect Banco
        $connect->disconect($connect->getConectaBanco());
    }
}

?>