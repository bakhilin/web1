
<div class="coordinate-plane">
    <div class="img-block">
        <div><img src="img/img.png" alt=""></div>
    </div>
    <div class="form-block">
        <form action="" id="form-lab1">
        <div>
                изменение по X:
                <input type="button" name="x" value="-4" class='x' >
                <input type="button" name="x" value="-3" class='x'>
                <input type="button" name="x" value="-2" class='x'> 
                <input type="button" name="x" value="-1" class='x'>
                <input type="button" name="x" value="0" class='x'>
                <input type="button" name="x" value="1" class='x'>
                <input type="button" name="x" value="2" class='x'>
                <input type="button" name="x" value="3" class='x'>
                <input type="button" name="x" value="4" class='x'>
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


$(document).ready(function(){
 window.x = '';
 window.changeR = '';
 window.fieldY = '';

$(".x").click(function() { 
 window.x = $(this).val();
}); 



$("#changeR").click(function() { 
 window.changeR = $(this).val();
}); 

$("#submit").click(function() { 


    var form = $('<form></form>');
    $(form).hide().attr('method','post').attr('action',"validation.php");

    var input1 = $('<input type="hidden" />').attr('name',"x").val(window.x);
    var input2 = $('<input type="hidden" />').attr('name',"changeR").val(window.changeR);
    var input3 = $('<input type="hidden" />').attr('name',"fieldY").val($("#fieldY").val());
    $(form).append(input1);
    $(form).append(input2);
    $(form).append(input3);
    $(form).appendTo('body').submit();
    });
});

</script>
