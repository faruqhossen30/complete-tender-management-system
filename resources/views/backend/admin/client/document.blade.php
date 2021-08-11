@extends("backend.admin.app")
@section('body')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- document Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-document">
                            <div class="text-center">
                                <img class="document-user-img img-fluid img-circle"
                                    src="{{ $document ? asset($document->logo) : asset('public/img/user.png') }}" alt="Company Logo" style="width: 150px; height:150px">
                            </div>

                            <h3 class="document-username text-center">{{ $user->name }}</h3>

                            <p class="text-muted text-center">{{ $user->address ?? 'No Address found' }}</p>
                        </div>

                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Email</strong>
                            <p class="text-muted">
                                {{ $user->email }}
                            </p>
                            <hr>

                            <strong><i class="fas fa-phone-alt mr-1"></i> Mobile</strong>
                            <p class="text-muted">{{ $user->mobile ?? 'Mobile No not found !' }} </p>
                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Country</strong>
                            <p class="text-muted">{{ $user->user_country ?? 'No Country found!' }} </p>
                            <hr>

                            <strong><i class="fas fa-pencil-alt mr-1"></i> Client Type</strong>

                            @if ($user->vendor)
                                <p class="text-muted">
                                    {{ $user->vendor }}
                                </p>
                            @endif


                        </div>





                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2 bg-primary">
                            <h5>Documents</h5>
                        </div><!-- /.card-header -->
                        <div class="card-body">




                            @if ($document)
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card">
                                            <img style="height: 250px;" src="{{ asset($document->trade_licence_img) }}"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">Trade Licence No: {{ $document->trade_licence_no }}
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card">
                                            <img style="height: 250px;" src="{{ asset($document->pin_img) }}"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">PIN No: {{ $document->pin_no }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="card">
                                            <img style="height: 250px;" src="{{ asset($document->bin_img) }}"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">BIN No: {{ $document->bin_no }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="card">
                                            <img style="height: 250px;" src="{{ asset($document->nid_img) }}"
                                                class="card-img-top" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title">NID No: {{ $document->nid_no }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <h3>User Profile is not completed . </h3>
                                <p>Document not fund.</p>

                            @endif




                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
