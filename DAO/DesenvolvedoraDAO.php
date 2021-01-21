<?php
include_once("../Model/Desenvolvedora.php");
include_once("../Utils/connect.php");

class DesenvolvedoraDAO{
    public function readAll(){
        //Array com todas as desenvolvedoras
        $desenvolvedoras = array();

        //Pega conexão com o banco
        $connect = new connectDB();

        //Banco
        $query = "SELECT * FROM desenvolvedora";
        $con = mysqli_query($connect->getConectaBanco(),$query);

        //Salva o objeto
        while ($dado = $con->fetch_array()) {
            $desenvolvedora = new Desenvolvedora($dado["id"],$dado["cnpj"],$dado["nome"],$dado["responsavel"],$dado["endereco"]);
            array_push($desenvolvedoras, $desenvolvedora);
        }

        //Disconect Banco
        $connect->disconect($connect->getConectaBanco());

        //Retorna
        return $desenvolvedoras;
    }

    public function readOne($id){
        //Pega conexão com o banco
        $connect = new connectDB();

        //Banco
        $query = "SELECT * FROM desenvolvedora WHERE id =".$id;
        $con = mysqli_query($connect->getConectaBanco(),$query);

        //Dados
        $dado = $con->fetch_array();

        //Disconect Banco
        $connect->disconect($connect->getConectaBanco());
        
        //Retorna
        return new Desenvolvedora($dado["id"],$dado["cnpj"],$dado["nome"],$dado["responsavel"],$dado["endereco"]);
    }

    public function insert($desenvolvedora){
        //Pega conexão com o banco
        $connect = new connectDB();

        //Dados
        $cnpj = $desenvolvedora->getCNPJ();
        $nome = $desenvolvedora->getNome();
        $responsavel = $desenvolvedora->getResponsavel();
        $endereco = $desenvolvedora->getEndereco();

        //Insert
        $query = "INSERT INTO desenvolvedora (cnpj, nome, responsavel, endereco) VALUES ('$cnpj','$nome','$responsavel','$endereco')";
        $con = mysqli_query($connect->getConectaBanco(), $query);

        //Disconect Banco
        $connect->disconect($connect->getConectaBanco());

    }

    public function update($desenvolvedora){
        //Pega conexão com o banco
        $connect = new connectDB();

        //Dados
        $id = $desenvolvedora->getId();
        $cnpj = $desenvolvedora->getCNPJ();
        $nome = $desenvolvedora->getNome();
        $responsavel = $desenvolvedora->getResponsavel();
        $endereco = $desenvolvedora->getEndereco();
        
        //Update
        $query= "UPDATE desenvolvedora SET cnpj = '$cnpj', nome='$nome', responsavel = '$responsavel', endereco='$endereco' WHERE id = '$id'";
        $con = mysqli_query($connect->getConectaBanco(),$query);

        //Disconect Banco
        $connect->disconect($connect->getConectaBanco());
    }

    public function delete($id){
        //Pega conexão com o banco
        $connect = new connectDB();

        //Delete
        $query= "DELETE FROM desenvolvedora WHERE id = '$id'";
        $con = mysqli_query($connect->getConectaBanco(), $query); 

        //Disconect Banco
        $connect->disconect($connect->getConectaBanco());
    }
}


?>