<?php
header("location:");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Traking</title>
    <link rel="shortcut icon" href="../img/logo2.png" type="image/x-icon">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <!-- daisy UI -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.23/dist/full.min.css" rel="stylesheet" type="text/css" />
    <!-- bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        #home-login:hover {

            color: white;
        }

        .my-btn:hover {

            background-color: black;
        }
    </style>
</head>

<body>
    <nav>
        <div class="navbar bg-base-100 container">
            <div class="navbar-start">
                <a class="text-xl" href=""><img src="../img/logo2.png" alt="" style="width:120px; border-radius: 50px 50px 50px 50px;"></a>
                <a href="" class="text-2xl" style="color:orange;">Fast-track Courier <br>
                    Service (Pvt.) Ltd.</a>
            </div>
            <div class="flex-none">

                <button class="btn btn-primary w-24 text-xl my-btn" style="margin-right: 100px;"> <a href="home.php" id="home-login"> Home</a></button>

                <button class="btn btn-success w-24   my-btn"><a href="login.php" id="home-login"><i class="fa-solid fa-lock"></i> Log in</a></button>
            </div>

        </div>

    </nav>
    <br>
    <section>
        <div class="hero ">
            <img src="../img/backgroundtrack.png" alt="">
            <div class="hero bg-opacity-90">
                <div class="hero-content text-neutral-content text-center">
                    <div class="max-w-md">
                        <h1 class="mb-5 text-5xl font-bold">Hello there</h1>
                        <p class="mb-5">
                            Provident cupiditate voluptatem et in. Quaerat fugiat ut assumenda excepturi exercitationem
                            quasi. In deleniti eaque aut repudiandae et a id nisi.
                        </p>


                        <div style="width:800px; margin-left:-200px">

                            <div style="position: absolute; ">
                                <input type="date" style="width: 200px; height: 50px; color:black;" class="input input-bordered">
                            </div>
                            <div style="position: absolute; margin-left:220px;">
                                <select class="select" style="color:black; width:200px; ">
                                    <option selected>last 7das</option>
                                    <option>last 10days</option>
                                    <option>last 15days</option>
                                    <option>last 24days</option>
                                    <option>last 30days</option>

                                </select>
                            </div>


                            <input type="number" placeholder="Track number" class="input input-bordered" required
                                style="margin-left: 400px; color:black;" />
                            <button class="btn btn-primary">Get Started</button>
                        </div>


                    </div>
                </div>
            </div>
    </section><br>
    <section style="heaight:200px; background-color:aqua;">
        <div class="container"><br>
            <div class="text-center">
                <h1 class="mb-5 text-2xl font-bold ">To see your bookings please visit Customer Dashboard.</h1>

                <button class="btn btn-success" style="margin-top:-25px">Click Here</button>
            </div><br>
        </div>


    </section>
    <section class="container">
        <div class="hero ">
            <div class="hero-content flex-col lg:flex-row">
                <img src="../img/tracking.jpg" class=" rounded-lg shadow-2xl" style="width:500px;" />
                <div>
                    <h1 class="text-3xl font-bold">Download our tracking app</h1>
                    <p class="py-6">
                        Download now & avail all of our services through the app
                    </p>
                    <button class="btn btn-primary"><a href="https://play.google.com/store/games?hl=en&pli=1"><i class="fa-solid fa-gamepad"></i>Download</a></button>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <footer class="footer footer-center bg-base-300 text-base-content p-4">
            <aside>
                <p class="text-xl">© 2024 <a href="" style="color: Orange;" class="text-xl">Fast-track</a>. All rights
                    Reserved</p>
            </aside>
        </footer>
    </footer>



    <!-- daisy UI -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>