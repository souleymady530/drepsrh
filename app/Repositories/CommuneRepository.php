<?php 
namespace App\Repositories;
use App\Models\commune;
class communeRepository extends ResourceRepository
{
	
	public function __construct(commune $p)
	{
		$this->model=$p;
	}
		
}