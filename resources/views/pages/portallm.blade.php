
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="content-type" content="application/vnd.ms-excel; charset=UTF-8">
    <meta name="description" content="PTPN I">
    <meta name="author" content="PTPN I">
    <meta name="keyword" content="ptpn1">
    <!-- <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon"> -->
    <title>Dashboard PTPN I</title>
    <link rel="shortcut icon" href="https://nadine.ptpn1.co.id/assets/logosupco.png" />

    <!-- Vendor css -->
    <link href="{{url('')}}/assets/css/materialdesignicons.min.css" rel="stylesheet">
    <!-- Base css with customised bootstrap included -->
    <link href="{{url('')}}/assets/css/miri-ui-kit-free.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/customptpn.css" rel="stylesheet">
    <link href="{{url('')}}/assets/css/customsearchbar.css" rel="stylesheet">
    <!-- Stylesheet for demo page specific css -->
    <link href="{{url('')}}/assets/css/demo.css" rel="stylesheet">
    <script src="{{url('')}}/assets/js/65eeb291f3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Droid+Sans:wght@400;700&display=swap">
</head>
<style>
            body {
                background-color: #081028; 
                font-family: 'Droid Sans', sans-serif;
            }
            .team-card, .team-card h5{
                background-color: #374C88;
                color: #f1f1f1;
            }
            .team-card h5{
                font-size:1.1rem;
            }
            .fixed-on-scroll.fixed-on-top{
                background-color:transparent!important;
                box-shadow: 0 1px 10px rgb(151 164 175 / 0%)!important;
                z-index: 888;
            }
            .buttonview {
                border: 1px solid #f1f1f1;
                padding: 7px 15px;
                border-radius: 15px;
                color: #f1f1f1;
            }
            .card-img-top {
                margin-top: 1em;
            }
            .card-body.px-0{
                padding-top: 1em;
            }

            .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            width: 0;
            height: 100%;
            background-color: #202124;
            overflow-x: hidden;
            transition: width 0.3s;
            z-index: 998;
        }

        .sidebar.open {
            width: 200px;
        }

        .sidebar .menu {
            display: none;
            padding-top: 30%;
        }

        .sidebar.open .menu {
            display: block;
        }

        .sidebar a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #e8e8e8;
            text-align: left;
            transition: background-color 0.3s;
            font-size: 1em;
        }

        .sidebar a:hover {
            background-color: #575757;
        }
        .sidebar.open ~ .main-content {
            margin-left: 200px;
        }

        .icon {
            position: fixed;
            top: 5px;
            left: 5px;
            cursor: pointer;
            z-index: 1000;
        }

        .icon img {
            width: 30px;
            height: 30px;
        }
        .submenu {
            display: none;
            background-color: #3c4043;
        }

        .submenu a {
            padding-left: 30px;
        }

        .sidebar a.active + .submenu {
            display: block!important;
        }
        .sidebar .parents.a.active + .submenu {
            display: block!important;
        }
        .toggle-icon {
            float: right;
            transition: transform 0.3s;
        }

        .toggle-icon.open {
            transform: rotate(90deg);
        }
        .subsub {
            padding-left:10px;
        }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<body>
    <div class="icon" id="menuIcon">
        <img src="{{url('')}}/asset/images/menu.png" alt="Menu Icon">
    </div>
    @include('layouts.sidebar')
    <div class=" fixed-on-scroll" style="text-align:center;">
        <img src="{{url('')}}/asset/images/portallm.png" class="header" style="width:95%;" >
                
    </div>
    <div style="clear:both"></div>
    <Section class="miri-ui-kit-section team-members-section" >
        <div class="container">
            <!-- <h2 class="pb-2 mb-5" align="center">Daftar Aplikasi</h2> -->
            <div class="row">
                

                <div class="col-md-3" style="margin: 15px 0 !important;">
                    <div class="team-card card border-0 raise-on-hover">
                        <div align="center">
                                                <a href="{{url('')}}/lm/LM13.xlsx">
                            <img src="{{url('')}}/asset/images/aset.png" alt="Gambar" class="card-img-top" style="border-radius: 55px; max-height:150px;">
                        </a>
                                                </div>
                        <div class="card-body px-0">
                            <h5 class="card-title mb-0" align="center">LM 13 Biaya Produksi Karet</h5>
                            <!-- <p class=" font-weight-medium designation">Team IT PTPN</p> -->
                            <div align="center">LM Biaya Produksi Karet</div>
                            <br>
                            <!-- <p class="social-links"> -->
                            <div align="center">
                                                        <a href="{{url('')}}/lm/LM13.xlsx">
                                <span class="buttonview">
                                <i class="fas fa-sign-in-alt"></i>
                                    Masuk
                                </span>
                            </a>
                           
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="margin: 15px 0 !important;">
                    <div class="team-card card border-0 raise-on-hover">
                        <div align="center">
                            <a href="{{url('')}}/lm/LM34.xlsx">
                                <img src="{{url('')}}/asset/images/superman.png" alt="Gambar" class="card-img-top" style="border-radius: 55px; max-height:150px;">
                            </a>
                        </div>
                        <div class="card-body px-0">
                            <h5 class="card-title mb-0" align="center">LM34 Pemasaran</h5>
                            <!-- <p class=" font-weight-medium designation">Team IT PTPN</p> -->
                            <div align="center">LM Pemasaran</div>
                            <br>
                            <!-- <p class="social-links"> -->
                            <div align="center">
                            <a href="{{url('')}}/lm/LM34.xlsx">
                                <span class="buttonview">
                                <i class="fas fa-sign-in-alt"></i>
                                    Masuk
                                </span>
                            </a>
                           
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3" style="margin: 15px 0 !important;">
                    <div class="team-card card border-0 raise-on-hover">
                        <div align="center">
                                                <a href="{{url('')}}/lm/LM42.xlsx">
                            <img src="{{url('')}}/asset/images/money.png" alt="Gambar" class="card-img-top" style="border-radius: 55px; max-height:150px;">
                        </a>
                                                </div>
                        <div class="card-body px-0">
                            <h5 class="card-title mb-0" align="center">LM42 Biaya Umum</h5>
                            <!-- <p class=" font-weight-medium designation">Team IT PTPN</p> -->
                            <div align="center">LM Biaya Umum</div>
                            <br>
                            <!-- <p class="social-links"> -->
                            <div align="center">
                                                        <a href="{{url('')}}/lm/LM42.xlsx">
                                <span class="buttonview">
                                <i class="fas fa-sign-in-alt"></i>
                                    Masuk
                                </span>
                            </a>
                           
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3" style="margin: 15px 0 !important;">
                    <div class="team-card card border-0 raise-on-hover">
                        <div align="center">
                                                <a href="{{url('')}}/lm/posisistock.xlsx">
                            <img src="{{url('')}}/asset/images/block.png" alt="Gambar" class="card-img-top" style="border-radius: 55px; max-height:150px;">
                        </a>
                                                </div>
                        <div class="card-body px-0">
                            <h5 class="card-title mb-0" align="center">Posisi Stock</h5>
                            <!-- <p class=" font-weight-medium designation">Team IT PTPN</p> -->
                            <div align="center">Posisi Stock</div>
                            <br>
                            <!-- <p class="social-links"> -->
                            <div align="center">
                                                        <a href="{{url('')}}/lm/posisistock.xlsx">
                                <span class="buttonview">
                                <i class="fas fa-sign-in-alt"></i>
                                    Masuk
                                </span>
                            </a>
                           
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    </Section>
   
    
    <footer class="pt-5 mt-2 ">
        <div class="container">
            
            
            <nav class="navbar navbar-light bg-transparent navbar-expand d-block d-sm-flex text-center">
                <span class="navbar-text">&copy; Copyright © 2024  PT. Perkebunan Nusantara I. All rights reserved.</span>
              
            </nav>
        </div>
    </footer>

      <script>
        $(document).ready(function() {
            console.log('lalalala');
            $('#menuIcon img').click(function() {
                console.log('lalalala');
                $('.sidebar').toggleClass('open');
            });
        });
        $('.sidebar .parent').click(function(event) {
            event.preventDefault();
            var $this = $(this);
            var $submenu = $this.next('.submenu');
            var $icon = $this.find('.toggle-icon');

            // Close all other submenus
            $('.submenu').not($submenu).slideUp();
            $('.sidebar .parent').not($this).removeClass('active');
            $('.toggle-icon').not($icon).removeClass('open');
            $('.parents').removeClass('active');
            $('.parents .toggle-icon').removeClass('open');

            // Toggle the clicked submenu and icon
            $submenu.slideToggle();
            $this.toggleClass('active');
            $icon.toggleClass('open');
        });
        $('.sidebar .parents').click(function(event) {
            event.preventDefault();
            var $this = $(this);
            var $submenu = $this.next('.parents .submenu');
            var $icon = $this.find('.toggle-icon');

            // Close all other submenus
            $('.parents .submenu').not($submenu).slideUp();
            $('.sidebar .parents').not($this).removeClass('active');
            $('.toggle-icon').not($icon).removeClass('open');

            // Toggle the clicked submenu and icon
            $submenu.slideToggle();
            $this.toggleClass('active');
            $icon.toggleClass('open');
        });
    </script>
   
    <script src="http://portal.ptpn1.co.id/public/assets/vendors/jquery/dist/jquery.min.js"></script>
    <script src="http://portal.ptpn1.co.id/public/assets/vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="http://portal.ptpn1.co.id/public/assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="http://portal.ptpn1.co.id/public/assets/js/miri-ui-kit.js"></script>
</body>

</html>