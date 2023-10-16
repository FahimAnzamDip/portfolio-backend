@extends('backend.layouts.main')

@section('title', 'About Info')

@push('third_party_styles')
    <!-- include summernote css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush

@push('page_css')
    <style>
        .tox .tox-promotion {
            display: none;
        }
    </style>
@endpush

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
                <li class="breadcrumb-item active" aria-current="page">Edit About Info</li>
            </ol>
        </nav>
    </div>
    <!-- Breadcrumb End -->
@endsection

@section('content')
    <div class="card border-0 shadow components-section">
        <div class="card-body">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
                    <strong>Success,</strong> {{ session()->get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <livewire:abouts-update :abouts="$abouts"/>
        </div>
    </div>
@endsection

@push('page_js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Livewire.on('abouts-updated', () => {
            Swal.fire({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                icon: 'success',
                title: 'About Info Updated!',
                showCloseButton: true
            });
        });
    </script>
@endpush
