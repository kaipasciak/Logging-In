<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HT ACCESS Example</title>
    <meta name="author" content="Walter Clay, Kai Pasciak, Arjun Nair">
    <meta name="description" content="Class Exercise">
</head>
<body>
    <h1>password protected</h1>
    <nav>
      <p><a href="../index.php">Public Site</a></p>
  </nav>

</body>
<?php
    $allowedNetIds = array('rerickso', 'anair', 'kpasciak', 'wclay');
    $netId = htmlentities($_SERVER["REMOTE_USER"], ENT_QUOTES, "UTF-8");
?>
</html>
