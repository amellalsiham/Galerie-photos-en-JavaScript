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