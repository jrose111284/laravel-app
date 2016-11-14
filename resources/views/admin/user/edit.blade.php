@extends('layouts.admin')

@section('content')


    {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $user->id],'files'=>true]) !!}


    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control'])!!}
    </div>


    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class'=>'form-control'])!!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::select('role_id',  $roles , null, ['class'=>'form-control'])!!}
    </div>


    <div class="form-group">
        {!! Form::label('is_active', 'Status:') !!}
        {!! Form::select('is_active', array(1 => 'Active', 0=> 'Not Active'), null , ['class'=>'form-control'])!!}
    </div>


    <div class="form-group">
        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
    </div>



    <div class="form-group">
        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class'=>'form-control'])!!}
    </div>


    <div class="form-group">
        {!! Form::submit('Update User', ['class'=>'btn btn-primary col-sm-6']) !!}
    </div>

    {!! Form::close() !!}

{!! Form::close() !!}

@stop
