@extends('index')

@section('content')
    <h1>Delete training</h1>
    <hr>
    <p class="mb-3"><strong>Are you sure to delete the following training date?</strong></p>
    <table class="table table-striped w-50">
        <tbody>
            <tr>
                <td>Date:</td>
                <td><strong>{{ $edzes->date }}</strong></td>
            </tr>
            <tr>
                <td>Description</td>
                <td><strong> {{ $edzes->description }}</strong></td>
            </tr>
            <tr>
                <td>Duration</td>
                <td><strong>{{ $edzes->duration }}</strong></td>
            </tr>
            <tr>
                <td>Completed</td>
                <td>
                @if ($edzes->completed)
                    <i class="bi bi-check-circle-fill green" style="color: green;"></i>
                @else
                    <i class="bi bi-x-circle-fill red" style="color: red;"></i>
                @endif
                </td>
            </tr>
        </tbody>
    </table>
    <form action="/deleteedzes/{{ $edzes->id }}" method="post">
        @method('DELETE')
        @csrf
        <input type="submit" value="Yes, delete it" class="btn btn-danger">
    </form>
    <br>
    <a href="/" class="btn btn-secondary btn-sm">Back to trainings</a>
@endsection
