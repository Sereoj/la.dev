@extends('layouts.main')

@section('content')
<h3>Это страница входа</h3>
<form method="post">
    @csrf
    <div>
        <input type="text" name="email" id="email" placeholder="Укажите ваш email" value="{{ old('email') }}">
        @error('email')
            <smail>{{ $message }}</smail>
        @enderror
    </div>
    <div>
        <input type="password" name="password" id="password" placeholder="Укажите ваш пароль">
        @error('password')
            <smail>{{ $message }}</smail>
        @enderror
    </div>
    <input type="submit" value="Войти">
</form>
@endsection
