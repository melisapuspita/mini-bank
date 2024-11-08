<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Saldo BCA</title>
    <link rel="stylesheet" href="styles_input.css">
</head>
<body>
    <header>
        <div class="yellow-bar">
            <button class="logout-btn">[ LOGOUT ]</button>
        </div>
        <div class="header-blue">
            <div class="header-left">
                <img src="logo.png" alt="BCA Logo" class="logo">
                <span class="header-title">INDIVIDUAL</span>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="content">
            <div class="sidebar">
                <h2>INPUT SALDO</h2>
                <hr>
                <ul>
                    <li><a href="#">Balance Inquiry</a></li>
                    <li><a href="#">Account Statement</a></li>
                    <li><a href="#">Time Deposit</a></li>
                    <li><a href="#">Tahapan Berjangka</a></li>
                    <li><a href="#">Fund Account</a></li>
                    <li><a href="#">Balance Inquiry RDN</a></li>
                    <hr>
                    <li><a href="home.php">Back <p>to Main Menu</p></a></li>
                </ul>
            </div>
            <div class="main-content">
                
                <p class="date">Tanggal : <strong><?php echo date("d/m/Y"); ?></strong>   Jam : <strong><?php echo date("H:i:s"); ?></strong></p>
                <p class="login-info">Login Terakhir Anda tanggal : <strong><?php echo date("d/m/Y   H:i:s"); ?><strong>
                <br>
                <br>
                <h1>Input Saldo ke Rekening BCA</h1>
                <form action="proses_input_saldo.php" method="POST">
                    <!-- Nomor Rekening -->
                    <div class="form-group">
                        <label for="account-number">Nomor Rekening:</label>
                        <input type="text" id="account-number" name="account_number" placeholder="Masukkan Nomor Rekening" required>
                    </div>

                    <!-- Tipe Akun -->
                    <div class="form-group">
                        <label for="account-type">Tipe Akun:</label>
                        <select id="account-type" name="account_type" required>
                            <option value="">Pilih Tipe Akun</option>
                            <option value="tabungan">Tabungan</option>
                            <option value="giro">Giro</option>
                            <option value="deposito">Deposito</option>
                        </select>
                    </div>

                    <!-- Mata Uang -->
                    <div class="form-group">
                        <label for="currency">Mata Uang:</label>
                        <select id="currency" name="currency_code" required>
                            <option value="">Pilih Mata Uang</option>
                            <option value="IDR">IDR (Rupiah)</option>
                            <option value="USD">USD (Dollar)</option>
                            <option value="EUR">EUR (Euro)</option>
                        </select>
                    </div>

                    <!-- Saldo -->
                    <div class="form-group">
                        <label for="balance">Saldo:</label>
                        <input type="number" id="balance" name="available_balance" placeholder="Masukkan Saldo" required>
                    </div>

                    <!-- Button Submit -->
                    <div class="form-group">
                        <button type="submit" class="submit-btn">Input Saldo</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<footer>
    <div class="footer-content">
        <div class="white-bar">
            <p> Copyright &copy; 2000 <img src="bca.png" alt="Bank BCA" class="logo2">All Rights Reserved</p>
        </div>
    </div>
</footer>
</body>
</body>
</html>