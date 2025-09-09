@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
    <nav class="breadcrumb">
        <ul>
            <li><a href="">商品一覧</a></li>
            <li><a href="">キウイ</a></li>
            <li><a href="">ストロベリー</a></li>
            <li><a href="">オレンジ</a></li>
            <li><a href="">スイカ</a></li>
            <li><a href="">ピーチ</a></li>
            <li><a href="">シャインマスカット</a></li>
            <li><a href="">パイナップル</a></li>
            <li><a href="">ブドウ</a></li>
            <li><a href="">バナナ</a></li>
            <li><a href="">メロン</a></li>
        </ul>
    </nav>

    <h1>{{ $product->name }}</h1>
    <p>価格: {{ $product->price }}円</p>
    <p>{{ $product->description }}</p>

    <a href="{{ route('products.index') }}">← 一覧に戻る</a>
@endsection
