<link rel="stylesheet" type="text/css" href="maytinh.css">

<?php
    // khai báo các biến toàn cầu
    $heso_a = "";
    $heso_b = "";
    $heso_c = "";
    // đọc các hệ số từ FORM
    if (isset ( $_POST ['heso_a'] )) 
    {
        $heso_a = $_POST ['heso_a'];
    }
    if (isset ( $_POST ['heso_b'] )) 
    {
        $heso_b = $_POST ['heso_b'];
    }
    if (isset ( $_POST ['heso_c'] )) 
    {
        $heso_c = $_POST ['heso_c'];
    }
 
?>
    <form class="form-ptbh" action="#" method="post">
        <h4>Giải phương trình bậc 2</h4>
        <table>
            <tr>
                <td>NHẬP HỆ SỐ BẬC 2 => A= </td>
                <td><input type="text" name="heso_a" value="<?=$heso_a?>" /></td>
            </tr>
            <tr>
                <td>NHẬP HỆ SỐ BẬC 1 => B=</td>
                <td><input type="text" name="heso_b" value="<?=$heso_b?>" /></td>
            </tr>
            <tr>
                <td>NHẬP HỆ SỐ TỰ DO=> C=</td>
                <td><input type="text" name="heso_c" value="<?=$heso_c?>" /></td>
            </tr>
            <tr>            
        </table>
        <input type="submit" class="btn-ptbh" value="Kết quả">
        <?php
                    function giaiPTB2($a, $b, $c) 
                    {
                        // kiểm tra biến đầu vào
                        if ($a == "") $a = 0;
                        if ($b == "") $b = 0;
                        if ($c == "") $c = 0;
                        // in phương trình ra màn hình
                        echo "Phương trình: " . $a . "x<sup>2</sup> + " . $b . "x + " . $c . " = 0";
                        echo "<br>";
                        // kiểm tra các hệ số
                        if ($a == 0) 
                        {
                            if ($b == 0) 
                            {
                                echo ("Phương trình vô nghiệm!");
                            } 
                            else 
                            {
                                echo  ("Phương trình có một nghiệm: ". "x = " . (-$c / $b));
                            }
                            return;
                        }
                        // tính delta
                        $delta = $b*$b - 4*$a*$c;
                        $x1 = "";
                        $x2 = "";
                        // tính nghiệm
                        if ($delta > 0) 
                        {
                            $x1 = (-$b + sqrt($delta)) / (2*$a);
                            $x2 = (-$b - sqrt($delta)) / (2*$a);
                            echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
                        } 
                        else if ($delta == 0) 
                        {
                            $x1 = (-$b / (2 * $a));
                            echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
                        }
                        else 
                        {
                            echo ("Phương trình vô nghiệm!");
                        }   
                    }
                    giaiPTB2 ( $GLOBALS ['heso_a'], $GLOBALS ['heso_b'], $GLOBALS ['heso_c'] );
        ?>
    </form>


<br>
<?php

?>