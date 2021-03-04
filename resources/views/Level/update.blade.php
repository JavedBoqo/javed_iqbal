@extends('Shared.Layouts.Master')

@section('title')
@stop

@section('content')
{!! Form::open(['method' => 'put', 'route' => ['level.update']]) !!}
<div>
    <label>Name</label>
    <input type="text" class="form-control" name="lvl_name" required/>
</div>

<div>
    <label>isActive</label>
    <input type="checkbox" class="form-control" name="is_active" />
</div>
{!! Form::submit(trans('level.update')) !!}
{!! Form::close() !!}
@endforeach
@stop