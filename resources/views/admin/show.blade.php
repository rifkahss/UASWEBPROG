<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Product</title>
    @vite('resources/css/style.css')
    @vite('resources/css/Hero-Clean-images.css')
    @vite('resources/css/bootstrap.min.css')
    @vite('resources/js/bootstrap.min.js')
    @vite('resources/js/bold-and-bright.js')
    @vite('resources/css/home.css')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body>
    <div class="nav-wrapper nav-wrapper-1">
        <nav class="navbar navbar-expand-lg navbar-light bg-nav-custom effect-1">
            <div class="container">
                @auth
                    <a class="navbar-brand" href="/home" style="width: 200px">
                        <img src="{{ URL::asset('storage/asset/logoIcon1.PNG') }}" alt="" class="logo-nav" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-lg-0 nav-item-custome">
                            <li class="nav-item">
                                <a class="nav-link active" href="/home">Admin Page</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/home/admin/create">Add New Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/home/admin/orderHistory">Order History</a>
                            </li>
                            <li>
                                <div class="button-container justify-content-center">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" id="profile-button" role="button">LogOut</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </div>
                @endauth
            </div>
        </nav>
    </div>
    <section class="py-3">
        <div class="container py-5">
            <div class="row">
                <div class="col-md-6 col-sm-12 my-2">
                    <div id="carouselExampleIndicators" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset($photos) }}" class="d-block w-100" alt="..."><br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-5 col-sm-12" style="display: flex; flex-direction: column;">
                    <h2>Product Name: {{ $product->productName }}</h2>
                    <p>Category: {{ $product->category }}</p>
                    <p>Description: {{ $product->description }}</p>
                    <p>Price: $ {{ $product->price }}</p>
                </div>
                <div class="row">
                    @foreach ($photoPreviews as $preview)
                        <div class="col-md-2 col-sm-6">
                            <img src="{{ asset($preview) }}" class="d-block w-100" alt="..."><br>
                        </div>
                    @endforeach
                </div>
                <?php if($product->photoProgress != null){?>
                <div class="row">
                    @foreach ($photoProgress as $progress)
                        <div class="col-md-2 col-sm-6">
                            <img src="{{ asset($progress) }}" class="d-block w-100" alt="..."><br>
                        </div>
                    @endforeach
                </div>
                <?php }?>
                @auth
                    <div class="row">
                        <div class="col-12 text-end">
                            <a href="/home">
                                Home
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-12 text-end">
                            <a href="/">
                                Home
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-right-circle" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8m15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endauth
            </div>
    </section>
</body>

</html>
