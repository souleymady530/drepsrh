<?php 
namespace App\Repositories;
use App\Models\fonction;
class FonctionRepository extends ResourceRepository
{
	
	public function __construct(fonction $p)
	{
		$this->model=$p;
	}
		
}