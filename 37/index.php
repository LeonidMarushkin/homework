<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Homework form</h2>
    <h3>GET FORM</h3>
    <form action="" method="GET">
        <label for="username">Name</label>
        <input type="text" name="username" id="username"></br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email"></br>
        <input type="submit" value="Send">
    </form>
    <h3>POST FORM</h3>
    <form action="" method="POST">
        <label for="username">Name</label>
        <input type="text" name="username" id="username"></br>
        <label for="pass">Password</label>
        <input type="text" name="pass" id="pass"></br>
        <input type="submit" value="Send">
    </form>
    </br>
    </br>
    <?php
    $name = '';
    $email = '';
    $pass - '';
    isset($_GET['username']) ? $name = $_GET['username'] : '';
    isset($_GET['email']) ? $email = $_GET['email'] : '';
    isset($_POST['username']) ? $name = $_POST['username'] : '';
    isset($_POST['pass']) ? $pass = $_POST['pass'] : '';
    isset($_REQUEST['username']) ? $name = $_REQUEST['username'] : '';
    isset($_REQUEST['email']) ? $email = $_REQUEST['email'] : '';
    echo ('Username from _REQUEST - ' . $name . '</br>');
    echo ('Email from _REQUEST - ' . $email . '</br>');
    echo ('Data from GET</br>');
    print_r($_GET);
    echo ('</br>');
    echo ('Data from POST</br>');
    print_r($_POST);
    echo ('</br>');
    echo ('Data from REQUEST</br>');
    print_r($_REQUEST);

    if ($_REQUEST['category'] == 'books') {
        echo ('</br>');
        echo ('</br>');
        echo ('This is data from books');
        echo ('</br>');
        echo ('<img src="https://i.imgur.com/ESSkOdv.jpeg" alt="">');
    }
    if ($_REQUEST['category'] == 'clothes') {
        echo ('</br>');
        echo ('</br>');
        echo ('This is data from clothes');
        echo ('</br>');
        echo ('<img src="https://i.imgur.com/YJuwXqu.jpeg" alt="">');
    }
    if ($_REQUEST['category'] == 'games') {
        echo ('</br>');
        echo ('</br>');
        echo ('This is data from games');
        echo ('</br>');
        echo ('<img src="https://i.imgur.com/Uo6svOV.jpeg" alt="">');
    }

    ?>
</body>

</html>