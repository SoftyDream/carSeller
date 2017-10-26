<?php
// Routes
	use Illuminate\Http\Request;
	use App\Http\Controllers\Controller;
	//GET Route


$app->get('/[{name}]', function ($request, $response, $args)
{
	$this->logger->info("Slim-Skeleton '/' route");
	// Render index view
	//$this->db;
	/*$capsule = new \Illuminate\Database\Capsule\Manager;
	if (!$capscule::schema()->hasTable('merco'))
	{
		$capsule::schema()->create('merco', function (\Illuminate\Database\Schema\Blueprint $table)
		{
	 
			$table->increments('id');
        		$table->string('titre')->default('');
			$table->int('chevaux');
			$table->int('longueur');
			$table->int('prix');
			$table->string('date_sortie')->default('');
			$table->string('model')->default('');
			$table->string('marque')->default('');
			$table->string('version')->default('');
	
        		//….
        		$table->timestamps();
		});
	}*/
	

    	return $this->renderer->render($response, 'page.phtml', $args);
});







	
$app->post('/team_name_url/', function ($request, $response, $args)
{
	
	
	return $this->renderer->render($response, 'index.phtml', $_POST);;
});




	

