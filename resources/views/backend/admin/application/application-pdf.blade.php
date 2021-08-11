<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Application PDF</title>
    <style>
        .body{
            margin: 0;
            padding: 0;
        }
        .heading{
            line-height: 6px;
            height: 125px;
        }
        .heading-left{
            width: 20%;
            float: left;
        }
        .heading-left img{
            width: 150px;
            height: 150px;
            margin-top: -30px;
        }
        .heading-right{
            width: 80%;
            float: right;
        }
        .cwl-uppercase{
            text-transform: uppercase;
        }
        .cwl-center{
            text-align: center
        }
        .content{
            
        }
        table {
            width: 100%;
            border-spacing: 0;
            border-collapse: collapse;
        }
        td, th {
            padding: 4;
        }
        .table-bordered th, .table-bordered td {
            border: 1px solid #ddd !important;
        }

    </style>
</head>
<body>
    <div class="cwl-center heading">
        <div class="heading-left">
            <img src="{{asset('public/img/cwl50.png')}}" alt="Logo"  >
        </div>
        <div class="heading-right">
            <h1 class="cwl-uppercase ">catalysts wings limited</h1>
            <p><strong>Corporate Office: </strong>Road-43, House-4/A(3rd Floor), Dhanmondi, Dhaka-1205</p>
            <p><strong>Head Office: </strong>58,Karbala Road, Jessore Sadat, Jessore.</p>
            <p><strong>Corporate Office: </strong>+88 02-41060363, <strong>Head Office: </strong>+88 0421-61720</p>
        </div>
    </div>
    <div class="content">
        <table class="table table-bordered">
            <tr>
                <th colspan="4">COMPANY INFORMATION</th>
            </tr>
            <tr>
                <th>Company Name</th>
                <td>{{ $companyName }}</td>
                <th>Company Phone</th>
                <td>{{ $companyPhone }}</td>
            </tr>
            <tr>
                <th>Company Email</th>
                <td>{{ $companyEmail }}</td>
                <th>Company Address</th>
                <td>{{ $companyAddress }}</td>
            </tr>
            <tr>
                <th colspan="4">TENDER INFORMATION</th>
            </tr>
            <tr>
                <th>Number</th>
                <td>{{ $tenderNumber     }}</td>
                <th>Type</th>
                <td>{{ $tenderType }}</td>
            </tr>
            <tr>
                <th>Category</th>
                <td>{{ $tenderCategory  }}</td>
                <th>Country</th>
                <td>{{ $tenderCategory  }}</td>
            </tr>
            <tr>
                <th>Department</th>
                <td>{{ $tenderDepartment }}</td>
                <th>Location</th>
                <td>{{ $tenderLocation }}</td>
            </tr>
            <tr>
                <th>Description</th>
                <td colspan="3">{{ $tenderDescription }}</td>
            </tr>
            <tr>
                <th>Security</th>
                <td>{{ $tenderSecurity }}</td>
                <th>Tender Budget</th>
                <td>{{ $tenderBudget }}</td>
            </tr>
            <tr>
                <th>Last Date</th>
                <td colspan="3">{{ $lastDate }}</td>
                
            </tr>
        </table>
    </div>
</body>
</html>