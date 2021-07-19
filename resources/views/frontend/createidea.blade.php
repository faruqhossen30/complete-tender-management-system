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
                <strong style="border-bottom: 3px solid #0f356e;" class="border-bottom-5">Drop Your Idea
                </strong>
            
            </h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-7 text-center">
            <small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Praesentium aperiam nostrume.</small>

        </div>
    </div>
    <div class="row justify-content-center mt-3">  
        <div class="col-lg-7">
            <div class="registration-from">
                
                <form Action="{{route('dropidea.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" name="txtname" id="txtname">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" placeholder="Mobile Number" name="txtnum" id="txtnum">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" class="form-control" placeholder="Email" name="txtemail" id="txtemail">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="Address" name="txtaddress" id="txtaddress">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Your Idea</label>
                                <textarea class="form-control" placeholder="Designation" name="txtidea" id="txtidea"></textarea>
                            </div>
                        </div>
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