@extends('layouts.app')

@section('title')
<title>入力内容の確認</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<div class="content">
    <div class="content-title">
        <h2>Confirm</h2>
    </div>
    <table class="table">
        <tr class="table__row">
            <th class="table__title">お名前</th>
            <td class="table__data">山田太郎</td>
        </tr>
        <tr class="table__row">
            <th class="table__title">性別</th>
            <td class="table__data">男性</td>
        </tr>
        <tr class="table__row">
            <th class="table__title">メールアドレス</th>
            <td class="table__data">test@example.com</td>
        </tr>
        <tr class="table__row">
            <th class="table__title"></th>
            <td class="table__data">08012345678</td>
        </tr>
        <tr class="table__row">
            <th class="table__title"></th>
            <td class="table__data">東京都渋谷区千駄ヶ谷1</td>
        </tr>
        <tr class="table__row">
            <th class="table__title"></th>
            <td class="table__data">千駄ヶ谷マンション101</td>
        </tr>
        <tr class="table__row">
            <th class="table__title"></th>
            <td class="table__data">商品の交換について</td>
        </tr>
        <tr class="table__row">
            <th class="table__title"></th>
            <td class="table__data">
                届いた商品が注文した商品ではありませんでした。
                商品の取り替えをお願いします。
            </td>
        </tr>
    </table>
    <div class="form__button--group">
        <div class="form__button">
            <button class="button--sent">送信</button>
        </div>
        <div class="back__link">
            <a href="">修正</a>
        </div>
    </div>
</div>
@endsection