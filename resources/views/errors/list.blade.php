@foreach($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach



@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif