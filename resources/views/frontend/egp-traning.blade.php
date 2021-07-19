
<style>
.traning-desc {
    background: #f6f6f8;
    padding: 20px 15px;
    margin-bottom: 10px;
}
.registration-from {
    background: #f6f6f8;
    padding: 20px 15px;
}
</style>
@extends("frontend.index")
@section("fontbody")
<div class="container">
    <div class="row mt-5">
        <div class="col-lg-12 text-center">
            <h2 style="border-bottom: 3px solid #f6f6f8;">
                <strong style="border-bottom: 3px solid #0f356e;" class="border-bottom-5">Training
                </strong>
            </h2>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-lg-10">
            <div class="registration-from">
                <h4 class="text-center">
                    <strong>
                        Traning Registration Form
                    </strong>
                </h4>
                <form Action="{{route('egpreg.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="name" id="name">
                        @error('name')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="row form-group">
                        <div class="col">
                            <label>Father’s Name</label>
                            <input type="text" class="form-control" placeholder="Father’s Name" name="father_name" id="father_name">
                            @error('father_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label>Mother’s Name</label>
                            <input type="text" class="form-control" placeholder="Mother’s Name" name="mother_name" id="mother_name">
                            @error('mother_name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>                        
                    </div>
                    <div class="row form-group">
                        <div class="col">
                            <label>Organization</label>
                            <input type="text" class="form-control" placeholder="Organization" name="organization" id="organization">
                        </div>
                        <div class="col">
                            <label>Designation</label>
                            <input type="text" class="form-control" placeholder="Designation" name="designation" id="designation">
                            @error('designation')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>                        
                    </div>
                    <div class="row form-group">
                        <div class="col">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="Address" name="address" id="address">
                            @error('address')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="col">
                            <label>Mobile Number</label>
                            <input type="text" class="form-control" placeholder="Mobile Number" name="number" id="number">
                            @error('number')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>                        
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                        @error('email')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                        <strong>Your Training Method</strong>
                        </div>
                        <div class="col-lg-10">
                            <div class="row">
                                <div class="col">
                                    <label for="chackvalue"><strong>Online</strong></label><br>
                                    <input type="checkbox" name="chackvalue" id="chackvalue" value="online"> Our venueZoom/Google Classroom
                                </div>
                                <div class="col">
                                <label for="chackvalue"><strong>Offline</strong></label><br>
                                <input type="checkbox" name="chackvalue" id="chackvalue" value="our_Venue"> Our venue <br>
                                <input type="checkbox" name="chackvalue" id="chackvalue" value="our_Venue"> Your Local venue
                                </div>
                            </div>
                            @error('chackvalue')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror 
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <strong>Course Fee</strong> (5 Days) <strong>10000 BDT</strong>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection