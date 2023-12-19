@extends('layouts.app')

@section('content-admin')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="d-flex align-items-center">
                    <h4 class="card-title mb-0 d-inline">List of News</h4>
                    <a href="#" class="btn btn-success ms-auto"><i class="fa-solid fa-plus me-2"></i>Create News</a>
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
                        <tr class="text-center">
                            <td>1</td>
                            <td class="text-start">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe, similique facilis quam obcaecati fuga ducimus!</td>
                            <td>
                                <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa-solid fa-trash"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection