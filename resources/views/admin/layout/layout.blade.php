<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>@yield('title')</title>
   <!-- FONT AWESOME--->
   <link rel="stylesheet" href="{{asset("plugin/fontawesome-free/css/all.min.css")}}">
   <!-- BOOTSTRAP--->
   <link rel="stylesheet" href="{{asset("plugin/bootstrap/css/bootstrap.min.css")}}">
   <link rel="stylesheet" href="{{asset("css1/orionicon.css")}}">
   <!-- DATATABLE--->
   <link rel="stylesheet" href="{{asset("plugin/DataTables/datatable-source/css/dataTables.bootstrap4.css")}}">
   <!-- GOOGLE FONT--->
   <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;400;700&display=swap" rel="stylesheet">
   <!-- OWN CSS--->
   <link rel="stylesheet" href="{{asset("css1/custom.css")}}">
   <link rel="stylesheet" href="{{asset("css1/style.default.css")}}">
   <!-- lightSlider -->
   <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
   <link rel="stylesheet" href="{{asset("css1/lightslider.css")}}">

</head>

<body>

   <!-- NAV BAR --->
   @include('admin.layout.nav-bar')
   <!-- SIDE BAR --->
   @include('admin.layout.side-bar')
   <!-- CONTENT WRAPPER CONTAINS PAGE --->

   @yield('content')

   <!-- FOOTER --->
   {{-- @include('admin.layout.footer') --}}


   <!-- JQUERY --->
   <script src="{{asset("plugin/jquery/jquery.min.js")}}"></script>
   <!-- BS4 --->
   <script src="{{asset("plugin/bootstrap/js/bootstrap.min.js")}}"></script>
   <!-- Popper -->
   <script src="{{asset("plugin/popper.js/umd/popper.min.js")}}"></script>
   <!-- TINY HUB JS -->
   <script src="{{asset("js/front.js")}}"></script>
   <!-- DATATABLE --->
   <script src="{{asset("plugin/DataTables/datatable-source/js/jquery.dataTables.js")}}"></script>
   <script src="{{asset("plugin/DataTables/datatable-source/js/dataTables.bootstrap4.js")}}"></script>
   <!-- light Slider -->
   <script src="{{asset("js/lightslider.js")}}"></script>
   <!-- CKediotr -->
   <script src="{{asset("editor/ckeditor/ckeditor.js")}}"></script>
   @yield('script-section')
   <script>
      $(function() {
         $('#dbtable').DataTable({
            "paging": false,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,

         });
      });
   </script>
</body>

</html>