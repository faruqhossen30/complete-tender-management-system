{{-- Search section start  --}}
<div class="container-fluid bg-light m-0">
    <div class="container pt-5 pb-5">
        <form action="{{route('search')}}" method="GET" class="d-flex justify-content-center pb-3 pt-3" >
            @csrf
            <ul class="nav">
                <li>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-search" aria-hidden="true"></i></div>
                        </div>
                        <input name="search" type="text" class="form-control mr-2" id="inlineFormInputGroup" placeholder="Search Tender">
                    </div>
                </li>
                <li>
                    <button type="submit" class="btn btn-secondary">Search <i class="fa fa-search"></i></button>
                </li>
            </ul>
        </form>
        {{-- <div class="d-flex justify-content-center pb-5">
            <select class="custom-select">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            <select class="custom-select">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            <select class="custom-select">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
        </div> --}}
    </div>
</div>
{{-- Search section End  --}}
