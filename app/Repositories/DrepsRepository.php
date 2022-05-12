<?php 
namespace App\Repositories;
use App\Models\dreps;
class drepsRepository extends ResourceRepository
{
	
	public function __construct(dreps $p)
	{
		$this->model=$p;
	}
		
}