@extends('layoutbackend.main_content')

@section('page_content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Show Data Class
      </h1>
      <ol class="breadcrumb breadcrumb-col-pink">
        <li><a href="#"><i class="material-icons">home</i> Dashboard</a></li>
        <li><a href="#"><i class="material-icons">class</i> Classroom</a></li>
        <li class="active"><i class="material-icons">visibility</i> Show Class</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content-header">
      <div class="container-fluid">

        <!-- Basic Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>Show Class</h2>                         
                        </div>
                        @if ($errors->any())
                      <div class="alert alert-danger">
                        <ul>
                          @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                          @endforeach
                        </ul>
                      </div>
                    @endif <!-- /.form validation -->
                        <div class="body">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="nama_class" name="nama_class" value="{{$class->nama_class}}" disabled="">
                                        <label class="form-label">Class Name</label>
                                    </div>&nbsp;
                                </div>
                                 <a href="{{ route('manageclass.index') }}" class="btn btn-warning">&nbsp; BACK</a>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </section>
    <!-- /.content -->
@stop