<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>

<body>
    <?php
        echo 'array_pop'.'<br/>';
        $item = ['erwin','heru','ali','zaki'];
        array_pop($item);
        foreach ($item as $person) {
            echo $person. '<br/>';
        }

        echo 'array_push'.'<br/>';
        $item = ['erwin','heru','ali','zaki'];
        array_push($item,'wati');
        foreach ($item as $person) {
            echo $person. '<br/>';
        }

        echo 'array_shift'.'<br/>';
        $item = ['erwin','heru','ali','zaki'];
        array_shift($item);
        foreach ($item as $person) {
            echo $person. '<br/>';
        }

        echo 'array_unshift'.'<br/>';
        $item = ['erwin','heru','ali','zaki'];
        array_unshift($item);
        foreach ($item as $person) {
            echo $person. '<br/>';
        }
    ?>
</body>

</html>