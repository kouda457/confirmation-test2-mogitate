@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
    <div>
        <h2>商品登録</h2>
        <form>
            商品名<input type="text" name="text" value="{{ old('name') }}">
            値段<input type="text" name="text" value="{{ old('name') }}">
            商品画像<input type="file" name="file" value="{{ old('name') }}">
            季節<input type="checkbox" name="checkbox" value="{{ old('name') }}">
            商品説明<input type="textarea" name="textarea" value="{{ old('name') }}">
            戻る<input type="button" onclick="history.forward" value="戻る">
            登録<input type="submit" name="submit" value="登録">
        </form>
    </div>
@endsection
