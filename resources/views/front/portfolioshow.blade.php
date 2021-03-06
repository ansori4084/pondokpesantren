@extends('layouts.front')

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Details Galery</h2>
          <ol>
            <li><a href="/">Home</a></li>
            <li>Details Galery</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">
        <div class="portfolio-details-container">

          <div class="owl-carousel portfolio-details-carousel">
            <img src="{{ asset('storage/'.$portfolio->cover) }}" class="img-fluid" alt="">
          </div>

          <div class="portfolio-info">
            <h3>Status</h3>
            <ul>
              <li><strong>Kategory</strong>:  {{ $portfolio->pcategory->name }}</li>
              <li><strong>klient</strong>: {{ $portfolio->client }}</li>
              <li><strong>Tanggal unggah</strong>: {{ Carbon\Carbon::parse($portfolio->date)->format("d F, Y") }}</li>
            </ul>
          </div>

        </div>

        <div class="portfolio-description">
          <h2>{{ $portfolio->name }}</h2>
          <p>
            {!! $portfolio->desc !!}
          </p>
        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
@endsection