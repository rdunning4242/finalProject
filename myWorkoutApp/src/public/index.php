<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;


require '../vendor/autoload.php';
$config['displayErrorDetails']= true;
$config['addContentLengthHeader']= false;

$config['db']['host'] = 'localhost';
$config['db']['user'] = 'user';
$config['db']['pass'] = 'password';
$config['db']['dbname'] = 'myWorkoutDB';

$app = new \Slim\App(['settings'=>$config]);
$container = $app->getContainer();





$app->get('/users', function(Request $request, Response $response) {
    $mapper = new dbClass();
    $users = $mapper->getUsers();
    
    $response->getBody()->write(var_export($users, true));
    return $response;
});

$app->get('/workouts', function(Request $request, Response $response) {
    $mapper = new dbClass();
    $workouts = $mapper->getWorkouts();
    
    $response->getBody()->write(var_export($workouts, true));
    return $response;
});

app->get('/teams', function(Request $request, Response $response) {
    $mapper = new dbClass();
    $teams = mapper->getTeams();
    
    $response->getBody()->write(var_export($teams, true));
    return $response;
});

app->post('/workout/new', function(Request $request, Response $response) {
    $data = $request->getParsedBody();
    $mapper = new dbClass();
    $workout_data = [];
    $workout_data['workoutName'] = filter_var($data['title'], FILTER_SANITIZE_STRING);
    $workout_data['workoutDescription'] = filter_var($data['description'], FILTER_SANITIZE_STRING);
    $workout_data['athleteID'] = filter_var($data['description'], FILTER_SANITIZE_INTEGER;
    $mapper->postWorkout($workout_data);
    $response->getBody()->write("Post successful");
    return $response;
});
    

$app->run();

