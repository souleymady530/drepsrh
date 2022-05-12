<?php 
namespace App\Repositories;
use App\Models\diplomeaccademique;
class diplomeaccademiqueRepository extends ResourceRepository
{
	
	public function __construct(diplomeaccademique $p)
	{
		$this->model=$p;
	}
		
}