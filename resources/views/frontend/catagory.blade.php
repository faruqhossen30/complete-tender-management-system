@extends("frontend.index")
@section("fontbody")
<div class="row justify-content-center">
    <div class="col-lg-8 mt-3">
        <h4>All tender from catagorys</h4>
        <p>Here is all catagorys tender</p>
        <div class="__category">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="__category_content">
                        <div class="row">
                            @foreach($catagorys as $catagory)
                                <div class="col-lg-6 ">
                                    <ul id="myUL">
                                        <a href="{{route('fontcatagory.show',$catagory->id)}}">
                                            <li  class="__category_item">
                                                {{$catagory->name}}
                                            </li>
                                        </a>
                                    </ul>
                                </div>
                            @endforeach

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
    </div>
</div>
@endsection
