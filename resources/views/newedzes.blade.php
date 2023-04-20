@extends('index')

@section('content')
    <h1>Add new training</h1>
    <hr>
    <form method="POST" action="/newedzes">
        @csrf
        <div class="form-floating mb-3">
            <input type="date" class="form-control" name="date" placeholder="Date">
            <label for="date">Date</label>
        </div>

        <div class="form-floating mb-3">
            <input type="time" class="form-control" name="duration" placeholder="Duration">
            <label for="time">Duration</label>
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Product description" id="description" name="description"></textarea>
            <label for="description">Description</label>
        </div>

        <input type="number" class="d-none" value="0" disabled name="completed">

        <input type="submit" value="Add to the database" class="btn btn-primary mb-3">
    </form>
    <a href="/" class="btn btn-secondary btn-sm">Back to trainings</a>
@endsection
