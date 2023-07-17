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
    <div class="header-group">
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

    <article>
        <section id="Style Gallery">
            <h2 class="style-title">Style Gallery</h2>
            <ui class="style-img-list">
                <li class="style-img1"><img src="{{ asset('img/') }}"></li>
                <li class="style-img2"><img src="{{ asset('img/') }}"></li>
                <li class="style-img3"><img src="{{ asset('img/') }}"></li>
                <li class="style-img4"><img src="{{ asset('img/') }}"></li>
                <li class="style-img5"><img src="{{ asset('img/') }}"></li>
                <li class="style-img6"><img src="{{ asset('img/') }}"></li>
                <li class="style-img7"><img src="{{ asset('img/') }}"></li>
                <li class="style-img8"><img src="{{ asset('img/') }}"></li>
            </ui>
            <p class="url"><a href="https://instagram.com/m_a_c_oita?igshid=MzRlODBiNWFlZA==" class="page-url" target="_blank" rel="noopener noreferrer">Instagram<img src="{{ asset('img/insta.11.jpg') }}"></a></p>
        </section>

        <section id="Concept">
            <div class="concept-group">
                <div class="concept-img-list">
                    <div class="concept-img1">
                        <img src="{{ asset('img/') }}">
                    </div>
                    <div class="concept-img2">
                        <img src="{{ asset('img/') }}">
                    </div>
                    <div class="concept-img3">
                        <img src="{{ asset('img/') }}">
                    </div>
                    <div class="concept-img4">
                        <img src="{{ asset('img/') }}">
                    </div>
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
                <p class="menu-url"><a href="{{ route('hp.menu') }} " class="page-url" target="_blank" rel="noopener noreferrer">Menu<img src="{{ asset('img/tabu.11.jpg') }}"></a></p>
            </section>

            <section id="Staff">
                <div class="staff-img">
                    <img src="{{asset('img/') }}">
                </div>
                <p class="staff-url"><a href="{{ route('hp.staff') }}" class="page-url" target="_blank" rel="noopener noreferrer">Staff<img src="{{ asset('img/tabu.11.jpg') }}"></a></p>
            </section>

            <section id="Nail">
                <div class="nail-img">
                    <img src="{{asset('img/') }}">
                </div>
                <p class="nail-url"><a href="https://instagram.com/m_and_co.nail?igshid=MzRlODBiNWFlZA==" class="page-url" target="_blank" rel="noopener noreferrer">Nail<img src="{{ asset('img/insta.11.jpg') }}"></a></p>
            </section>
        </div>

        <section id="Accese" style="height: 500px">
        </section>
        <script src="{{ asset('/js/result.js') }}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyDK2ucGeizGz7BMEJ1RWlVcBIydXk8_ncU&callback=initMap" async defer></script>

        <section id="Accese2">
            <div class="logo-img">
                <img src="{{ asset('img/logo.jpg') }}">
            </div>
            <p class="tx">
                大分県大分市大道町2-4-4
            </p>
            <p class="tx">
                上野の森口を出て交差点を右折、ファミリーマートを左折、すぐ右手にある</br>
                ホワイト急便（クリーニング店）を右折して突き当たり左角に店舗あります。
            </p>
            <p class="tx">
                駐車場完備（店舗横）
            </p>
            <p class="tx">
                平日 10時〜20時 / 土日祝日 9時〜19時
            </p>
            <p class="tx">
                奇数月（1.3.5.7.9.11月） 月曜日</br>
                偶数月（2.4.6.8.10.12月） 火曜日</br>
                ※他不定休
            </p>
        </section>

        <footer>
            <div class="logo-img">
                <img src="{{ asset('img/logo.jpg') }}">
            </div>
            <div class="sns">
                <p class="url"><a href="https://line.me/ti/p/IlowhDaFpj" class="page-url" target="_blank" rel="noopener noreferrer">LINE<img src="{{ asset('img/line.11.jpg') }}"></a></p>
                <p class="url"><a href="https://instagram.com/m_a_c_oita?igshid=MzRlODBiNWFlZA==" class="page-url" target="_blank" rel="noopener noreferrer">Instagram<img src="{{ asset('img/insta.11.jpg') }}"></a></p>
            </div>
        </footer>
    </article>
</body>

</html>