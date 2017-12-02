<?php
// Routes
	use Illuminate\Http\Request;
	use App\Http\Controllers\Controller;
	use Illuminate\Database\Schema;
	use Illuminate\Support\Collection;
	
/*--------Database creation and settings if doesn't exist---------*/

$app->get('/car/[{name}]', function ($request, $response, $args)
{
	$this->logger->info("Slim-Skeleton '/' route");
	// Render index view
	$this->db;
	$capsule = new \Illuminate\Database\Capsule\Manager;
	

	if (!$capsule::schema()->hasTable('car'))
	{
		$capsule::schema()->create('car', function (\Illuminate\Database\Schema\Blueprint $car)
		{
			$car->increments('id');
        	//$car->string('titre')->default('');
        	$car->string('proprietaire')->default('');
			//$car->int('chevaux');
			//$car->int('longueur');
			$car->string('prix')->default('');
			$car->string('date_sortie')->default('');
			$car->string('model')->default('');
			$car->string('marque')->default('');
			$car->string('version')->default('');
        		//….
        	$car->timestamps();
		});
	}
    	//return $this->renderer->render($response, 'garage.phtml', $args);
    	//return $this->renderer->render($response, 'Accueil.phtml', $args);
		
		/*
		if(isset('[{name}]'){
			$this->renderer->render($response, 'index.phtml', $_POST);

		};*/

		//$app->redirect('/add/');
		
		//return $response->withRedirect('/car/add/');

/*
		if(isset('add')){
    		return $this->renderer->render($response, 'ajout_suppression.phtml', $args);
    	}
    	else if(isset('delete')){
    		return $this->renderer->render($response, 'ajout_suppression.phtml', $args);

    	}
*/
    	//$id = $request->post('game3');

    	return $response->withRedirect('/car/accueil/');
    	/*
    	return $this->renderer->render($response, 'Accueil.phtml', $args);*/


    	//return $response->withRedirect('/car/add/');
});


/*---------------------Insert-----------------------*/

	
$app->post('/car/add_delete/add/', function ($request, $response, $args)
{
	
	$this->db;

	$car= new Car;
	$car->model = $_POST['model'];
	$car->prix = $_POST['prix'];
	//$car->version = $_POST['version'];
	//$car->marque = $_POST['marque'];
	$car->proprietaire = $_POST['proprio'];
	$car->date_sortie = $_POST['sortie'];
	$car->save();
	
	//return $this->renderer->render($response, 'ajout_suppression.phtml', $_POST);
	



	//return $this->renderer->render($response, 'ajout_suppression.phtml', $_POST);

	//return $this->renderer->render($response, 'index.phtml', $_POST);;
});




/*----------------------Delete-------------------------*/


$app->get('/car/add_delete/delete/[{id}]', function($request, $response, $args)
{

	$this->db;
	//$id = $request->getParam('id');
	$id = $args['id'];
	if(isset($id)){
		
		$car = Car::find($id);
		$car->delete();
		
	} else {}
	
	$car = Car::all()->toArray();
	return $this->renderer->render($response, 'ajout_suppression.phtml', $_POST);

});


$app->get('/car/add_delete/', function($request, $response, $args)
{

	/*$this->db;
	//$id = $request->getParam('id');
	$id = $args['id'];
	if(isset($id)){
		
		$car = Car::find($id);
		$car->delete();
		
	} else {}
	
	$car = Car::all()->toArray();*/ 
	return $this->renderer->render($response, 'ajout_suppression.phtml', $_POST);

});


/*---------------------Edit-----------------------*/


$app->get('/car/edit/[{id}]', function($request, $response, $args)
{
	 $this->db;
	 $id = $args['id'];
	 $car = Car::find($id);
     return View::make('index.phtml')->with('car', $car);
});


/*---------------------ShowAll-----------------------*/

$app->get('/car/showAll/', function($request, $response, $args)
{
	$this->db;
	$car = Car::orderBy('id')->get();

	//Model::all()->take(10)->get();
	//$car = Car::all()->get();
	//Model::all()->take(10)->get();
    //return View::make('index.phtml')->with('car', $car);

});

/*---------------------ShowOne-----------------------*/

$app->get('/car/showOne/[{id}]', function($request, $response, $args)
{
	$this->db;
	$id = $args['id'];
	$car = Car::find($id);
	return View::make('index.pthml')->with('car', $car);
});


/*--------------------Garage route------------------------*/

$app->get('/car/garage/', function($request, $response, $args){

	return $this->renderer->render($response, 'garage.phtml', $_POST);
});

/*------------------- Accueil route------------------------*/

$app->get('/car/accueil/', function($request, $response, $args){

	return $this->renderer->render($response, 'Accueil.phtml', $_POST);
});

