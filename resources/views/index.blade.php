@extends('layouts.app')

@section('content')
<a href="{{ route('car.create') }}" class="btn btn-primary btn-sm mb-3">Добавление автомобиля</a>
    <div class="list-group">
        @forelse($cars as $car)
            <a href="{{ route('car.show', $car) }}" class="list-group-item list-group-item-action disabled">
               {{ $car->full_name }} <b>{{ $car->state_number }} ({{ $car->place }})</b>
            </a>
        @empty
            <a href="" class="list-group-item list-group-item-action disabled">Парковка пуста</a>
        @endforelse
    </div>
@endsection
