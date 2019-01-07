<?php

	/**
	 * class creation une conecxion avec la base de donnees
	 */
	class Database{

		private $dbName ; 
		private $dbUser ; 
		private $dbHost ; 
		private $dbPass ; 
		private $dbCharset;
		public $db;
		
		/**
		 *@construct
		 *@param {$dbName} le nom de notre base de donnee.
		 *@param {$dbUser} le nom du login Phpmyadmin.
		 *@param {$dbPass} le mot de passe de notre base de donnee.
		 *@param {$dbHost} le nom de notre serveur.
		 *
		 */
		
		public function __construct($dbName, $dbUser='root',$dbHost='localhost',$dbPass=''){

			$this->dbName   = $dbName ;
			$this->dbUser   = $dbUser ; 
			$this->dbHost   = $dbHost ; 
			$this->dbPass   = $dbPass ;
			$this->db = new PDO('mysql:host=localhost;dbname=galerie;charset=utf8','root','');
			
		}
	}


?>