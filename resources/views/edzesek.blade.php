@extends('index')

@section('content')
    <h1>Products list</h1>
    <hr>
    <a href="/newedzes" class="btn btn-primary btn-sm">Add new training</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>Completed</th>
                <th>#</th>
                <th>Date</th>
                <th>Duration</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($edzesek as $edzes)
                <tr>
                    <td>
                        <input type="checkbox" value="{{ $completed }}">
                    </td>
                    <td>{{ $loop->index + 1 }}.</td>
                    <td>{{ $edzes->date }}</td>
                    <td>{{ $edzes->duration }}</td>
                    <td>{{ $edzes->description }}</td>
                    <td>
                        <a href="/editedzes/{{ $edzes->id }}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="/deleteedzes/{{ $edzes->id }}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6"> Nincs termék</td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            <tr>
                <td colspan="6">Summary: {{ sizeOf($edzesek) }} training dates.</td>
            </tr>
        </tfoot>
    </table>
@endsection
