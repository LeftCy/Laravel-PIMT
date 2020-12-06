@extends('layouts.app')

@section('content')
    <h1 class="heading text-center">修正ページ</h1>
    <div class="container">

        <h3 class="text-center container">修正したい社員の社員番号を入力してください</h3>

        <form action="{{ route('fix.fix') }}" method="post">
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
@endsection