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
            <h3 class="card-title">Upload new tender</h3>
        </div>
        {{-- <form Action="{{route('tender.store')}}" method="POST"> --}}
        <form action="{{route('tender.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="row">

                    <div class="col-4 form-group">
                        <label for="tenderid">Tender ID</label>
                        <input type="text" class="form-control" name="tenderID" id="tenderid" placeholder="Enter Tender id">
                    </div>

                    <div class="col-4 form-group">
                        <label for="selectdeparment">Tender Type</label>
                        <select name="type" class="form-control" id="selectdeparment" style="width:100%;height:38px;">

                            <option value="tendrtype1">Tender Type 1</option>
                            <option value="tendrtype2">Tender Type 2</option>
                            <option value="tendrtype3">Tender Type 3</option>
                            <option value="tendrtype4">Tender Type 4</option>

                        </select>
                    </div>

                    <div class="col-4 form-group">
                        <label for="txtlocation">Category</label>
                        <select name="category" class="form-control" id="txtlocation" style="width:100%;height:38px;">

                            <option value="category1">Catagory 1</option>
                            <option value="category2">Catagory 2</option>
                            <option value="category3">Catagory 3</option>
                            <option value="category4">Catagory 4</option>

                        </select>
                    </div>
                </div>

                <div class="row">

                    <div class="col-4 form-group">
                        <label for="departmentID">Department</label>
                        <input type="text" class="form-control" name="department" id="departmentID" placeholder="Enter Tender id">
                    </div>

                    <div class="col-4 form-group">
                        <label for="countryID">Country</label>
                        <select name="country" class="form-control" id="countryID" style="width:100%;height:38px;">
                            <option value="Option">Bangladesh</option>
                        </select>
                    </div>

                    <div class="col-4 form-group">
                        <label for="locationID">Location</label>
                        <select name="location" class="form-control" id="countryID" style="width:100%;height:38px;">
                            <option value="Option">Bangladesh</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label for="descriptionID">Description</label><br>
                    <textarea name="description" class="form-control" id="descriptionID" placeholder="Write tender description" style="width:100%; height:100px;"></textarea>
                </div>
                <div class="row">
                    <div class="col form-group">
                        <label for="tenderSecurityID">Tender security</label>
                        <input type="text" class="form-control" name="tenderSecurity" id="tenderSecurityID" placeholder="Enter Price">
                    </div>
                    <div class="col form-group">
                        <label for="budgetID">Tender budget</label>
                        <input type="text" class="form-control" name="tenderBudget" id="budgetID" placeholder="Enter budget price">
                    </div>
                    <div class="col form-group">
                        <label for="txtdate">Last Date ( Deadline )</label>
                        <input type="datetime-local" class="form-control" name="lastDate" id="txtdate" placeholder="10:04:2020 , 12:00 am">
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success">Upload Tender</button>
                <!-- <button type="submit" class="btn btn-default float-right">Cancel</button> -->
            </div>
        </form>
    </div>
</div>


@endsection
