<?php

class Person {
	
    /*::::::::::::::::::::::::::::::::Attributs::::::::::::::::::::::::::::::::::::::::::::*/
        protected $_firt_name;
        protected $_last_name;
        protected $_adress;
        protected $_postal_code;
        protected $_pwd;
    
    /*::::::::::::::::::::::::::::::::Constructeurs::::::::::::::::::::::::::::::::::::::::::::*/
    
        function __construct($_firt_name, $_last_name, $_adress, $_postal_code, $_pwd){
            $this->_first_name = $_firt_name;
            $this->_last_name = $_last_name;
            $this->_adress = $_adress;
            $this->_postal_code = $_postal_code;
            $this->_pwd = $_pwd;

        }
    
/*::::::::::::::::::::::::::::::::Accesseurs/Getters::::::::::::::::::::::::::::::::::::::::::::*/
    
public function getFirstName(){
    return $this->_firt_name;
}

public function getLastName(){
    return $this->_last_name;
}
public function getAdress(){
    return $this->_adress;
}
public function getPostalCode(){
    return $this->_postal_code;
}
public function getPwd(){
    return $this->_pwd;
}
  /*::::::::::::::::::::::::::::::::Mutateurs/Setters::::::::::::::::::::::::::::::::::::::::::::*/
    
public function setFirstName(){
    $this->_firt_name = $_firt_name;
}       
public function setLastName(){
     $this->_last_name = $_last_name;
}       
public function setAdress(){
    $this->_adress = $_adress;
}    
public function setPostalCode(){
$this->_postal_code = $_postal_code;
}  
public function setPwd(){
    $this->_pwd = $_pwd;
    }  
    
  /*::::::::::::::::::::::::::::::::Méthodes::::::::::::::::::::::::::::::::::::::::::::*/
    
     
        public function SayHello(){
            echo "<br> hello";
        }
    
    }

    ?>