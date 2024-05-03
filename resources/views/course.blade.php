<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>

    @if(!$course)
    <form method="post" action="/create-course">
          @csrf
        <h1>Add course</h1>
        course name: <input type&nbsp;="text" name="name" id=""><br><br>
        details &nbsp;&nbsp;<input type="text" name="details" id=""><br><br>

        <input type="submit" value="submit">

        or view  all courses  <a href="/get-course">here</a>
    </form>
       @endif
    @if($course)
    <form method="post" action="/update-course">
          @csrf
        <h1>Add course</h1>
        course name: <input type&nbsp;="text" name="name" id="" value="{{$course->course_name}}"><br><br>
        details &nbsp;&nbsp;<input type="text" name="details" id="" value="{{$course->details}}"><br><br>

        <input type="submit" value="Update">

        <!-- or view  all courses  <a href="/get-course">here</a> -->
        </form>

        @endif
    <div>
    </div>
</body>
</html>