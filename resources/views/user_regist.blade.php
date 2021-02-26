@extends('layouts.common')
@section('title', '入力ぺージ')
@section('content')
<form method="POST" class="lock-form pull-left" action="/user/confirm">
    <div class="form-group">
        <label for="InputText">氏</label>
        @if (Session::has('lastname'))
        <input maxlength='40' value="{{ session('lastname') }}" name="lastname" class="form-control placeholder-no-fix" required>
        @else
        <input maxlength='40' name="lastname" class="form-control placeholder-no-fix" required>
        @endif
        @foreach ($errors->get('lastname') as $error)
        <div style="color: red;">・{{ $error }}</div>
        @endforeach
    </div>
    <div class="form-group">
        <label for="InputText">名</label>
        @if (Session::has('firstname'))
        <input maxlength='40' value="{{ session('firstname') }}" name="firstname" class="form-control placeholder-no-fix" required>
        @else
        <input maxlength='40' name="firstname" class="form-control placeholder-no-fix" required>
        @endif
        @foreach ($errors->get('firstname') as $error)
        <div style="color: red;">・{{ $error }}</div>
        @endforeach
    </div>
    <div class="form-group">
        <label for="InputEmail">メールアドレス</label>
        @if (Session::has('firstname'))
        <input value="{{ session('email') }}" name="email" class="form-control placeholder-no-fix" required>
        @else
        <input name="email" class="form-control placeholder-no-fix" required>
        @endif
        @foreach ($errors->get('email') as $error)
        <div style="color: red;">・{{ $error }}</div>
        @endforeach
    </div>
    <div class="form-actions d-flex justify-content-between">
        <button type="submit" class="btn btn-primary btn-success uppercase">確認</button>
        <button type="reset" name="reset" class="btn reset btn-primary btn-success uppercase">リセット</button>
    </div>
    {{ csrf_field() }}
</form>
@endsection