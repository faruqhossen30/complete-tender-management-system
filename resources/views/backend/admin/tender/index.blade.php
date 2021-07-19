@extends("home")
@section("body")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>create user</h1>
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
<div class="col-10" style="margin:0 auto;">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">Tender Management table</h3>

        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
            </div>
        </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Registration Certificate</th>
                <th>Trade License</th>
                <th>TIN Certificate</th>
                <th>VAT Certificate</th>
                <th>Authorized Letter</th>
                <th>CGP Registration</th>
                <th>Admin Picture</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>1.pdf</td>
                <td>2.pdf</td>
                <td>3.pdf</td>
                <td>4.pdf</td>
                <td>5.pdf</td>
                <td>6.pdf</td>
                <td>7.pdf</td>                
                <td> 
                <div class="clearfix">
                        <a style="float:left;margin-right:5px" href="#"class="btn btn-success"> Details </a>
                        <a style="float:left; margin-right:5px" href="#" class="btn btn-success"> edit </a>
                        <form style="float:left; margin-right:5px;" onsubmit="return confirm('Are you sure?')" action="#" method="POST" class="btn btn-danger btn-sm rounded-5" type="button"> 
                            <!-- @csrf 
                            @method("delete")                       -->
                        <input type="submit" name="btnsubmit" value="delete">
                        </form>
                    </div>


                
                </td>
            </tr>
            
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection


