@extends('layouts.app')

@section('content-admin')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title mb-0">Show News</h4>
            </div>
            <div class="card-body">
                <div class="card">
                    <img src="{{ Storage::url('news/image/' . $news->image) }}" class="card-img-top" height="400px" alt="{{ $news->title }}">
                    <div class="card-body">
                      <h5 class="card-title fw-bold">{{ $news->title }}</h5>
                      <p class="card-text">
                        {!! $news->news !!}
                      </p>
                    </div>
                  </div>
                  <a href="{{ route('home') }}" class="btn btn-secondary w-25 mt-3"><i class="fa-solid fa-circle-arrow-left me-2"></i>Back</a>
            </div>
        </div>
    </div>
@endsection