{{-- @extends('master') --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}} ">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="mt-5">


                <h3>Select Dates To Get Astroid By Date</h3>

                <br><br>

                <form method="post" action="/getapidata">
                    {{-- <form action="{{route('getapidata')}}" method="post"> --}}
                    {{ csrf_field() }}

                    FromDate <input type="text" class=" ml-3" name="fromDate" id="fromDate">
                    Todate <input type="text" class=" ml-3" name="toDate" id="toDate">
                    {{-- <input type="button" value="filter" name="filter" id="filter" class="ml-3 btn btn-info" /> --}}
                    <input type="submit" value="Submit" name="filter" id="filter">
                </form>
            </div>
        </div>





    </div>
    <script src="{{asset('js/app.js')}} "></script>
    <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script>
        $(document).ready(function() {
                $.datepicker.setDefaults({
                    dateFormat:'yy-mm-dd',
                    changeMonth: true,
                      changeYear: true,
                      yearRange: "2012:2020"
                });
                $("#fromDate").datepicker();
                $("#toDate").datepicker();
                $("#filter").click(function(){
                var fromDate = $('#fromDate').val();
                var toDate = $('#toDate').val();
                if(fromDate == '' || toDate == ''){                  
                    alert("Please Select Date");
                    return false;
                }
            });
        });
    </script>
</body>

</html>