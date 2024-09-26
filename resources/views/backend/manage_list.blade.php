@extends('layoutbackend.main_content')

@section('page_content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
         Class List
      </h1>
      <ol class="breadcrumb breadcrumb-col-pink">
        <li><a href="#"><i class="material-icons">home</i> Dashboard</a></li>
        <li class="active"><i class="material-icons">view_list</i> Class List</li>
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
                                Table Class List
                            </h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Class Name</th>
                                            <th>Teacher Name</th>
                                            <th>Print PDF</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Class Name</th>
                                            <th>Teacher Name</th>
                                            <th>Print PDF</th>                             
                                        </tr>
                                    </tfoot>
                                    @foreach ($class as $classes)
                                    <tbody>
                                        <tr>
                                            <td>{{$classes->nama_class}}</td>
                                            <td>{{$classes->teacher->nama_teacher}}</td>
                                            
                                            <td><a href="{{action('ListController@pdf', $classes->id_class)}}">PDF</a></td>
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