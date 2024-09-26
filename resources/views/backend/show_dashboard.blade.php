@extends('layoutbackend.main_content')

@section('page_content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Dashboard
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb breadcrumb-col-pink">
        <li><a href="#"><i class="material-icons">home</i> Dashboard</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content-header">
      <div class="container-fluid">

        <div class="row clearfix">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
              <div class="card">
                <div class="body">
                    <h4>Welcome AdminStaff!</h4>
                </div>
              </div>
          </div>
        </div>

      <!-- Widgets -->
      <div class="row clearfix">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green hover-expand-effect">
            <div class="icon">
                <i class="material-icons">class</i>
            </div>
            <div class="content">
              <div class="text">Classroom</div>
                <div class="number count-to" data-from="0" data-to="{{ $class }}" data-speed="1000" data-fresh-interval="20"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-pink hover-expand-effect">
            <div class="icon">
                <i class="material-icons">assignment</i>
            </div>
            <div class="content">
              <div class="text">Teacher</div>
                <div class="number count-to" data-from="0" data-to="{{ $teacher }}" data-speed="1000" data-fresh-interval="20"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-blue hover-expand-effect">
            <div class="icon">
                <i class="material-icons">person</i>
            </div>
            <div class="content">
              <div class="text">Student</div>
                <div class="number count-to" data-from="0" data-to="{{ $student }}" data-speed="1000" data-fresh-interval="20"></div>
            </div>
          </div>
        </div>
      </div>
        <!-- #END# Widgets -->
      </div>
    </section>
    <!-- /.content -->
@stop