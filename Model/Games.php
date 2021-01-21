<?php
class Games{
    private $id;
    private $nome;
    private $personagemprincipal;
    private $categoria;
    private $sinopse;
    private $desenvolvedora;
    
    function __construct($id, $nome, $personagemprincipal, $categoria, $sinopse, $desenvolvedora) {
        $this->id = $id;
        $this->nome = $nome;
        $this->personagemprincipal = $personagemprincipal;
        $this->categoria = $categoria;
        $this->sinopse = $sinopse;
        $this->desenvolvedora = $desenvolvedora;
    }

    public function setId($value){
        $this->id = $value;
    }

    public function getId(){
        return $this->id;
    }

    public function setNome($value){
        $this->nome = $value;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setPersonagemPrincipal($value){
        $this->personagemprincipal = $value;
    }

    public function getPersonagemPrincipal(){
        return $this->personagemprincipal;
    }

    public function setCategoria($value){
        $this->categoria = $value;
    }

    public function getCategoria(){
        return $this->categoria;
    }
    
    public function setSinopse($value){
        $this->sinopse = $value;
    }

    public function getSinopse(){
        return $this->sinopse;
    }
    
    public function setDesenvolvedora($value){
        $this->desenvolvedora = $value;
    }

    public function getDesenvolvedora(){
        return $this->desenvolvedora;
    }   
}

?>