<!html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>mywebsite</title>
    <link href="style/style.css?=v1.0" type="text/css" rel="stylesheet" />
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>Pertemuan I -- Sistem Pakar</h1>
            <img src="image/UIN JAWA.gif" alt="gambar uin" width="100" height="50">
            <img src="image/mana.gif" alt="gambar uin" width="100" height="50">
            <img src="image/Neon-Text.gif" alt="gambar uin" width="100" height="50">
        </div>

        <div id="sidebar">
            <h3>navigasi</h3>
            <ul id="navmenu">
                <li><a href="?module=insert#pos" class="selected">Insert</a></li>
                <li><a href="?module=galeri#pos">galeri</a></li>
                <li><a href="?module=jadwal#pos">jadwal kuliah</a></li>
            </ul>
        </div>

        <div id="page">
                    <?php if(isset($_GET['module']))
                include "konten/$_GET[module].php";
            else
                include "konten/home.php";?>
        </div>

        <div id="clear">
            
        </div>

        <div id="footer">
            <p>&copy; 2010</p>
        </div>
    </div>
</body>
</html>
