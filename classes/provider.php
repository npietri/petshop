
<?php
//Classe enfant de Personne
        class Provider extends Person {
	
                    /*::::::::::::::::::::::::::::::::Attributs::::::::::::::::::::::::::::::::::::::::::::*/
    
                    //Attributs spécifiques à Providers
        private $_provider_id;
        private $_provider_account;
    
  /*::::::::::::::::::::::::::::::::Constructeurs::::::::::::::::::::::::::::::::::::::::::::*/    
        //Constructeur surchargé

        function __construct($_firt_name, $_last_name, $_adress, $_postal_code, $_pwd, $_provider_id, $_provider_account){
            parent::__construct($_firt_name, $_last_name, $_adress, $_postal_code, $_pwd);
            $this->_provider_id = $_provider_id;
            $this->_provider_account = $_provider_account;
          
            echo "<br>provider construit !";
        }
    
        
    
                /*::::::::::::::::::::::::::::::::Accesseurs/Getters::::::::::::::::::::::::::::::::::::::::::::*/
        public function getProviderId(){
            return $this->_provider_id;
        }
    
        public function getProviderAccount(){
            return $this->_provider_account;
        }


                /*::::::::::::::::::::::::::::::::Mutateurs/Setters::::::::::::::::::::::::::::::::::::::::::::*/
               
        public function setProviderId(){
            $this->_provider_id = $_providert_id;
        }       
        public function setProviderAccount(){
             $this->_provider_account= $_provider_account;
        }                       
    }
    
                      /*::::::::::::::::::::::::::::::::Méthodes::::::::::::::::::::::::::::::::::::::::::::*/
    
?>