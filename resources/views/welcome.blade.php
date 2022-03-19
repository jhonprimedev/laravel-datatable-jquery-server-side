<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/dataTables.bootstrap5.min.css') }}">
    <title>Laravel Datatable Jquery Server Side ✅📊</title>
</head>

<body>
    <div class="container-xl table-responsive mt-5">
        <h1 class="text-center">Laravel Datatable Jquery Server Side ✅📊</h1>
        <table class="table table-striped" style="width:100%" id="myTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Cell Phone</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <script src="{{ asset('js/libs/jquery.min.js') }}" ></script>
    <script src="{{ asset('js/libs/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/libs/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('js/src/datatable.js') }}"></script>
</body>

</html>
