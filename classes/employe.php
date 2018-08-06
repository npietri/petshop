<?php
//Classe enfant de Personne
        class Employe extends Person {
	
                    /*::::::::::::::::::::::::::::::::Attributs::::::::::::::::::::::::::::::::::::::::::::*/
    
                    //Attributs spécifiques à Client
        private $_employe_id;
        private $_salary;
        
    
  /*::::::::::::::::::::::::::::::::Constructeurs::::::::::::::::::::::::::::::::::::::::::::*/    
        //Constructeur surchargé

        function __construct($_firt_name, $_last_name, $_adress, $_postal_code, $_pwd, $_employe_id, $_salary){
            parent::__construct($_firt_name, $_last_name, $_adress, $_postal_code, $_pwd);
            $this->_employe_id = $_employe_id;
            $this->_salary = $d_salary;;
            echo "<br>employe construit !";
        }
    
        
    
                /*::::::::::::::::::::::::::::::::Accesseurs/Getters::::::::::::::::::::::::::::::::::::::::::::*/
        public function getEmployeId(){
            return $this->_employe_id;
        }
    
        public function getSalary(){
            return $this->_salary;
        }
      

                /*::::::::::::::::::::::::::::::::Mutateurs/Setters::::::::::::::::::::::::::::::::::::::::::::*/
               
        public function setEmployeId(){
            $this->_employe_id = $_employe_id;
        }       
        public function setSalary(){
             $this->_salary = $_salary;
        }       

      
    
                      /*::::::::::::::::::::::::::::::::Méthodes::::::::::::::::::::::::::::::::::::::::::::*/
    

    }

    ?>