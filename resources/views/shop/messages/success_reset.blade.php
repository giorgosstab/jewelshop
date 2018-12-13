@if(Session::has('status'))
    <div class="notice notice-success" id="message">
        <button type="button" class="close" onclick="this.parentElement.style.display='none';" ><span aria-hidden="true">&times</span></button>
        <strong>Success!</strong> <em>{!! session('status'); !!}</em>
    </div>
@endif
