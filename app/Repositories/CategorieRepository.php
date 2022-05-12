<?php 
namespace App\Repositories;
use App\Models\categorie;
class categorieRepository extends ResourceRepository
{
	
	public function __construct(categorie $p)
	{
		$this->model=$p;
	}
		
}