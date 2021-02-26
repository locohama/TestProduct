@extends('layouts.common')
@section('title', '確認ぺージ')
@section('content')
<form method="POST" class="lock-form pull-left" action="/user/store">
<div class="form-group">
    <label for="InputText">氏：</label>
    <input name="lastname" class="form-control placeholder-no-fix" type="hidden" value="{{ $users->lastname }}">
    {{ $users->lastname }}
</div>
<div class="form-group">
    <label for="InputText">名：</label>
    <input name="firstname" class="form-control placeholder-no-fix" type="hidden" value="{{ $users->firstname }}">
    {{ $users->firstname }}
</div>
<div class="form-group">
    <label for="InputEmail">メールアドレス：</label>
    <input name="email" class="form-control placeholder-no-fix" type="hidden" value="{{ $users->email }}">
    {{ $users->email }}
</div>
<div class="form-actions d-flex justify-content-between">
    <button type="submit" class="btn btn-primary btn-success uppercase">完了</button>
    <a class="btn btn-primary btn-success uppercase reset" href="#" onClick="history.back(); return false;">修正</a>
</div>
{{ csrf_field() }}
@endsection