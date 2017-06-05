@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Create</div>

                <div class="panel-body">
                    
                    {!! Form::open(array('route' => 'task.store')) !!}
                    <div class="form-group">
                        {!! Form::label('title','enter title') !!}
                        {!! Form::text('title',null,['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::label('body','enter body') !!}
                        {!! Form::text('body',null,['class' => 'form-control']) !!}
                    </div>
                    
                    <div class="form-group">
                        {!! Form::button('Create',['type' => 'submit', 'class' => 'btn -btn-primary']) !!}
                        
                    </div>
                    
                    {!! Form::close() !!}
                </div>
            </div>
            
            @if($errors->has())
                <ul class='alert alert-danger'>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                
            @endif
            
        </div>
    </div>
</div>
@endsection
