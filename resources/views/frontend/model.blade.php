<style>

.registration-from {
    
    background: #f6f6f8;
    padding: 20px 15px;
}
.material-icons {
    color: #02A8F3;
    font-size: 72px;
}
	
.icon-box {
	color: #fff;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -70px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: #82ce34;
	padding: 15px;
	text-align: center;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}

</style>
@extends("frontend.index")
@section("fontbody")
<div class="container" style="padding-top:50px;">
    <div class="row justify-content-center mt-3">
        <div class="col-lg-4">
            <div class="registration-from">
                <div class="icon-box">
                <span style="font-size:50px;"><i class="fa fa-check"></i></span>
                </div>
                <h4 class="text-center" style="color:nave-blue;">
                    <strong>
                        Registration Successfull !
                    </strong>
                </h4> 
                <h4 class="text-center">Click Pay now Button</h4> 
                <h4 class="text-center">and</h4>
                <h4 class="text-center">Payment Your Course Fee</h4> <br>
                <h4 class="text-center">10000=/</h4><br> <br>
                <!-- <button style="margin:0px auto;"> Pay Now</button> -->                                   
                <div class="row form-group">
                    <div class="col-lg-10">
                        <a href="{{route('pay.create')}}" class="__signupbtn">
                            <span class="text-uppercase">Pay Now</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection