<!DOCTYPE html>
<html lang="en">

<head>

    <title>Repay|Admin Login in </title>

    <meta charset="UTF-8">
    <meta name="description" content="Cryptocurrency Landing Page Template">
    <meta name="keywords" content="cryptocurrency, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="icon" href="img/head.jpg" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

</head>

<body class="sr1">

    <div class="container-fluid">

        <div class="row p-lg-5 p-0">
            <div class="col-12">

                <div class="row p-lg-3 p-0">
                    <div class="col-12">

                        <div class="row p-5">
                            <div class="col-12 p-5 adminbody">

                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">

                                            <div class="col-lg-6 col-12 mb-lg-4">

                                                <div class="row p-lg-5 p-0">
                                                    <div class="col-12">
                                                        <img src="img/logo.png" class="img-fluid" />
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="text-start col-lg-6 col-12 mt-lg-0 mt-md-0 mt-5 rightadmin">

                                                <div class="row">
                                                    <div class="col-12 text-start">
                                                        <h2 class="fw-bold ms-lg-3 ms-0">Admin Log In</h2>
                                                    </div>
                                                    <div class="col-12 mt-lg-5 mt-3 fs-5 text-start">
                                                        <span class="text-black-50  ms-lg-3 ms-0">Admin Email :-</span>
                                                        <input type="text" class="form-control ms-lg-3 ms-0" name=""
                                                            id="">
                                                    </div>
                                                    <div class="col-12 mt-lg-3 mt-2 fs-5 text-start">
                                                        <span class="text-black-50  ms-lg-3 ms-0">Password :-</span>
                                                        <input type="password" class="form-control ms-lg-3 ms-0" name=""
                                                            id="">
                                                    </div>
                                                    <div class="text-center col-12 mt-lg-5 mt-3">
                                                        <button onclick="adminlogin();" class="btn btn-primary"> Send
                                                            Verification Code To
                                                            Login </button>
                                                    </div>

                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- model -->
    <div class="modal fade" tabindex="-1" id="ff">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Admin Verification</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="col-12">
                        <label class="form-label">Verification code</label>
                        <input class="form-control" type="text" id="v" />
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" onclick="verify();">ok</button>
                </div>

            </div>

        </div>
    </div>

    </div>
    <!-- model -->

    <script src="js/main.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>