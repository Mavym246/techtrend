<html lang="en"><head>
    <title>Products</title>
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
    
    <section style="display:flex;"class="h-100">
    <div class="container" style="display:flex; justify-content:center; flex-direction:column; flex-wrap:wrap; align-content:center; align-items:center;">
        <h1>Create Product</h1>

        <form action="{{ route('products.store') }}" method="POST">
            @csrf
            <div class="form-floating mb-3 text-white">
  <input type="text" name="name" required class="form-control bg-dark text-white" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput bg-dark">Name:</label>
</div>
    
<div class="form-floating mb-3 text-white">
  <input type="text" name="price" required class="form-control bg-dark text-white" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput bg-dark">Price:</label>
</div>

<div class="form-floating mb-3 text-white">
  <input type="text" name="description" required class="form-control bg-dark text-white" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput bg-dark">Description:</label>
</div>
      
<div class="form-floating mb-3 text-white">
  <input type="text" name="image" required class="form-control bg-dark text-white" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput bg-dark">Image URL:</label>
</div>

<div class="form-floating mb-3 text-white">
  <input type="date" name="release_date" required class="form-control bg-dark text-white" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput bg-dark">Release Date:</label>
</div>
            
<div class="form-floating mb-3 text-white">
  <input type="text" name="category_id" required class="form-control bg-dark text-white" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput bg-dark">Category ID:</label>
</div>
            
<button type="submit" class="btn btn-outline-light" style="display:flex;">Create</button>    
        </form>
    </div>
    </section>

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
            color: white;
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
      </style>
</body>
</html>