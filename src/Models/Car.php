<?php 


use Illuminate\Database\Eloquent\Model;


class Car extends Model 
{
	
	
	protected $fillable = ['title'];
	public $timestamps = false;
	
	public function __construct(){
	
	}
	public static function getFixes() {
        return carDB::table('books')->get();
    }

} 

?>

