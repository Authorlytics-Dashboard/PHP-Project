<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/assets/CSS/style.css">
    <link rel="stylesheet" href="/assets/CSS/login/lightMode.css">    


</head>
<body class="login light-mode">
        <div class="container ">
            <div class="welcome">
                <div class="pinkbox">
                    <form class="h-100 d-flex flex-column justify-content-between" autocomplete="off">
                        <h1 class="m-0">sign in</h1>

                        <div class="inputContainer">
                            <div class="loginInp input-group w-100 mb-3">
                                <input class="form-control rounded-0 border-0 border-bottom" type="email" name="email" id="emailInp" placeholder="Email">
                            </div>

                            <div class="loginInp input-group w-100 mb-3">
                                <input class="form-control rounded-0 border-0 border-bottom" type="password" name="password" id="passwordInp" placeholder="Password"></input>
                                <i class='bx bxs-show fs-5 position-absolute top-50 start-100 translate-middle pe-4' style="z-index:1000; cursor: pointer;" id="togglePassword"></i>
                            </div>

                            <div class="loginInp form-check form-check-inline mb-4" style="margin-left: 5px;">
                                <input class="form-check-input" type="checkbox" id="remeberMe" name="rememberMe" value="option1">
                                <label class="form-check-label ps-3" for="remeberMe">Remember me</label>
                            </div>
                        </div>

                        <button class="button submit m-0">login</button>
                    </form>
                </div>

                <div class="rightbox">
                    <h2 class="title"><span>BLOOM</span>&<br>BOUQUET</h2>
                    <p class="desc"> pick your perfect <span>bouquet</span></p>
                    <div class="logo d-flex justify-content-center">
                        <svg width="100px" height="100px" viewBox="0 0 220 265">
                            
                            <path class="stroke1" fill="none" stroke="#70353e" stroke-width="32" stroke-dasharray="240" stroke-dashoffset="0" stroke-miterlimit="10" d="M50,0v136.9c0,17.7,14.5,32.2,32.2,32.2l52.5,0" 
                            />

                            <line class="stroke2" fill="none" stroke="#70353e" stroke-width="32" stroke-dasharray="50" stroke-dashoffset="0" stroke-stroke-miterlimit="10" x2="219.8" y2="169.2" x1="169.9" y1="169.2" />

                            <path class="stroke3" fill="none" stroke="#70353e" stroke-width="32" stroke-dasharray="240" stroke-dashoffset="0" stroke-miterlimit="10" d="M169.8,216.1V79.2c0-17.7-14.5-32.2-32.2-32.2
                            l-52.5,0"/>
                            
                            <line class="stroke4" fill="none" stroke="#70353e" stroke-width="32" stroke-dasharray="50" stroke-dashoffset="0" stroke-miterlimit="10" x2="0" y2="46.9" x1="50" y1="46.9"/>
                            
                        </svg>
                        <!-- <img class="flower" style=" width: 120px; height: 120px;" src="https://preview.ibb.co/jvu2Un/0057c1c1bab51a0.jpg"/> -->
                    </div>
                </div>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#passwordInp');

        togglePassword.addEventListener('click', function (e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('bxs-show');
            this.classList.toggle('bxs-hide');
        });
    </script>
</body>
</html>