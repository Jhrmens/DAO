<?php

class Usuario {

    private $id;
    private $deslogin;
    private $dessenha;
    private $email;

    public function getId(){
		return $this->id;
	}

	public function setId($value){
		$this->id = $value;
	}

	public function getDeslogin(){
		return $this->deslogin;
	}

	public function setDeslogin($value){
		$this->deslogin = $value;
	}

	public function getDessenha(){
		return $this->dessenha;
	}

	public function setDessenha($value){
		$this->dessenha = $value;
	}

	public function getEmail(){
		return $this->email;
	}

	public function setEmail($value){
		$this->email = $value;
    }

    public function loadById($id){

        $sql = new Sql();

        $results = $sql->select("select * from usuario Where id = :ID", array(
            ":ID"=>$id
        ));

        if(count($results) > 0) {

            $row = $results[0];

            $this->setId($row['id']);
            $this->setDeslogin($row['login']);
            $this->setDessenha($row['senha']);
            $this->email($row['email']);

        }
    }

    public function __toString(){
        return json_encode(array(
            "id"=>$this->getId(),
            "login"=>$this->getDeslogin(),
            "senha"=>$this->getDessenha(),
            "email"=>$this->getEmail()
        ));
    }
    
}

?>