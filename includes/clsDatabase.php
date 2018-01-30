<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/config.php');

class clsDatabase {

	private $dbName = null;

	private $dbHost = null;

	private $dbUser = null;

	private $dbPassword = null;

	private $db = null;

	public function __construct() {

		$this->dbHost = DB_HOST;
		$this->dbName = DB_DATABASE;
		$this->dbUser = DB_USERNAME;
		$this->dbPassword = DB_PASSWORD;

	}


	public function connect(){

		$this->db = mysqli_connect($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);

		if (! $this->db) {
			$this->errorNumber = mysqli_connect_errno();
			$this->errorMessage = mysqli_connect_error();
		}

		return $this->db;
	}


	public function close(){

		mysqli_close($this->db);
		return true;
	}
}