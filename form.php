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
    <form  action="reponse.php"  method="post">
        <div>
            <label  for="nom">Last name :</label>
            <input  type="text"  id="nom"  name="user_name">
        </div>
        <div>
            <label  for="firstname">First name :</label>
            <input  type="text"  id="firstname"  name="first_name">
        </div>
        <div>
            <label  for="numberCall">Number Call :</label>
            <input  type="number"  id="numberCall"  name="numberCall">
        </div>
        <div>
            <label  for="nom">Sujet :</label>
            <select name="sujet" id="sujet">
                <option value="sujet1">sujet1</option>
                <option value="sujet2">sujet2</option>
                <option value="sujet3">sujet3</option>
                <option value="sujet4">sujet4</option>
            </select>
        </div>
        <div>
            <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
        </div>
        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message"></textarea>
        </div>
        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
        <?php
        var_dump($_POST);
        ?>
    </form>
</body>
</html>
