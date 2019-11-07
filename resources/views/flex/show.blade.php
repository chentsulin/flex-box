@extends('layouts.app')

@section('content')
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">首頁</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{ $flex->name }}</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-12 col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div class="card">
                <h2 class="p-3 card-title">{{ $flex->name }}</h2>
                <div class="pb-3 pl-3 pr-3">
                    <p>{{ $flex->description }}</p>
                    @if (empty($flex->verification))
                        <p>尚未認證的 Flex message ，所以還無法直接 demo 給你看</p>
                    @else
                        如果你需要 demo，可以 <a href="https://line.me/R/ti/p/%40{{ $flex->bot_id }}">加入好友</a>，並且輸入：
                        <code>demo {{ $flex->demo_code }}</code>
                    @endif
                </div>
                <div class="p-3">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">JSON</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">PHP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Java</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">PHP</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Ruby</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">GO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Python</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">NodeJS</a>
                        </li>
                    </ul>
                    <div class="p-3">
                        <code class="prettyprint lang-json">
                            {{ $flex->shell }}
                        </code>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="card">
                <div class="p-1">
                    <img src="{{ url($flex->demo_image) }}" class="card-img-top" alt="...">
                </div>
                <div class="p-3">
                    這個 Flex message 由 <a href="https://line.me/R/ti/p/%40{{ $flex->bot_id }}">&#64{{$flex->bot_id}}</a> 提供
                </div>
            </div>
        </div>
</div>
@endsection
@section('javascript_file')
<script src="https://cdn.jsdelivr.net/gh/google/code-prettify@master/loader/run_prettify.js"></script>
@endsection
