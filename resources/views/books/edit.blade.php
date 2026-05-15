@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto bg-white shadow-lg rounded-2xl p-8">
@if ($errors->any())
    <div class="bg-red-50 text-red-700 p-3 rounded-lg mb-6">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <h2 class="text-2xl font-bold text-primary mb-6">
        Edit Book
    </h2>

          <form action="{{ route("books.update",$book->id) }}" method="POST" class="space-y-5">
                @csrf
                @method('PUT')

        <div>
            <label class="block text-secondary mb-2">Title</label>
            <input type="text" name="title"
                   value="{{ $book->title }}"
                   class="w-full border border-slate-300 rounded-lg p-3
                          focus:outline-none focus:ring-2 focus:ring-primary"
                   >
        </div>

        <div>
            <label class="block text-secondary mb-2">Description</label>
            <textarea name="description" rows="4"
                      class="w-full border border-slate-300 rounded-lg p-3
                             focus:outline-none focus:ring-2 focus:ring-primary"
                      >{{ $book->description }}</textarea>
        </div>

        <button type="submit"
                class="w-full bg-primary text-white py-3 rounded-lg
                       hover:bg-indigo-600 transition duration-300">
            Update Book
        </button>
    </form>

</div>

@endsection
