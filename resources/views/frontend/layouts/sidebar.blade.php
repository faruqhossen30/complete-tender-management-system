{{-- Sidebar section Sart --}}
@php
    $alltender = DB::table('tenders')->get();
    $nationaltender = DB::table('tenders')->where('country_id', 4)->get();
    $international = DB::table('tenders')->where('country_id', '!=', 4)->get();
@endphp


<div class="col-md-4 d-sm-none d-md-block">
    <ul class="list-group mb-3">

        <li class="list-group-item d-flex justify-content-between align-items-center">
            <h4 class="text-secondary">Quick Links</h4>
        </li>

        @guest
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="{{url('login')}}" class="text-dark">
                <span><i class="fa fa-sign-in" aria-hidden="true"></i></span> Login Now
            </a>
            {{-- <span class="badge badge-primary badge-pill">2</span> --}}
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="{{url('register')}}" class="text-dark">
                <span><i class="fa fa-user-plus" aria-hidden="true"></i></span> Register Now
            </a>
            {{-- <span class="badge badge-primary badge-pill">2</span> --}}
        </li>
        @endguest
        @auth
            @if (auth()->user()->is_admin == 1)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{url('/admin')}}" class="text-dark">
                    <span><i class="fa fa-globe" aria-hidden="true"></i></span> Admin
                </a>
                {{-- <span class="badge badge-primary badge-pill">2</span> --}}
            </li>
            @elseif (auth()->user()->is_admin == 0)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <a href="{{url('/user')}}" class="text-dark">
                    <span><i class="fa fa-globe" aria-hidden="true"></i></span> My Account
                </a>
                {{-- <span class="badge badge-primary badge-pill">2</span> --}}
            </li>

            @endif
        @endauth

        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="#" class="text-dark">
                <span><i class="fa fa-check-square" aria-hidden="true"></i></span> eGP Registration
            </a>
            {{-- <span class="badge badge-primary badge-pill">2</span> --}}
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="#" class="text-dark">
                <span><i class="fa fa-graduation-cap" aria-hidden="true"></i></span> eGP Trining
            </a>
            {{-- <span class="badge badge-primary badge-pill">2</span> --}}
        </li>


    </ul>
    <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <h4 class="text-secondary">Tender Catagories</h4>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="{{route('tender.all')}}" class="text-dark">
                <span><i class="fa fa-tasks" aria-hidden="true"></i></span> All Tender
            </a>

            <span class="badge badge-primary badge-pill cwl-active">{{$alltender->count()}}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="#" class="text-dark">
                <span><i class="fa fa-globe" aria-hidden="true"></i></span> Private Tender
            </a>
            <span class="badge badge-primary badge-pill cwl-active">2</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="{{route('tender.national')}}" class="text-dark">
                <span><i class="fa fa-map-marker" aria-hidden="true"></i></span> National Tender
            </a>
            <span class="badge badge-primary badge-pill cwl-active">{{$nationaltender->count()}}</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="{{route('tender.international')}}" class="text-dark">
                <span><i class="fa fa-plane" aria-hidden="true"></i></span> Internation Tender
            </a>
            <span class="badge badge-primary badge-pill cwl-active">{{$international->count()}}</span>
        </li>


    </ul>
    <ul class="list-group">
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <h4 class="text-secondary">Archive Tenders</h4>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="#" class="text-dark">
                <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span> January 2021
            </a>
            <span class="badge badge-primary badge-pill cwl-active">2</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="#" class="text-dark">
                <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span> February 2021
            </a>
            <span class="badge badge-primary badge-pill cwl-active">2</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="#" class="text-dark">
                <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span> March 2021
            </a>
            <span class="badge badge-primary badge-pill cwl-active">2</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="#" class="text-dark">
                <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span> April 2021
            </a>
            <span class="badge badge-primary badge-pill cwl-active">2</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="#" class="text-dark">
                <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span> May 2021
            </a>
            <span class="badge badge-primary badge-pill cwl-active">2</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="#" class="text-dark">
                <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span> June 2021
            </a>
            <span class="badge badge-primary badge-pill cwl-active">2</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="#" class="text-dark">
                <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span> July 2021
            </a>
            <span class="badge badge-primary badge-pill cwl-active">2</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <a href="#" class="text-dark">
                <span><i class="fa fa-calendar-check-o" aria-hidden="true"></i></span> August 2021
            </a>
            <span class="badge badge-primary badge-pill cwl-active">2</span>
        </li>



    </ul>
</div>
{{-- Sidebar section End --}}
