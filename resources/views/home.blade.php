@extends('layouts.main')

@section('content')
<h3>Это домашняя страница</h3>
<h4>Мы работаем в след городах</h4>
<ul>
    @forelse($cities as $city)
    <li>
        {{ $city->name }}
    </li>
    @empty
        <li>
            Нет города
        </li>
    @endforelse
</ul>
@endsection
