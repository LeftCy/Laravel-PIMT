@extends('layouts.app')

@section('content')
    <h1 class="heading text-center">検索結果：{{ $user_count }}件</h1>

        <div class="container">
            <div class="contents">

                @if (isset( $info ))

                    

                    <h3 class="text-center container">該当社員一覧</h3>
                    
                    <div class="table">
                        <table class="table-bordered table-dark">
                            <thead>
                                <tr>
                                    <th scope="col" class="fixed">名前</th>
                                    <th scope="col">社員番号</th>
                                    <th scope="col">入社年月日</th>
                                    <th scope="col">所属部署</th>
                                    <th scope="col">グループ</th>
                                    <th scope="col">常駐先顧客名</th>
                                    <th scope="col">郵便番号</th>
                                    <th scope="col">住所</th>
                                    <th scope="col">電話番号</th>
                                    <th scope="col">携帯</th>
                                    <th scope="col">緊急連絡先</th>
                                    <th scope="col">関係</th>
                                    <th scope="col">更新</th>
                                    <th scope="col">削除</th>
                                </tr>
                            </thead>
                            
                            <!-- 検索結果の受け取り -->
                            <tbody>

                            <?php
                                foreach ($info as $user) {
                                    ?>
                                
                                    <tr>
                                        <td class="fixed2">{{ $user->name }}</td>
                                        <td class="fixed2">{{ $user->number }}</td>
                                        <td class="fixed2">{{ $user->date }}</td>
                                        <td class="fixed2">{{ $user->dep }}</td>
                                        <td class="fixed2">{{ $user->group }}</td>
                                        <td class="fixed2">{{ $user->customer }}</td>
                                        <td class="fixed2">{{ $user->postal }}</td>
                                        <td class="fixed2">{{ $user->add }}</td>
                                        <td class="fixed2">{{ $user->tel }}</td>
                                        <td class="fixed2">{{ $user->mobile }}</td>
                                        <td class="fixed2">{{ $user->emergency }}</td>
                                        <td class="fixed2">{{ $user->relation }}</td>
                                        <td class="fixed2">
                                            <form action="{{ route('fix.fix') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="number" value="{{ $user->number }}">
                                                <button class="btn btn-primary btn-list" type="submit">修正</button>
                                            </form>
                                        </td>
                                        <td class="fixed2">
                                            <form action="{{ route('delete.confirm') }}" method="post">
                                                @csrf
                                                <input type="hidden" name="number" value="{{ $user->number }}">
                                                <button class="btn btn-warning btn-list btn-danger" type="submit">削除</button>
                                            </form>
                                        </td>
                                    </tr>
                                
                                    <?php
                                }
                            ?>

                            </tbody>

                        </table>
                    </div>
            
                    <div class="button-container row">
                        <div class="col-md">
                            <a href="{{ route('top') }}">
                                <button class="btn btn-success" type="button">トップへ戻る</button>
                            </a>
                        </div>
                    </div>

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