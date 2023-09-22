@extends('layouts.page_structure.indexBack')
@section('backend')
    <h1 class="text-center text-pink bg-blue">BackOffice</h1>
    <h2 class="py-3">Users:</h2>
    @include("backend.partials.usersTable")
    <div class="d-flex gap-5 align-items-center py-3">
        <h2>Products:</h2>
        <div>@include('backend.partials.product.addmodal')</div>
    </div>
    @include("backend.partials.productsTable")
@endsection
