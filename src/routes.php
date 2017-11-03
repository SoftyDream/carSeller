<?php
// Routes
	use Illuminate\Http\Request;
	use App\Http\Controllers\Controller;
	use Illuminate\Database\Schema;
	
/*-----------Database creation and settings if doesn't exist-------------*/

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
    	return $this->renderer->render($response, 'garage.phtml', $args);
    	//return $this->renderer->render($response, 'Accueil.phtml', $args);
    	//return $this->renderer->render($response, 'ajout_suppression.phtml', $args);
    	//return $this->renderer->render($response, 'page.phtml', $args);
});


/*---------------------Insert-----------------------*/

	
$app->post('/car/add/', function ($request, $response, $args)
{
	
	$this->db;
	$car= new Car;
	$car->model = $_POST['model'];
	$car->prix = $_POST['prix'];
	$car->version = $_POST['version'];
	$car->marque = $_POST['marque'];
	$car->proprietaire = $_POST['proprio'];
	$car->date_sortie = $_POST['sortie'];
	$car->save();

	return $this->renderer->render($response, 'index.phtml', $_POST);;
});



/*----------------------Delete-------------------------*/


$app->get('/car/delete/[{id}]', function($request, $response, $args)
{

	$this->db;
	/*$id = $request->getParam('id');*/
	$id = $args['id'];
	if(isset($id)){
		
		$car = Car::find($id);
		$car->delete();
		
		/*
		Session::flash('flash_message', 'car successfully deleted!');
		return redirect()->route('/[{name}]');
		*/
		
	} else {}
	
	$car = Car::all()->toArray();
        
    /*return view('car.index', compact('car'));*/

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
	$car = Car::all();
    return View::make('index.phtml')->with('car', $car);
});

/*---------------------ShowOne-----------------------*/

$app->get('/car/showOne/[{id}]', function($request, $response, $args)
{
	$this->db;
	$id = $args['id'];
	$car = Car::find($id);
	return View::make('index.pthml')->with('car', $car);
});


