@extends('layouts.app')

@section('content')

@if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded-lg mb-6">
        {{ session('success') }}
    </div>

@endif

@if (session("errors"))

      <div class="bg-red-100 text-red-700 p-3 rounded-lg mb-6">
        {{ session('errors') }}
    </div>


@endif


<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

    @forelse ($books as $book )

        <div class="bg-white rounded-2xl shadow-md p-6
                    hover:shadow-2xl hover:-translate-y-2
                    transition duration-300 ease-in-out">

            <h2 class="text-xl font-semibold text-primary mb-3">
                        {{ $book->title }}
            </h2>

            <p class="text-secondary mb-5">
                    {{ $book->description }}
            </p>


                @if($book->is_borrowed)
    <span class="bg-red-200 text-red-800 px-2 py-1 rounded-full text-xs absolute top-2 right-2">
        Borrowed
    </span>
    @endif

                      <div class="flex justify-between items-center mt-4">

                <!-- Borrow Button -->

<form action="{{ route('books.borrow', $book->id) }}" method="POST">
    @csrf
    <button type="submit"  class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition">
        {{ $book->is_borrowed ? 'Borrowed' : 'Borrow now!' }}
    </button>
</form>

                <!-- Edit -->
             <a href="{{ route('books.edit', $book->id) }}"
   class="bg-yellow-500 text-white px-4 py-2 rounded-lg hover:bg-yellow-600 transition">
    Edit
</a>


            </div>
<div class="flex justify-between mt-4">


    <!-- Delete Button -->
    <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this book?');">
        @csrf
        @method('DELETE')
        <button type="submit"
                class="bg-red-600 text-white px-4 py-2 rounded-lg hover:bg-red-700 transition">
            Delete
        </button>
    </form>
</div>



        </div>
@empty

        <div class="col-span-3 text-center text-secondary text-lg">
            No books available.
        </div>
    @endforelse

</div>

@endsection
