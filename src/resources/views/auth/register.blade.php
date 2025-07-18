@extends('layouts.app')

@section('title')
<title>会員登録</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('link')
<a href="" class="header--link">login</a>
@endsection

@section('content')
<div class="content">
    <div class="content-title">
        <h2>Register</h2>
    </div>
    <div class="form">
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label">お名前</span>
            </div>
            <div class="form__group--content">
                <input type="text" class="form__input" placeholder="例: 山田　太郎">
            </div>
            <div class="form__error">

            </div>
        </div>
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
            <button class="button--submit">登録</button>
        </div>
    </div>
</div>
@endsection