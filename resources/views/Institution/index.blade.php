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
@foreach($instituions as $instituion){
<tr>
    <td>{{ $instituion->ins_name}}</td>
    <td>{{ $instituion->ins_phone_number }}</td>
    <td>{{ $instituion->ins_address}}</td>
    <td><button href="instituion/{id}/edit">Edit</button></td>
</tr>
}
</table>
@endforeach
@stop