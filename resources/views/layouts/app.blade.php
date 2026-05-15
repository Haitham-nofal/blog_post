<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Book Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4f46e5',   // Indigo
                        secondary: '#64748b'  // Slate
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-slate-100 min-h-screen">

    <nav class="bg-white shadow-md p-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-primary">📚 Book Manager</h1>
             <a href="{{ route('books.create') }}"
        class="bg-primary text-white px-4 py-2 rounded-lg hover:bg-indigo-600 transition duration-300">
            + Add New Book
        </a>
    </nav>

    <div class="container mx-auto px-6 py-10">
        @yield('content')
    </div>

</body>
</html>
