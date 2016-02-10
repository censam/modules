<?php namespace Modules\Testimonials\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTestimonialRequest extends FormRequest
{
    

    public function rules()
    {
        return [
            'name' => 'required',
            'url' => 'required',
            'content' => 'required',
        ];
    }

    
    public function authorize()
    {
        return true;
    }

   

   
}
