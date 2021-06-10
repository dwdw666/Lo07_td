<?php
 require_once 'WebBean.interface.php';
class Cursus implements WebBean{
    private $listeModules;
    
    
    function _construct(){
        $listeModules=array();
    }
    function valide() {

    }
    function pageKO(){
         
    }
    function pageOK() {
            echo Charte::html_head_bootstrap("Cursus main");
           
     }
        
     public function sauveTXT(){
    
     }
       
    public function sauveXML($file){
            
    }
       
    public function sauveBDR($table){
   
    }
      
    public function createTable($table){
    
        
    }
    public function page_foot(){
            echo Charte::html_foot_bootstrap();
    }
    
    function addModule($module){
        $this->listeModules[$module->getSigle()]=$module;
        
    }
    function __toString(){
          return "Cursus->($this->listeModules)";
    } 
    function affiche(){
        
        var_dump($this->listeModules);
       
    }
}

