@extends('layouts.app')

@section('content')
    <div class="row mb-3 search-bar">
        <div class="col-md-4 offset-md-8">
            <input type="text" class="form-control" placeholder="Search by book title ...">
        </div>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Rating</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {{-- Check if $books is not empty before looping --}}
                @if (count($books) > 0)
                    @foreach($books as $book)
                        <tr>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->rating }}</td>
                            <td>
                                {{-- Changed to simple anchor tags for underlining --}}
                                <a href="#" class="action-link">Edit</a>
                                <form action="#" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    {{-- Changed button to a link-like appearance --}}
                                    <button type="submit" class="action-link-button">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="text-center">No books found.</td>
                    </tr>
                @endif
            </tbody>
        </table>
    </div>
@endsection