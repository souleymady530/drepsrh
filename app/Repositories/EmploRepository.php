<?php 
namespace App\Repositories;
use App\Models\emploi;
class emploiRepository extends ResourceRepository
{
	
	public function __construct(emploi $p)
	{
		$this->model=$p;
	}
		
}