<!DOCTYPE html>
<html lang="ja">

<head>
    @vite(['resources/css/app.css', 'resources/scss/app.scss', 'resources/scss/header.scss', 'resources/js/app.js'])
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
    <meta property="og:locale" content="ja_JP" </head>

<body>
    <div class="block">
        <header>
            <div class="header-list">
                <div class="logo-img">
                    <img src="{{ asset('img/logo.jpg') }}">
                </div>
                <p class="logo-name">hair & nail salon</p>
                <nav class="page-link">
                    <a href="#Style Gallery">Style Gallery</a>
                    <a href="#Concept">Concept</a>
                    <a href="#Menu">Menu</a>
                    <a href="#Staff">Staff</a>
                    <a href="#Nail">Nail</a>
                    <a href="#Accese">Accese</a>
                </nav>
            </div>
            <div class="slider">
                <div class="slider-list">
                    <div class="slider1">
                        <img src="{{ asset('img/') }}">
                    </div>
                    <div class="slider2">
                        <img src="{{ asset('img/') }}">
                    </div>
                    <div class="slider3">
                        <img src="{{ asset('img/') }}">
                    </div>
                    <div class="slider4">
                        <img src="{{ asset('img/') }}">
                    </div>
                </div>
            </div>
        </header>

        <div class="right-side">
            <div>
                <img src="{{ asset('img/meny.png') }}" class="meny-img">
                <p class="reservation">Reservation</p>
            </div>
            <p class="copy-right">&copy; ©︎ 2023 hair salon M&Co.</p>
        </div>
    </div>

    <section id="Style Gallery">
        <h2 class="style gallery title">Style Gallery</h2>
        <ui class="style-img">
            <li class="style-img1"><img src="{{ asset('img/') }}"></li>
            <li class="style-img2"><img src="{{ asset('img/') }}"></li>
            <li class="style-img3"><img src="{{ asset('img/') }}"></li>
            <li class="style-img4"><img src="{{ asset('img/') }}"></li>
            <li class="style-img5"><img src="{{ asset('img/') }}"></li>
            <li class="style-img6"><img src="{{ asset('img/') }}"></li>
            <li class="style-img7"><img src="{{ asset('img/') }}"></li>
            <li class="style-img8"><img src="{{ asset('img/') }}"></li>
        </ui>
        <p><a href="https://instagram.com/m_a_c_oita?igshid=MzRlODBiNWFlZA=="><img src="{{ asset('img/insta.11.jpg') }}">instagram</a></p>
    </section>

    <section id="Concept">
        <div class="concept group">
            <div class="concept-img">
                <img src="{{ asset('img/') }}">
                <img src="{{ asset('img/') }}">
                <img src="{{ asset('img/') }}">
                <img src="{{ asset('img/') }}">
            </div>
            <div class="concept-item">
                <h2 class="concept-title">Concept</h2>
                <div class="concept-text">
                    <p class="tx">
                        アットホームなプライベート空間だから</br>周りを気にせずサロン時間を堪能できます。
                    </p>
                    <p class="tx">
                        1人1人の髪のお悩みと向き合い</br>じっくりカウンセリングをし、</br>最適なヘアをご提案。
                    </p>
                    <p class="tx">
                        レディース メンズ、ジャンル問わず大歓迎!</br>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="section-group">
        <section id="Menu">
            <div class="menu-img">
                <img src="{{asset('img/') }}">
            </div>
            <p class="menu-url"><a href="">Menu</a></p>
        </section>

        <section id="Staff">

        </section>

        <section id="Nail">

        </section>
    </div>
</body>

</html>