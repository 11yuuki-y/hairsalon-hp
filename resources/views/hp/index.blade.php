@extends('hp.commom')

@section('vite')
@vite(['resources/scss/hp/app.scss', 'resources/scss/hp/footer.scss', 'resources/scss/hp/pc/index.scss',
'resources/scss/hp/sp/index.scss',])
@endsection

@section('header')
<div class="header-list">
    <div class="logo-img">
        <img src="{{ asset('img/logo.jpg') }}" alt="ロゴ">
        <p class="logo-name">hair & nail salon</p>
    </div>
    <nav class="page-link">
        <a href="#Style-Gallery">Style Gallery</a>
        <a href="#Concept">Concept</a>
        <a href="#Menu">Menu</a>
        <a href="#Staff">Staff</a>
        <a href="#Nail">Nail</a>
        <a href="#Accese">Accese</a>
    </nav>
</div>
<div class="header-group">
    <div class="img-frame">
        <div class="img-01"></div>
        <div class="img-02"></div>
        <div class="img-03"></div>
    </div>
    <div class="right-side">
        <img src="{{ asset('img/meny.png') }}" class="meny-img" alt="メニューボタン" onclick="document.getElementById('menu-btn').style.display = 'block'">
        <nav id="menu-btn">
            <div id=close>
                <img class="close" src="img/batu.png" alt="ナビゲーションを閉じる" onclick="document.getElementById('menu-btn').style.display = 'none'">
            </div>
            <div id="logo">
                <a class="logo" href="#" onclick="document.getElementById('menu-btn').style.display = 'none'"><img src="{{ asset('img/logo.jpg') }}" alt="トップページに戻る"></a>
            </div>
            <div id="page-link-menu1">
                <a class="page-link-menu" href="#Style-Gallery" onclick="document.getElementById('menu-btn').style.display = 'none'">Style-Gallery</a>
                <a class="page-link-menu" href="#Concept" onclick="document.getElementById('menu-btn').style.display = 'none'">Concept</a>
                <a class="page-link-menu" href="#Menu" onclick="document.getElementById('menu-btn').style.display = 'none'">Menu</a>
            </div>
            <div id="page-link-menu2">
                <a class="page-link-menu" href="#Staff" onclick="document.getElementById('menu-btn').style.display = 'none'">Staff</a>
                <a class="page-link-menu" href="#Nail" onclick="document.getElementById('menu-btn').style.display = 'none'">Nail</a>
                <a class="page-link-menu" href="#Accese" onclick="document.getElementById('menu-btn').style.display = 'none'">Accese</a>
            </div>
            <div id="box">
                <p id="tx">【ご予約はこちらから】</p>
                <div id="sns">
                    <p id="sns1">
                        <a href="" class="line" target="_blank" rel="noopener noreferrer">LINE<img src="{{ asset('img/line.png') }}" alt="LINEのリンク"></a>
                    </p>
                    <p id="sns2">
                        <a href="https://instagram.com/m_a_c_oita?igshid=MzRlODBiNWFlZA==" class="insta" target="_blank" rel="noopener noreferrer">Instagram<img src="{{ asset('img/insta.png') }}" alt="instaのリンク"></a>
                    </p>
                </div>
            </div>
        </nav>
        <p class="copy-right">&copy; 2023 hair salon M&Co.</p>
    </div>
</div>
@endsection

@section('main')
<section id="Style-Gallery">
    <h2 class="style-title">Style Gallery</h2>
    <ui class="style-img-list">
        <li><img src="{{ asset('img/style1.jpg') }}" alt=""></li>
        <li><img src="{{ asset('img/style1.jpg') }}" alt=""></li>
        <li><img src="{{ asset('img/style1.jpg') }}" alt=""></li>
        <li><img src="{{ asset('img/style1.jpg') }}" alt=""></li>
    </ui>
    <ui class="style-img-list2">
        <li><img src="{{ asset('img/style1.jpg') }}" alt=""></li>
        <li><img src="{{ asset('img/style1.jpg') }}" alt=""></li>
        <li><img src="{{ asset('img/style1.jpg') }}" alt=""></li>
        <li><img src="{{ asset('img/style1.jpg') }}" alt=""></li>
    </ui>
    <p class="style-url"><a href="https://instagram.com/m_a_c_oita?igshid=MzRlODBiNWFlZA==" class="url" target="_blank" rel="noopener noreferrer">Instagram<img src="{{ asset('img/insta.png') }}" alt="instaのリンク"></a></p>
</section>

<section id="Concept">
    <div class="concept-group">
        <div class="concept-img-list">
            <img src="{{ asset('$concept->storage/stylegallery/style1.jpg') }}">
            <img src="{{ asset('$concept->storage/stylegallery/style1.jpg') }}">
            <img src="{{ asset('$concept->storage/stylegallery/style1.jpg') }}">
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
            <img src="{{asset('img/concept1.PNG') }}" alt="">
        </div>
        <p class="menu-url"><a href="{{ route('hp.menu.index') }} " class="url" target="_blank" rel="noopener noreferrer">Menu<img src="{{ asset('img/tab.jpg') }}" alt="別タブのリンク"></a></p>
    </section>

    <section id="Staff">
        <div class="staff-img">
            <img src="{{asset('img/concept1.PNG') }}" alt="">
        </div>
        <p class="staff-url"><a href="{{ route('hp.staff.index') }}" class="url" target="_blank" rel="noopener noreferrer">Staff<img src="{{ asset('img/tab.jpg') }}" alt="別タブのリンク"></a></p>
    </section>

    <section id="Nail">
        <div class="nail-img">
            <img src="{{asset('img/concept1.PNG') }}" alt="">
        </div>
        <p class="nail-url"><a href="https://instagram.com/m_and_co.nail?igshid=MzRlODBiNWFlZA==" class="url" target="_blank" rel="noopener noreferrer">Nail<img src="{{ asset('img/insta.png') }}" alt="" instaのリンク></a></p>
    </section>
</div>

<section id="Accese" style="height: 500px">
</section>
<script src="{{ asset('/js/result.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?language=ja&region=JP&key=AIzaSyDK2ucGeizGz7BMEJ1RWlVcBIydXk8_ncU&callback=initMap" async defer></script>

<section id="Accese2">
    <div class="logo-img">
        <img src="{{ asset('img/logo.jpg') }}" alt="ロゴ">
    </div>
    <p class="tr">
        大分県大分市大道町2-4-4
    </p>
    <p class="tr">
        上野の森口を出て交差点を右折、ファミリーマートを左折、</br>
        すぐ右手にあるホワイト急便（クリーニング店）を右折して</br突き当たり左角に店舗あります。 </p>
    <p class="tr">
        駐車場完備（店舗横）
    </p>
    <p class="tr">
        平日 10時〜20時 / 土日祝日 9時〜19時
    </p>
    <p class="tr">
        奇数月（1.3.5.7.9.11月） 月曜日</br>
        偶数月（2.4.6.8.10.12月） 火曜日</br>
        ※他不定休
    </p>
</section>
@endsection

@section('footer')