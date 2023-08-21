@extends('admin.app')

@section('vite')
@vite(['resources/scss/admin/registration/index.scss'])
@endsection

@section('content')
<main>
    <div class="wrapper">
        <div class="back">
            <a href="{{ route('admin.stylegallery.index') }}">&lt; 戻る</a>
        </div>
        <form action="{{ $url }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="file">
                <label for="img">画像</label>
                <input type="file" name="img" accept=".jpg,.jpeg,.png,.gif,.svg" required>
            </div>
            <div class="button">
                <button type="submit">登録</button>
            </div>
        </form>
    </div>
</main>
@endsection