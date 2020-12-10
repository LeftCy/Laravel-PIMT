@extends('layouts.app')

@section('content')
        <h1 class="heading text-center">検索結果</h1>
        <div class="container">
            <div class="contents">

                @if (isset( $info ))

                    <?php
                    foreach ($info as $user) {
                        ?>
                    
                    
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="name">名前</label>
                            <input type="text" id="name" name="name" class="form-control" value="{{ $user->name }}" disabled="disabled">
                        </div>
            
                        <div class="col-md-4 mb-3">
                            <label for="number">社員番号</label>
                            <input type="number" id="nuber" name="number" class="form-control" value="{{ $user->number }}" disabled="disabled">
                        </div>
            
                        <div class="col-md-4 mb-3">
                            <label for="date">入社年月日</label>
                            <input type="text" id="date" name="date" class="form-control" value="{{ $user->date }}" disabled="disabled">
                        </div>
            
                        <div class="col-md-6 mb-3">
                            <label for="dep">所属部署</label>
                            <input type="text" id="dep" name="dep" class="form-control" value="{{ $user->dep }}" disabled="disabled">
                        </div>
            
                        <div class="col-md-6 mb-3">
                            <label for="group">グループ</label>
                            <input type="text" id="group" name="group" class="form-control" value="{{ $user->group }}" disabled="disabled">
                        </div>
                    </div>
            
                    <div class="row">
                        <div class="col-md-12 mb-3 ">
                            <label for="customer">常駐先顧客名</label>
                            <input type="text" id="customer" name="customer" class="form-control" value="{{ $user->customer }}" disabled="disabled">
                        </div>
            
                        <div class="col-md-4 mb-3 ">
                            <label for="postal">郵便番号</label>
                            <input type="number" pattern="\d{7}" id="postal" name="postal" class="form-control" value="{{ $user->postal }}" disabled="disabled">
                        </div>
            
                        <div class="col-md-8 mb-3 ">
                            <label for="add">住所</label>
                            <input type="text" id="add" name="add" class="form-control" value="{{ $user->add }}" disabled="disabled">
                        </div>
            
                        <div class="col-md-6 mb-3 ">
                            <label for="tel">電話番号</label>
                            <input type="tel" id="tel" name="tel" class="form-control" value="{{ $user->tel }}" disabled="disabled">
                        </div>
            
                        <div class="col-md-6 mb-3 ">
                            <label for="mobile">携帯</label>
                            <input type="number" pattern="\d{8}" id="mobile" name="mobile" class="form-control" value="{{ $user->mobile }}" disabled="disabled">
                        </div>
            
                        <div class="col-md-9 mb-3 ">
                            <label for="emergency">緊急連絡先</label>
                            <input type="text" id="emergency" name="emergency" class="form-control" value="{{ $user->emergency }}" disabled="disabled">
                        </div>
            
                        <div class="col-md-3 mb-3 ">
                            <label for="relation">関係</label>
                            <input type="text" id="relation" name="relation" class="form-control" value="{{ $user->relation }}" disabled="disabled">
                        </div>
                    </div>
            
                    <div class="button-container row">
                        <div class="col-md-4">
                            <a href="{{ route('top') }}">
                                <button class="btn btn-success" type="button">トップへ戻る</button>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <form action="{{ route('fix.fix') }}" method="post">
                                @csrf
                                <input type="hidden" name="number" value="{{ $user->number }}">
                                <button class="btn btn-primary" type="submit">修正する</button>
                            </form>
                        </div>
                        <div class="col-md-4">
                            <form action="{{ route('delete.confirm') }}" method="post">
                                @csrf
                                <input type="hidden" name="number" value="{{ $user->number }}">
                                <button class="btn btn-danger" type="submit">削除する</button>
                            </form>
                        </div>
                    </div>

                    <?php
                    }
                    ?>

                @else
                   
                    <div class="container">
                        <h5 class="text-center heading">該当データが見つかりませんでした</h5>

                        <div class="button-container">
                            <button class="btn btn-success back" type="submit">戻る</button>
                        </div>
                    </div>

                @endif
                
            </div>
        </div>

        
@endsection