<?php 
namespace App\Repositories;
use App\Models\echelle;
class echelleRepository extends ResourceRepository
{
	
	public function __construct(echelle $p)
	{
		$this->model=$p;
	}
		
}