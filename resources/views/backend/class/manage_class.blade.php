@extends('layoutbackend.main_content')

@section('page_content')

<!-- Content Header (Page header) -->
<section class="content-header">
      <h1>
         Class
      </h1>
      <ol class="breadcrumb breadcrumb-col-pink">
        <li><a href="#"><i class="material-icons">home</i> Dashboard</a></li>
        <li class="active"><i class="material-icons">class</i> Classroom</li>
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
                          Table Class
                      </h2>
                      <ul class="header-dropdown m-r--5">
                          <li>
                              <a class="btn btn-primary"  href="{{ route('manageclass.create') }}"><i class="fa fa-plus-circle"></i>&nbsp; Add Class</a>
                          </li>
                      </ul>
                   </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Class Name</th>
                                            <th colspan="3">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Class Name</th>
                                            <th colspan="3">Action</th>                                
                                        </tr>
                                    </tfoot>
                                    @foreach ($class as $classes)
                                    <tbody>
                                        <tr>
                                            <td>{{$classes->nama_class}}</td>

                                           <td>
                                          <form  method="post" action="{{ route('manageclass.destroy', $classes->id_class) }}">
                                              {{ csrf_field()}} {{ method_field('DELETE') }}
                                              <a class="btn btn-info" href="{{ route('manageclass.show', $classes->id_class) }}"><i class="material-icons">visibility</i></a>
                                              <a class="btn btn-warning"  href="{{ route('manageclass.edit', $classes->id_class) }}"><i class="material-icons">edit</i></a>
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
                                  {!! $class->links(); !!}
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