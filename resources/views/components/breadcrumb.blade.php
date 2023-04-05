<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('img/breadcrumbs-bg.jpg') }}');">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>{{ $slot }}</h2>
    <ol>
      <li><a href="{{ route('home') }}">Home</a></li>
      <li>{{ $slot }}</li>
    </ol>

  </div>
</div><!-- End Breadcrumbs -->