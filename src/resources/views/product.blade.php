@extends('layouts.app')
<style>
    svg.w-5.h-5 {
        width: 30px;
        height: 30px;
    }
</style>

@section('css')
    <link rel="stylesheet" href="{{ asset('css/product.css') }}">
@endsection

@section('content')
    <div class="two-column">
        <aside>
            <nav>
                <p>商品一覧</p>
                <form>
                    <input type="text" name="search" placeholder="商品名で検索">
                    <input type="submit" value="検索">
                    <p>価格順で表示</p>
                    <select>
                        <option value="高い順に表示">高い順に表示</option>
                        <option value="低い順に表示">低い順に表示</option>
                    </select>
                </form>
            </nav>
        </aside>
        <div>
            <div>
                <button class="add-product" type="submit">+商品を追加</button>
            </div>
            <div>
                フルーツの写真
            </div>
        </div>
    </div>
@endsection
