<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view course</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>details</th>
            <th colspan="2">action</th>
        </tr>
        @foreach( $course as $courses)
            <tr>
                <td>{{$courses->id}}</td>
                <td>{{$courses->course_name}}</td>
                <td>{{$courses->details}}</td>
                <td><a href=" /edit/{{$courses->id}}">Edit</a></td>
                <td><a href=" /delete/{{$courses->id}}">Delete</a></td>
            </tr>
        
        @endforeach
    </table>
</body>
</html>
