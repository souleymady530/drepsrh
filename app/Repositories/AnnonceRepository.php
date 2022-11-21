<?php 
namespace App\Repositories;
use App\Models\Annonce;
class AnnonceRepository extends ResourceRepository
{
	
	public function __construct(Annonce $annonce)
	{
		$this->model=$annonce;
	}
		
}