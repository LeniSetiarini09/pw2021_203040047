<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>BEAUTY COSMETIC</title>

  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />

  <!-- my css -->
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body id="home" class="scrollspy">

  <!-- NAVBAR -->
  <div class="navbar-fixed">
    <nav class="teal">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#home" class="brand-logo">BEAUTY STORE</a>
          <a href="" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#home">HOME</a></li>
            <li><a href="#produk">PRODUK</a></li>
            <li><a href="#pesan">PESAN!</a></li>
            <li>
              <a href="php/login.php" class="waves-effect waves-light btn">LOGIN</a>
            </li>
          </ul>
        </div>
    </nav>
  </div>

  <!--Sidenav-->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="#home">HOME</a></li>
    <li><a href="#produk">PRODUK</a></li>
    <li><a href="#pesan">PESAN!</a></li>
    <li><a href="php/login.php">LOGIN</a></li>
  </ul>

  <!--Slider-->
  <div id="home" class="slider scrollspy">
    <ul class="slides">
      <li>
        <img src="../assets/img/makeup.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h1 class="black-text"><b>HALLO!</b></h1>
          <h3 class="darken black-text text-darken-3">SELAMAT DATANG</h3>
          <h3 class="darken black-text text-lighten-3">DI BEAUTY STORE</h3>
        </div>
      </li>
    </ul>
  </div>

  <!-- SEARCH -->
  <div id="produk" class="container">
    <br>
    <br>
    <form action="" method="GET">
      <input type="text" name="keyword">
      <button type="submit" name="cari" class="btn teal">Cari!</button>
      <button class="btn teal"><a href="index.php"></a> BACK</button>
    </form>
    <br>
    <br>

    <!-- DATABASE -->
    <ul class="collection">
      <li class="collection-item avatar">
        <i class="material-icons circle">local_mall</i>
        <p>
          <a href="php/detail.php?id=2">
            Mascara </a>
        </p>
        <a href="php/detail.php?id=2" class="secondary-content"><i class="material-icons">view_list</i></a>
      </li>
    </ul>
    <ul class="collection">
      <li class="collection-item avatar">
        <i class="material-icons circle">local_mall</i>
        <p>
          <a href="php/detail.php?id=3">
            Eye Shadow </a>
        </p>
        <a href="php/detail.php?id=3" class="secondary-content"><i class="material-icons">view_list</i></a>
      </li>
    </ul>
    <ul class="collection">
      <li class="collection-item avatar">
        <i class="material-icons circle">local_mall</i>
        <p>
          <a href="php/detail.php?id=4">
            Pensil Alis </a>
        </p>
        <a href="php/detail.php?id=4" class="secondary-content"><i class="material-icons">view_list</i></a>
      </li>
    </ul>
    <ul class="collection">
      <li class="collection-item avatar">
        <i class="material-icons circle">local_mall</i>
        <p>
          <a href="php/detail.php?id=5">
            Lipstik </a>
        </p>
        <a href="php/detail.php?id=5" class="secondary-content"><i class="material-icons">view_list</i></a>
      </li>
    </ul>
    <ul class="collection">
      <li class="collection-item avatar">
        <i class="material-icons circle">local_mall</i>
        <p>
          <a href="php/detail.php?id=6">
            Concealer </a>
        </p>
        <a href="php/detail.php?id=6" class="secondary-content"><i class="material-icons">view_list</i></a>
      </li>
    </ul>
    <ul class="collection">
      <li class="collection-item avatar">
        <i class="material-icons circle">local_mall</i>
        <p>
          <a href="php/detail.php?id=7">
            Foundation </a>
        </p>
        <a href="php/detail.php?id=7" class="secondary-content"><i class="material-icons">view_list</i></a>
      </li>
    </ul>
    <ul class="collection">
      <li class="collection-item avatar">
        <i class="material-icons circle">local_mall</i>
        <p>
          <a href="php/detail.php?id=8">
            Bedak </a>
        </p>
        <a href="php/detail.php?id=8" class="secondary-content"><i class="material-icons">view_list</i></a>
      </li>
    </ul>
    <ul class="collection">
      <li class="collection-item avatar">
        <i class="material-icons circle">local_mall</i>
        <p>
          <a href="php/detail.php?id=9">
            Primer </a>
        </p>
        <a href="php/detail.php?id=9" class="secondary-content"><i class="material-icons">view_list</i></a>
      </li>
    </ul>
    <ul class="collection">
      <li class="collection-item avatar">
        <i class="material-icons circle">local_mall</i>
        <p>
          <a href="php/detail.php?id=10">
            Blush On </a>
        </p>
        <a href="php/detail.php?id=10" class="secondary-content"><i class="material-icons">view_list</i></a>
      </li>
    </ul>
  </div>

  <!--Contact Me-->
  <section id="pesan" class="contact misty rose scrollspy">
    <div class="container">
      <h3 class="misty rose-text text-darken-3 center">Pesan Sekarang!</h3>
      <div class="row">
        <div class="col m5 s12">
          <div class="card-panel misty rose center black-text">
            <i class="material-icons">email</i>
            <h5>Kontak</h5>
            <p>Kami akan memberikan yang terbaik untuk pelanggan</p>
          </div>
          <ul class="collection with-header">
            <li class="collection-header">
              <h4 class="center">Toko Kami</h4>
            </li>
            <li class="collection-item">BEAUTY STORE</li>
            <li class="collection-item">Jalan Manohara, Bandung No.43</li>
            <li class="collection-item">Jawa Barat, Indonesia</li>
          </ul>
        </div>
        <div class="col m7 s12">
          <form>
            <div class="card-panel">
              <h5>Silahkan isi form ini untuk pemesanan</h5>
              <div class="input-field">
                <input type="text" name="name" id="name">
                <label for="name">Nama</label>
              </div>
              <div class="input-field">
                <input type="email" name="email" id="email">
                <label for="name">Email</label>
              </div>
              <div class="input-field">
                <input type="text" name="phone" id="phone">
                <label for="name">Nomor Telepon</label>
              </div>
              <div class="input-field">
                <textarea name="message" id="message" class="materialize-textarea"></textarea>
                <label for="message">Pesanan</label>
              </div>
              <button type="submit" class="btn misty rose">Send</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!--Footer-->
  <footer class="teal black-text center">
    <p> © 2021 by Leni Setiarini </p>
  </footer>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.min.js"></script>

  <script type="text/javascript">
    const sidenav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sidenav);

    const slider = document.querySelectorAll('.slider');
    M.Slider.init(slider, {
      indicators: false,
      height: 500,
      duration: 3000
    });

    const parallax = document.querySelectorAll('.parallax');
    M.Parallax.init(parallax);

    const materialbox = document.querySelectorAll('.materialboxed');
    M.Materialbox.init(materialbox);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrolloffset: 50
    });
  </script>

</body>

</html>