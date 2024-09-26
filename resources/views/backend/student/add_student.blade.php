@extends('layoutbackend.main_content')

@section('page_content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Input Data Student
      </h1>
      <ol class="breadcrumb breadcrumb-col-pink">
        <li><a href="#"><i class="material-icons">home</i> Dashboard</a></li>
        <li><a href="#"><i class="material-icons">person</i> Student</a></li>
        <li class="active"><i class="material-icons">add</i> Add Student</li>
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
                            <h2>Add New Student</h2>                         
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
                            <form id="form_validation" files="true" method="post" action="{{ route('managestudent.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="nama_student" required>
                                        <label class="form-label">Student Name</label>
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
                                </div>
                                 <a href="{{ route('managestudent.index') }}" class="btn btn-warning">&nbsp; BACK</a>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </section>
    <!-- /.content -->
@stop