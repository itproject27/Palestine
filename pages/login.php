<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Login </title>

    <meta name="description" content="" />


    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
    <link rel="stylesheet" href="../assets/css/style-log.css">

    <script src="../assets/vendor/js/helpers.js"></script>
    <script src="../assets/js/config.js"></script>
</head>

<body>

    <section class="page">
        <div class="container-xxl">
            <div class="authentication-wrapper authentication-basic container-p-y">
                <!-- Register -->
                <div class="card">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center">
                            <span class="app-brand-logo demo">
                                <div class="logod">
                                    <img src="palestine.svg" class="logoP" width="50px" height="50px">
                                    <span class="logot">Palestine</span>
                                </div>

                            </span>
                        </div>
                        <br> <br>


                        <div>

                            <!-- /Logo -->
                            <form id="formAuthentication" class="mb-3" name="form1" method="post" action="../includes/process.php">

                                <tr>
                                    <td>

                                    </td>
                                    <td>
                                        <font color="red"></font>
                                    </td>
                                </tr>

                                <div class="mb-3">
                                    <label> Username</label>
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter username" autofocus required="required" value="" />
                                </div> <br>
                                <div class="mb-3">
                                    <button class="btn btn-primary w-100 " type="submit" name="sub">Log
                                        In</button>
                                </div>
                            </form>
                            <p class="text-center">
                                <span>New on our platform?</span>
                                <a href="sign-up.php">
                                    <span> Create an account</span>
                                </a>
                            </p>
                        </div>
                        <!-- /Register -->
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <p>&copy; 2023, made with &#128151; by Cs Helwan Team</p>
        </footer>
    </section>

    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>

    <script src="../assets/js/main.js"></script>
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>