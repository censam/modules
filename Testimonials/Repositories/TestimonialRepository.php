<?php namespace Modules\Testimonials\Repositories;

use Modules\Core\Repositories\BaseRepository;

interface TestimonialRepository extends BaseRepository
{
	/**
	 * [randomTestimonials description]
	 * @return \Illuminate\Database\Eloquent\Collection 
	 * 
	 * */
	public function randomTestimonials();
	
}
