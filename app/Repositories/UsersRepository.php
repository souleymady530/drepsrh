<?php 
namespace App\Repositories;
use App\Models\users;
class usersRepository extends ResourceRepository
{
	
	public function __construct(users $p)
	{
		$this->model=$p;
	}
		
}