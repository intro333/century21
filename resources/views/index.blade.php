@extends('app')

@section('content')

    <div class="form-group">
    
    <h3>
        Зарегистрировать пользователя
        <button class="btn btn-sm" title="Панель администратора" type="button" onclick="goToAdminPanel()">
            <span class="glyphicon glyphicon-hand-right"></span>
        </button>
    </h3>
    
    </div>


    <hr>

    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">

    <div class="form-group">
        <label for="InputFIO">Full name*</label>
        <input type="text" class="form-control" required id="InputFIO" name="InputFIO" placeholder="Иванов Иван Иванович">
    </div>

    <div class="form-group">
        <label for="InputEmail">Email*</label>
        <input type="email" class="form-control" required id="InputEmail" name="InputEmail" placeholder="ivanov@mail.ru">
    </div>

    <div class="form-group">
        <label for="InputPhone">Phone Number</label>
        <input type="text" class="form-control" id="InputPhone" name="InputPhone" placeholder="">
    </div>

    <div class="form-group">
        <label for="InputSex">Sex</label>
        <select class="form-control" id="InputSex" name="InputSex">
            <option></option>
            <option>Man</option>
            <option>Woman</option>
        </select>
    </div>

    <div class="form-group">
        <label for="InputBirthday">Birthday</label>
        <input type="date" class="form-control" id="InputBirthday" name="InputBirthday" placeholder="">
    </div>

    <div class="form-group" required>
        <label for="InputEvents">Events*</label>
        <select class="form-control" multiple  id="InputEvents" name="InputEvents">
            <option>The Chemical Brothers</option>
            <option>Above and Beyond</option>
            <option>Ministry</option>
            <option>Sia</option>
            <option>John Talabot</option>
        </select>
    </div>

    <div class="form-group">
        <button class="btn btn-primary form-control" onclick="submitForm()">Отправить данные</button>
    </div>

    <div id="responseData"></div>

@endsection