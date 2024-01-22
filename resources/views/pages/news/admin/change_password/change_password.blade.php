@extends('layouts.app')

@section('content-admin')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="fw-bold mb-0">Change Password</h5>
                </div>
                <div class="card-body px-5">
                    @if(session('change-password'))
                    <div class="alert alert-warning">
                        {{ session('change-password') }}
                    </div>
                    @endif
                    <form action="{{route('change.password.process', Auth::user()->id )}}" method="post">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="name@example.com" value="{{ Auth::user()->email }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">New Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" id="password" placeholder="Input Password">
                            @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password-confirm"
                                placeholder="Input Confirm Password" autocomplete="new-password">
                        </div>
                        <div class="mb-3 text-end">
                            <button type="submit" class="btn btn-warning w-50">Change Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
