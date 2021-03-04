@extends('Shared.Layouts.Master')

@section('title')
@stop

@section('content')
{!! Form::open(['method' => 'post', 'route' => ['institution.create']]) !!}
<div>
    <label>Name</label>
    <input type="text" class="form-control" name="ins_name" required/>
</div>
<div>
    <label>Phone</label>
    <input type="text" class="form-control" name="ins_phone_number" required/>
</div>
<div>
    <label>Address</label>
    <textarea class="form-control" name="ins_address" />
</div>

<div>
    <label>isActive</label>
    <input type="checkbox" class="form-control" name="is_active" />
</div>
{!! Form::submit(trans('instituion.create')) !!}
{!! Form::close() !!}
@endforeach
@stop