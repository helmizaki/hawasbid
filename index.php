<!DOCTYPE html>
<html lang="en">
<?php include "head.php"; ?>

<body>
    <div id="layoutDefault">
        <div id="layoutDefault_content">
            <main>

                <header class="page-header page-header-dark bg-success">
                    <div class="page-header-content">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-8 col-lg-10 text-center">
                                    <img style="margin-bottom: 50px;" src="assets/images/logo.png" width="150px">
                                    <h3><span class="badge badge-warning p-3">HAWASBID</span></h3>
                                    <h1 class="page-header-title">Hakim Pengawas Bidang</h1>
                                    <p class="page-header-text mb-5"></p>


                                    <div class="form-row justify-content-center">
                                        <div class="col-lg-6 col-md-8">
                                            <div class="form-group mr-0 mr-lg-2"><label class="sr-only" for="inputUsername">Username</label>
                                                <input class="form-control form-control-solid" name="username" type="text" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-8">
                                            <div class="form-group mr-0 mr-lg-2"><label class="sr-only" for="inputPassword">Password</label>
                                                <input class="form-control form-control-solid" name="password" type="password" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-4"><button class="btn btn-primary btn-marketing" name="login" id="login" type="submit">Login</button></div>
                                    </div>

                                    <p class="text-white mb-0"><b>Username & Password</b> sama dengan di SIPP</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

            </main>
        </div>
        <div id="layoutDefault_footer">
            <footer class="footer py-5 mt-auto bg-dark footer-dark">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 small">Copyright &copy; Pengadilan Agama Ngawi 2021</div>
                        <div class="col-md-6 text-md-right small">
                            <a href="javascript:void(0);">Privacy Policy</a>
                            &middot;
                            <a href="javascript:void(0);">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

</body>

</html>


<script>
    $("#password").keyup(function(event) {
        if (event.keyCode === 13) {
            $("#login").click();
        }
    });

    $(document).ready(function() {

        $('#login').click(function() {
            var username = document.getElementsByName("username")[0].value;
            var password = document.getElementsByName("password")[0].value;
            var datastring = 'username=' + username + '&password=' + password;
            $.ajax({
                type: "POST",
                url: "login.php",
                data: datastring,
                cache: false,
                success: function(data) {

                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: data,
                        showConfirmButton: false,
                        timer: 5000
                    }).then(function() {
                        document.location.href = 'main.php';
                    });

                }

            })
        });

    });
</script>