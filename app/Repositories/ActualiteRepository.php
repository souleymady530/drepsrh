<?php 
namespace App\Repositories;
use App\Models\Actualite;
class ActualiteRepository extends ResourceRepository
{
	
	public function __construct(Actualite $actualite)
	{
		$this->model=$actualite;
	}
		
}