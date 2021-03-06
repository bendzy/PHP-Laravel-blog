<div class="form-group">
    {!! Form::label("title","Title") !!}
    {!! Form::text("title",null,["class"=>"form-control"]) !!}
</div>

<div class="form-group">
    {!! Form::label("content","Content :") !!}
    {!! Form::textarea("content",null,["class"=>"form-control"]) !!}
</div>

<div class="form-group">
    {!! Form::label("published","Published on :") !!}
    {!! Form::input("published","published",date("Y-m-d"),["class"=>"form-control"]) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButton,["class"=>"btn btn-primary form-control"]) !!}
</div>