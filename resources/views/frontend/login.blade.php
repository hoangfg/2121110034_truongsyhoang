@extends('layouts.site')

@section('title', $title ?? 'trang chủ')
@section('header')
@endsection
@section('content')
    <div class="container modal-body">
        @includeIf('backend.messageAlert', ['some' => 'data'])
        <div class="text-center">
            <h4>Tai khoan</h4>
            @includeIf('frontend.model-login')
        </div>
    </div>
@endsection

@section('footer')
    
@endsection
