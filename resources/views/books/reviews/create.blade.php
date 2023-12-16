@extends('layouts.app')

@section('content')
    <h1 class="mb-10 text-2x1">Add Review for <strong>{{ $book->title }}</strong></h1>

    <form action="{{ route('books.reviews.store', $book) }}" method="post">
        @csrf

        <div class="form-group mb-4">
            <label for="review" class="mb-4">Review</label>
            <textarea name="review" id="review" cols="30" rows="10" required @class(['input', 'border-red-500' => $errors->has('review')])></textarea>
            @error('review')
                <small id="errorReview" class="error">{{ $message }}</small>
            @enderror
        </div>

        <div class="form-group mb-4">
            <label for="rating" class="mb-4">Rating</label>
            <select name="rating" id="rating" class="input mb-4" required>
                <option value="">Select a rating</option>
                @for ($i = 1; $i <= 5; $i++)
                    <option value="{{ $i }}">{{ $i }}</option>
                @endfor
            </select>
            @error('rating')
                <small id="errorRating" class="error">{{ $message }}</small>
            @enderror
        </div>

        <button type="submit" class="btn">Add Review</button>
    </form>
@endsection
