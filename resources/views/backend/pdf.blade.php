<!-- pdf.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2 align="center">List Class</h2>
    <h4 align="center">Class, Teacher, Student</h4>
  <table width="100%" style="border-collapse:collapse; border: 0px;">
        <thead>
           <tr>
            <th style="border: 1px solid; padding:12px;" width="100%">Class Name : {{$class->nama_class}}</th>
          </tr>
          <tr>
            <th style="border: 1px solid; padding:12px;" width="100%">Teacher Name : {{$class->teacher->nama_teacher}}</th>
          </tr>
          <tr>
            <th style="border: 1px solid; padding:12px;" width="100%">Student Name : <br>
               @foreach($student as $a)
                {{$a->nama_student}}<br>
                 @endforeach
            </th>
        </tr>
        </thead>   
    </table>
  </body>
</html>
