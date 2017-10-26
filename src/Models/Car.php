<?php 


use Illuminate\Database\Eloquent\Model;


class Car extends Model 
{
	private $chevaux;
	private $longueur;
	private $prix;
	private $date_sortie;
	private $model;
	private $marque;
	private $version;
	
	public function getChevaux()
	{
		return $this->chevaux;
	}

	public function getLongueur()
	{
		return $this->longueur;
	}

	public function getPrix()
	{
		return $this->prix;
	}

	public function getDate_Sortie()
	{
		return $this->date_sortie;
	}

	public function getModel()
	{
		return $this->model;
	}

	public function getMarque()
	{
		return $this->marque;
	}

	public function getVersion()
	{
		return $this->version;
	}

	public function setChevaux($chevaux)
	{
		$this->chevaux=$chevaux;
	}

	public function setLongueur($longueur)
	{
		$this->longueur=$longueur;
	}

	public function setPrix($prix)
	{
		$this->prix=$prix;
	}

	public function setDate_Sortie($date_sortie)
	{
		$this->date_sortie=$date_sortie;
	}

	public function setModel($model)
	{
		$this->model=$model;
	}

	public function setMarque($marque)
	{
		$this->marque=$marque;
	}

	public function setVersion($version)
	{
		$this->version=$version;
	}

		
	
	protected $fillable = ['title'];
	public $timestamps = false;
	
	
} 

?>

