@if(count($errors)>0)
    <div class="alert alert-warning alert-dismissible mt-4">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
