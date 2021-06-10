<?php
    require_once 'WebBean.interface.php';
    require_once 'Charte.class.php';
    class Module implements WebBean{
       
        private $sigle;
        private $lable;
        private $categorie;
        private $effectif;
        function __construct($sigle, $label, $categorie, $effectif){
            //initialement
            $this->setCategorie($categorie);
            $this->setEffectif($effectif);
            $this->setLable($label);
            $this->setSigle($sigle);            
            
        }
        
        function valide() {
            $resulte = true;
            $sigle = filter_input(INPUT_GET, 'sigle', FILTER_SANITIZE_STRING);
            
            if(strlen($sigle) == 0){
                $resulte = false;
            }
            return $resulte;
        }
        function pageKO(){
            echo Charte::html_head_bootstrap("Webean de Module");
            echo "<h2>votre formulaire est incorrect</h2>";
            
            html_foot_bootstrap();
        }
        function pageOK() {
            echo Charte::html_head_bootstrap("Webean de Module");
            echo "<h2>votre formulaire est correct</h2>";
            
            foreach ($_GET as $key=>$value){
                echo "<p>$key => $value</p>";
            }
        }
        
        public function sauveTXT(){
            echo "<h2>SauveTXT</h2>";
            $resultat = $this->sigle .';';
            $resultat .= $this->lable .';';
            $resultat .= $this->categorie .';';
            $resultat .= $this->effectif .';';
            return $resultat;
        }
       
        public function sauveXML($file){
            
        }
       
        public function sauveBDR($table){
            //createTable($table);
            echo "<h2>sauveBDR</h2>";
            echo 'insert into module value';
        }
      
        public function createTable($table){
             echo "<h2>createTable</h2>";
             echo " create table <label> (sigle varchar(6) not null, categorie varchar(2) check categorie in ('CS', 'TM', 'EC',
'ME', 'CT'), label varchar(40) not null, effectif integer, primary key (sigle));";
        }
        public function page_foot(){
            echo Charte::html_foot_bootstrap();
        }
        
        function _toString(){
            return "Module->($this->sigle, $this->lable, $this->categorie, $this->effectif)<br />";
        }
        public function setSigle ($sigle) {
            $this->sigle = $sigle;
        }
        public function setLable ($label) {
            $this->lable = $label;
        }
        public function setCategorie ($categorie) {
            $this->categorie = $categorie;
        }
        public function setEffectif ($effectif) {
            $this->effectif = $effectif;
        }
        public function getSigle(){
            return $this->sigle;
        }
        public function getLable(){
            return $this->lable;
        }
        public function getCategorie(){
            return $this->categorie;
        }
        public function getEffectif(){
            return $this->effectif;
        }
        
        
        
        
        
        
        
    }  



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

