@extends('layouts.master')

@section('content')
<div class="cover">
    <div class="news-cover">
        <img src="{{ asset('storage/news/image/' . $news->image) }}" alt="{{ $news->title }}" class="news-img-cover">
        <div class="news-text-cover">
            <div class="cover-title">
                {{ $news->title }}
            </div>
            <div class="cover-date">
                {{ Str::substr($news->created_at, 0, 10) }}
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="my-5">
        <a href="{{ route('news.guest.index') }}" class="text-dark"><i class="fas fa-angle-left me-1"></i>Back</a>
    </div>
    <div class="mb-5">
        <div class="news-title mb-3">
            {{ $news->title }}
        </div>
        <p class="news-post">
            {!! $news->news !!}
        </p>
    </div>
</div>
@endsection
