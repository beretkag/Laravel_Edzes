@extends('index')

@section('content')
    <h1>Add new training</h1>
    <hr>
    <form method="POST" action="/newedzes">
        @csrf
        <div class="form-floating mb-3">
            <input type="date" class="form-control" name="date" placeholder="Date">
            <label for="date">Date:</label>
        </div>

        <div class="form-floating mb-3">
            <input type="time" class="form-control" name="duration" placeholder="Duration">
            <label for="time">Duration:</label>
        </div>

        <div class="form-floating mb-3">
            <textarea class="form-control" placeholder="Product description" id="description" name="description"></textarea>
            <label for="description">Product description:</label>
        </div>

        <div class="form-floating mb-3">
            <input type="number" class="form-control" id="price" name="price" placeholder="Price">
            <label for="price">Price:</label>
        </div>
        <input type="submit" value="Add to the database" class="btn btn-primary mb-3">
    </form>
    <a href="/products">Back to the products...</a>
@endsection
