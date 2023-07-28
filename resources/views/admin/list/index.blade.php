@extends('admin.app')
section('vite')
@vite(['resources/sass/admin/app.scss', 'resources/sass/admin/list/index.scss', 'resources/js/app.js'])
@endsection

@section('content')
<div>
    <p>テスト</p>
</div>
@endsection
