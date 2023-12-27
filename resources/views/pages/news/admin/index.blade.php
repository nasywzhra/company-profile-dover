@extends('layouts.app')

@section('content-admin')
<div class="container">
    @if (session('create'))
    <div class="alert alert-success">
        {{ session('create') }}
    </div>
    @endif

    @if(session('update'))
        <div class="alert alert-warning">
            {{ session('update') }}
        </div>
    @endif
    
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center">
                <h4 class="card-title mb-0 d-inline">List of News</h4>
                <a href="{{ route('news.create') }}" class="btn btn-success ms-auto"><i
                        class="fa-solid fa-plus me-2"></i>Create News</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-center">
                        <th>#</th>
                        <th>Title</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($news as $n)
                    <tr class="text-center">
                        <td>{{  ++$no }}</td>
                        <td class="text-start">{{ $n->title }}</td>
                        <td>
                            <a href="{{ route('news.edit', $n->id) }}" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                        </td>
                    </tr>
                        
                    @empty
                        <tr class="text-center">
                            <td colspan="3">No Data News Available</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="mt-3">
                {{ $news->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
@endsection