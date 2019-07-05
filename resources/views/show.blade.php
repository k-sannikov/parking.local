@extends('layouts.app')

@section('content')
<div class="row mb-3">
    <p class="h4 col text-left">

    </p>
        <a href="{{ route('car.edit', $car) }}" class="btn btn-outline-primary mr-3">
            Редактировать
        </a>
    <form action="{{ route('car.destroy', $car) }}" method="post">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-outline-danger btn-sm mr-3 pt-2 pb-2">
          <b>Удалить автомобиль</b>
        </button>
    </form>
</div>

    <div class="table-responsive">
      <table class="table table-bordered table-hover table-sm">
        <thead class="thead-light">
            <tr>
                <th scope="col" class="text-center" colspan="2">Информация об автомобиле</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th class="align-middle text-center" style="width: 30%">Владелец автомобиля</th>
                <th class="align-middle text-center">{{ $car->full_name }}</th>
            </tr>
            <tr>
                <th class="align-middle text-center" style="width: 30%">Номер автомобиля</th>
                <th class="align-middle text-center">{{ $car->state_number }}</th>
            </tr>
            <tr>
                <th class="align-middle text-center" style="width: 30%">Парковочное место</th>
                <th class="align-middle text-center">{{ $car->place }}</th>
            </tr>
            <tr>
                <th class="align-middle text-center" style="width: 30%">Паспортные данные владельца</th>
                <th class="align-middle text-center">серия: {{ $car->passport_series }} номер: {{ $car->passport_number }}</th>
            </tr>
            <tr>
                <th class="align-middle text-center" style="width: 30%">Дата принятия и время</th>
                <th class="align-middle text-center">{{ $car->created_at }}</th>
            </tr>
            <tr>
                <th class="align-middle text-center" style="width: 30%">Сумма</th>
                <th class="align-middle text-center">{{ $car->amount }} руб.</th>
            </tr>
        </tbody>
      </table>
    </div>
        <div class="row justify-content-center">
            <a href="/" class="btn btn-outline-primary col-3">Назад</a>
        </div>
@endsection
