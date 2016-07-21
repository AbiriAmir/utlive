{!! Form::open(['files' => true, 'route' => 'admin::admin.recording.store', 'method' => 'post']) !!}


<div class="form-group">
    {!! Form::label('file', 'فایل') !!}
    {!! Form::file('file') !!}
    <p class="help-block">توجه کنید که نام فایل باید با نام استریم برابر باشد.</p>
    {!! $errors->first('file', '<div class="text-danger">:message</div>') !!}
</div>

{!! Form::submit('تایید', ['class' => 'btn btn-success']) !!}
{!! Form::close() !!}