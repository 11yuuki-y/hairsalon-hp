<!DOCTYPE html>
<html lang="ja">

<head>
    @yield('vite')
    <meta charset="UTF-8">
    <title>M&Co.（エムアンドコー）：大分の美容室|</title>
    <meta name="description" content="【大分駅徒歩3分/SNSで大人気】閑静な住宅街にあるプライベートサロン。
    レディース メンズ、ジャンル問わず大歓迎！インスタ「@m_a_c_oita」スタイル写真や情報を要チェック">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minumum-scale=1">
    <link rel="apple-touch-icon" href="webclip.png">
    <meta property="og:site_name" content="M&Co.（エムアンドコー）：大分の美容室|">
    <!-- <meta property="og:url" content="URL" /> -->
    <meta property="og:type" content="website or article">
    <meta property="og:title" content="M&Co.（エムアンドコー）：大分の美容室|">
    <meta property="og:description" content="【大分駅徒歩3分/SNSで大人気】閑静な住宅街にあるプライベートサロン。
    レディース メンズ、ジャンル問わず大歓迎！インスタ「@m_a_c_oita」スタイル写真や情報を要チェック">
    <!-- <meta property="og:image" content="URL" /> -->
    <meta property="og:locale" content="ja_JP">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
</head>

<body>
    <header>
        @yield('header')
    </header>

    <article>
        @yield('main')
    </article>

    <footer>
        @include('hp.footer')
    </footer>

</body>

</html>