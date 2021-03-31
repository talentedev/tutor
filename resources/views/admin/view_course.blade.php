@extends('admin.layout.app')
@section('content')
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        div.scrollmenu {
          background-color: #F8F9FC;
          overflow: auto;
          white-space: nowrap;
        }

        div.scrollmenu a {
          display: inline-block;
          color: white;
          text-align: center;
          padding: 14px;
          text-decoration: none;
        }

        div.scrollmenu a:hover {
          background-color: #777;
        }
        </style>

</head>
<body>
    <div class="scrollmenu">
    <div class="row">
        <div class="col-md-12">

            <center><h1>List of All Courses</h1></center>
            <table class="table">
                <thead>
                    <tr>
                        <th>     Course ID           </th>
                        <th>     Year           </th>
                        <th>     Degree         </th>
                        <th>    Semester           </th>
                        <th>      Subject          </th>
                        <th>      Question - 1          </th>
                        <th>      Answer - 1          </th>
                        <th>      Marks -1          </th>
                        <th>     Question - 2          </th>
                        <th>     Answer -2           </th>
                        <th>     Marks - 2         </th>
                        <th>    Question - 3          </th>
                        <th>    Answer - 3          </th>
                        <th>    Marks - 3          </th>
                        <th>      Price          </th>
                        <th>      Action          </th>
                    </tr>
                </thead>
    <tbody>
        @foreach ($data as $row)
        <tr>
        <td>{{$row->id}}</td>
        <td>{{$row->year}}</td>
        <td>{{$row->degree}}</td>
        <td>{{$row->semester}}</td>
        <td>{{$row->subject}}</td>
        <td>{{$row->question_1}}</td>
        <td>{{$row->answer_1}}</td>
        <td>{{$row->marks_1}}</td>
        <td>{{$row->question_2}}</td>
        <td>{{$row->answer_2}}</td>
        <td>{{$row->marks_2}}</td>
        <td>{{$row->question_3}}</td>
        <td>{{$row->answer_3}}</td>
        <td>{{$row->marks_3}}</td>
        <td>{{$row->price}}</td>
        <td>
            <a href="{{route('edituser', $row->id)}}" class="btn btn-primary">Edit</a>
            <a href="{{route('deluser', $row->id)}}" class="btn btn-danger">Delete</a>
        </td>

        </tr>
        @endforeach
    </tbody>

            </table>
        </div>

    </div>
    </div>

</body>

</html>
@endsection

