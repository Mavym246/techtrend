<html lang="en"><head>
    <title>Categories</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Buyport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

  
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  
  
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script><style type="text/css" id="operaUserStyle"></style>

    <link rel="icon" type="image/png" sizes="32x32" href="" alt="logo">
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-dark">
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
                        <a class="nav-link" href="/#REVIEWS">REVIEWS</a>
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
    <section>
    <div class="container py-4">
    <div class="row align-items-md-stretch">


        @foreach ($categories as $category)
        <div class="col-md-6" data-aos="zoom-in">
            <div class="p-5 pt-5 text-center text-white h-100 rounded-3 text-center css-selector animace">
              <h2 class="text-white" style="text-decoration:none;"><a href="{{ url('/categories/' . $category->id_category) }}">{{ $category->name }}</a></h2>
            </div>
          </div>
        @endforeach




    </div>
    </div>
    </section>
    <footer>
        <div class="social-links">
        <li><a href="https://www.google.com/url?sa=t&amp;rct=j&amp;q=&amp;esrc=s&amp;source=web&amp;cd=&amp;cad=rja&amp;uact=8&amp;ved=2ahUKEwjugtmr3aOEAxXuhv0HHbYyCGEQFnoECAYQAQ&amp;url=https%3A%2F%2Fwww.facebook.com%2F%3Flocale%3Dcs_CZ&amp;usg=AOvVaw2mDMZCfXuZlA8SeGygjMzf&amp;opi=89978449"><i class="fab fa-facebook-f"></i></a></li>
  	 				<li><a href="https://www.google.com/url?sa=t&amp;rct=j&amp;q=&amp;esrc=s&amp;source=web&amp;cd=&amp;cad=rja&amp;uact=8&amp;ved=2ahUKEwjj64i13aOEAxVf_7sIHQuCCV0QFnoECAcQAQ&amp;url=https%3A%2F%2Ftwitter.com%2F%3Flang%3Dcs&amp;usg=AOvVaw3EWhHsan_w7G1VNbssr6hv&amp;opi=89978449"><i class="fab fa-twitter"></i></a></li>
  	 				<li><a href="https://www.google.com/url?sa=t&amp;rct=j&amp;q=&amp;esrc=s&amp;source=web&amp;cd=&amp;cad=rja&amp;uact=8&amp;ved=2ahUKEwjN-qW73aOEAxVn_rsIHVfOAPgQFnoECAgQAQ&amp;url=https%3A%2F%2Fwww.instagram.com%2F&amp;usg=AOvVaw1cBeRoOpMhZ3-x5M1sA3Fm&amp;opi=89978449"><i class="fab fa-instagram"></i></a></li>
  	 				<li><a href="https://www.google.com/url?sa=t&amp;rct=j&amp;q=&amp;esrc=s&amp;source=web&amp;cd=&amp;cad=rja&amp;uact=8&amp;ved=2ahUKEwiVh4PB3aOEAxX0gv0HHcCPBmkQFnoECAcQAQ&amp;url=https%3A%2F%2Fcz.linkedin.com%2F&amp;usg=AOvVaw0TUI-_xDsJ2HusUda2D7XK&amp;opi=89978449"><i class="fab fa-linkedin-in"></i></a></li>
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
    html{
        scroll-behavior: smooth;
        scroll-padding: 6rem;
        font-family: 'Montserrat', sans-serif;
        color-scheme: dark light;
        background-color: rgba(33,37,41,1);
    }
    body{
      margin:0;
      font-family: 'Montserrat', sans-serif;
      font-weight:700;
      line-height: 1.5;
      background-color: rgba(33,37,41,1);
    }
    *{
	margin:0;
	padding:0;
	box-sizing: border-box;
    
}
.color {
         background-image: linear-gradient(45deg,#12c2e9, #c471ed,#f64f59);
    }
    .navbar-nav .nav-item .nav-link:after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        height: 2px;
        width: 0;
        background-image: linear-gradient(45deg,#12c2e9, #c471ed,#f64f59);
        transition: 0.3s;
    }
    .navbar-nav .nav-item .nav-link:hover:after {
        width: 100%;
    }
    .white{
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
    footer{
    position: relative;
    width: 100%;
    background-image: linear-gradient(45deg,#12c2e9, #c471ed,#f64f59);
    min-height: 100px;
    padding: 20px 50px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
footer .social-links, footer .menu{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 10px 0;
}
footer .social-links li, footer .menu li{
list-style: none;
}

footer .social-links li a, footer .menu li a{
    font-size: 2em;
    color: white;
    margin: 0 10px;
    display: inline-block;
    transition: 0.5s;
}
footer .social-links li a:hover{
    transform:  translateY(-5px);
}
footer .menu li a{
    font-size: 1.2em;
    color: white;
    margin: 0 10px;
    display: inline-block;
    text-decoration: none;
    opacity: 0.5;
}
footer .menu li a:hover{
    opacity: 1;
}
.col-md-6{
    margin-top: 20px;
    margin-bottom: 20px;
}
.col-md-6 h2 a{
    list-style: none;
    text-decoration: none;
    color: white;
    opacity: 0.5;
    transition: 0.5s;
}
.col-md-6 h2 a:hover{
    opacity: 1;
    
}
.css-selector {
    background: linear-gradient(46deg, #12c2e9, #c471ed, #f64f59, #000000);
    background-size: 800% 800%;

    -webkit-animation: animace 15s ease infinite;
    -moz-animation: animace 15s ease infinite;
    -o-animation: animace 15s ease infinite;
    animation: animace 15s ease infinite;
}

@-webkit-keyframes animace {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@-moz-keyframes animace {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@-o-keyframes animace {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@keyframes animace {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}

</style>
<script>
    AOS.init();
  </script>
</body>