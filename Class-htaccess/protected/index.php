

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HT ACCESS Example</title>
    <meta name="author" content="Walter Clay, Kai Pasciak, Arjun Nair">
    <meta name="description" content="Class Exercise">
</head>
<body>
    <h1>Password Protected</h1>
    <nav>
      <p><a href="../index.php">Public Site</a></p>
    </nav>
    <?php
        $allowedNetIds = array('rerickso', 'anair', 'kpasciak', 'wclay');
        $netId = htmlentities($_SERVER["REMOTE_USER"], ENT_QUOTES, "UTF-8");

        if (!in_array($netId, $allowedNetIds)) {
            print("<p>Unauthorized</p>");
        }
        else {
            print("<p>Authorized<p>");
            print("<img alt="Kai"
                  src="kai.jpg">")
            print("<img alt="Arjun"
                              src="ArjunSelfie.jpg">")

        }
    ?>


</body>

</html>
