@extends('layouts.app')

@section('title')
<title>ログイン</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('link')
<a href="" class="header--link">register</a>
@endsection

@section('content')
<div class="content">
    <div class="content-title">
        <h2>Login</h2>
    </div>
    <div class="form">
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label">メールアドレス</span>
            </div>
            <div class="form__group--content">
                <input type="email" class="form__input" placeholder="例: test@example.com">
            </div>
            <div class="form__error">

            </div>
        </div>
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label">パスワード</span>
            </div>
            <div class="form__group--content">
                <input type="password" class="form__input" placeholder="例: coachtech1106">
            </div>
            <div class="form__error">

            </div>
        </div>
        <div class="form__button">
            <button class="button--submit">ログイン</button>
        </div>
    </div>
</div>
@endsection