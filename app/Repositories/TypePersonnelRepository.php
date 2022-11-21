<?php 
namespace App\Repositories;
use App\Models\typepersonnel;
class TypePersonnelRepository extends ResourceRepository
{
	
	public function __construct(typepersonnel $p)
	{
		$this->model=$p;
	}
		
}