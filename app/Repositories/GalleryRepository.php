<?php 
namespace App\Repositories;
use App\Models\Gallery;
class GalleryRepository extends ResourceRepository
{
	
	public function __construct(Gallery $gal)
	{
		$this->model=$gal;
	}
		
}