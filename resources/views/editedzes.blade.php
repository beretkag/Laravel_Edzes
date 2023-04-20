@extends('index')

@section('content')
    <h1>Edit training</h1>
    <hr>
    <form method="POST" action="/editedzes/{{ $edzes->id }}">
        @method('PATCH')
        @csrf
        <div class="form-floating mb-3">
            <input type="date" class="form-control" name="date" placeholder="Date"
            value="{{ $edzes->date }}">
            <label for="date">Date</label>
        </div>

        <div class="form-floating mb-3">
            <input type="time" class="form-control" name="duration" placeholder="Duration"
            value="{{ $edzes->duration }}">
            <label for="time">Duration</label>
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Description" id="description" name="description">{{ $edzes->description }}</textarea>
            <label for="description">Description</label>
        </div>

        <div class="form-check form-switch mb-3">
            <label class="form-check-label" for="completed">Completed</label>

            @if ($edzes->completed)
                <input class="form-check-input" type="checkbox" role="switch" name="completed" checked>
            @else
                <input class="form-check-input" type="checkbox" role="switch" name="completed">
            @endif
        </div>

        <input type="submit" value="Update training" class="btn btn-warning mb-3">
    </form>
    <a href="/" class="btn btn-secondary btn-sm">Back to trainings</a>


@endsection
