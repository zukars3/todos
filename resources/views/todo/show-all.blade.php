<script src="{{ asset('js/app.js') }}" defer></script>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<div class="container">
    <ul class="list-group">
        @foreach($todos as $todo)
            <li class="list-group-item">
                <div class="row">
                    <div class="col-1">
                        <form method="post" action="{{ route('to-dos.delete', $todo) }}">
                            @csrf
                            @method('delete')
                            <button type="Submit" class="btn btn-danger">X</button>
                        </form>
                    </div>
                    <a class="col-10" href="{{ route('to-dos.edit', $todo) }}">
                        {{ $todo->text }}
                        <div>
                            @if($todo->completed_at)
                                <p class="completed_at">
                                Completed at {{ $todo->completed_at }}
                                </p>
                            @endif
                        </div>
                    </a>
                    <div>
                        <form method="post" action="{{ route('to-dos.mark-as-completed', $todo) }}">
                            @csrf
                            <button type="Submit"
                                    class="{{ $todo->completed_at ? 'btn btn-success' : 'btn btn-danger' }}">
                                @if($todo->completed_at)
                                    &#10003
                                @else
                                    Complete
                                @endif
                            </button>
                        </form>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

    <div class="add">
        <a href="{{ route('to-dos.create') }}">
            <button type="button" class="btn btn-primary btn-block">Add another task</button>
        </a>
    </div>
</div>

<style>
    .container {
        margin-top: 20px;
    }

    .container .col-10 {
        font-size: 24px;
        color: black;
        text-decoration: none;
    }

    .container .col-10:hover {
        color: #1d68a7;
    }

    .completed_at {
        font-size: 16px;
    }

    .container .col-1.complete .btn {
        max-width: 140%;
    }

    .add {
        margin-top: 10px;
    }

    .add a {
        text-decoration: none;
    }

    .add button {
        font-size: 20px;
    }
</style>
