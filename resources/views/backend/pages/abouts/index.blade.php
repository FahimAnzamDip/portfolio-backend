@extends('backend.layouts.main')

@section('title', 'About')

@section('breadcrumb')
    <!-- Breadcrumb Start -->
    <div class="d-flex align-items-center ms-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb bg-gray-100 shadow breadcrumb-dark mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard') }}">
                        <i class="bi bi-house-door-fill text-secondary"></i>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Edit About</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->
@endsection

@section('content')

@endsection
