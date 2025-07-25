@extends('layouts.app')

@section('title')
<title>管理者画面</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('link')
<a href="" class="header--link">logout</a>
@endsection

@section('content')
<div class="content">
    <div class="content-title">
        <h2>Admin</h2>
    </div>
    <div class="search-area">
        <input type="text" class="search__text" placeholder="名前やメールアドレスを入力してください">
        <select name="" id="" class="search__gender">
            <option value="" selected hidden>性別</option>
            <option value="men">男性</option>
            <option value="women">女性</option>
            <option value="other">その他</option>
        </select>
        <select name="" id="" class="search__contact">
            <option value="" selected hidden>お問い合わせの種類</option>
            <option value=""></option>
        </select>
        <input type="date" class="search__date">
        <input type="submit" value="検索" class="search__button">
        <input type="submit" value="リセット" class="search__clear">
    </div>
    <div class="other-area">
        <a href="" class="export-button">エクスポート</a>
        <div class="pagenation"></div>
    </div>
    <table class="form-list">
        <tr class="table__row--title">
            <th class="header-name">お名前</th>
            <th class="header-gender">性別</th>
            <th class="header-email">メールアドレス</th>
            <th class="header-contact">お問い合わせの種類</th>
            <th class="header-null"></th>
        </tr>
        <tr class="table__row--item">
            <td class="data-name">山田 太郎</td>
            <td class="data-gender">男性</td>
            <td class="data-email">test@example.com</td>
            <td class="data-contact">商品の交換について</td>
            <td class="data-detail">
                <a href="" class="detail">詳細</a>
            </td>
        </tr>
    </table>
</div>
@endsection