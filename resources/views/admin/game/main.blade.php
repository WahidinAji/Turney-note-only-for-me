<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/1407b65bc5.js"></script>
    <style>
      .badge{
      padding: 0;
      margin: 1px;
    }
    i.fa{
      margin: 0;
      font-size: 20px;
      color: #222831;
    }
    i.fa:hover{
      color: aqua;
    }
    i.fa.fa-trash:hover, i.fa.fa-arrow-circle-left:hover{
      color: #f72f46;
    }
    i.fa.fa-table.mr-1{
      color: white;
    }
    i.fa.fa-sign-out{
      color: white;
    }
    /* i.fa.fa-sign-out:hover{
      color: aqua;
    } */
    i.fa.fa.fa-plus-circle, i.fa.fa-arrow-circle-left{
      font-size: 30px;
      margin-top: -30px;
    }
    i.fa.fa-plus-circle:hover{
      color: green;
    }
    /* i.fa.fa-arrow-circle-left{
      font-size: 30px;
      color: black;
    } */
    </style>

    <title>ADMIN</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Game</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!--MAIN-->
    <main>
      <div class="container">
        @yield('main')
      </div>
    </main>
    <!--END MAIN-->

    <!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    @stack('tooltip')
  </body>
</html>