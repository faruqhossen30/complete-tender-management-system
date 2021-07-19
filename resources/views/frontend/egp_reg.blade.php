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
            <!-- <div class="col-lg-7">
                <div class="traning-desc">
                    <p>১। 
                    </p>
                    <p>২। ইজিপিতে যে ভাবে নিবন্ধন করা হয়।

                    </p>
                    <p>৩। 
                    </p>
                    <p>৪। 
                    </p>
                    <p>৫। 
                    </p>
                    <p>৮। 

                    </p>
                    <p>৯।
                    </p>
                </div>
            </div> -->
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
                            <input type="text" class="form-control" placeholder="Name" name="txtname" id="txtname">
                            @error('txtname')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="row form-group">
                            <div class="col">
                                <label>Father’s Name</label>
                                <input type="text" class="form-control" placeholder="Father’s Name" name="txtfaname" id="txtfaname">
                            </div>
                            <div class="col">
                                <label>Mother’s Name</label>
                                <input type="text" class="form-control" placeholder="Mother’s Name" name="txtmaname" id="txtmaname">
                            </div>                        
                        </div>
                        <div class="row form-group">
                            <div class="col">
                                <label>Organization</label>
                                <input type="text" class="form-control" placeholder="Organization" name="txtorganization" id="txtorganization">
                            </div>
                            <div class="col">
                                <label>Designation</label>
                                <input type="text" class="form-control" placeholder="Designation" name="txtdesignation" id="txtdesignation">
                            </div>                        
                        </div>
                        <div class="row form-group">
                            <div class="col">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="Address" name="txtaddress" id="txtaddress">
                            </div>
                            <div class="col">
                                <label>Mobile Number</label>
                                <input type="text" class="form-control" placeholder="Mobile Number" name="txtnum" id="txtnum">
                            </div>                        
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="txtemail" id="txtemail">
                        </div>

                        <div class="row">
                            <div class="col-2">
                            <strong>Your Training Method</strong>
                            </div>
                            <div class="col-10">
                                <div class="row">
                                    <div class="col">
                                        <label for=""><strong>Online</strong></label><br>
                                        <p>Zoom/Google Classroom</p>
                                    </div>
                                    <div class="col">
                                    <label for=""><strong>Offline</strong></label><br>
                                    <p>Our Venue</p>
                                    </div>
                                </div>
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
