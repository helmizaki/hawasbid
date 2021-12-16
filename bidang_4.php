<html lang="en">

<?php include "head.php"; ?>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header">
        <!--Header START-->
        <div class="app-header header-shadow bg-grow-early header-text-light">
            <div class="app-header__logo">
                <img src="assets/images/logo.png" width="15%" alt="">
                <span style="font-size: 20px; color: white; padding-left: 10px;"> HAWASBID</span>
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
                    <a href="main.php" class="text-white"> <i class="fa fa-home"> </i> Beranda</a>
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
                                                    <a href="https://pmpapm.badilag.net/apm/main/logout" class="btn-wide btn-primary btn-shine btn btn-focus">Keluar
                                                    </a>
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

                        <div class="card mb-3">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6">
                                    </i><b>Pelayanan Publik dan Teknologi Informasi</b></div>
                                <div class="btn-actions-pane-right actions-icon-btn">
                                    <a href="" class="  btn-square btn btn-primary"><i class="lnr-enter btn-icon-wrapper"> </i>Kembali</a>
                                </div>
                            </div>
                            <div class="card-body mt-3">

                                <table class="mb-0 table " id="tabelRiwayatLKE">
                                    <thead class="text-center">
                                        <tr>
                                            <th width="5%">#</th>
                                            <th width="5%">Area</th>
                                            <th width="40%">Kondisi / Temuan</th>

                                            <th width="10%">Eviden</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <tr>
                                            <th scope="row">1</th>

                                            <td>
                                                Website
                                            </td>
                                            <td>
                                                -
                                            </td>

                                            <td style="font-size: .7rem;">
                                                <button class="mb-2 mr-2 btn-pill btn btn-warning link1" data-id="1"><i class="fa fa-link"> </i> Link Eviden</button>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">2</th>

                                            <td>
                                                Sistem Informasi Penelusuran Perkara (SIPP)
                                            </td>
                                            <td>
                                                -
                                            </td>

                                            <td style="font-size: .7rem;">
                                                <button class="mb-2 mr-2 btn-pill btn btn-warning link2" data-id="2"><i class="fa fa-link"> </i> Link Eviden</button>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">3</th>

                                            <td>
                                                Pelayanan Satu Pintu (PTSP)
                                            </td>
                                            <td>
                                                -
                                            </td>

                                            <td style="font-size: .7rem;">
                                                <button class="mb-2 mr-2 btn-pill btn btn-warning link3" data-id="3"><i class="fa fa-link"> </i> Link Eviden</button>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>

                                            <td>
                                                Informasi
                                            </td>
                                            <td>
                                                -
                                            </td>

                                            <td style="font-size: .7rem;">
                                                <button class="mb-2 mr-2 btn-pill btn btn-warning link4" data-id="4"><i class="fa fa-link"> </i> Link Eviden</button>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">5</th>

                                            <td>
                                                Pengaduan
                                            </td>
                                            <td>
                                                -
                                            </td>

                                            <td style="font-size: .7rem;">
                                                <button class="mb-2 mr-2 btn-pill btn btn-warning link5" data-id="5"><i class="fa fa-link"> </i> Link Eviden</button>

                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">6</th>

                                            <td>
                                                Upload Putusan
                                            </td>
                                            <td>
                                                -
                                            </td>

                                            <td style="font-size: .7rem;">
                                                <button class="mb-2 mr-2 btn-pill btn btn-warning link6" data-id="6"><i class="fa fa-link"> </i> Link Eviden</button>

                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
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
    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="myModal" role="dialog">
        <div class="modal-dialog modal-lg" role="document">

            <!-- Modal content-->
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    <h5 class="modal-title" id="judul">Upload Eviden</h5>
                    <button type="button" class="close tutup" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form class="form-upload-eviden" onsubmit="simpanTemuan()" data-msp="" data-nilai="">
                        <div class="modal-body">
                            <div class="position-relative form-group">
                                <label for="idkl" class="">Area</label>
                                <input type="text" class="form-control" name="idkl" id="idkl" value="" readonly="">
                                <label for="exampleEmail" class="">Kondisi/Temuan</label>
                                <textarea name="temuan" class="form-control" id="temuan" rows="5"></textarea>

                            </div>
                            <div class="position-relative form-group">
                                <label for="exampleSelect" class="">File</label>
                                <input type="file" name="file" class="form-control">
                                <span class="help-block">*file yang didukung : png,jpg,jpeg,doc,docx,png,xls,xlsx</span>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary tutup" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </div>
</body>

</html>

<script>
    $(".link1").click(function() {
        var ids = $(this).attr('data-id');
        $("#idkl").val(ids);
        $('#myModal').modal('show');
    });
    $(".link2").click(function() {
        var ids = $(this).attr('data-id');
        $("#idkl").val(ids);
        $('#myModal').modal('show');
    });
    $(".link3").click(function() {
        var ids = $(this).attr('data-id');
        $("#idkl").val(ids);
        $('#myModal').modal('show');
    });
    $(".link4").click(function() {
        var ids = $(this).attr('data-id');
        $("#idkl").val(ids);
        $('#myModal').modal('show');
    });
    $(".link5").click(function() {
        var ids = $(this).attr('data-id');
        $("#idkl").val(ids);
        $('#myModal').modal('show');
    });
    $(".link6").click(function() {
        var ids = $(this).attr('data-id');
        $("#idkl").val(ids);
        $('#myModal').modal('show');
    });
    $(".tutup").click(function() {
        $('#myModal').modal('toggle');
    });
</script>