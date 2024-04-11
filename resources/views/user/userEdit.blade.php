@extends('layouts.main')
@section('userEdit')

<form action="{{ route('user.update', $user->id) }}" method="post" class="row g-3" style="border:solid 1px darkgray; border-radius: 10px; width: 80%; margin: 2% 10% 2% 10%">
    @csrf
    @method('patch')
    <div style="display: grid; grid-template-columns: 4fr 1fr"><h3 style="margin: 10px 10px 0px 10px">Отредактировать данные пользователя</h3>
        <a style="text-align: end" href="{{ route('users.index') }}"><button type="button" class="btn btn-primary" style="height: 90%; margin: 5% 5% 0% 0%">Назад</button></a></div>
    <hr>
        <div class="col-12">
            <label for="inputLastName" class="form-label">Фамилия</label>
            <input type="text" class="form-control" id="inputLastName" name="last_name" placeholder="Введите фамилию" value="{{ $user->last_name }}">
        </div>
        <div class="col-12">
            <label for="inputFirstName" class="form-label">Имя</label>
            <input type="text" class="form-control" id="inputFirstName" name="first_name" placeholder="Введите Имя" value="{{ $user->first_name }}">
        </div>
        <div class="col-12">
            <label for="inputMiddleName" class="form-label">Отчество</label>
            <input type="text" class="form-control" id="inputMiddleName" name="middle_name" placeholder="Введите отчество" value="{{ $user->middle_name }}">
        </div>
        <div class="col-12">
            <label for="inputDateOfBirthday" class="form-label">Дата рождения</label>
            <input type="date" class="form-control" id="inputDateOfBirthday" name="date_of_birthday" placeholder="Введите дату рождения" value="{{ $user->date_of_birthday }}">
        </div>
        <div class="col-12">
            <label for="inputEmail" class="form-label">Почта</label>
            <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Введите почту" value="{{ $user->email }}">
        </div>
        <div class="col-12">
            <label for="inputPassword" class="form-label">Пароль</label>
            <input type="text" class="form-control" id="inputPassword" name="password" placeholder="Введите пароль" value="{{ $user->password }}">
        </div>
        <div class="col-12 mb-2">
            <button type="submit" class="btn btn-primary">Изменить</button>
        </div>
</form>
@endsection