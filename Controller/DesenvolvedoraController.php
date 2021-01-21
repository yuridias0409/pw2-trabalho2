<?php
include_once("../Model/Desenvolvedora.php");
include_once("../DAO/DesenvolvedoraDAO.php");

class DesenvolvedoraController{

    public function listaTodasDesenvolvedoras(){
        $desenvolvedoraDAO = new DesenvolvedoraDAO();
        return $desenvolvedoraDAO->readAll();
    }

    public function listaUmaDesenvolvedora($id){
        $desenvolvedoraDAO = new DesenvolvedoraDAO();
        return $desenvolvedoraDAO->readOne($id);
    }

    public function addDesenvolvedora($desenvolvedora){
        $desenvolvedoraDAO = new DesenvolvedoraDAO();
        $desenvolvedoraDAO->insert($desenvolvedora);
        header('Location: ../Views/ListaDesenvolvedoras.php');
    }

    public function updateDesenvolvedora($desenvolvedora){
        $desenvolvedoraDAO = new DesenvolvedoraDAO();
        $desenvolvedoraDAO->update($desenvolvedora);
        header('Location: ../Views/ListaDesenvolvedoras.php');
    }

    public function deleteDesenvolvedora($id){
        $desenvolvedoraDAO = new DesenvolvedoraDAO();
        $desenvolvedoraDAO->delete($id);
        header('Location: ../Views/ListaDesenvolvedoras.php');
    }

}

//Própria classe
$DesenvolvedoraController = new DesenvolvedoraController(); 

//Adição de uma Desenvolvedora
if(isset($_POST['nomeInput']) && isset($_POST['cnpjInput']) && !isset($_GET['edit'])){ // Quando existir o post nome:
    $DesenvolvedoraController->addDesenvolvedora(new Desenvolvedora(null,$_POST['cnpjInput'],$_POST['nomeInput'],$_POST['responsavelInput'],$_POST['enderecoInput']));
}

//Remoção de uma Desenvolvedora
if(isset($_GET['delete']) && isset($_GET['id'])){
    $DesenvolvedoraController->deleteDesenvolvedora($_GET['id']);
}

//Edição de uma Desenvolvedora
if(isset($_GET['edit']) && isset($_POST['nomeInput']) && isset($_GET['id']) && isset($_POST['cnpjInput'])){
    $DesenvolvedoraController->updateDesenvolvedora(new Desenvolvedora($_GET['id'],$_POST['cnpjInput'],$_POST['nomeInput'],$_POST['responsavelInput'],$_POST['enderecoInput']));
}


?>