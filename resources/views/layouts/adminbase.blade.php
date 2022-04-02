<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="{{asset('assets')}}/admin/css/style.css">
    <link rel="shortcut icon" href="{{asset('assets')}}/admin/images/favicon.png"/>
</head>
<body>
@include('admin.header')
@include('admin.sidebar')
@show
@yield('content')
@include('admin.footer')
@yield('foot')
<!-- partial -->
</div>
</div>
</div>
<script src="{{asset('assets')}}/admin/vendors/js/vendor.bundle.base.js"></script>
<script src="{{asset('assets')}}/admin/js/off-canvas.js"></script>
<script src="{{asset('assets')}}/admin/js/hoverable-collapse.js"></script>
<script src="{{asset('assets')}}/admin/js/misc.js"></script>
<script src="{{asset('assets')}}/admin/js/settings.js"></script>
<script src="{{asset('assets')}}/admin/js/todolist.js"></script>
</body>
</html>
