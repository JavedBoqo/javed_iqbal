@extends('Shared.Layouts.Master')

@section('title')
@stop

@section('content')
<table>
<tr>
<th>Name</th>
<th>Phone</th>
<th>Address</th>
<th></th>
</tr>
@foreach($levels as $level){
<tr>
    <td>{{ $level->lvl_name}}</td>
    <td>{{ $level->is_active }}</td>
    <td><button href="level/{id}/edit">Edit</button></td>
</tr>
}
</table>
@endforeach
@stop