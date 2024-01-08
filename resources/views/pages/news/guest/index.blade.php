@extends('layouts.master')

@section('content')

<section id="news-index" class="container">
    <h1 class="title-news-index text-dark text-center mb-5">News</h1>
    <div class="row">
        @forelse ($news as $n)
        <div class="col-4 mb-4">
            <div class="card bg-light-subtle">
                <div class="card-header p-4 border-bottom-0">
                    <img src="{{ Storage::url('news/image/' . $n->image) }}" class="card-img-top" alt="indolivestock">
                </div>
                <div class="card-body px-4 pb-4">
                    <h5 class="card-title mb-0">{{ $n->title }}</h5>
                    <p class="card-text mb-0 py-4">{{ Str::substr($n->created, 0, 10 ) }}</p>
                </div>
                <div class="card-footer text-center pb-4 pt-0 border-top-0">
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
            
        @empty
            <div class="col-12">
                <div class="alert alert-danger text-center">
                    No News Data Available
                </div>
            </div>
        @endforelse
        
        {{-- <div class="col-4 mb-4">
            <div class="card bg-light-subtle">
                <div class="card-header p-4 border-bottom-0">
                    <img src="{{ asset('assets/img/news/news-1.png') }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body px-4 pb-4">
                    <h5 class="card-title mb-0">INDOLIVESTOCK</h5>
                    <p class="card-text mb-0 py-4">26 July 2023</p>
                </div>
                <div class="card-footer text-center pb-4 pt-0 border-top-0">
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        
        <div class="col-4 mb-4">
            <div class="card bg-light-subtle">
                <div class="card-header p-4 border-bottom-0">
                    <img src="{{ asset('assets/img/news/news-1.png') }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body px-4 pb-4">
                    <h5 class="card-title mb-0">INDOLIVESTOCK</h5>
                    <p class="card-text mb-0 py-4">26 July 2023</p>
                </div>
                <div class="card-footer text-center pb-4 pt-0 border-top-0">
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>

        <div class="col-4 mb-4">
            <div class="card bg-light-subtle">
                <div class="card-header p-4 border-bottom-0">
                    <img src="{{ asset('assets/img/news/news-1.png') }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body px-4 pb-4">
                    <h5 class="card-title mb-0">INDOLIVESTOCK</h5>
                    <p class="card-text mb-0 py-4">26 July 2023</p>
                </div>
                <div class="card-footer text-center pb-4 pt-0 border-top-0">
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        
        <div class="col-4 mb-4">
            <div class="card bg-light-subtle">
                <div class="card-header p-4 border-bottom-0">
                    <img src="{{ asset('assets/img/news/news-1.png') }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body px-4 pb-4">
                    <h5 class="card-title mb-0">INDOLIVESTOCK</h5>
                    <p class="card-text mb-0 py-4">26 July 2023</p>
                </div>
                <div class="card-footer text-center pb-4 pt-0 border-top-0">
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        
        <div class="col-4 mb-4">
            <div class="card bg-light-subtle">
                <div class="card-header p-4 border-bottom-0">
                    <img src="{{ asset('assets/img/news/news-1.png') }}" class="card-img-top" alt="...">
                </div>
                <div class="card-body px-4 pb-4">
                    <h5 class="card-title mb-0">INDOLIVESTOCK</h5>
                    <p class="card-text mb-0 py-4">26 July 2023</p>
                </div>
                <div class="card-footer text-center pb-4 pt-0 border-top-0">
                    <a href="#" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div> --}}
        
</section>

@endsection