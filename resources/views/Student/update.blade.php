@extends('Shared.Layouts.Master')

@section('title')
@stop

@section('content')
{!! Form::open(['method' => 'put', 'route' => ['student.update']]) !!}
<div>
    <label>Student Name</label>
    <input type="text" class="form-control" name="std_name" required/>
</div>
<div>
    <label>Father Name</label>
    <input type="text" class="form-control" name="std_father_name" required/>
</div>
<div>
    <label>Address</label>
    <textarea class="form-control" name="std_contact_number" />
</div>

<div>
    <label>Level</label>
    <select class="form-control" name="level_id">
    </select>
</div>

<div>
    <label>isActive</label>
    <input type="checkbox" class="form-control" name="is_active" />
</div>
{!! Form::submit(trans('student.update')) !!}
{!! Form::close() !!}
@endforeach
@stop