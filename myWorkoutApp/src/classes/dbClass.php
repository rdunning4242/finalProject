<?php
    class dbClass{
    	public $serverName = "localhost";
    	public $username = "username";
    	public $password = "password";
    	public $connection;
    	
    	function __construct() {
    	    $this->connection= new mysqli($servername, $username, $password);
    	    if ($this->connection->connect_error){
    	        echo("Connection to db failed");
    	    }
    	    else {
    	        echo("Connection to db successful");
    	    }
    	}
    	
    	function getUsers(){
    	    
}

?>
    	
