<header>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="{{ route('top') }}" class="navbar-brand">社員個人情報管理ツール</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="{{ Request::is('regist') ? 'nav-item nav-link active' : 'nav-item nav-link' }}" href="{{ route('regist') }}">登録</a>
                <a class="{{ Request::is('search') ? 'nav-item nav-link active' : 'nav-item nav-link' }}" href="{{ route('search') }}">検索</a>
                <a class="{{ Request::is('fix') ? 'nav-item nav-link active' : 'nav-item nav-link' }}" href="{{ route('fix') }}">修正</a>
                <a class="{{ Request::is('delete') ? 'nav-item nav-link active' : 'nav-item nav-link' }}" href="{{ route('delete') }}">削除</a>
                <a class="nav-item nav-link close-window">閉じる</a>
            </div>
        </div>
    </nav>
</header>