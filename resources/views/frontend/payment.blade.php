<style>
.modal-header {
  padding: .5rem .5rem;
  border-bottom: none;
}
.bd-placeholder-img {
  font-size: 1.125rem;
  text-anchor: middle;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

@media (min-width: 768px) {
.bd-placeholder-img-lg {
  font-size: 3.5rem;
}
}
</style>
@extends("frontend.index")
@section("fontbody")
  <!-- end header -->
  <div class="container">
    <div class="py-5 text-center" style="color:#164438;">
        <h2><strong>Catalysts Wings Every Payment is Here</strong></h2>
        <p class="lead">Catalysts wing is Big an trusted Company in Tender publishing</p>
    </div>

    <div class="row container">
      <div class="col-md-12 order-md-1">
            <h4 class="mb-3" style="background-color:#164438;color:white;height:40px;padding:7px 0px 0px 7px">Billing address</h4>
          <form Action="{{route('pay.store')}}" method="POST" class="needs-validation" novalidate>
              @csrf
              <div class="row">
                <div class="col-6">
                    <div class="mb-3">
                        <label for="customer_name"><b>Customer name</b></label>
                        <input type="text" name="customer_name" class="form-control" id="customer_name" required placeholder="Enter customer_name">
                        <div class="invalid-feedback">
                            Valid customer name is required.
                        </div>
                    </div>
                     <!-- </div> -->

                    <div class="mb-3">
                        <label for="customer_mobile"><b>Customer Phone</b> </label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <select name="" id="">
                                    <option value="">+88</option>
                                    <option value="">+86</option>
                                    <option value="">+91</option>
                                    <option value="">+55</option>
                                    <option value="">+54</option>
                                  </select>
                                </span>
                            </div>
                            <input type="text" name="customer_mobile" class="form-control" id="customer_mobile" placeholder="Mobile number" required>
                            <div class="invalid-feedback" style="width: 100%;">
                                Your Mobile number is required.
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="customer_email"><b>Customer_Email</b> <span class="text-muted"></span></label>
                        <input type="email" name="customer_email" class="form-control" id="customer_email"
                              placeholder="Email address">
                        <div class="invalid-feedback">
                            Please enter a valid email address for shipping updates.
                        </div>
                    </div>
                </div>
                <div class="col-6">
                <div class="mb-3">
                    <label for="address"><b>Customer_address</b></label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="Enter address" required>
                    <div class="invalid-feedback">
                        Please enter your shipping address.
                    </div>
                </div>

                <div class="mb-3">
                  <div class="row">
                    <div class="col">
                      <label for="amount"><b>Enter Pay Amount</b></label>
                      <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter Amount" required>
                    </div>
                    <div class="col">
                      <label for="txtCurrency"><b>Currency</b><span class="text-muted"></label><br>
                        <select class="form-control" name="txtcurrency" id="txtcurrency">
                          <option value="BDT">BDT</option>
                          <option value="USD">USD</option>
                        </select>
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                    <label for="ref_id"><b>Reference ID</b> <b> (write deferent word as a reference for each payment.)</b></label>
                    <input type="text" class="form-control" id="ref_id" name="ref_id" placeholder="Ref_id Must be Different" required>
                </div>                
                </div>
                <hr class="mb-4">
                <button class="btn btn-primary btn-lg btn-block" endpoint="#"> Check Out
                </button>
                <!-- token="if you have any token validation"
                        postdata="your javascript arrays or objects which requires in backend"
                        order="If you already have the transaction generated for current order" -->
              </div>
          </form>
      </div>
    </div>
  </div>
@endsection  