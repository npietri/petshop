<?php
//Classe enfant de Personne
        class Client extends Person {
	
                    /*::::::::::::::::::::::::::::::::Attributs::::::::::::::::::::::::::::::::::::::::::::*/
    
                    //Attributs spécifiques à Client
        private $_client_id;
        private $_creation_date;
    
  /*::::::::::::::::::::::::::::::::Constructeurs::::::::::::::::::::::::::::::::::::::::::::*/    
        //Constructeur surchargé

        function __construct($_firt_name, $_last_name, $_adress, $_postal_code, $_pwd, $_client_id, $_creation_date){
            parent::__construct($_firt_name, $_last_name, $_adress, $_postal_code, $_pwd);
            $this->_id = $_client_id;
            $this->_creation_date = $_creation_date;
            echo "<br>client construit !";
        }
    
        
    
                /*::::::::::::::::::::::::::::::::Accesseurs/Getters::::::::::::::::::::::::::::::::::::::::::::*/
        public function getclientId(){
            return $this->_client_id;
        }
    
        public function getCreationDate(){
            return $this->_creation_date;
        }

                /*::::::::::::::::::::::::::::::::Mutateurs/Setters::::::::::::::::::::::::::::::::::::::::::::*/
               
        public function setClientId(){
            $this->_client_id = $_client_id;
        }       
       
        public function setCreationDate(){
            $this->_creation_date = $_creation_date;
       }                   
      
    
                      /*::::::::::::::::::::::::::::::::Méthodes::::::::::::::::::::::::::::::::::::::::::::*/
    

    }

    ?>