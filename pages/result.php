<?php



$CookieKey = "my_cookie_key";

if (isset($_GET['x']))
    $res[] = [$_GET['x'], $_GET['y'], $_GET['r'], $_GET['time'], $_GET['flag']];

(isset($_COOKIE[$CookieKey]) ? $heap = unserialize($_COOKIE[$CookieKey]) : $heap = array());
if (isset($res)){
    $heap[] = $res;
    setcookie($CookieKey, serialize($heap));
}


if (isset($_GET['x'])) {
    header("Location: index.php?page=3");
}

?>

<div id="clock"></div>

<table class="table">
    <tr>
        <th>X</th>
        <th>Y</th>
        <th>R</th>
        <th>time</th>
        <th>result</th>
    </tr>

    <?php foreach ($heap as $item): ?>
            <tr>
                <td><?= $item[0][0] ?></td>
                <td><?= $item[0][1] ?></td>
                <td><?= $item[0][2] ?></td>
                <td><?= $item[0][3] ?></td>
                <td><?php 
                if($item[0][4]){
                    echo "попал";
                }
                    else{
                        echo "не попал";
                    } 
                ?></td>
            </tr>
    <?php endforeach; ?>
</table>
