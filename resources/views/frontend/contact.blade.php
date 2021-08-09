@extends('frontend.layouts.app')
@section('title', 'About Us')
@section('body')
<div class="container-fluid contact-area" style="background:  url('{{asset('public/img/1200.png')}}');">
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2 mt-4 pt-4">
                <div class="card border-light" style="background: transparent">
                    <div class="card-body text-light">
                        <h2 class="pt-4 text-center">Contact Us</h2>
                        <hr class="bg-light">
                        <h4 class="">Catalysts Wings Ltd.</h4>
                        <p> <i class="fa fa-map-marker" aria-hidden="true"></i> Road-43, House-4/A(3rd Floor), Dhanmondi, Dhaka-1205
                        </p>
                        <p> <i class="fa fa-phone-square" aria-hidden="true"></i>+88 02-41060363</p>
                        <p> <i class="fa fa-phone" aria-hidden="true"></i> 01788950905</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> info@catalystswings.com </p>
                        <p><i class="fa fa-globe" aria-hidden="true"></i> https://catalystswings.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
