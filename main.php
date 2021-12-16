<html lang="en">

<?php session_start();
include "head.php";

?>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-header">
        <!--Header START-->
        <div class="app-header header-shadow bg-grow-early header-text-light">
            <div class="app-header__logo">
                <img src="https://pmpapm.badilag.net/apm/assets/images/logo_ma.png" width="15%" alt="">
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

                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="ml-2 rounded-circle" src="https://pmpapm.badilag.net/apm/assets/images/avatar.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>

                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">

                                            <div class="scroll-area-xs" style="height: 100px;">
                                                <div class="scrollbar-container ps">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item">My Account
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider mb-0 nav-item"></li>
                                            </ul>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-btn text-center nav-item">
                                                    <a href="login.php?aksi=keluar" class="btn-wide btn-primary btn-shine btn btn-focus">Keluar
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        <?php echo $_SESSION["fullname"]; ?> </div>
                                    <div class="widget-subheading">
                                        <?php echo $_SESSION["group_name"]; ?> </div>
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
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="header-icon lnr-laptop-phone mr-3 text-muted opacity-6"> </i>Daftar Laporan HAWASBID -
                                    PENGADILAN AGAMA NGAWI</div>
                                <div class="btn-actions-pane-right actions-icon-btn">
                                    <button type="button" class="btn mr-2 mb-2 btn-primary lke-baru" data-toggle="modal" data-target="#exampleModal">
                                        Laporan Baru
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="tabelRiwayatLKE_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="tabelRiwayatLKE_length"><label><span>Show:</span> <select name="tabelRiwayatLKE_length" aria-controls="tabelRiwayatLKE" class="custom-select custom-select-sm form-control form-control-sm">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select></label></div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div id="tabelRiwayatLKE_filter" class="dataTables_filter"><label><span>Filter:</span> <input type="search" class="form-control form-control-sm" placeholder="Type to filter..." aria-controls="tabelRiwayatLKE"></label></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table style="width: 100%;" class="table table-hover table-striped table-bordered dataTable no-footer" id="tabelRiwayatLKE" role="grid" aria-describedby="tabelRiwayatLKE_info">
                                                <thead>
                                                    <tr role="row">
                                                        <th class="sorting_asc" tabindex="0" aria-controls="tabelRiwayatLKE" rowspan="1" colspan="1" aria-label="No: activate to sort column descending" aria-sort="ascending">No</th>
                                                        <th class="sorting" tabindex="0" aria-controls="tabelRiwayatLKE" rowspan="1" colspan="1" aria-label="Triwulan: activate to sort column ascending">Triwulan</th>
                                                        <th class="sorting " tabindex="0" aria-controls="tabelRiwayatLKE" rowspan="1" colspan="1" aria-label="Tahun: activate to sort column ascending">Tahun</th>
                                                        <th class="sorting" tabindex="0" aria-controls="tabelRiwayatLKE" rowspan="1" colspan="1" aria-label="LKE: activate to sort column ascending">Dokumen LKE </th>
                                                        <th class="sorting" tabindex="0" aria-controls="tabelRiwayatLKE" rowspan="1" colspan="1" aria-label="Edit / Hapus">Edit / Hapus</th>
                                                    </tr>
                                                </thead>
                                                <tbody>


                                                    <tr role="row" class="odd">
                                                        <td class="sorting_1">1</td>
                                                        <td>2</td>
                                                        <td class="tahun">2021</td>
                                                        <td><button class="btn-pill btn btn-warning hasil-temuan"><i class="pe-7s-note2 btn-icon-wrapper"> </i> Hasil Temuan</button></td>
                                                        <td> <button data-id="1093" class="btn btn-warning edit-lke">Edit</button> <button data-id="1093" class="btn btn-danger hapus-lke">Hapus</button></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12 col-md-5">
                                            <div class="dataTables_info" id="tabelRiwayatLKE_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
                                        </div>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="dataTables_paginate paging_simple_numbers" id="tabelRiwayatLKE_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled" id="tabelRiwayatLKE_previous"><a href="#" aria-controls="tabelRiwayatLKE" data-dt-idx="0" tabindex="0" class="page-link">←</a></li>
                                                    <li class="paginate_button page-item active"><a href="#" aria-controls="tabelRiwayatLKE" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                                    <li class="paginate_button page-item next disabled" id="tabelRiwayatLKE_next"><a href="#" aria-controls="tabelRiwayatLKE" data-dt-idx="2" tabindex="0" class="page-link">→</a></li>
                                                </ul>
                                            </div>
                                        </div>
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
                                <ul class="header-megamenu nav">


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <button class="btn btn-success" onclick="topFunction()" id="myBtn" title="Go to top">Kembali ke atas</button>
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
</body>

</html>
<script>
    $('.hasil-temuan').click(function() {
        var currentRow = $(this).closest("tr");
        var col1 = currentRow.find("td:eq(1)").text();
        var col2 = currentRow.find("td:eq(2)").text();

        $.redirect('lke.php', {
            'col1': col1,
            'col2': col2
        });

    });
</script>