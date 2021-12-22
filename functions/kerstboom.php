<?php 

function showKerstboom()
{
    if(isset($_POST['kerstboom'])) 
    {
        $kerstboom_grote = $_POST['kerstboom'];

        $char1 = "0";
        $char2 = "x";

        echo "<div class=' my-5 text-center' style='line-height: 1.0; color:green;'>";
        for($i=0; $i < 1; $i++)
        {
            for($j=0; $j< $kerstboom_grote; $j++)
            {
                echo    str_repeat($char1, 1+$j*2) . '<br>'.
                        str_repeat($char2, 3+$j*2) . '<br>'.
                        str_repeat($char1, 5+$j*2) . '<br>'.
                        str_repeat($char2, 9+$j*2) . '<br>';
            }
            echo "000<br>
                  000<br>
                  000<br>";
        }
        echo "</div>";
    }
}

?>