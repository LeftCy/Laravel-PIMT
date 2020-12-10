@extends('layouts.app')

@section('content')
    <h1 class="heading text-center">削除ページ</h1>
    <div class="container">
        <div class="container">
            <h3 class="text-center">削除したい社員の社員番号を入力してください</h2>
        </div>
        <form action="{{ route('delete.confirm') }}" method="post">
            {{ csrf_field() }}
            <div class="form-row">
                <div class="col-md mb-3">
                    <label for="number">社員番号</label>
                    <input type="number" id="number" name="number" class="form-control" placeholder="社員番号を入力" required>
                </div>
            </div>

            <div class="button-container row">
                <div class="col-md-6">
                    <a href="{{ route('top') }}">
                        <button class="btn btn-success" type="button">トップへ戻る</button>
                    </a>
                </div>
                <div class="col-md-6">
                    <button class="btn btn-primary" type="submit">検索する</button>
                </div>
            </div>
        </form>
    </div>
@endsection