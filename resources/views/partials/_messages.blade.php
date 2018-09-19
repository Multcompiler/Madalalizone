@if (session('success'))
    <div class="alert alert-info" role="alert">
        {{ session('success') }}
    </div>
@endif

@if($errors->has())
    <div class="alert alert-danger" role="alert">
        <strong>Errors: </strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif