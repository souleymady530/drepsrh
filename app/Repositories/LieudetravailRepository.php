<?php 
namespace App\Repositories;
use App\Models\lieudetravail;
class lieudetravailRepository extends ResourceRepository
{
	
	public function __construct(lieudetravail $p)
	{
		$this->model=$p;
	}
		
}