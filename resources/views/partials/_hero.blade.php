<section id="hero" class="hero">

    <div id="hero-carousel" class="carousel p-0 slide" data-bs-ride="carousel" data-bs-interval="7000">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 data-aos="fade-down">Choose <span>{{ config('app.name') }}</span></h2>
                        <h4 data-aos="fade-up" class="text-white">Elevate Your Safety Standards: Choose Excellence</h4>
                        <a data-aos="fade-up" data-aos-delay="200" class="btn-get-started d-none">Request A Quote</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item" style="background-image: url({{ asset('img/hero-carousel/hero-carousel-1.jpg') }})"></div>
        <div class="carousel-item" style="background-image: url({{ asset('img/hero-carousel/hero-carousel-2.jpg') }})"></div>
        <div class="carousel-item active" style="background-image: url({{ asset('img/hero-carousel/hero-carousel-3.jpg') }})"></div>
        <div class="carousel-item" style="background-image: url({{ asset('img/hero-carousel/hero-carousel-4.jpg') }})"></div>
        <div class="carousel-item" style="background-image: url({{ asset('img/hero-carousel/hero-carousel-5.jpg') }})"></div>

        <a class="carousel-control-prev d-none d-md-flex" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next d-none d-md-flex" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>

</section>
