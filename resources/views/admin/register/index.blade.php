@extends('admin.app')

@section('vite')
@vite(['resources/scss/admin/register/index.scss'])
@endsection

@section('content')
<main>
    <div class="wrapper">
        <div class="back">
            <a href="{{ route('admin.list.index') }}">&lt; 戻る</a>
        </div>
        <div class="file">
            <label for="img">画像</label>
            <input type="file" name="img" accept="image/*">
        </div>
        <p class="register"><a href="#">登録</a></p>
    </div>
</main>
@endsection