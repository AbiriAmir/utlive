@if(!isset($doNotShowLink))
    <a data-toggle="modal" href="#account-modal-{!! $data->id !!}">
        <i class="fa fa-download"></i>
    </a>
@endif
@if(!isset($doNotShowModal))
    <div id="account-modal-{!! $data->id !!}" class="modal text-right fade">
        <div class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(['method' => 'post', 'target' => '_blank', 'route' => ["admin::admin.account.download", $data->id]])!!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h1 class="modal-title">دانلود فایل تنظیمات</h1>
                </div>
                <div class="modal-body">
                    <p>
                        لطفا یک کلمه‌ی عبور جدید برای سرویس انتخاب نمایید.
                    </p>

                    <div class="form-group">
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'کلمه‌ی عبور']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'تکرار کلمه‌ی عبور']) !!}
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">لغو</button>
                    <button type="submit" class="btn btn-primary">دانلود</button>
                </div>
                {!! Form::close() !!}
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endif