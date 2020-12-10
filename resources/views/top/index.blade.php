@extends('layouts.app')

@section('content')

    <div class="notice">
      <h5>現在の登録数：{{ $count }}件</h5>
    </div>

    <h1 class="heading text-center">トップページ</h1>
    

    <div class="row">
      
    </div>
    
    <div class="container link-list">
      <div class="row">

        <div class="col-md-6 icon-link">
          <a class="regist-link" href="{{ route('regist') }}">
            <div class="contents">

              <div class="icon-container">
                <i class="fas fa-address-card fa-5x"></i>
              </div>

              <h5>新規登録</h5>
              <p class="message">社員個人情報を新しく登録します</p>

            </div>
          </a>
        </div>

        <div class="col-md-6 icon-link">
          <a class="search-link" href="{{ route('search') }}">
            <div class="contents">

              <div class="icon-container">
                <i class="fas fa-search fa-5x"></i>
              </div>

              <h5>検索</h5>
              <p class="message">登録されている社員情報を検索します</p>

            </div>
          </a>
        </div>

        <div class="col-md-6 icon-link">
          <a class="fix-link" href="{{ route('fix') }}">
            <div class="contents">

              <div class="icon-container">
                <i class="fas fa-tools fa-5x"></i>
              </div>

              <h5>修正</h5>
              <p class="message">登録されている社員情報を修正します</p>

            </div>
          </a>
        </div>

        <div class="col-md-6 icon-link">
          <a class="delete-link" href="{{ route('delete') }}">
            <div class="contents">

              <div class="icon-container">
                <i class="fas fa-trash-alt fa-5x"></i>
              </div>

              <h5>削除</h5>
              <p class="message">登録されている社員情報を削除します</p>

            </div>
          </a>
        </div>

      </div>
    </div>

@endsection