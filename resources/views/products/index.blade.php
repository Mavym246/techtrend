<html lang="en">

<head>
    <title>Products</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Buyport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="resources/css/app.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <style type="text/css" id="operaUserStyle"></style>

    <link rel="icon" type="image/png" sizes="32x32" href="" alt="logo">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand left" href="#HOME">
                <img src="#" width="70px" height="70px" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarul" aria-controls="navbarul" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarul">
                <ul class="navbar-nav ms-auto right font">
                    <li class="nav-item">
                        <a class="nav-link" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/categories">CATEGORIES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/products" id="#">PRODUCTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#REVIEWS">REVIEWS</a>
                    </li>
                    @auth
                    <li class="mx-2 nav-item">
                      <button onclick="location.href='/dashboard'" class="btn btn-primary">Dashboard</button>
                    </li>

                    <li class="nav-item">
                      <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button class="btn btn-danger" type="submit">Logout</button>
                      </form>
                    </li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="overflow-hidden text-center position-relative p-md-5 color">
            <div class="mx-auto my-5 col-md-5 p-lg-5">
                <h1 class="display-4 fw-normal white">Products</h1>
                <p class="lead fw-normal white">The best place to buy your favourite products.</p>
                <a class="btn btn-outline-secondary" href="#">Coming soon</a>
                @auth
                    <br>
                    <a href="{{ route('products.create') }}">Create New Product</a>
                @endauth


            </div>
            <div class="shadow-sm product-device d-none d-md-block"></div>
            <div class="shadow-sm product-device product-device-2 d-none d-md-block"></div>
        </div>


    </main>

    <div class="py-5 album" style="margin-top:15rem;">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                @foreach ($products as $product)
                    <div class="col">
                        <div class="shadow-sm card">
                            <img class="bd-placeholder-img card-img-top" style="padding:50;" width="100%"
                                height="500" src="{{ $product->image }}"" role="img"
                                aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                focusable="false">
                            <title>Placeholder</title>
                            <rect width="100%" height="100%" fill="#55595c"></rect><text x="50%" y="50%"
                                fill="#eceeef" dy=".3em">{{ $product->name }}</text></>
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <p class="card-text"><a
                                            href="{{ route('products.show', ['product' => $product->id_product]) }}">See
                                            more</a></p>

                                    @auth
                                        <div>
                                            <a
                                                href="{{ route('products.edit', ['product' => $product->id_product]) }}">Edit</a>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal-{{ $product->id_product }}">
                                                    Delete
                                                </button>
                                        </div>
                                    @endauth

                                    <div class="modal fade" id="confirmDeleteModal-{{ $product->id_product }}" tabindex="-1" aria-labelledby="confirmDeleteModalLabel-{{ $product->id_product }}" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="confirmDeleteModalLabel-{{ $product->id_product }}">Confirm Delete</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to delete this product?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <form action="{{ route('products.destroy', ['product' => $product->id_product]) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>





                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Buy</button>
                                    </div>

                                    <small class="text-body-secondary">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach





            </div>
            <div class="mt-4 d-flex justify-content-center">
                {{ $products->onEachSide(-1)->links() }}

            </div>

        </div>
    </div>
    <footer>
        <div class="social-links">
            <li><a
                    href="https://www.google.com/url?sa=t&amp;rct=j&amp;q=&amp;esrc=s&amp;source=web&amp;cd=&amp;cad=rja&amp;uact=8&amp;ved=2ahUKEwjugtmr3aOEAxXuhv0HHbYyCGEQFnoECAYQAQ&amp;url=https%3A%2F%2Fwww.facebook.com%2F%3Flocale%3Dcs_CZ&amp;usg=AOvVaw2mDMZCfXuZlA8SeGygjMzf&amp;opi=89978449"><i
                        class="fab fa-facebook-f"></i></a></li>
            <li><a
                    href="https://www.google.com/url?sa=t&amp;rct=j&amp;q=&amp;esrc=s&amp;source=web&amp;cd=&amp;cad=rja&amp;uact=8&amp;ved=2ahUKEwjj64i13aOEAxVf_7sIHQuCCV0QFnoECAcQAQ&amp;url=https%3A%2F%2Ftwitter.com%2F%3Flang%3Dcs&amp;usg=AOvVaw3EWhHsan_w7G1VNbssr6hv&amp;opi=89978449"><i
                        class="fab fa-twitter"></i></a></li>
            <li><a
                    href="https://www.google.com/url?sa=t&amp;rct=j&amp;q=&amp;esrc=s&amp;source=web&amp;cd=&amp;cad=rja&amp;uact=8&amp;ved=2ahUKEwjN-qW73aOEAxVn_rsIHVfOAPgQFnoECAgQAQ&amp;url=https%3A%2F%2Fwww.instagram.com%2F&amp;usg=AOvVaw1cBeRoOpMhZ3-x5M1sA3Fm&amp;opi=89978449"><i
                        class="fab fa-instagram"></i></a></li>
            <li><a
                    href="https://www.google.com/url?sa=t&amp;rct=j&amp;q=&amp;esrc=s&amp;source=web&amp;cd=&amp;cad=rja&amp;uact=8&amp;ved=2ahUKEwiVh4PB3aOEAxX0gv0HHcCPBmkQFnoECAcQAQ&amp;url=https%3A%2F%2Fcz.linkedin.com%2F&amp;usg=AOvVaw0TUI-_xDsJ2HusUda2D7XK&amp;opi=89978449"><i
                        class="fab fa-linkedin-in"></i></a></li>
        </div>

        <div class="menu">
            <li><a href="#HOME">HOME</a></li>
            <li><a href="#CATEGORIES">CATEGORIES</a></li>
            <li><a href="#REVIEWS">REVIEWS</a></li>
            <li><a href="ABOUT US">ABOUT US</li>
        </div>

    </footer>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

        html {
            scroll-behavior: smooth;
            scroll-padding: 6rem;
            font-family: 'Montserrat', sans-serif;
            color-scheme: dark light;
            background-color: rgba(33, 37, 41, 1);
        }

        body {
            margin: 0;
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            line-height: 1.5;
            background-color: rgba(33, 37, 41, 1);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        .color {
            background-image: linear-gradient(45deg, #12c2e9, #c471ed, #f64f59);
        }

        .navbar-nav .nav-item .nav-link:after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            height: 2px;
            width: 0;
            background-image: linear-gradient(45deg, #12c2e9, #c471ed, #f64f59);
            transition: 0.3s;
        }

        .navbar-nav .nav-item .nav-link:hover:after {
            width: 100%;
        }

        .pager{
            max-width: 200px;
            display: flex;
            
        }

        .white {
            color: white;
        }

        .navbar-nav .nav-item .nav-link {
            position: relative;
            padding-bottom: 10px;
            color: white;
        }

        ul {
            list-style: none;
        }

        footer {
            position: relative;
            width: 100%;
            background-image: linear-gradient(45deg, #12c2e9, #c471ed, #f64f59);
            min-height: 100px;
            padding: 20px 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        footer .social-links,
        footer .menu {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px 0;
        }

        footer .social-links li,
        footer .menu li {
            list-style: none;
        }

        footer .social-links li a,
        footer .menu li a {
            font-size: 2em;
            color: white;
            margin: 0 10px;
            display: inline-block;
            transition: 0.5s;
        }

        footer .social-links li a:hover {
            transform: translateY(-5px);
        }

        footer .menu li a {
            font-size: 1.2em;
            color: white;
            margin: 0 10px;
            display: inline-block;
            text-decoration: none;
            opacity: 0.5;
        }

        footer .menu li a:hover {
            opacity: 1;
        }

        @media only screen and (max-width: 1400px) {
            .card-img-top {
                height: 400px;
            }
        }

        @media only screen and (max-width: 1200px) {
            .card-img-top {
                height: 350px;
            }
        }

        @media only screen and (max-width: 990px) {
            .card-img-top {
                height: 300px;
            }
        }

        @media only screen and (max-width: 576px) {
            .card-img-top {
                height: 600px;
            }
        }
    </style>
</body>
