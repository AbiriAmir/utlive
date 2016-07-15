@if(isset($model))
    {!! Form::model($model, ['route' => ['admin::admin.account.update', 'account' => $model], 'method' => 'put']) !!}
@else
    {!! Form::open(['route' => 'admin::admin.account.store', 'method' => 'post']) !!}
@endif
        <!-- text input -->


<div class="form-group">
    {!! Form::label('name', 'نام سرویس') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'نام سرویس']) !!}
    {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
</div>


<div class="form-group">
    {!! Form::label('stream_name', 'نام استریم') !!}
    {!! Form::text('stream_name', null, ['class' => 'form-control', 'placeholder' => 'نام استریم']) !!}
    {!! $errors->first('stream_name', '<div class="text-danger">:message</div>') !!}
</div>


<div class="form-group">
    {!! Form::label('username', 'نام کاربری') !!}
    {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => 'نام کاربری']) !!}
    {!! $errors->first('username', '<div class="text-danger">:message</div>') !!}
</div>


<div class="form-group">
    {!! Form::label('password', 'کلمه‌ی عبور') !!}
    {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'کلمه‌ی عبور']) !!}
    {!! $errors->first('password', '<div class="text-danger">:message</div>') !!}
</div>


<div class="form-group">
    {!! Form::label('password_confirmation', 'تکرار کلمه‌ی عبور') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'تکرار کلمه‌ی عبور']) !!}
    {!! $errors->first('password_confirmation', '<div class="text-danger">:message</div>') !!}

</div>


<div class="form-group">
    {!! Form::label('start_date', 'تاریخ شروع دسترسی') !!}
    {!! Form::text('start_date', null, ['class' => 'form-control', 'placeholder' => 'dd/mm/yyy']) !!}
    {!! $errors->first('start_date', '<div class="text-danger">:message</div>') !!}

</div>

<div class="form-group">
    {!! Form::label('end_date', 'تاریخ پایان دسترسی') !!}
    {!! Form::text('end_date', null, ['class' => 'form-control', 'placeholder' => 'dd/mm/yyy']) !!}
    {!! $errors->first('end_date', '<div class="text-danger">:message</div>') !!}

</div>

{!! Form::submit('تایید', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}