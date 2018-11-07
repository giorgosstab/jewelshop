@if(Session::has('success_message'))
    <div class="notice notice-success" id="message">
        <button type="button" class="close" onclick="this.parentElement.style.display='none';" ><span aria-hidden="true">&times</span></button>
        <strong>Success!</strong> <em>{!! session('success_message'); !!}</em>
    </div>
@endif
