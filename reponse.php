<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Merci <?php echo $_POST ['first_name'] . ' ' . $_POST ['user_name']; ?> de nous avoir contacté à propos de <?php echo $_POST ['sujet']; ?>.

    Un de nos conseiller vous contactera soit à l’adresse <?php echo $_POST ['user_email']; ?> ou par téléphone au <?php echo $_POST ['numberCall']; ?> dans les plus brefs délais pour traiter votre demande :

    <?php echo $_POST ['user_message']; ?> </p>
    <?php
    var_dump($_POST);
    ?>

</body>
</html>
