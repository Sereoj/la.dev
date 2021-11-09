@extends('layouts.main')

@section('content')
<h1>Привет, {{ Auth::user()->first_name }}</h1>
@endsection
