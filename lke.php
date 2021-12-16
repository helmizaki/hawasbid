<html lang="en">


<?php
session_start();
include "head.php";

?>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header">
        <!--Header START-->
        <div class="app-header header-shadow bg-grow-early header-text-light">
            <div class="app-header__logo">
                <img src="assets/images/logo_ma.png" width="15%" alt="">
                <span style="font-size: 20px; color: white; padding-left: 10px;"> PMP-APM</span>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <a href="https://pmpapm.badilag.net/apm/" class="text-white"> <i class="fa fa-home"> </i> Beranda</a>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="ml-2 rounded-circle" src="assets/images/logo.png" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>

                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">

                                            <div class="scroll-area-xs" style="height: 100px;">
                                                <div class="scrollbar-container ps">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item">My Account
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="https://pmpapm.badilag.net/apm/page/setting" class="nav-link">
                                                                Setting
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider mb-0 nav-item"></li>
                                            </ul>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-wide btn-primary btn-shine btn btn-focus">Keluar
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        PENGADILAN AGAMA NGAWI </div>
                                    <div class="widget-subheading">
                                        401508 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Header END-->
        <div class="app-main">
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="tabs-animation">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="card">
                                    <div class="card-body"><i class="fas fa-chart-bar"></i>
                                        Tahun : <b id="col2"> <?php echo $_POST["col2"]; ?> </b>
                                        <div class="btn-actions-pane-right actions-icon-btn">

                                        </div>
                                    </div>
                                    <div class="card-body"><i class="fas fa-chart-bar"></i>
                                        Semester : <b id="col1"> <?php echo $_POST["col1"]; ?></b>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="card mb-3">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i> <b>Telusur HAWASBID </b> </div>

                                    </div>
                                    <div class="card-body">

                                        <hr>

                                        <h5 class="card-title">Bidang Pengawasan</h5>
                                        <table class="mb-0 table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Kriteria/ Ruang Lingkup</th>
                                                    <th>#</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">1</th>
                                                    <td>Administrasi Perkara, Persidangan, dan Bindalmin </td>

                                                    <td>
                                                        <button class="btn btn-success bidang1">
                                                            <i class="fa fa-edit btn-icon-wrapper bidang1"></i>Detail
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">2</th>
                                                    <td>Administrasi Penyelesaian Perkara dan Bindalmin </td>

                                                    <td>
                                                        <button class="btn btn-success">
                                                            <i class="fa fa-edit btn-icon-wrapper"></i>Detail
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">3</th>
                                                    <td>Administrasi Umum </td>

                                                    <td>
                                                        <button class="btn btn-success">
                                                            <i class="fa fa-edit btn-icon-wrapper"></i>Detail
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">4</th>
                                                    <td>Pelayanan Publik dan Teknologi Informasi </td>

                                                    <td>
                                                        <button class="btn btn-success">
                                                            <i class="fa fa-edit btn-icon-wrapper"></i>Detail
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th scope="row">5</th>
                                                    <td>Manajemen Pengadilan dan Administrasi Umum </td>

                                                    <td>
                                                        <button class="btn btn-success">
                                                            <i class="fa fa-edit btn-icon-wrapper"></i>Detail
                                                        </button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left pl-4">
                                Hak Cipta Badan Peradilan Agama - Mahkamah Agung RI
                            </div>
                            <div class="app-footer-right">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-success" onclick="topFunction()" id="myBtn" title="Go to top" style="display: none;">Kembali ke atas</button>
    <style>
        #myBtn {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Fixed/sticky position */
            bottom: 20px;
            /* Place the button at the bottom of the page */
            right: 30px;
            /* Place the button 30px from the right */
            z-index: 99;
            /* Make sure it does not overlap */

            cursor: pointer;
            /* Add a mouse pointer on hover */

        }

        #myBtn:hover {
            background-color: #555;
            /* Add a dark-grey background on hover */
        }
    </style>
    <script>
        mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        }

        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>

    <!--CORE-->

</body>

</html>
<script>
    $('.bidang1').click(function() {
        var tahun = document.getElementById('col2').innerHTML;
        var semester = document.getElementById('col1').innerHTML;
        $.redirect('bidang_1.php', {
            'tahun': tahun,
            'semester': semester
        }, "POST", "_blank");

    });
</script>