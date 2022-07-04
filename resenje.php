<?php
    require "config/connection.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/images/logoict.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta charset="utf-8"/>
  <title>
    Praktikum PHP - Laboratorijska vežba 2
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <link href="assets/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="purple" data-background-color="white" data-image="assets/img/sidebar-3.jpg">
      <div class="logo">
        <a href="index.php" class="simple-text logo-normal">
          Praktikum PHP
        </a>
		
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li class="nav-item active  ">
            <a class="nav-link" href="https://webdizajn.ict.edu.rs/">
              <i class="material-icons">school</i>
              <p>Laboratorijska vežba 1</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="https://webdizajn.ict.edu.rs/">
              <i class="material-icons">school</i>
              <p>Laboratorijska vežba 2</p>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="https://webdizajn.ict.edu.rs/">
              <i class="material-icons">school</i>
              <p>Laboratorijska vežba 3</p>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="https://webdizajn.ict.edu.rs/">
              <i class="material-icons">school</i>
              <p>Laboratorijska vežba 4</p>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="https://webdizajn.ict.edu.rs/">
              <i class="material-icons">school</i>
              <p>Laboratorijska vežba 5</p>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="https://webdizajn.ict.edu.rs/">
              <i class="material-icons">school</i>
              <p>Laboratorijska vežba 6</p>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="https://webdizajn.ict.edu.rs/">
              <i class="material-icons">school</i>
              <p>Laboratorijska vežba 7</p>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="https://webdizajn.ict.edu.rs/">
              <i class="material-icons">school</i>
              <p>Laboratorijska vežba 8</p>
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="https://webdizajn.ict.edu.rs/">
              <i class="material-icons">school</i>
              <p>Laboratorijska vežba 9</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top ">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="#pablo">Laboratorijska vežba 2</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">

            <a href="https://www.ict.edu.rs/zaposleni/nastavnik/dr-nenad-kojic"><img src="assets/images/nkojic.png" class="img-responsive img-circle" alt="Nenad Kojic"/></a>
            <a href="https://www.ict.edu.rs/zaposleni/nastavnik/milena-vesic"><img src="assets/images/mvesic.jpg" class="img-responsive img-circle" alt="Milena Vesic"/></a>
            <a href="https://www.ict.edu.rs/zaposleni/nastavnik/nikola-mihajlovic"><img src="assets/images/nmihajlovic.jpg" class="img-responsive img-circle" alt="Nikola Mihajlovic"/></a>
            <a href="https://www.ict.edu.rs/zaposleni/nastavnik/danijela-nikitin"><img src="assets/images/dnikitin.jpg" class="img-responsive img-circle" alt="Danijela Nikitin"/></a>
            <a href="https://www.ict.edu.rs/zaposleni/nastavnik/luka-lukic"><img src="assets/images/llukic.png" class="img-responsive img-circle" alt="Luka Lukic"/></a>
			
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="material-icons">dashboard</i>
                  <p class="d-lg-none d-md-block">
                    Stats
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">5</span>
                  <p class="d-lg-none d-md-block">
                    Some Actions
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Mike John responded to your email</a>
                  <a class="dropdown-item" href="#">You have 5 new tasks</a>
                  <a class="dropdown-item" href="#">You're now friend with Andrew</a>
                  <a class="dropdown-item" href="#">Another Notification</a>
                  <a class="dropdown-item" href="#">Another One</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    Account
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">Profile</a>
                  <a class="dropdown-item" href="#">Settings</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="content">
        <div class="container-fluid">
          <div class="row">
          
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header card-header-success">
                        <h4 class="card-title">Proizvodi</h4>
                        <div class="input-field">
                            <input type="text" placeholder="Pretraži.." class="validate" id="txtPretraga">
                        </div>
                    </div>
                    <div class="card-body table-responsive">
                    <table class="table table-hover">
                        <thead class="text-warning">
                            <th>ID</th>
                            <th>Naziv</th>
                            <th>Cena</th>
                            <th>Kategorija</th>
                        </thead>

                        <!-- PRIKAZ PROIZVODA -->

                        <tbody id="proizvodi">
                        <?php
                            $proizvodi = executeQuery("SELECT p.*, c.name AS categoryName FROM products p INNER JOIN categories c ON p.category_id = c.id");

                            $rb = 1;
                            foreach($proizvodi as $proizvod):
                        ?>
                            <tr data-id="<?= $proizvod->id?>">
                                <td><?= $rb++ ?></td>
                                <td><?= $proizvod->name ?></td>
                                <td><?= $proizvod->price ?> din.</td>
                                <td><?= $proizvod->categoryName ?></td>
                            </tr>
                        <?php 
                            endforeach; 
                        ?>
                            
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card">
                    <div class="card-header card-header-warning">
                        <h4 class="card-title">Unesi proizvod</h4>
                    </div>
                    <div class="card-body table-responsive">

                    <!-- FORMA ZA UNOS -->

                    <form>

                        <div class="input-field">
                            <input type="text" id="naziv" placeholder="Unesi naziv" class="validate">
                            <label for="first_name">Naziv</label>
                        </div>
                        <div class="input-field">
                            <textarea id="opis" placeholder="Unesi opis" class="materialize-textarea"></textarea>
                            <label for="first_name">Opis</label>
                        </div>
                        <div class="row">
                          <div class="input-field col s6">
                              <input type="number" id="cena" placeholder="Unesi cenu" class="validate">
                              <label for="first_name">Cena</label>
                          </div>
                          <div class="input-field col s6">
                              <input type="number" id="kolicina" placeholder="Unesi kolicinu" class="validate">
                              <label for="first_name">Kolicina</label>
                          </div>
                        </div>
                        <div class="input-field">
                            <select id="kategorija">
                                <option value="0" disabled selected>Izaberite kategoriju</option>
                                <?php
                                    $kategorije = executeQuery("SELECT * FROM categories");
                                    foreach($kategorije as $kategorija):
                                ?>
                                    <option value="<?= $kategorija->id?>"><?= $kategorija->name ?></option>
                                <?php
                                    endforeach;
                                ?>
                            </select>
                            <label>Kategorija</label>
                        </div>
                        <div class="input-field">
                            <?php
                                $velicine = executeQuery("SELECT * FROM sizes");
                                foreach($velicine as $velicina):
                            ?>
                                <p class="col s6">
                                    <label>
                                        <input type="checkbox" value="<?= $velicina->id ?>" name="velicine"/>
                                        <span><?= $velicina->size ?></span>
                                    </label>
                                </p>
                            <?php
                                endforeach;
                            ?>
                        </div>
                        <div class="input-field">
                            <input type="button" value="Sačuvaj" id="btnSacuvaj" class="btn btn-success col s12"/>
                        </div>   
                    </form>
                    </div>
                </div>
                
            </div>                
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class="container-fluid">
          <div class="float-left">
            
          </div>
          <div class="copyright float-right">
            <p class="text-right">Created by <a href="https://www.ict.edu.rs/zaposleni/nastavnik/danijela-nikitin">Danijela Nikitin</a></p>
              &copy;
              <script>
                document.write(new Date().getFullYear())
              </script>, design made with <i class="material-icons">favorite</i> by
              <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a> for a better web. 
          </div>
        </div>
      </footer>
    </div>
  </div>
  <div class="fixed-plugin">
    <div class="dropdown show-dropdown">
      <a href="#" data-toggle="dropdown">
        <i class="fa fa-cog fa-2x"> </i>
      </a>
      <ul class="dropdown-menu">
        <li class="header-title"> Sidebar Filters</li>
        <li class="adjustments-line">
          <a href="javascript:void(0)" class="switch-trigger active-color">
            <div class="badge-colors ml-auto mr-auto">
              <span class="badge filter badge-purple" data-color="purple"></span>
              <span class="badge filter badge-azure" data-color="azure"></span>
              <span class="badge filter badge-green" data-color="green"></span>
              <span class="badge filter badge-warning" data-color="orange"></span>
              <span class="badge filter badge-danger" data-color="danger"></span>
              <span class="badge filter badge-rose active" data-color="rose"></span>
            </div>
            <div class="clearfix"></div>
          </a>
        </li>
        <li class="header-title">Images</li>
        <li class="active">
          <a class="img-holder switch-trigger" href="javascript:void(0)">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
            <img src="assets/img/sidebar-3.jpg" alt="">
          </a>
        </li>
        <li>
          <a class="img-holder switch-trigger" href="javascript:void(0)">
          </a>
        </li>
        <li class="header-title">Thank you for 95 shares!</li>
        <li class="button-container text-center">
          <button id="twitter" class="btn btn-round btn-twitter"><i class="fa fa-twitter"></i> &middot; 45</button>
          <button id="facebook" class="btn btn-round btn-facebook"><i class="fa fa-facebook-f"></i> &middot; 50</button>
          <br>
          <br>
        </li>
      </ul>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap-material-design.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="assets/js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="assets/js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="assets/js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="assets/js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="assets/js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="assets/js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="assets/js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="assets/js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="assets/js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="assets/js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <!-- Library for adding dinamically elements -->
  <script src="assets/js/plugins/arrive.min.js"></script>
  <!-- Chartist JS -->
  <script src="assets/js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <script src="assets/js/base.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <!-- ZA VEZBU -->
  <script src="assets/js/main.js"></script>
</body>

</html>
