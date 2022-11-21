<?php 
namespace App\Repositories;
use App\Models\Etablissement;
class EtsRepository extends ResourceRepository
{
	
	public function __construct(Etablissement $ets)
	{
		$this->model=$ets;
	}
		
}