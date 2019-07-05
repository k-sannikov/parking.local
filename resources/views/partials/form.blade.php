<div class="form-group">
    <div class="form-row">
        <div class="col">
            <label for="state_number">Гос. номер автомобиля</label>
            <input type="text" class="form-control @error('state_number') is-invalid @enderror" id="state_number" name="state_number" value="{{$car->state_number ?? old('state_number')}}">
            @error('state_number')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col">
            <label for="place">Парковочное место <span class="text-muted">от 1 до 50</span></label>
            <input type="text" class="form-control @error('place') is-invalid @enderror" id="place" name="place" value="{{$car->place ?? old('place')}}">
            @error('place')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
    <div class="form-row">
        <div class="col">
            <label for="full_name">Фамилия и инициалы владельца автомобиля</label>
            <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="full_name" name="full_name" value="{{$car->full_name ?? old('full_name')}}">
            @error('full_name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
    <div class="form-row">
        <div class="col">
            <label for="passport_series">Серия паспорта</label>
            <input type="text" class="form-control @error('passport_series') is-invalid @enderror" id="passport_series" name="passport_series" value="{{$car->passport_series ?? old('passport_series')}}">
            @error('passport_series')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="col">
            <label for="passport_number">Номер паспорта</label>
            <input type="text" class="form-control @error('passport_number') is-invalid @enderror" id="passport_number" name="passport_number" value="{{$car->passport_number ?? old('passport_number')}}">
            @error('passport_number')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>
