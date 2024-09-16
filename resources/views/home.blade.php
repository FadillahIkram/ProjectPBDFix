@extends('main')

@section('title', 'Dashboard')

@section('breadcrumbs')
    <!-- Breadcrumbs code here -->
@endsection

@section('content')
    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-md-12">
                    <!-- Image Carousel Section -->
                    <div id="imageCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('style/images/home1.jpg') }}" class="d-block w-100" alt="Image 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('style/images/home2.jpg') }}" class="d-block w-100" alt="Image 2">
                            </div>
                            <!-- Add more carousel items as needed -->
                        </div>
                    </div>
                    <!-- End Image Carousel Section -->

                    <!-- Description Section -->
                    <div class="description-overlay" style="text-align: center;">
                        <h2 style="font-family: 'DM Serif Text', serif;">Perpustakaan Gaul</h2>
                        <p style="color: #333;">
                        Selamat datang di Perpustakaan Gaul, tempat di mana pengelolaan peminjaman lebih seru dan nyaman!
                         Kami menyediakan layanan terkini untuk memudahkan Anda mengelola data dunia literatur.
                        </p>
                    </div>
                    <!-- End Description Section -->

                    <!-- Book Covers Section -->
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <img src="{{ asset('style/images/harryPotterszzz.jpg') }}" alt="Book 1" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('style/images/hungerGamesOri.jpg') }}" alt="Book 2" class="img-fluid">
                        </div>
                        <div class="col-md-4">
                            <img src="{{ asset('style/images/1984Ori.jpg') }}" alt="Book 3" class="img-fluid">
                        </div>
                    </div>
                    <!-- End Book Covers Section -->
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        #imageCarousel {
            max-height: 500px; /* Set max height for the carousel */
        }

        .description-overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            text-align: center;
            padding: 20px;
            background: rgba(0, 0, 0, 0.5);
            width: 100%;
        }

        .description-overlay h2 {
            font-size: 2em;
            margin-bottom: 20px;
        }

        .row img {
            margin-bottom: 15px;
        }

        .carousel-item img {
        filter: brightness(40%); /* Sesuaikan nilai sesuai keinginan Anda (dalam persen) */
        }
    </style>
@endpush

@push('scripts')
    <script>
        // Activate the carousel
        $(document).ready(function () {
            $('#imageCarousel').carousel();
        });
    </script>
@endpush
