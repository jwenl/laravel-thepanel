@extends('thepanel::layouts.master')

@section('title')
	Register new user
@stop

@section('content')
	
	{{ Form::open(array('url' => '/account/register')) }}
	<fieldset>
		
		<div class="form-group">
			{{ Form::label('name', 'Your name') . Form::text('name', Input::old('name'), array('class' => 'form-control', 'placeholder' => 'Name')) }}	
		</div>
		
		<div class="form-group">
			{{ Form::label('email', 'Your email address') . Form::text('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'Email')) }}
		</div>
		
		<div class="form-group">
			{{ Form::label('username', 'Your prefered username') . Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder' => 'Username')) }}
		</div>
		
	</fieldset>
	<fieldset>
		<div class="form-group">
			{{ Form::label('password', 'Your prefered password') . Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password')) }}
		</div>
		
		<div class="form-group">
			{{ Form::label('password_again', 'Your prefered password (again)') . Form::password('password_again', array('class' => 'form-control', 'placeholder' => 'Password again')) }}
		</div>
		
	</fieldset>
	<fieldset>
		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
		<button type="submit" class="btn btn-default">Create</button>
	</fieldset>
	{{ Form::close() }}
@stop