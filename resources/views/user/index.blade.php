<html>
    <head>
        <title>User Page</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    </head>

    <center>


<div style="margin-top: 20%;"> Hi, {{Auth::user()->name}} - Welcome</div>
<br>
<div>
    <a href="{{route('show_courses')}}" class="btn btn-primary">Show All Courses</a>
</div>

    </center>
</html>
