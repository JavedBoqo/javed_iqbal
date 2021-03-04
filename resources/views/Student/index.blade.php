@extends('Shared.Layouts.Master')

@section('title')
@stop

@section('content')
<table>
<tr>
<th>Name</th>
<th>Father Name</th>
<th>Contact</th>
<th>isActive</th>
<th></th>
</tr>
@foreach($students as $student){
<tr>
    <td>{{ $student->std_name}}</td>
    <td>{{ $student->std_father_name }}</td>
    <td>{{ $student->std_contact_number}}</td>
    <td>{{ $student->is_active}}</td>
    <td><button href="student/{id}/edit">Edit</button></td>
</tr>
}
</table>
@endforeach
@stop