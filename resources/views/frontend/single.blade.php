@extends('frontend.layouts.app')
@section('body')
    <div class="container">
        <div class="col-md-12">
            <div>
                <!-- Start WOWSlider.com BODY section -->
                <div class="card-img-actions mb-3">
                    <img class="card-img img-fluid my-2" src="{{ asset('/public/img/LogoPresentation.jpg') }}" alt="">
                    <div class="card-img-actions-overlay card-img ">
                        <a href="blog_single.html"
                            class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
                            <i class="icon-link"></i>
                        </a>
                    </div>
                </div>

                <div class="col">
                    <h5 class="font-weight-semibold mb-1">
                        <a href="#" class="text-default">Blog post layout #3 with image</a>
                    </h5>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem sunt enim itaque ipsam velit,
                        laudantium illum. Atque velit placeat quia quae tempore, fuga esse facilis! Dolores recusandae aut
                        nostrum! Dignissimos officiis temporibus qui ea laboriosam praesentium fugit asperiores nisi
                        repellat ex perspiciatis quibusdam, aliquid eius rem dolore excepturi porro adipisci enim quaerat?
                        Nam ea hic assumenda unde aliquid, commodi qui nesciunt eveniet dignissimos sit maiores rerum at
                        sint ipsa repudiandae quae amet cumque dolorum, modi labore eos natus fuga. At quia commodi dolor
                        magni ratione explicabo tempore? Molestiae ad aperiam quod, aspernatur recusandae animi, aliquid
                        unde incidunt odit voluptas veritatis!
                    </p>
                </div>
                <div class="container" style="display: flex">
                    <div class="row">
                        <div class="col">

                                <iframe width="100%" height="560" src="https://www.youtube.com/embed/LfI8_1LwD3Y"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>

                        </div>
                        <div class="card ml-2 my-2">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58690.22769302754!2d89.15852990207685!3d23.165117979409718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff108d87ea6d65%3A0x627d034ef93261cf!2z4Kav4Ka24KeL4Kaw!5e0!3m2!1sbn!2sbd!4v1637491103591!5m2!1sbn!2sbd"
                                width="1060" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
