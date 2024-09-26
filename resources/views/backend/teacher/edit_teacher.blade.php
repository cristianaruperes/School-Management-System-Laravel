@extends('layoutbackend.main_content')

@section('page_content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Edit Data Teacher
      </h1>
      <ol class="breadcrumb breadcrumb-col-pink">
        <li><a href="#"><i class="material-icons">home</i> Dashboard</a></li>
        <li><a href="#"><i class="material-icons">assignment</i> Teacher</a></li>
        <li class="active"><i class="material-icons">edit</i> Edit Teacher</li>
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
                            <h2>Edit Teacher</h2>                         
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
                            <form id="form_validation" files="true" method="post" action="{{ route('manageteacher.update', $teacher->id_teacher) }}" enctype="multipart/form-data">
                                 @csrf {{ method_field('PATCH')}}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" id="nama_teacher" name="nama_teacher" value="{{$teacher->nama_teacher}}">
                                        <label class="form-label">Teacher Name</label>
                                    </div>
                                </div>&nbsp;
                                    <div class="row clearfix">
                                      <div class="col-sm-6">
                                          <select class="form-control show-tick" name="id_class" id="id_class">
                                              <option value="">-- Select Classroom --</option>
                                              @foreach ($class as $classes)
                                              <option value="{{ $classes->id_class }}">{{ $classes->nama_class }}</option>
                                               @endforeach 
                                          </select>
                                      </div>
                                    </div>
                                 <a href="{{ route('manageteacher.index') }}" class="btn btn-warning">&nbsp; BACK</a>
                                <button class="btn btn-primary waves-effect" type="submit">UPDATE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
      </div>

    </section>
    <!-- /.content -->
@stop