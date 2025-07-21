@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="flex__item">
    <!-- foreach追加 -->
    <div class="card">
        <a href="">
            <div class="card__image">
                <img src="" alt="">
            </div>
        </a>
        <div class="card__content">
            <div class="card__content-common">
                <div class="card__price">¥1000</div>
                <div class="card__buy">
                    <a href="" class="card__link">購入に進む</a>
                </div>
            </div>
            <h2 class="card__ttl">タイトルです</h2>
        </div>
    </div>
    <!-- foreach終了 -->
</div>