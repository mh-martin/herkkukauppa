<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?= base_url('/css/herkkukauppa.css'); ?>">
    <title></title>
  </head>
  <body>
  <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <a class="navbar-brand" href="#">Herkkuhetki</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Irtokarkit
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Salmiakit</a>
                  <a class="dropdown-item" href="#">Kirpeät karkit</a>
                  <a class="dropdown-item" href="#">Kovat karkit</a>
                  <a class="dropdown-item" href="#">Lakritsit</a>
                  <a class="dropdown-item" href="#">Vaahtokarkit</a>
                  <a class="dropdown-item" href="#">Toffeet</a>
                  <a class="dropdown-item" href="#">Viinikumit</a>
                  
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Pakatut makeiset
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Karkkipussit</a>
                  <a class="dropdown-item" href="#">Karkkilaatikot</a>
                  <a class="dropdown-item" href="#">Lakupatukat</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Suklaat
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Suklaalevyt</a>
                  <a class="dropdown-item" href="#">Suklaapatukat</a> 
                  <a class="dropdown-item" href="#">Suklaamunat</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Teemakarkit
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Joulu</a>
                  <a class="dropdown-item" href="#">Pääsiäinen</a>
                  <a class="dropdown-item" href="#">Halloweenkarkit</a>
                  <a class="dropdown-item" href="#">Ystävänpäivä</a>
                </div>
              </li>
            </ul>
            <?php echo '<div><a href="' . site_url('cart/index') . '">Ostoskori<a/></div>' ?>
             <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="" placeholder="Etsi tuotteita" aria-label="Etsi">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Etsi Tuotteita</button>
            </form>
          </div>
      </nav>
    </div>
      <div class="container">

   