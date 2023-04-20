@extends('index')

@section('content')
    <h1>Trainings</h1>
    <hr>
    <a href="/newedzes" class="btn btn-primary btn-sm">Add new training</a>
    <table class="table table-hover table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th class="text-center">Completed</th>
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
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                {{ $loop->index + 1 }}.
                            </div>
                            <div>
                            @if (!$edzes->completed)
                                <form method="POST" action="/editedzes/{{ $edzes->id }}">
                                    @method('PATCH')
                                    @csrf
                                    <div class="d-none">
                                        <input type="date" name="date"
                                        value="{{ $edzes->date }}">
                                        <input type="time" name="duration"
                                        value="{{ $edzes->duration }}">
                                        <textarea name="description">{{ $edzes->description }}</textarea>
                                        <input type="checkbox" role="switch" name="completed" checked>
                                    </div>
                                    <input type="submit" value="Complete" class="btn btn-success btn-sm">
                                </form>
                            @endif
                            </div>
                        </div>
                    </td>
                    <td class="text-center">
                        @if ($edzes->completed)
                            <i class="bi bi-check-circle-fill green" style="color: green;"></i>
                        @else
                            <i class="bi bi-x-circle-fill red" style="color: red;"></i>
                        @endif
                    </td>
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
                    <td colspan="6">No trainings recorded.</td>
                </tr>
            @endforelse
        </tbody>
        <tfoot>
            @if (sizeOf($edzesek) != 0)
                <tr>
                    <td colspan="6">Summary: {{ sizeOf($edzesek) }} training(s) recorded.</td>
                </tr>
            @endif
        </tfoot>
    </table>
@endsection
