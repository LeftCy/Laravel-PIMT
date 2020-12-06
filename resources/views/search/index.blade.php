@extends('layouts.app')

@section('content')
    <h1 class="heading text-center">検索ページです</h1>
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
@endsection