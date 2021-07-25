<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />

    <title>Laravel</title>

</head>

<body>
    {{-- Navigation Section --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-lg py-2 ">
            <a href="/" class="navbar-brand"> MyBlog</a>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link"  href="/"><i class="fas fa-home"></i> Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"  href="/blogs"><i class="far fa-lightbulb"></i> Blog</a>
                    </li>

                    @auth
                    <span class="navbar-text">
                        {{ auth()->user()->name }}
                    </span>

                    <form action="/logout" method="post">
                        @csrf
                        <button class="btn btn-sm btn-danger ml-1 rounded" type="submit">Çıkış Yap</button>
                    </form>

                    @else
                        <li class="nav-item">
                            <a class="nav-link"  href="/register"><i class="fas fa-user-plus"></i> Kayıt Ol</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"  href="/login"><i class="fas fa-sign-in-alt"></i> Giriş</a>
                        </li>
                    @endauth

                </ul>
            </div>
        </div>
    </nav>

    {{ $slot }}



    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>

</html>
