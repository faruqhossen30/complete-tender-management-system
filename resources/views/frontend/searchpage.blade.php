@extends('frontend.layouts.app')
@section('title', 'Welcome Page')
@section('body')
{{-- Search section start  --}}
    @include('frontend.layouts.search')
{{-- Search section End  --}}
<div class="container pt-3">
    <div class="row">
        {{-- Tender Section Start --}}
        <div class="col-md-8 col-sm-12">

            @if ($tenders)
                @foreach ($tenders as $item)
                    <p>{{$item->description}}</p>
                    <hr>
                @endforeach
            @endif
        </div>
        {{-- Tender Section End --}}

        {{-- Sidebar section Start --}}
        @include('frontend.layouts.sidebar')
        {{-- Sidebar section End --}}

        </div>
    </div>


@endsection
