<?php namespace Modules\Testimonials\Composers;

use Illuminate\Contracts\View\View;
use Modules\Testimonials\Repositories\TestimonialRepository as TestimonialRepository;

Class LatestTestimonialsComposer

{


public function __construct(TestimonialRepository $testimonials)
{	
	
	$this->testimonials = $testimonials;	
}

public function compose(View $view)
{
	$view->with('randomTestimonials',$this->testimonials->randomTestimonials());
}

}