<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: rgb(243, 242, 242) !important;
        }
        #cardup{
            background-color: white;
            box-shadow: 2px 2px rgb(158, 157, 157);
        }
        #card{
            margin-top: 12rem !important;
            height: 35rem;
        }
        #btn{
            background-color: rgb(62, 91, 255) !important;
            color: white !important;
            font-weight: 600 !important;
            border: none !important;
            
        }
        #btn:hover{
            background-color: white !important;
            color: rgb(62, 91, 255) !important;
            border: 0.1rem solid rgb(62, 91, 255) !important ;
        }
        .input-group{
            margin-bottom: 2rem;
        }
        a{
            color: rgb(62, 91, 255) !important;
            text-decoration: none !important;
        }
    </style>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
    <section class="container ">
        <div id="card" class="row">
            <div id="cardup" class="col-8 offset-2 rounded-4 border-secondary">
                <div class="row p-5 py-5 mt-5">
                    
                    <div class="col-10 offset-1">
                        <?php
                            if(isset($_POST['register'])){
                                register();
                            } else {
                                login();
                            }
                            function register(){
                                echo "<h1 style=".'"text-align: center;"'.">Welcome to Register page</h1><br>";
                                echo "<h2>Your Name</h2>";
                                echo "<h4>- ".$_POST['name']."</h4>";
                                echo "<h2>Email</h2>";
                                echo "<h4>- ".$_POST['email']."</h4>";
                                echo "<h2>Password</h2>";
                                echo "<h4>- ".$_POST['password']."</h4>";
                                echo "<h2>Confirm Password</h2>";
                                echo "<h4>- ".$_POST['confPassword']."</h4>";
                            };
                            function login(){
                                echo "<h1 style=".'"text-align: center;"'.">Welcome to Login page</h1><br>";
                                echo "<h2>Your Name</h2>";
                                echo "<h4>- ".$_POST['name']."</h4>";
                                echo "<h2>Password</h2>";
                                echo "<h4>- ".$_POST['password']."</h4>";
                            };
                        ?>

                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>
</html>
