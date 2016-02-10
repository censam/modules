<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/testimonials'], function (Router $router) {
    $router->bind('testimonials', function ($id) {
        return app('Modules\Testimonials\Repositories\TestimonialRepository')->find($id);
    });
    get('testimonials', ['as' => 'admin.testimonials.testimonial.index', 'uses' => 'TestimonialController@index']);
    get('testimonials/create', ['as' => 'admin.testimonials.testimonial.create', 'uses' => 'TestimonialController@create']);
    post('testimonials', ['as' => 'admin.testimonials.testimonial.store', 'uses' => 'TestimonialController@store']);
    get('testimonials/{testimonials}/edit', ['as' => 'admin.testimonials.testimonial.edit', 'uses' => 'TestimonialController@edit']);
    put('testimonials/{testimonials}/edit', ['as' => 'admin.testimonials.testimonial.update', 'uses' => 'TestimonialController@update']);
    delete('testimonials/{testimonials}', ['as' => 'admin.testimonials.testimonial.destroy', 'uses' => 'TestimonialController@destroy']);
// append

});
