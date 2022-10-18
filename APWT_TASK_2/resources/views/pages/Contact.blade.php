<table class="table table-border">
    <tr>
        <th>Name</th>
        <th>ID</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->id}}</td>
        <td></td>
    </tr>
    @endforeach

</table>