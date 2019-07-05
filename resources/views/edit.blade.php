@extends('layouts.app')

@section('content')

    <form action="{{ route('car.update', $car) }}" method="post">
        @csrf
        @method('put')

        @include('partials.form')
        <div class="row justify-content-center">
            <a href="/" class="btn btn-outline-primary col-3">На главную</a>
            &nbsp;&nbsp;
            <button type="submit" class="btn btn-outline-primary col-3"><b>Сохранить</b></button>
        </div>
    </form>

@endsection
