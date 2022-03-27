@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ __('Dashboard') }}</h1>
    </div>

    @include('admin._components.flash')
</div>
@endsection