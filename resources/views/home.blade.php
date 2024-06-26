<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="{{ asset('css/home.css') }}">
        <title>Internet Banking - Bank Sejahtera</title>
    </head>
    <body>
        <div class="header">
            <p class="logo">INTERNET BANKING SEJAHTERA</p>
            <ul>
                <li><a href="{{ url('/home') }}">Home</a></li>
                <li><a href="{{ url('/costumer-service') }}">Costumer Service</a></a></li>
            </ul>
        </div>
        <div class="hero">
            <div class="content">
                <h1>Login ke Internet Banking</h1>
                <div class="loginWindow">
                    <p>Username:</p>
                    <input type="text" id="username" name="username">
                    <p>PIN:</p>
                    <input type="password" id="password" name="password">
                    <div class="checkbox-container">
                        <input type="checkbox" id="showPassword" onclick="viewPassword()">
                        <label for="showPassword">Lihat Password</label>
                    </div>
                    <button>Masuk</button>
                    <button class ="newAccount" onclick="location.href='{{ url('/create-account') }}'" >Buat akun</button>
                </div>
            </div>
        </div>
        <div class="image">
            <img src = "{{ asset('img/LandingPage.JPG') }}" width="100%" height="100%">
        </div>
        <div class="footer">
            <p>Copyright &#169 2024 Bank Sejahtera (Persero) tbk</p>
        </div>
        <script>
            function viewPassword() {
                var passwordField = document.getElementById("password");
                if (passwordField.type === "password") {
                    passwordField.type = "text";
                } else {
                    passwordField.type = "password";
                }
            }
        </script>
    </body>
</html>
