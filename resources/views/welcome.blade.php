<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <main>
        <form method="post" action="{{ route('saveItem') }}">
            {{ csrf_field() }}
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="inputPassword6" class="col-form-label">Add New Item:</label>
                </div>
                <div class="col-auto">
                    <input type="text" name="name" id="name" class="form-control" aria-describedby="passwordHelpInline">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-secondary">Save item</button>
                </div>
            </div>
        </form>
    </main>

    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </footer>
    </div>
    </div>
    </div>
</body>

</html>