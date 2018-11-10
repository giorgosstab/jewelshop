@if(count($errors) > 0)
    <div class="notice notice-danger" id="message">
        <button type="button" class="close" onclick="this.parentElement.style.display='none';" ><span aria-hidden="true">&times</span></button>
        <strong>Danger!</strong>
        <em>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </em>
    </div>
@endif
