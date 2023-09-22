@extends('layouts.page_structure.indexBack')
@section('backend')
    <h1 class="text-center text-pink bg-blue">BackOffice</h1>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
          <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Users</button>
          <button class="nav-link" id="nav-product-tab" data-bs-toggle="tab" data-bs-target="#nav-product" type="button" role="tab" aria-controls="nav-product" aria-selected="false">Products</button>
          <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">MailBox</button>
          <button class="nav-link" id="nav-info-tab" data-bs-toggle="tab" data-bs-target="#nav-info" type="button" role="tab" aria-controls="nav-product" aria-selected="false">Contact info</button>

        </div>
      </nav>
      <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
            <div>
                <h2 class="py-3">Users:</h2>
                @include('backend.partials.tables.usersTable')
            </div>
        </div>
        <div class="tab-pane fade" id="nav-product" role="tabpanel" aria-labelledby="nav-product-tab" tabindex="0">
            <div>
                <div class="d-flex gap-5 align-items-center py-3">
                    <h2>Products:</h2>
                    <div>@include('backend.partials.product.addmodal')</div>
                </div>
                @include('backend.partials.tables.productsTable')
            </div>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            <div>
                <div class="d-flex gap-5 align-items-center py-3">
                    <h2>Mail Box:</h2>
                </div>
                @include("backend.partials.tables.mailBoxTable")
            </div>
        </div>
        <div class="tab-pane fade" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab" tabindex="0">
            <div>
                <div class="d-flex gap-5 align-items-center py-3">
                    <h2>Contact infos:</h2>
                </div>
            </div>
        </div>
      </div>

@endsection
