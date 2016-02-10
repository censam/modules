<?php namespace Modules\Testimonials\Entities;

// use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    
    protected $table = 'testimonials__testimonials';
    protected $fillable = ['name','url','content'];
}
