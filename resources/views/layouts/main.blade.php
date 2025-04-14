<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ferdian Dwi Putra - tugas 4</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>

<body class="d-flex flex-column min-vh-100">
    <!-- Navigasi -->
    <header>
        @include('components.navbar')
    </header>

    <!-- Konten Utama -->
    <main class="container my-5 flex-grow-1">
        <section>
            @yield('content')
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <p class="mb-0">&copy; 2025 Tugas-4. Hak cipta dilindungi. Ferdian Dwi Putra - 2113231131</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
