@extends('layouts.app')

@section('content')
    <h1 class="heading text-center">社員情報修正ページ</h1>

    @isset($info)

        <div class="form-container container">
            <form class="form-group" action="{{ route('fix.fixed') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col-md-4 mb-3">
                        <label for="name">名前</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ $info['name'] }}">
                    </div>
        
                    <div class="col-md-4 mb-3">
                        <label for="number">社員番号</label>
                        <input type="number" id="nuber" name="number" class="form-control" value="{{ $info['number'] }}">
                    </div>
        
                    <div class="col-md-4 mb-3">
                        <label for="date">入社年月日</label>
                        <input type="text" id="date" name="date" class="form-control" value="{{ $info['date'] }}">
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="dep">所属部署</label>
                        <input type="text" id="dep" name="dep" class="form-control" value="{{ $info['dep'] }}">
                    </div>
        
                    <div class="col-md-6 mb-3">
                        <label for="group">グループ</label>
                        <input type="text" id="group" name="group" class="form-control" value="{{ $info['group'] }}">
                    </div>
                </div>
        
                <div class="form-row">
                    <div class="col-md-12 mb-3 ">
                        <label for="customer">常駐先顧客名</label>
                        <input type="text" id="customer" name="customer" class="form-control" value="{{ $info['customer'] }}">
                    </div>
        
                    <div class="col-md-4 mb-3 ">
                        <label for="postal">郵便番号</label>
                        <input type="number" pattern="\d{7}" id="postal" name="postal" class="form-control" value="{{ $info['postal'] }}">
                    </div>
        
                    <div class="col-md-8 mb-3 ">
                        <label for="add">住所</label>
                        <input type="text" id="add" name="add" class="form-control" value="{{ $info['add'] }}">
                    </div>
        
                    <div class="col-md-6 mb-3 ">
                        <label for="tel">電話番号</label>
                        <input type="number" id="tel" name="tel" class="form-control" value="{{ $info['tel'] }}">
                    </div>
        
                    <div class="col-md-6 mb-3 ">
                        <label for="mobile">携帯</label>
                        <input type="number" pattern="\d{8}" id="mobile" name="mobile" class="form-control" value="{{ $info['mobile'] }}">
                    </div>
        
                    <div class="col-md-9 mb-3 ">
                        <label for="emergency">緊急連絡先</label>
                        <input type="text" id="emergency" name="emergency" class="form-control" value="{{ $info['emergency'] }}">
                    </div>
        
                    <div class="col-md-3 mb-3 ">
                        <label for="relation">関係</label>
                        <input type="text" id="relation" name="relation" class="form-control" value="{{ $info['relation'] }}">
                    </div>
                </div>

                <div class="button-container row">
                    <div class="col-md-6">
                        <button class="btn btn-success back" type="button">戻る</button>
                    </div>
                    <div class="col-md-6">
                        <button class="btn btn-primary" type="submit">修正</button>
                    </div>
                </div>
            </form>
        </div>

    @else
                   
        <div class="container">
            <h5 class="text-center heading">該当データが見つかりませんでした</h5>

            <div class="button-container">
                <button class="btn btn-success back" type="submit">再検索</button>
            </div>
        </div>

    @endif

@endsection