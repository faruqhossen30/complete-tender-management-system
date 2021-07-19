@extends('userdashboard.home')
@section('cliendbody')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>create new tender</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">User Profile</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="col-sm-12">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">New Tender create form</h3>
        </div>

        <form action="{{route('tender.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            @if(session('create-message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('create-message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="form-group">
                <label for="registration_certificate">Company Registration Document/Incorporation</label>
                <input class="form-control form-control-sm @error('registration_certificate') is-invalid @enderror" type="file" name="registration_certificate" id="registration_certificate">
                <div class="text-danger">
                    @error('registration_certificate')
                    <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="trade_license">Trade License</label>
                <input class="form-control form-control-sm @error('trade_license') is-invalid @enderror" type="file" name="trade_license" id="trade_license">
                <div class="text-danger">
                    @error('trade_license')
                    <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="tin_certificate">TIN Certificate</label>
                <input class="form-control form-control-sm @error('tin_certificate') is-invalid @enderror" type="file" name="tin_certificate" id="tin_certificate">
                <div class="text-danger">
                    @error('tin_certificate')
                    <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="vat_certificate">VAT Certificate</label>
                <input class="form-control form-control-sm @error('vat_certificate') is-invalid @enderror" type="file" name="vat_certificate" id="vat_certificate">
                <div class="text-danger">
                    @error('vat_certificate')
                    <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="authorized_letter">Authorized Letter</label>
                <input class="form-control form-control-sm @error('authorized_letter') is-invalid @enderror" type="file" name="authorized_letter" id="authorized_letter">
                <div class="text-danger">
                    @error('authorized_letter')
                    <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="cgp_registration">Authorized NID/Passport</label>
                <input class="form-control form-control-sm @error('cgp_registration') is-invalid @enderror" type="file" name="cgp_registration" id="cgp_registration">
                <div class="text-danger">
                    @error('cgp_registration')
                    <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="admin_picture">Authorized Picture</label>
                <input class="form-control form-control-sm @error('admin_picture') is-invalid @enderror" type="file" name="admin_picture" id="admin_picture">
                <div class="text-danger">
                    @error('admin_picture')
                    <span>{{ $message }}</span>
                    @enderror
                </div>
            </div>
        </div>
        <div class="card-footer bg-primary">
            <button type="submit" class="btn btn-sm btn-default btn-block">SUBMIT</button>
        </div>
    </form>

    </div>
</div>
@endsection
