<?php namespace Modules\Testimonials\Repositories\Eloquent;

use Modules\Testimonials\Repositories\TestimonialRepository;
use Modules\Core\Repositories\Eloquent\EloquentBaseRepository;

class EloquentTestimonialRepository extends EloquentBaseRepository implements TestimonialRepository
{


	public function randomTestimonials()
	{
		return $this->model->orderByRaw('RAND()')->take(3)->get();
	}
}
