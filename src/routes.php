<?php
// Routes
	use Illuminate\Http\Request;
	use App\Http\Controllers\Controller;
	//GET Route


	$app->get('/[{name}]', function ($request, $response, $args) {
	//$app->get('/Car', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'page.phtml', $args);
    //return $this->renderer->render($response, 'index.phtml', $args);
    //return $this->renderer->render($response, 'thomas.phtml', $args);
});

	
	//POST Route
	/*
	$app->post('/[{name}]', function store($request, $response)  {
	    
	    return $this->renderer->render($response, 'thomas.phtml');
	}); */
	$app->post('/team_name_url/', function ($request, $response, $args)
	{
		
    	// Récupération des variables POST
    	foreach ( $_POST as $post => $val )  {            
        	$$post = $val;
    	}
 	//var_dump($_POST);
 
  		 
  	  	return $this->renderer->render($response, 'index.phtml', $_POST);;
	});


	

