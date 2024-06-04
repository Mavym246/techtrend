<html lang="en"><head>
  <title>Home page</title>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="Buyport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script><style type="text/css" id="operaUserStyle"></style>

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
    
    <section class="senction" id="HOME">
        <div class="container-fluid container-fluid1 color" style="height:54rem;">
        <div class="wrapper">        
       <h2 class="section-title">TECHTREND</h2>
       <p class="section-info">Discover our modern technologies <br> With us, everything is possible</p>
       </div>
       </div>
       </section>
    
<section class="section-categories diagonal" style="margin-bottom:8rem; margin-top:5rem;" id="CATEGORIES">
        <div class="container">
        <h1 class="site-title white" style="margin-bottom:8rem;">Top Categories</h1>
        <div class="wrapper wrapper2">
        
        </div>
        <div class="wrapper wrapper2">
    <li><a href="categories/1">Phones</a></li>
    <li><a href="categories/8">Headphones</a></li>
    <li><a href="categories/2">Smartwatches</a></li>
    <li><a href="categories/11">Accesories</a></li>
</div>
       </div>
       </section>
    <section class="section-neco" style="height:35rem;" id="REVIEWS">
    <div class="container marketing" style="margin-top:3rem;">

<!-- Three columns of text below the carousel -->
<div class="row">
  <div class="col-lg-4" style="display:flex; align-items:center; flex-direction:column;">
    <img class="img" style="margin-bottom: 20px;" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect></img>

    <h2 class="white">Cole</h2>
    <p class="white">I bought a phone for my son and was pleasantly surprised. The staff was really friendly. I recommend it to everyone.</p>
    
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4" style="display:flex; align-items:center; flex-direction:column;">
    <img class="img" style="margin-bottom: 20px;" src="public/assets/maria.png" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect></img>

    <h2 class="white">Maria</h2>
    <p class="white">I went there to get a refund of headphones i bought a week ago because they didnt fit me and there was no problem, really recommend.</p>
    
  </div><!-- /.col-lg-4 -->
  <div class="col-lg-4" style="display:flex; align-items:center; flex-direction:column;">
    <img class="img" style="margin-bottom: 20px;" xmlns="http://www.w3.org/2000/svg" role="img" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"></rect></>

    <h2 class="white">Nicholas</h2>
    <p class="white">I bought a notebook from them. Everything was alright, it came in time and nothing was damaged. Really good</p>
    
  </div><!-- /.col-lg-4 -->
</div><!-- /.row -->

</div>

<div class="container py-4" id="ABOUT US" style="margin-top:25rem;">
    <div class="p-5 mb-4 rounded-3" style="background-image:linear-gradient(45deg, #12c2e9, #c471ed, #f64f59);">
      <div class="py-5 container-fluid">
        <h1 class="display-5 fw-bold">About us</h1>
        <p class="col-md-8 fs-4">With over a decade of experience in the market, we have earned the trust of thousands of satisfied customers through our commitment to providing quality products and excellent service. We specialize in the latest technologies and trends in mobile phones, tablets, computers and accessories such as handsets and smart watches.</p>
      </div>
    </div>

    <div class="row align-items-md-stretch">
      <div class="col-md-6">
        <div class="p-5 text-white h-100 rounded-3" style="background:#12c2e936;">
          <h2>Where can you find us?</h2>
          <p>Galerie Harfa</p>
          <p>Českomoravská 190 00  Praha 9</p>
        </div>
      </div>
      <div class="col-md-6 zkrek">
        <div class="p-5 border h-100 bg-light rounded-3">
          <h2>Opening hours</h2>
          <p>Mo - Fr    8:00-20:00</p>
          <p>Sa - Sn    9:00-19:00</p>
        </div>
      </div>
    </div>

    
  </div>
    
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
            <li><a href="#ABOUT US">ABOUT US</li>
        </div> 
               <a style="color:black" href="/login">admin</a>
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
    .img{
      width: 200px;
      height: 200px;
      border: 5px solid linear-gradient(45deg, #12c2e9, #c471ed, #f64f59);
      float: left;
      border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
      background-size: cover;
      background-blend-mode: multiply;
      animation: morph 8s ease-in-out infinite;
      background-image: linear-gradient(45deg, #12c2e9, #c471ed, #f64f59);
    }
    @keyframes morph{
      0%{
        border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
      }
      50%{
        border-radius: 30% 60% 70% 40% / 50% 60% 30% 60%;
        
      }
      100%{
        border-radius: 60% 40% 30% 70% / 60% 30% 70% 40%;
      }
    }
.wrapper{
    max-width: 50rem;
    margin-left: auto;
    margin-right: auto;
    padding-inline: 6rem;
}
.wrapper2{
    display: flex;
    max-width: 80rem;
    flex-wrap: nowrap;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
}
.wrapper2 li{
    list-style: none;
}
.wrapper2 li a{
    font-size: 1.2em;
    color: white;
    margin: 0 10px;
    list-style: none;
    text-decoration: none;
    opacity: 0.7;
    transition: 0.3s;
}
.wrapper2 li a:hover{
    opacity: 1;
}
.section-title{
    font-size: 5rem;
    color: white;
}
.site-title{
    font-size: 6rem;
    text-align: center;
}
.section-info{
    color:white;
    font-size: 20px;
}
section{
    padding-block: 5rem;
    
}
.diagonal {
  --skew-angle: -5deg;
  --background: linear-gradient(
                  45deg, 
                  #12c2e9, 
                  #c471ed, 
                  #f64f59
                );

  position: relative;
  isolation: isolate;
}

.diagonal::after {
  content: '';
  background: var(--background);
  position: absolute;
  z-index: -1;
  inset: 0;
  transform: skewY(var(--skew-angle));
}
.container-fluid1{
    display:flex;
    flex-direction: column;
    align-content: flex-start;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
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
    transition: 0.2s ease-in;
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
@media only screen and (max-width: 700px) {
  .container-fluid1{
    display: flex;
    flex-direction: column;
    align-content: center;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    justify-self: center;
    align-self: center;
  }
  .section-title{
    font-size: 4rem;
  }
}
@media only screen and (max-width: 775px){
  .site-title{
    font-size: 4rem;
  }
  .wrapper2{
    display: flex;
    max-width: 50rem;
    flex-wrap: wrap;
    flex-direction: column;
    align-items: center;
    margin: 5px;
  }
  .zkrek{
    padding-top: 25px;
  }
}
</style>

</body>
</html>