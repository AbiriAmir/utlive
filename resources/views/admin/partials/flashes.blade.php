@if(Session::has('flash_message'))
    <div class="alert flash-message text-center alert-{!! Session::get('flash_type', 'info') !!} alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {!! Session::get('flash_message') !!}
    </div>
@section('js')
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('.flash-message').delay(5000).slideUp();
        });
    </script>
@stop
@endif


@if($errors->any())
    <div class="alert flash-message text-center alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@section('js')
    <script type="text/javascript">
        $(document).ready(function()
        {
            $('.flash-message').delay(5000).slideUp();
        });
    </script>
@stop
@endif
