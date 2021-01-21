<?php
class connectDB{
    
    private $servidor = "localhost";
    private $usuario = "developer";
    private $senha = "rootpass";
    private $dbname = "games_enterprise";
    
    public function getConectaBanco(){
        $connect = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->dbname);
        return $connect;
    }

    public function disconect($connect){
        mysqli_close($connect);
    }
}
?>