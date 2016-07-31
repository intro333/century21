@extends('app')

@section('content')

	<h2>
		Пользователи
		<button class="btn btn-sm" title="Регистрация пользователя" type="button" onclick="goToRegisterUser()">
            <span class="glyphicon glyphicon-hand-left"></span>
        </button>
	</h2>
	
	<hr>

	@foreach($users as $user)

		<ul>
			<li>{!! $user->name !!}</li>
			<li>{!! $user->email !!}</li>
			<li>{!! $user->phone !!}</li>
			<li>{!! $user->sex !!}</li>
			<li>{!! $user->birthday !!}</li>
			<li>{!! $user->events !!}</li>
		</ul>

		<hr>
	@endforeach

@endsection