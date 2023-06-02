<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaravelTweet</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="header">
        <div class="header__bar row">
          <h1 class="grid-6"><a href="/">LaravelTweet</a></h1>
          <div class="user_nav grid-6">
            <a class="post" href="/tweets/create">投稿する</a>
          </div>
        </div>
      </header>
    {{-- 共通のヘッダー --}}
    @yield('content')
     {{-- 共通のフッター --}}
     <footer>
        <p>
          Copyright LaravelTweet 2023.
        </p>
      </footer>
</body>
</html>
