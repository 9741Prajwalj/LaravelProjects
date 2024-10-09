<div>
    <h1>User list</h1>
      
      //print_r($users)
      
    <table border="1">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Phone</td>
            
        </tr>
        @foreach($students as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->batch}}</td>
            <td>{{$student->year}}</td>
        </tr>
        @endforeach
    </table>
</div>
