<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div class="container-fluid">
@if($errors->has('text'))
    <b>
        {{ $errors->first('text') }}
    </b>
@endif
<form method="post" action="{{ route('to-dos.store') }}">
    @csrf
    <div class="form-group">
    <label for="text">Enter the text:</label>
    <input class="form-control" type="text" id="text" name="text" value="">
    </div>
    <button type="submit" class="btn btn-primary btn-block">Add new task</button>
</form>
</div>

<style>
    .container-fluid {
        margin-top: 20px;
        width: 50%;
    }
</style>
