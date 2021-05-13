<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
@include('admin.partial.style')


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        
@include('admin.partial.header')





@yield('dashcontent')


@include('admin.partial.footer')

@include('admin.partial.modal')

@include('admin.partial.scripts')
<!-- Footer -->


</body>

</html>