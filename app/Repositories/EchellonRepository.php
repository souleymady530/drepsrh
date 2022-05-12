<?php 
namespace App\Repositories;
use App\Models\echellon;
class echellonRepository extends ResourceRepository
{
	
	public function __construct(echellon $p)
	{
		$this->model=$p;
	}
		
}