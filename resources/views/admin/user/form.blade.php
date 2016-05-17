@if(isset($model))
    {!! Form::model($model, ['route' => ['admin::admin.user.update', 'user' => $model], 'method' => 'put']) !!}
@else
    {!! Form::open(['route' => 'admin::admin.user.store', 'method' => 'post']) !!}
@endif
        <!-- text input -->


<div class="form-group">
    {!! Form::label('name', 'نام') !!}
    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'نام سرویس']) !!}
    {!! $errors->first('name', '<div class="text-danger">:message</div>') !!}
</div>



<div class="form-group">
    {!! Form::label('email', 'ایمیل') !!}
    {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'نام کاربری']) !!}
    {!! $errors->first('email', '<div class="text-danger">:message</div>') !!}
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


{!! Form::submit('تایید', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}