@extends('layouts.app')

@section('content')

    <form action="{{ route('car.store') }}" method="post">
        @csrf
        @include('partials.form')
        <div class="row justify-content-center">
            <a href="/" class="btn btn-outline-primary col-3">Назад</a>
            &nbsp;&nbsp;
            <button type="submit" class="btn btn-outline-primary col-3"><b>Сохранить</b></button>
        </div>
    </form>

@endsection
