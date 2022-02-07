<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Courie at your door</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <script src="https://kit.fontawesome.com/98c9b2a931.js" crossorigin="anonymous"></script>
    <style>
        .form-control {
            border-radius: 0.75rem;
        }

        @font-face {
            font-family: 'ubuntu-Bold';
            src: url(font/Ubuntu-Bold.ttf);
        }
        .form-control {
            border-radius: 0.75rem;
        }

        .for {
            height: 80%;
            width: 70%;
            background-color: #f8f9fa;
            text-align: center;
            margin-top: 90px;
            /*margin-bottom: 80px;*/
            border-top-left-radius: 10% 50%;
            border-bottom-left-radius: 10% 50%;
            border-top-right-radius: 10% 50%;
            border-bottom-right-radius: 10% 50%;
        }

        .cust_form {
            margin-top: -10px;
            margin-left: 91px;
        }
        @font-face {
            font-family: 'Montserrat-Black';
            src: url(font/Montserrat-Black.ttf);
        }

        .nav-link {
            color: red;
            line-height: 5px;
        }

        #fev-img {
            position: absolute;
            /*width: 25%;*/
            margin-left: -102px;
            margin-top: -17px;
        }

        #home {
            padding-bottom: 24px;
        }

    </style>

    <script>
        var check = function () {
            if (document.getElementById('password').value ==
                document.getElementById('cpassword').value) {
                document.getElementById('message').style.color = '#5dd05d';
                document.getElementById('message').innerHTML = 'Matched';
            } else {
                document.getElementById('message').style.color = '#f55252';
                document.getElementById('message').innerHTML = 'Not Matching';
            }
        }

        function alphaOnly(event) {
            var key = event.keyCode;
            return ((key >= 65 && key <= 90) || key == 8 || key == 32);
        };

        function checklen() {
            var pass1 = document.getElementById("password");
            if (pass1.value.length < 6) {
                alert("Password must be at least 6 characters long. Try again!");
                return false;
            }
        }

    </script>
</head>
<body class="body" id="homi">
<div class="container">
    <section style="padding-bottom:0px;height: 100vh; padding-top: 5px">
        <nav class="navbar navbar-expand-lg navbar-dark mainnav" style="margin-top: 0px">
            <img id="fev-img" src="source/plane%20(2).png" height="270px" width="170px" alt="plane">
            <div class="container">
                <a class="navbar-brand" style="font-family: 'ubuntu-Bold',sans-serif;font-size: 2em" href="#">SkyWay</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link" style="color:white;" aria-current="page" href="#home"><h5>Home</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color:white;" href="#about"><h5>About Us</h5></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" style="color:white;" href="#"><h5>Contact</h5></a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <div class="container register" style="font-family: 'IBM Plex Sans', sans-serif;">
            <div class="row">
                <div class="col-md-3 register-left" style="margin-top: 10%;right: 5%">
                    <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                    <h3>Welcome</h3>
                </div>

                <div class="col-md-9 register-right" style="margin-top: 40px;left: 120px;">
                    <div class="row">
                        <ul class=" nav nav-tabs nav-justified" id="myTab" role="tablist" style="width: 31%;">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link  active" id="home-tab" data-bs-toggle="tab"
                                        data-bs-target="#home"
                                        type="button" role="tab" aria-controls="home" aria-selected="true">Customer
                                </button>
                            </li>
                            <li class=" nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                        type="button" role="tab" aria-controls="profile" aria-selected="false">Admin
                                </button>
                            </li>

                        </ul>
                    </div>
                    <div class="tab-content main1" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <h3 class="register-heading1"> Track Your Courier</h3>
                            <div class="row cust_help" style="display: flex; flex-direction: row;height: 110%">
                                <div class="col-md-3 cus_img">
                                    <img src="source/courier1.png" alt="courier">
                                </div>
                                <div class="col-md-9 cust_help">
                                    <form onsubmit="" action="inc/update.php"
                                          method="post" class="register-form" id="cust_form"
                                          style="display: flex;justify-content: center; flex-direction: column">
                                        <h6 class="register-heading2" style="padding-bottom: 15px;"> Please Enter your
                                            Courier Id</h6>
                                        <div class="form-group" style="display: flex;justify-content:center; ">
                                            <input type="number" name="ID_CODE" class="form-control " placeholder="Id *"
                                                   style="display: inline-block; width: 50%" required>
                                        </div>
                                        <div class="inpid" style="display: flex;justify-content: end;">
                                            <input type="submit" class="btnRegister" name="submit" value="Submit-code"
                                                   style="margin-right: 26%;width: 20%;padding:1.5%;margin-top: 12px">

                                        </div>
                                        <!--                            <button type="button" class="btn btn-primary" name="submit" value="submit_code">Submit</button>-->
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <h3 class="register-heading3">Login as Admin</h3>
                            <form onsubmit="return confirm('Do you want to submit')" action="inc/update.php"
                                  method="post" class="register-form">
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text"
                                                   style="display: inline-block; width: 70%; margin-left: 100px;"
                                                   class="form-control" placeholder="User Name *" name="uname"
                                                   onkeydown="return alphaOnly(event);" required/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password"
                                                   style="display: inline-block; width: 70%;margin-right: 100px;"
                                                   class="form-control" placeholder="Password *" name="pasw"
                                                   required/>
                                        </div>
                                        <input type="submit" id="sub_id" class="btnRegister" name="submit" value="Login"
                                               style="margin-right: 29%;padding:1.5%"/>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <script src="inc/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>
    </section>
</div>
<section id="about">
    <section id="info" style="background-color: bisque ">
        <div class="container-fluid">
            <div class="row">
                <div class="Info-box col-lg-3">
                    <i class="icons fas fa-box-open fa-3x"></i>
                    <h3 style="font-family: 'Montserrat', sans-serif">Couriers</h3>
                    <p style="color: #8f8f8f;">Total Number of Couriers We deliverd</p>
                </div>
                <div class="Info-box col-lg-3">
                    <i class="icons fas fa-bullseye fa-3x"></i>
                    <h3 style="font-family :'Montserrat', sans-serif">Ready</h3>
                    <p style="color: #8f8f8f;">Number of couriers ready for ship</p>
                </div>
                <div class="Info-box col-lg-3">
                    <i class="icons fas fa-people-carry fa-3x"></i>
                    <h3 style="font-family :'Montserrat', sans-serif">Shipped</h3>
                    <p style="color: #8f8f8f;">Number of couriers in way</p>
                </div>
                <div class="Info-box col-lg-3">
                    <i class="icons fas fa-check-circle fa-3x"></i>
                    <h3 style="font-family: 'Montserrat', sans-serif">Recived</h3>
                    <p style="color: #8f8f8f;">Number of couriers we delivered</p>
                </div>
            </div>
        </div>
    </section>

</section>

</body>
</html>