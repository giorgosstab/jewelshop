@if(count($errors) > 0)
    <div class="notice notice-warning notice-warning-left">
        <button type="button" class="close" onclick="this.parentElement.style.display='none';" ><span aria-hidden="true">&times</span></button>
        <strong>Warning!</strong>
        <em>
            @foreach($errors->all() as $error)
                <li style="list-style-type: none;">{{ $error }}</li>
            @endforeach
        </em>
    </div>
@endif
