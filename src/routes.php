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
	$capsule::schema()->dropIfExists('cars');

    	$capsule::schema()->create('cars', function (\Illuminate\DatabaseSchema\Blueprint $table) {
        $table->increments('id');
        $table->string('title')->default('');
        //….
        $table->timestamps();
    });

	/*if (!$capsule::schema()->hasTable('car'))
	{
		$capsule::schema()->create('car', function (\Illuminate\Database\Schema $car)
		{
	 
			$car->increments('id');
        		$car->string('titre')->default('');
			$car->int('chevaux');
			$car->int('longueur');
			$car->int('prix');
			$car->string('date_sortie')->default('');
			$car->string('model')->default('');
			$car->string('marque')->default('');
			$car->string('version')->default('');
	
        		//….
        		$car->timestamps();
		});

	}*/
		
	
    	return $this->renderer->render($response, 'page.phtml', $args);
});

	
$app->post('/team_name_url/', function ($request, $response, $args)
{
	
	
	return $this->renderer->render($response, 'index.phtml', $_POST);;
});




	

