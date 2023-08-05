@extends('admin.app')

@section('vite')
@vite(['resources/scss/admin/header/index.scss'])
@endsection

@section('content')
<main>
    <div class="wrapper">
        <div class="meny">
            <p class="meny1"><a href="#" class="meny-img"><img src="{{ asset('img/gazou.png') }}" alt="">画像管理</a></p>
            <p class="meny2"><a href="{{ route('admin.header.index') }}" class="meny-tx">・header</a></p>
            <p class="meny2"><a href="{{ route('admin.stylegallery.index') }}" class="meny-tx">・Style Gallery</a></p>
            <p class="meny2"><a href="{{ route('admin.concept.index') }}" class="meny-tx">・Concept</a></p>
        </div>

        <div class="list">
            <p class="list-tx">一覧</p>
            <div class="img-list">
                <div>
                    <p class="list-file">header1</p>
                    <a href="{{ route('admin.registration.index') }}">編集</a>
                </div>
                <div>
                    <p class="list-file">header2</p>
                    <a href="{{ route('admin.registration.index') }}">編集</a>
                </div>
                <div>
                    <p class="list-file">header3</p>
                    <a href="{{ route('admin.registration.index') }}">編集</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection