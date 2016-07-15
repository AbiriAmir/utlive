@if(!isset($doNotShowLink))
    <a data-toggle="modal" href="#modal-delete-{!! $data->id !!}">
        <i class="fa fa-trash-o"></i>
    </a>
@endif
@if(!isset($doNotShowModal))
    <div id="modal-delete-{!! $data->id !!}" class="modal text-right fade">
        <div class="modal-dialog">
            <div class="modal-content">
                {!! Form::open(['method' => 'DELETE', 'route' => ["admin::admin.$name.destroy", $data->id]])!!}
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h1 class="modal-title">حذف</h1>
                </div>
                <div class="modal-body">
                    <p>
                        آیا از حذف این داده مطمئن هستید؟
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">خیر</button>
                    <button type="submit" class="btn btn-primary">بله</button>
                </div>
                {!! Form::close() !!}
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endif