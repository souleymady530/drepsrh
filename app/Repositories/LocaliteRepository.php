<?php 
namespace App\Repositories;
use App\Models\localite;
class localiteRepository extends ResourceRepository
{
	
	public function __construct(localite $p)
	{
		$this->model=$p;
	}
		
}