@extends('layouts.app')

@section('content')
    <h1 class="heading text-center">検索ページ</h1>

    <!--
    <div class="container">
        <div class="container">
            <h3 class="text-center">社員番号を入力してください</h2>
        </div>
        <form method="POST" action="{{ route('search.get') }}">
            @csrf
            <div class="form-row">
                <div class="col-md mb-3">
                    <label for="number">社員番号</label>
                    <input type="number" id="number" name="number" class="form-control" placeholder="社員番号を入力" required>
                </div>
            </div>
            <div class="button-container">
                <button class="btn btn-primary" type="submit">検索する</button>
            </div>
        </form>
    </div>
    -->

    <div class="container">
        <div class="container">
            <h3 class="text-center">キーワードを入力してください</h2>
        </div>
        <form class="form-group" action="{{ route('search.list') }}" method="POST">
            @csrf
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="name">名前</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="個人太郎">
                </div>

                <div class="col-md-4 mb-3">
                    <label for="number">社員番号</label>
                    <input type="number" id="nuber" name="number" class="form-control" placeholder="00000">
                </div>

                <div class="col-md-4 mb-3">
                    <label for="date">入社年月日</label>
                    <input type="date" id="date" name="date" class="form-control">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="dep">所属部署</label>
                    <input type="text" id="dep" name="dep" class="form-control" placeholder="（株）●●▲▲部">
                </div>

                <div class="col-md-6 mb-3">
                    <label for="group">グループ</label>
                    <input type="text" id="group" name="group" class="form-control" placeholder="××科">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-12 mb-3 ">
                    <label for="customer">常駐先顧客名</label>
                    <input type="text" id="customer" name="customer" class="form-control" placeholder="客先次郎">
                </div>

                <div class="col-md-4 mb-3 ">
                    <label for="postal">郵便番号</label>
                    <input type="number" pattern="\d{7}" id="postal" name="postal" class="form-control" placeholder="0120123">
                </div>

                <div class="col-md-8 mb-3 ">
                    <label for="add">住所</label>
                    <input type="text" id="add" name="add" class="form-control" placeholder="東京都●●区××-0-0">
                </div>

                <div class="col-md-6 mb-3 ">
                    <label for="tel">電話番号</label>
                    <input type="number" id="tel" name="tel" class="form-control" placeholder="0120120123">
                </div>

                <div class="col-md-6 mb-3 ">
                    <label for="mobile">携帯</label>
                    <input type="number" pattern="\d{8}" id="mobile" name="mobile" class="form-control" placeholder="08012345678">
                </div>

                <div class="col-md-9 mb-3 ">
                    <label for="emergency">緊急連絡先</label>
                    <input type="text" id="emergency" name="emergency" class="form-control" placeholder="緊急連絡先を入力">
                </div>

                <div class="col-md-3 mb-3 ">
                    <label for="relation">関係</label>
                    <input type="text" id="relation" name="relation" class="form-control" placeholder="緊急連絡先の関係を入力">
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