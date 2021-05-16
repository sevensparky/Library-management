@include('Common::layouts.head')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  @include('sweetalert::alert')

  @include('Common::layouts.header')

  @include('Common::layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  @include('Common::layouts.breadcrumb')
   

   <section class="content">
     @yield('content')
   </section>
  </div>

@include('Common::layouts.footer')

