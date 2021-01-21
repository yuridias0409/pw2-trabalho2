<?php
class Desenvolvedora{
    private $id;
    private $cnpj;
    private $nome;
    private $responsavel;
    private $endereco;
    
    function __construct($id, $cnpj, $nome, $responsavel, $endereco) {
        $this->id = $id;
        $this->cnpj = $cnpj;
        $this->nome = $nome;
        $this->responsavel = $responsavel;
        $this->endereco = $endereco;
    }

    public function setId($value){
        $this->id = $value;
    }

    public function getId(){
        return $this->id;
    }

    public function setCNPJ($value){
        $this->cnpj = $value;
    }

    public function getCNPJ(){
        return $this->cnpj;
    }

    public function setNome($value){
        $this->nome = $value;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setResponsavel($value){
        $this->responsavel = $value;
    }

    public function getResponsavel(){
        return $this->responsavel;
    }

    public function setEndereco($value){
        $this->endereco = $value;
    }

    public function getEndereco(){
        return $this->endereco;
    }   

}

?>