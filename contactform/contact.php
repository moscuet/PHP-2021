<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    header("Access-Control-Allow-Origin:*");
    /* echo '<pre>';
    print_r($_POST);
    echo '</pre>'; */

    /* $sent_status=mail($_POST['email'],'julia.matviishyna@edu.bc.fi', 'sent from test app', $_POST['message']); */

    $sent_status=mail('julia.matviishyna@edu.bc.fi', 'sent from test app', $_POST['message']);

    if($sent_status){
        echo 'Message was delivered';
    } else{
        echo 'Message was not sent';
    }
    
    ?>
</body>
</html>