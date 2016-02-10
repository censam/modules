<div class="box-body">

    {!! Form::normalInput('name', 'Author Name', $errors,$testimonial) !!}
    {!! Form::normalInput('url', 'URL', $errors, $testimonial) !!}
    {!! Form::normalTextarea('content', 'Content', $errors, $testimonial) !!}
    
</div>	