@extends('layoutbackend.main_content')

@section('page_content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Student
      </h1>
      <ol class="breadcrumb breadcrumb-col-pink">
        <li><a href="#"><i class="material-icons">home</i> Dashboard</a></li>
        <li class="active"><i class="material-icons">person</i> Student</li>
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


       <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Table Student
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li>
                                    <a class="btn btn-primary"  href="{{ route('managestudent.create') }}"><i class="fa fa-plus-circle"></i>&nbsp; Add Student</a>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                          <th>Class Name</th>
                                            <th>Student Name</th>
                                            <th colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                          <th>Class Name</th>
                                            <th>Student Name</th>
                                            <th colspan="3">Action</th>                                
                                        </tr>
                                    </tfoot>
                                    @foreach ($student as $students)
                                    <tbody>
                                        <tr>
                                          <td>{{$students->classroom->nama_class}}</td>
                                            <td>{{$students->nama_student}}</td>
                                           <td>
                                          <form  method="post" action="{{ route('managestudent.destroy', $students->id_student) }}">
                                              {{ csrf_field()}} {{ method_field('DELETE') }}
                                              <a class="btn btn-info" href="{{ route('managestudent.show', $students->id_student) }}"><i class="material-icons">visibility</i></a>
                                              <a class="btn btn-warning"  href="{{ route('managestudent.edit', $students->id_student) }}"><i class="material-icons">edit</i></a>
                                              <button type="submit" class="btn btn-danger"><i class="material-icons">delete</i></button>
                                          </form>
                                        </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                            <div class="box-footer ">
                            <div class="text-center">
                                  {!! $student->links(); !!}
                            </div>
                          </div> 
                        </div>
                    </div>
                </div>
            </div>

      </div>
    </section>
    <!-- /.content -->
@stop