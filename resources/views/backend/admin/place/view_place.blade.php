@extends("backend.admin.app")
@section('body')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Place Informations</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('homepage') }}">Home</a></li>
                        <li class="breadcrumb-item active">Clients</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <div class="col-12" style="margin:0 auto;">
        <div class="card card-secondary">
            {{-- <div class="card-header">
                <h3 class="card-title">Client Management Table</h3> <br>

            </div> --}}
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                @if (session('success'))
                    <div class="alert alert-warning alert-dismissible fade show m-3" role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="col-10 offset-1">
                    <div class="from-control">

                        <section id="main">

                            <section id="content" class="page-content">


                                <div class="blog-single" itemscope="itemscope" itemtype="http://schema.org/Blog">
                                    <div class="blog-single-inner" itemscope="itemscope"
                                        itemtype="http://schema.org/BlogPosting" itemprop="blogPost">

                                        <h1 class="entry-title" itemprop="headline">{{$place->title}}</h1>

                                        <ul class="entry-info mr-2" style="display: flex; list-style:none  ">
                                            <li class="post-author mr-2 ">
                                                <span itemprop="author">
                                             {{$place->address}}
                                                </span>
                                            </li>
                                            |
                                            <li class="post-date ml-2">
                                                <span itemprop="datePublished">
                                                   {{$place->created_at}}
                                                </span>
                                            </li>
                                        </ul>

                                        <div class="entry-thumbnail">
                                            <div class="img-placeholder blog_post_large_default loaded">
                                                <img class="img-loader lazy-load loaded"
                                                    data-src="https://akira-elementor.axonvip.com/modules/smartblog/images/7-large_default.jpg"
                                                    src="{{asset('public/uploads/place/'.$place->image)}}"
                                                    alt="Vestibulum at orci aliquam" title="Vestibulum at orci aliquam"
                                                    width="870" height="534">
                                            </div>
                                        </div>
                                        {{-- Content --}}
                                        {!! $place->content !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="container" style="display: flex">
                                    <div class="row">
                                        <div class="col">

                                                <iframe width="100%" height="560" src="{{$place->video_link}}"
                                                    title="YouTube video player" frameborder="0"
                                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                                    allowfullscreen></iframe>

                                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/POJOglgxRBI?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                        </div>
                                        <div class="card ml-2 my-2">
                                            <iframe
                                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58690.22769302754!2d89.15852990207685!3d23.165117979409718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ff108d87ea6d65%3A0x627d034ef93261cf!2z4Kav4Ka24KeL4Kaw!5e0!3m2!1sbn!2sbd!4v1637491103591!5m2!1sbn!2sbd"
                                                width="1060" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                        </div>
                                    </div>


                                </div>

                            </section>


                            <footer class="page-footer">

                                <!-- Footer content -->

                            </footer>

                        </section>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('css')
    <link rel="stylesheet" href="{{ asset('public/css/jquery.dataTables.min.css') }}">
    <style>
        .dataTables_length {
            padding: 10px;
        }

        .dataTables_filter {
            padding: 10px;
        }

        .dataTables_info {
            margin-left: 10px;
        }

    </style>
@endpush
@push('js')
    <script src="{{ asset('public/js/jquery.dataTables.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
@endpush
