<?php
// Routes
	use Illuminate\Http\Request;
	use App\Http\Controllers\Controller;
	use Illuminate\Database\Schema;
	
	//GET Route

$app->get('/[{name}]', function ($request, $response, $args)
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
    	return $this->renderer->render($response, 'page.phtml', $args);
});

	
$app->post('/add/', function ($request, $response, $args)
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

$app->get('/delete/[{id}]', function($request, $response, $args)
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
});

/*
$app->get('/delete/[{id}]', function($request, $response, $args){
	$this->db;
	$car=new Car;
	$id = $args['id'];
	$car=Car::find($id);
	$car->delete();
	
	
	return $this->renderer->render($response, 'thomas.phtml', $args);;

*/
