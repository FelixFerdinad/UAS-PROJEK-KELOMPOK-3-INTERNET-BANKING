<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/createAccount.css') }}">
    <title>Daftar Akun - Bank Sejahtera</title>
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
            <h1>Pendaftaran Akun Baru</h1>
            <form class="create-account-form">
                <label for="fullname">Nama Lengkap:</label>
                <input type="text" id="fullname" name="fullname" required>

                <label for="dob">Tanggal Lahir:</label>
                <input type="date" id="dob" name="dob" required>

                <label for="gender">Jenis Kelamin:</label>
                <select id="gender" name="gender" required>
                    <option value="">Pilih opsi</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>

                <label for="address">Alamat:</label>
                <input type="text" id="address" name="address" required>

                <label for="phone">Nomor Telepon:</label>
                <input type="tel" id="phone" name="phone" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="username">Username:</label>
                <input type="text" id="username" name="username" required>

                <label for="pin">PIN:</label>
                <input type="password" id="pin" name="pin" required>

                <label for="confirm-pin">Konfirmasi PIN:</label>
                <input type="password" id="confirm-pin" name="confirm-pin" required>

                <div class="show-password">
                    <input type="checkbox" id="show-password" onclick="viewPassword()">
                    <label for="show-password">Lihat Password</label>
                </div>

                <div class="terms-conditions">
                    <input type="checkbox" id="terms" required>
                    <label for="terms">Saya setuju dengan <a href="{{ url('/syarat-ketentuan') }}" target="_blank">Syarat dan Ketentuan</a></label>
                </div>

                <button type="submit" class="create-account-button">Buat Akun</button>
            </form>
        </div>
    </div>
    <div class="footer">
        <p>Copyright &#169; 2024 Bank Sejahtera (Persero) tbk</p>
    </div>

    <script>
        function viewPassword() {
            var pin = document.getElementById('pin');
            var confirmPin = document.getElementById('confirm-pin');
            if (pin.type === 'password' && confirmPin.type === 'password') {
                pin.type = 'text';
                confirmPin.type = 'text';
            } else {
                pin.type = 'password';
                confirmPin.type = 'password';
            }
        }

        function validateTermsForm() {
            var terms = document.getElementById('terms');
            if (!terms.checked) {
                alert("Anda harus setuju dengan syarat dan ketentuan");
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
