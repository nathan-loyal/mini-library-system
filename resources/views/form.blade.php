@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ isset($book) ? 'Edit Book' : 'Add Book' }}</h1>
    <form action="{{ isset($book) ? route('books.update', $book) : route('books.store') }}" method="POST">
        @csrf
        @if(isset($book))
            @method('PUT')
        @endif
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $book->title ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" name="author" class="form-control" value="{{ old('author', $book->author ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control">{{ old('description', $book->description ?? '') }}</textarea>
        </div>
        <div class="form-group">
            <label for="isbn">ISBN</label>
            <input type="text" name="isbn" class="form-control" value="{{ old('isbn', $book->isbn ?? '') }}" required>
        </div>
        <div class="form-group">
            <label for="published_year">Published Year</label>
            <input type="text" name="published_year" class="form-control" value="{{ old('published_year', $book->published_year ?? '') }}" required>
        </div>
        <button type="submit" class="btn btn-success">{{ isset($book) ? 'Update' : 'Add' }}</button>
    </form>
</div>
@endsection
