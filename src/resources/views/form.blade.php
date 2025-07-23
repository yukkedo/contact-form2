@extends('layouts.app')

@section('title')
<title>お問い合わせフォーム</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/form.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="content-title">
        <h2>Contact</h2>
    </div>
    <div class="form">
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group--content">
                <input type="text" class="form__input--name" placeholder="例: 山田">
                <input type="text" class="form__input--name" placeholder="例: 太郎">
            </div>
            <div class="form__error">

            </div>
        </div>
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group--content">
                <input type="radio" name="gender" class="form__input--gender">
                <label class="gender-label" for="">男性</label>
                <input type="radio" name="gender" class="form__input--gender">
                <label class="gender-label" for="">女性</label>
                <input type="radio" name="gender" class="form__input--gender">
                <label class="gender-label" for="">その他</label>
            </div>
            <div class="form__error">

            </div>
        </div>
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group--content">
                <input type="email" class="form__input--email" placeholder="例: test@example.com">
            </div>
            <div class="form__error">

            </div>
        </div>
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group--content">
                <input type="tel" class="form__input--tel" placeholder="080">
                <span>-</span>
                <input type="tel" class="form__input--tel" placeholder="1234">
                <span>-</span>
                <input type="tel" class="form__input--tel" placeholder="5678">
            </div>
            <div class="form__error">

            </div>
        </div>
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group--content">
                <input type="text" class="form__input--address" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
            </div>
            <div class="form__error">

            </div>
        </div>
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label">建物名</span>
            </div>
            <div class="form__group--content">
                <input type="text" class="form__input--building" placeholder="例: 千駄ヶ谷マンション101">
            </div>
            <div class="form__error">

            </div>
        </div>
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label">お問い合わせの種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group--content">
                <select name="" id="">
                    <option value="">選択してください</option>
                    <option value=""></option>
                </select>
            </div>
            <div class="form__error">

            </div>
        </div>
        <div class="form__group">
            <div class="form__group--title">
                <span class="form__label">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group--content-textarea">
                <textarea name="" id="">お問い合わせ内容をご記載ください</textarea>
            </div>
            <div class="form__error">

            </div>
        </div>
        <div class="form__button">
            <button class="button--confirm">確認画面</button>
        </div>
    </div>
</div>
@endsection