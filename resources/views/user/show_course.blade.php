<html>
<head>
    <title>User Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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

    <div style="margin-top: 2%" class="scrollmenu">
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
                        <th>      Question1          </th>

                        <th>      Marks1          </th>
                        <th>     Question2          </th>

                        <th>     Marks2         </th>
                        <th>    Question3          </th>

                        <th>    Marks3          </th>
                        <th>      Price          </th>
                        <th>      Buy          </th>
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

        <td>{{$row->marks_1}}</td>
        <td>{{$row->question_2}}</td>

        <td>{{$row->marks_2}}</td>
        <td>{{$row->question_3}}</td>

        <td>{{$row->marks_3}}</td>
        <td>{{$row->price}}$</td>
        <td> <a class="btn btn-primary">BUY NOW </a></td>

        </tr>
        @endforeach
    </tbody>

            </table>
        </div>

    </div>
    </div>


</body>
<br><br><br>

<center>
<div><a class="btn btn-warning" href="">View - My Courses</a>
    <a class="btn btn-warning" href="{{route('logout')}}">Logout</a></div>
</center>

</html>


