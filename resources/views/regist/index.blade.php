@extends('layouts.app')

@section('content')

    <h1 class="heading text-center">新規登録</h1>
    <div class="container">

        <div class="form-container container">
            <form class="form-group" action="{{ route('regist.thanks') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="name">名前</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="個人太郎" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="number">社員番号</label>
                        <input type="number" id="nuber" name="number" class="form-control" placeholder="00000" required>
                    </div>

                    <div class="col-md-4 mb-3">
                        <label for="date">入社年月日</label>
                        <input type="date" id="date" name="date" class="form-control" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="dep">所属部署</label>
                        <input type="text" id="dep" name="dep" class="form-control" placeholder="（株）●●▲▲部" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="group">グループ</label>
                        <input type="text" id="group" name="group" class="form-control" placeholder="××科" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="col-md-12 mb-3 ">
                        <label for="customer">常駐先顧客名</label>
                        <input type="text" id="customer" name="customer" class="form-control" placeholder="客先次郎" required>
                    </div>

                    <div class="col-md-4 mb-3 ">
                        <label for="postal">郵便番号</label>
                        <input type="number" pattern="\d{7}" id="postal" name="postal" class="form-control" placeholder="0120123" required>
                    </div>

                    <div class="col-md-8 mb-3 ">
                        <label for="add">住所</label>
                        <input type="text" id="add" name="add" class="form-control" placeholder="東京都●●区××-0-0" required>
                    </div>

                    <div class="col-md-6 mb-3 ">
                        <label for="tel">電話番号</label>
                        <input type="number" id="tel" name="tel" class="form-control" placeholder="0120120123" required>
                    </div>

                    <div class="col-md-6 mb-3 ">
                        <label for="mobile">携帯</label>
                        <input type="number" pattern="\d{8}" id="mobile" name="mobile" class="form-control" placeholder="08012345678" required>
                    </div>

                    <div class="col-md-9 mb-3 ">
                        <label for="emergency">緊急連絡先</label>
                        <input type="text" id="emergency" name="emergency" class="form-control" placeholder="緊急連絡先を入力" required>
                    </div>

                    <div class="col-md-3 mb-3 ">
                        <label for="relation">関係</label>
                        <input type="text" id="relation" name="relation" class="form-control" placeholder="緊急連絡先の関係を入力" required>
                    </div>
                </div>
                <div class="button-container">
                    <button class="btn btn-primary" type="submit">登録</button>
                </div>
            </form>
        </div>
    </div>
@endsection