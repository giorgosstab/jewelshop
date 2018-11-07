@if(Session::has('warning_message'))
    <div class="notice notice-warning" id="message">
        <button type="button" class="close" onclick="this.parentElement.style.display='none';" ><span aria-hidden="true">&times</span></button>
        <strong>Warning!</strong> <em>{!! session('warning_message'); !!}</em>
    </div>
@endif
