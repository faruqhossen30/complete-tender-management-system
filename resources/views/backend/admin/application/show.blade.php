@extends("backend.admin.app")
@section("body")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tender Application Details</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                    <li class="breadcrumb-item active">Tender Applications</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="row">
    <div class="col-md-11">
        <table class="table table-bordered m-4">
            <tr>
                <th colspan="4" class="text-center">USER INFORMATION</th>
            </tr>
            <tr>
                <th>Name:</th>
                <td>{{ $application->userInfo->name }}</td>
                <th>Email:</th>
                <td>{{ $application->userInfo->email}}</td>
            </tr>
            <tr>
                <th>Mobile:</th>
                <td>{{ $application->userInfo->mobile }}</td>
                <th>Address:</th>
                <td>{{ $application->userInfo->address }}</td>
            </tr>
            <tr>
                <th>Vendor:</th>
                <td>{{ $application->userInfo->vendor }}</td>
                <th>Country:</th>
                <td>{{ $application->userInfo->user_country }}</td>
            </tr>
            <tr>
                <th colspan="4" class="text-center">TENDER INFORMATION</th>
            </tr>
            <tr>
                <th>Tender Id:</th>
                <td>{{ $application->tenderInfo->tenderID }}</td>
                <th>Tender Budget:</th>
                <td>{{ $application->tenderInfo->tenderBudget }}</td>
            </tr>
            <tr>
                <th>Tender Description</th>
                <td>{{ $application->tenderInfo->description }}</td>
                <th>Security:</th>
                <td>{{ $application->tenderInfo->tenderSecurity }}</td>
            </tr>
            <tr>
                <th>Tender Category:</th>
                <td>{{ $application->tenderInfo->tenderCategory->name }}</td>
                <th>Department:</th>
                <td>{{ $application->tenderInfo->tenderDepartment->name }}</td>
            </tr>
            <tr>
                <th>Country:</th>
                <td>{{ $application->tenderInfo->tenderCountry->name }}</td>
                <th>Location:</th>
                <td>{{ $application->tenderInfo->tenderLocation->name }}</td>
            </tr>
            <tr>
                <th>Last Date:</th>
                <td>{{ $application->tenderInfo->lastDate}}</td>
                <th></th>
                <td></td>
            </tr>

        </table>
    </div>
</div>
@endsection
