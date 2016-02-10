<div class="box-body">

    {!! Form::normalInput('name', 'Author Name', $errors, $lang) !!}
    {!! Form::normalInput('url', 'URL', $errors, $lang) !!}
    {!! Form::normalTextarea('content', 'Content', $errors, $lang) !!}
    
</div>	