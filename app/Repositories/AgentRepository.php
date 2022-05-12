<?php 
namespace App\Repositories;
use App\Models\agent;
class agentRepository extends ResourceRepository
{
	
	public function __construct(agent $p)
	{
		$this->model=$p;
	}
		
}