<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
define('RESPONSE_SUCCESS', 200);
define("RESPONSE_FAILED", 300);
define("RESPONSE_WRONG_API_KEY", 301);
define("RESPONSE_PHONE_VERIFY", 302);
define('FIREBASE_API_KEY', 1234);
define('SERVER_API_KEY', 'PlWMdzq6ewqXjreq');

class DB_CONNECT {

    private $hostname = "localhost";
    private $db_name = "videolive";
    private $username = "root";
   // private $password = "Mentobile@#12267";
    private $password = "";
    public $conn;

// constructor
    function _construct() {
        // connecting to database
        $this->connect();
    }

// destructor
    function _destruct() {
        // closing db connection
        $this->close();
    }

    /**
     * Function to connect with database
     */
    function connect() {
        // require_once __DIR__ . '/MyEncryption.php';
        // Connecting to mysql database
        $this->conn = mysqli_connect($this->hostname, $this->username, $this->password, $this->db_name) or die(mysqli_error());

        // Selecing database
        return $this->conn;
    }

    function getConnection() {
        return $this->conn;
    }

    /**
     * Function to close db connection
     */
    function close() {
        // closing db connection
        mysqli_close($this->conn);
    }
}

?>