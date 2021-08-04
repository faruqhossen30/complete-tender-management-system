@extends("backend.admin.app")
@section("body")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Upload Tender</h1>
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
    <div class="card card-secondary">
        <div class="card-header">
            <h3 class="card-title">Edit new tender</h3>
        </div>
        {{-- <form Action="{{route('tender.store')}}" method="POST"> --}}
        {{-- <form action="{{url('tender/'.$tender->id)}}" method="POST"> --}}
        <form action="{{url('admin/tender/'.$tender->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="row">

                    <div class="col-4 form-group">
                        <label for="tenderid">Tender ID</label>
                    <input type="text" value="{{$tender->tenderID}}" class="form-control" name="tenderID" id="tenderid" placeholder="Enter Tender id">
                    </div>

                    <div class="col-4 form-group">
                        <label for="selectdeparment">Tender Type</label>
                        <select name="type" class="form-control" id="selectdeparment" style="width:100%;height:38px;">
                            <option value="{{$tender->tender_type_id}}">{{$tender->tenderType->name}}</option>
                            @foreach ($types as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="col-4 form-group">
                        <label for="txtlocation">Category</label>
                        <select name="category" class="form-control" id="txtlocation" style="width:100%;height:38px;">
                            <option value="{{$tender->category_id}}">{{$tender->tenderCategory->name}}</option>
                            @foreach ($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="row">

                    <div class="col-4 form-group">
                        <label for="departmentID">Department</label>
                        <select name="department" class="form-control" id="txtdepartment" style="width:100%;height:38px;">
                            <option value="{{$tender->department_id}}">{{$tender->tenderDepartment->name}}</option>
                            @foreach ($departments as $department)
                                <option value="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-4 form-group">
                        <label for="countryID">Country</label>
                        <select name="country" class="form-control" id="countryID" style="width:100%;height:38px;">
                            <option value="{{$tender->country_id ?? "N/A"}}">{{$tender->tenderCountry->name ?? "N/A"}}</option>
                            @foreach ($countries as $country)
                                <option value="{{$country->id}}">{{$country->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-4 form-group">
                        <label for="locationID">Location</label>
                        <select name="location" class="form-control" id="countryID" style="width:100%;height:38px;">
                            <option value="{{$tender->location_id ?? "N/A"}}">{{$tender->tenderLocation->name ?? "N/A"}}</option>
                            @foreach ($locations as $location)
                                <option value="{{$location->id}}">{{$location->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="descriptionID">Description</label><br>
                    <textarea name="description" class="form-control" id="descriptionID" placeholder="Write tender description" style="width:100%; height:100px;">{{$tender->description}}</textarea>
                </div>
                <div class="row">
                    <div class="col form-group">
                        <label for="tenderSecurityID">Tender security</label>
                        <input type="text" value="{{$tender->tenderSecurity}}" class="form-control" name="tenderSecurity" id="tenderSecurityID" placeholder="Enter Price">
                    </div>
                    <div class="col form-group">
                        <label for="budgetID">Tender budget</label>
                        <input type="text" value="{{$tender->tenderBudget}}" class="form-control" name="tenderBudget" id="budgetID" placeholder="Enter budget price">
                    </div>
                    <div class="col form-group">
                        <label for="txtdate">Last Date ( Deadline )</label>
                        <input type="datetime-local" value="{{$tender->lastDate}}" class="form-control" name="lastDate" id="txtdate" placeholder="10:04:2020 , 12:00 am">
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Update Tender</button>
                <!-- <button type="submit" class="btn btn-default float-right">Cancel</button> -->
            </div>
        </form>
    </div>
</div>


@endsection
