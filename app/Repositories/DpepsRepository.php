<?php 
namespace App\Repositories;
use App\Models\dpeps;
class dpepsRepository extends ResourceRepository
{
	
	public function __construct(dpeps $p)
	{
		$this->model=$p;
	}
		
}