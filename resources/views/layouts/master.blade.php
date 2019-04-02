@include('layouts.parts.header')
@include('layouts.parts.nav')
@if (!Auth::guest())
  @include('layouts.parts.sidebar')
@endif
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      @section('page-header')  
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      @show
      <ol class="breadcrumb">
      @section('breadcrumb')  
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
      @show
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

        @yield('content')

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@if (!Auth::guest())
@include('layouts.parts.sidebar-control')
@endif
@include('layouts.parts.content-footer')
@include('layouts.parts.footer')