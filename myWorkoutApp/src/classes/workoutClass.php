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
    	    $query = "SELECT * FROM user";
    	    return mysqli_query($link, $query);
    	}
    	
    	function getTeam(){
    	    $query = "SELECT * FROM team";
    	    return mysqli_query($link, $query);
    	}
    	
    	function getWorkout(){
    	    $query = "SELECT * FROM workout";
    	    return mysqli_query($link, $query);
    	}
    	
    	function postWorkout(array workoutData){
    	    $workout= implode(" ", $workoutData);
    	    $query = "INSERT INTO workout (athleteID, workoutName, workoutDescription) VALUES ($workout)";
    	    return mysqli_query($link, $query);
    	}
    	
    	
}

?>
    	
