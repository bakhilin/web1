
<div class="coordinate-plane">
    <div class="img-block">
        <div><img src="/img/img.png" alt=""></div>
    </div>
    <div class="form-block">
        <form action="/validation.php" method="post" id="form-lab1">
            <div>
                изменение по X:
                <input type="radio" name="button" value="-4" checked>-4
                <input type="radio" name="button" value="-3">-3
                <input type="radio" name="button" value="-2">-2
                <input type="radio" name="button" value="-1">-1
                <input type="radio" name="button" value="0">0
                <input type="radio" name="button" value="1">1
                <input type="radio" name="button" value="2">2
                <input type="radio" name="button" value="3">3
                <input type="radio" name="button" value="4">4
            </div>
            <div>
                <p>
                    <label for="fieldY">изменение по Y: </label>
                    <input name="fieldY" id="fieldY" >
                </p>
            </div>
            <div>
                <label for="changeR">изменение по R:</label>
                <select name="changeR" id="changeR" required>
                    <option value=""></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
            </div>
            <div>
                <button type="submit" class="btn" value="Validate">
                    submit
                </button>
            </div>
        </form>
    </div>
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
                changeR:{
                    required:true
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
</script>
