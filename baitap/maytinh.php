<!DOCTYPE html>

<html>
<td colspan="2" style="text-align: center;padding-top: 0.5em;">
<input name="sign-out" value="Đăng xuất" type="submit" />   </td> 
<?php
    //if(isset($_POST['sign-out'])){
    session_start();
    if(isset($_SESSION['username'])&&$_SESSION['username']!=NULL)
    { 
?>
    <span> Xin chào: <?php echo $_SESSION['username'];?> / <a href ="login.php" >Thoát </a></span>
    <a href="index.php"><span>Menu</span></a>
    <a href="login.php" class="button alt">Sign in</a>
    <a href="sigin.php" class="button alt">sign up</a>  
<?php } ?>
    <title>CALCULATOR - MÁY TÍNH BỎ TÚI MIỄN PHÍ</title>
    <header id="header">
                    
    <link rel="stylesheet" type="text/css" href="maytinh.css">
</head>


<body>
    <div class="header">
        <u><h1>CALCULATOR</h1></u>
    <?php
    
    $message=0;
    $current_txt=0;
// current formula in input box
        if (isset($_POST['txt'])) {
            $current_txt = $_POST['txt'];
        }
        if (isset($_POST['txt_plus'])) {
            $current_result = $_POST['txt_plus'];
        }else{
             $current_result = 0;
        }
        if (isset($_POST['select1'])) {
            $message = "1";
        }
        if (isset($_POST['select2'])) {
            $message = "2";
        }
        if (isset($_POST['select3'])) {
            $message = "3";
        }
        if (isset($_POST['select4'])) {
            $message = "4";
        }
        if (isset($_POST['select5'])) {
            $message = "5";
        }
        if (isset($_POST['select6'])) {
            $message = "6";
        }
        if (isset($_POST['select7'])) {
            $message = "7";
        }
        if (isset($_POST['select8'])) {
            $message = "8";
        }
        if (isset($_POST['select9'])) {
            $message = "9";
        }
        if (isset($_POST['select0'])) {
            $message = "0";
        }
        if (isset($_POST['selectdot'])) {
            $message = ".";
        }
        if (isset($_POST['select+'])) {
            $message = "+";
        }
        if (isset($_POST['select-'])) {
            $message = "-";
        }
        if (isset($_POST['select/'])) {
            $message = "/";
        }
        if (isset($_POST['select*'])) {
            $message = "*";
        }
        if (isset($_POST['clear'])) {
            $message = "clear";
        }
        if (isset($_POST['del'])) {
            $message = "del";
        }
        if (isset($_POST['calculate'])) {
            $message = "calc";
        }


        if (isset($_POST['delOne'])) {
            $message = "del";
        }
        if (isset($_POST['delMo'])) {
            $message = "(";
        }
        if (isset($_POST['delDong'])) {
            $message = ")";
        }
        if (isset($_POST['delGT'])) {
            $message = "!";
        }
        
        if (isset($_POST['selectCan'])) {
            //$message = "√";
           $message = "canbachai";
        }
        if (isset($_POST['selectnCan'])) {
            $message = "NCanBacCua";
        }
        if (isset($_POST['selectnCr'])) {
            $message = "nCr";
        }
        if (isset($_POST['selectx2'])) {
            $message = "(x2)";
        }
        if (isset($_POST['selectxn'])) {
            $message = "xn";
        }
        if (isset($_POST['selectSin'])) {
            $message = "Sin(";
        }
        if (isset($_POST['select10'])) {
            $message = "*10n";
        }
        if (isset($_POST['selectpi'])) {
            $message = "Π";
        }
        if (isset($_POST['selectCos'])) {
            $message = "Cos(";
        }
        if (isset($_POST['Ans'])) {
            $message = "Ans";
        }
        if (isset($_POST['selecte'])) {
            $message = "e";
        }
        if (isset($_POST['selectTan'])) {
            $message = "Tan(";
        }
    if (isset($_POST['ptbh']))
    { 
        header('Location:ptbachai.php');
     }
        if($message!="calc")
        {
        
        if ($message == "del") 
        {
         $current_txt = substr($current_txt,0,strlen($current_txt)-1);
        } else
            $current_txt .= $message;
        }
       if (isset($_POST['calculate']))
          
        {   
            if(strpos ($current_txt, "n√",0)>0)
            { include "nthRoot.php";
            $temp1=array_pad(explode("n√",$current_txt),2,n);
            $temp=NRoot($temp1[1],$temp1[0]);
            $current_result =$temp;
            }   
            include "tachChuVaSo.php";
            $str = strtolower($current_txt); 
            $temp=isequal($str);
    
            if( $temp=="cos")
            {
            $x1=explode("Cos(",$current_txt);
            $current_result =cos($x1[1]);
            
            }
            else if( $temp=="sin")
            {
            $x1=explode("Sin(",$current_txt);
            $current_result =sin($x1[1]);
            
            }
            else if( $temp=="tan")
            {
            $x1=explode("Tan(",$current_txt);
            $current_result =tan($x1[1]);
            
            }
            else if( $temp=="x")
            {
            $x1=explode("(x2)",$current_txt);
            $current_result =pow($x1[0],2);
            }
            else if ($temp=="canbachai")
            {
            $temp=explode("canbachai",$current_txt);
            $current_result =sqrt($temp[1]);
            }
            else if ($temp=="ncanbaccua")
            { include "nthRoot.php";
            $temp1=explode("NCanBacCua",$current_txt);
            $temp=NRoot($temp1[1],$temp1[0]);
            $current_result =$temp;
                
            }
            else  $current_result = eval('return ' . $current_txt . ';');
            
        
        }
       
        if ($message == "Ans"){
            $current_txt = "";
            $current_result = "0";

        }
        if ($message == "clear") {
            $current_txt = "";
            $current_result = "0";
        }
             
    ?>

