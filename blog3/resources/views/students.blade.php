<div>
    <h1>Student List</h1>
    <!-- <h5>
        {{
        print_r($data)
        }}
    </h5> -->
    <table border="1">
        <tr>
            <td>Name</td>
            <td>batch</td>
            <td>year</td>
        </tr>
        @foreach($data as $student)
        <tr>
            <td>{{$student->name}}</td>
            <td>{{$student->batch}}</td>
            <td>{{$student->year}}</td>
        </tr>
        @endforeach
    </table>
</div>
