@extends('layouts.master')

@section('content')
<header>
    @include('layouts.partials.header')
</header>

<main>
    @include('pages.components.services')

    @include('pages.components.about')

    @include('pages.components.product')

    @include('pages.components.contact')
</main>
@endsection