<div class="form">
    <form  method="post">
      <input class="input_text" type="text" name="txt"id="result_kq" value="<?php
        echo $current_txt;
        ?>" >
        <br>
         <input class="input_result" type="text" name="txt_plus" id="result"value="<?php
        echo $current_result;
        ?>" >
        <div class="key"><br>
            <input type="submit" name="clear" value="CE">
            <input type="submit" name="del" value="DEl">

            <input type="submit" name="delOne" value="<-">
            <input type="submit" name="delMo" value="(">
            <input type="submit" name="delDong" value=")">
            <input type="submit" name="delGT" value="!">
            <input type="submit" name="ptbh" value="PTB2">
            <br>

            <br>
            <input type="submit" name="select7" value="7">
            <input type="submit" name="select8" value="8">
            <input type="submit" name="select9" value="9">  
            <input type="submit" name="select/" value="/">
            <input type="submit" name="selectCan" value="√">
            <input type="submit" name="selectnCan" value="^n√">
            <input type="submit" name="selectnCr" value="nCr">
            <br>

            <br>
            <input type="submit" name="select4" value="4">
            <input type="submit" name="select5" value="5">
            <input type="submit" name="select6" value="6">
            <input type="submit" name="select*" value="*">
            <input type="submit" name="selectx2" value="x^2">
            <input type="submit" name="selectxn" value="xn">
            <input type="submit" name="selectSin" value="Sin">
           <br>

           <br>
            <input type="submit" name="select1" value="1">
            <input type="submit" name="select2" value="2">
            <input type="submit" name="select3" value="3">
            <input type="submit" name="select-" value="-">
            <input type="submit" name="select10" value="*10n">
            <input type="submit" name="selectpi" value="pi">
            <input type="submit" name="selectCos" value="Cos">
            <br>

            <br>
            <input type="submit" name="select0" value="0">
            <input type="submit" name="selectdot" value=".">
            <input type="submit" name="Ans" value="Ans">
            <input type="submit" name="select+" value="+">
            <td><input type="submit" name="calculate" value="="></td>
            <input type="submit" name="selecte" value="e">
            <input type="submit" name="selectTan" value="Tan">
            
 </div>
    </form>
    </div>
 </div>
</body>
</html>