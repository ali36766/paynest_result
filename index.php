
<html>
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

    </script>
</head>
<body>
    <h1>
         <?php
  $encryptedPayloadFromBank = htmlspecialchars($_POST['c']);

  echo  'FROM-CBD::', $encryptedPayloadFromBank;
?>
    </h1>
</body>
</form>
</html>
