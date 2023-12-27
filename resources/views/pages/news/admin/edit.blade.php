@extends('layouts.app')

@section('content-admin')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title mb-0">Form Edit News</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('news.update', $news->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" name="title" id="" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $news->title) }}" placeholder="input Title">
                    @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                    @error('image')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="news" class="form-label">News</label>
                    <textarea name="news" id="news" class="form-control @error('news') is-invalid @enderror"placeholder="input News">{{ old('news',$news->news) }}</textarea>
                    @error('news')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('home') }}" class="btn btn-secondary me-2 w-25"><i class="fa-solid fa-xmark me-2"></i>Cancel</a>
                    <button type="submit" class="btn btn-warning w-25"><i class="fa-solid fa-pen-to-square me-2"></i>Update News</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection