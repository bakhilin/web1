<?php


$CookieKey = "my_cookie_key";

if (isset($_GET['x']))
    $res[] = [$_GET['x'], $_GET['y'], $_GET['r'], $_GET['time'], $_GET['flag'],microtime()-$_GET['timeScript']];

(isset($_COOKIE[$CookieKey]) ? $heap = unserialize($_COOKIE[$CookieKey]) : $heap = array());
if (isset($res)) {
    $heap[] = $res;
    setcookie($CookieKey, serialize($heap));
}


if (isset($_GET['x'])) {
    header("Location: index.php?page=1");
}

?>

<div class="result">
    <div id="clock"></div>

    <table class="table">
        <tr>
            <th>X</th>
            <th>Y</th>
            <th>R</th>
            <th>время</th>
            <th>результат</th>
            <th>время работы скрипта</th>
        </tr>
        <?php foreach ($heap as $item): ?>
            <tr>
                <td><?= $item[0][0] ?></td>
                <td><?= $item[0][1] ?></td>
                <td><?= $item[0][2] ?></td>
                <td><?= $item[0][3] ?></td>
                <td><?php if ($item[0][4]) : ?>
                    <span style="font-size: 10px;background-color: black;color: #F6EB14">
                        попал
                    </span>
                    <?php else: ?>
                    <span style="color: red; font-size: 10px;background-color: black">не попал</span>
                    <?php endif; ?>
                </td>
                <td><?= $item[0][5] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<div class="coordinate-plane">
    <div class="img-block">
        <div><img src="img/img.png" alt=""></div>
    </div>
    <div class="form-block">
        <form action="" id="form-lab1">
            <div>
                изменение по X:
                <input type="button" name="x" value="-4" class='x'>
                <input type="button" name="x" value="-3" class='x'>
                <input type="button" name="x" value="-2" class='x'>
                <input type="button" name="x" value="-1" class='x'>
                <input type="button" name="x" value="0" class='x'>
                <input type="button" name="x" value="1" class='x'>
                <input type="button" name="x" value="2" class='x'>
                <input type="button" name="x" value="3" class='x'>
                <input type="button" name="x" value="4" class='x'>
            </div>
            <div class="input-y">
                <p>
                    <label for="fieldY">изменение по Y: </label>
                    <input name="fieldY" id="fieldY" maxlength="10">
                </p>
            </div>
            <div class="">
                <label for="changeR">изменение по R:</label>
                <input type="button" name="changeR" value="1" class="changeR">
                <input type="button" name="changeR" value="2" class="changeR">
                <input type="button" name="changeR" value="3" class="changeR">
                <input type="button" name="changeR" value="4" class="changeR">
                <input type="button" name="changeR" value="5" class="changeR">

            </div>
            <div>
            </div>
        </form>

        <button type="submit" id="submit" class="btn">send</button>
    </div>


    <script>


        $(document).ready(function () {
            $('#form-lab1').validate({
                rules: {
                    fieldY: {
                        required: true,
                        number: true,
                        min: -5,
                        max: 5
                    },
                    changeR: {
                        required: true
                    }
                },
                messages: {
                    fieldY: {
                        required: "Поле не может быть пустым!",
                        number: "Введите числовое значение",
                        min: "Введите значение от -5 до 5",
                        max: "Введите значение от -5 до 5"
                    },
                    changeR: {
                        required: "Поле не может быть пустым!"
                    }
                }
            });
        });


        $(document).ready(function () {
            window.x = '';
            window.changeR = '';
            window.fieldY = '';

            $(".x").click(function () {
                window.x = $(this).val();
            });


            $(".changeR").click(function () {
                window.changeR = $(this).val();
            });

            $("#submit").click(function () {


                var form = $('<form></form>');
                $(form).hide().attr('method', 'post').attr('action', "validation.php");

                var input1 = $('<input type="hidden" />').attr('name', "x").val(window.x);
                var input2 = $('<input type="hidden" />').attr('name', "changeR").val(window.changeR);
                var input3 = $('<input type="hidden" />').attr('name', "fieldY").val($("#fieldY").val());
                $(form).append(input1);
                $(form).append(input2);
                $(form).append(input3);
                $(form).appendTo('body').submit();
            });
        });

    </script>
