<?php
include "koneksi.php"; // Adjust as needed

// Prepare success message
$successMessage = isset($_GET['successMessage']) ? htmlspecialchars($_GET['successMessage']) : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <style type="text/css">
        .style1 {
            color: #000099;
            font-weight: bold;
        }
    </style>
    <script>
        function showAlert() {
            <?php if ($successMessage): ?>
                alert("<?php echo $successMessage; ?>");
            <?php endif; ?>
        }
    </script>
</head>
<body onload="showAlert()">
    <form action="register.php" method="post"> <!-- Update action path if necessary -->
        <p>&nbsp;</p>
        <div align="center" class="style1">
            <p>REGISTER</p>
        </div>

        <table width="496" border="0" align="center">
            <tr>
                <td width="163">Nama depan :</td>
                <td width="317"><input type="text" name="namadep" required /></td>
            </tr>
            <tr>
                <td>Nama Belakang :</td>
                <td><input type="text" name="namabel" required /></td>
            </tr>
            <tr>
                <td>Username :</td>
                <td><input type="text" name="username" required /></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="password" required /></td>
            </tr>
            <tr>
                <td>Usia :</td>
                <td><input type="text" name="usia" required /></td>
            </tr>
            <tr>
                <td>Jenis Kelamin :</td>
                <td>
                    <select name="jk" required>
                        <option value="">Pilih</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Tempat Tanggal Lahir :</td>
                <td><input type="text" name="ttl" required /></td>
            </tr>
            <tr>
                <td>Email :</td>
                <td><input type="email" name="email" required /></td>
            </tr>
            <tr>
                <td>Nomor Telepon :</td>
                <td><input type="text" name="notel" required /></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" value="Input" /></td>
            </tr>
        </table>
    </form>
</body>
</html>
