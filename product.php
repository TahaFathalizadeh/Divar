<?php

require("db.php");
date_default_timezone_set("Asia/Tehran");
mysqli_set_charset($db, 'utf8');

$mobile="";
$code="";


$buttontext='تأیید';

if (isset($_POST['mobile'])){

    $mobile= $_POST['mobile'];

    $buttontext='ورود';
}


if (isset($_POST['mobile']) && isset($_POST['code'])){

    $code=$_POST['code'];

$sql = mysqli_query($db, " insert into user (mobile, password) values ('$mobile' , '$code')  " );


}










 



?>

<html>
<head>
   
<meta charset="utf-8">
<title>دیوار رشت: مرجع انواع نیازمندی و آگهی‌های نو و دست دو در شهر رشت</title>
  <meta name="viewport" content="viewport-fit=cover,width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"> 

  <link href="bootstrap.min.css" rel="stylesheet" > 
 
 
  <!-- اینجا دقت کنید که Font Awesome 
  رو درست بنویسید -->
  <link rel="stylesheet" href="fontawesome/css/all.min.css"   />
 

  <link rel="stylesheet" href="style.css">


  <link rel="icon" type="image/png" sizes="32x32" href="divar.png">

</head>

<body class="main">


<div class="main_search">
<div style="font-weight: bold;">ورود به حساب کاربری</div>
</div>
 

<br>

<p style="padding: 20px;">شمارهٔ موبایل خود را وارد کنید</p>

<p  style="padding: 0px 20px; font-size:13px; color:gray;">برای استفاده از امکانات دیوار، لطفاً شمارهٔ موبایل خود را وارد کنید. کد تأیید به این شماره پیامک خواهد شد.</p>



<form method="post" action="login.php">
 
<div class="main_search" style="box-shadow: none;" >
    <div class="search_divar" style="    background-color: #ffffff;
    border: 1px solid #eeeeee;">
        <i class="fa-solid fa-phone search1"></i> 

        <input value="<?php echo $mobile; ?>" name="mobile" placeholder="شماره موبایل" maxlength="11" style="    border: none;
    width: 60%;
    height: 34px;
    margin: 0;
    vertical-align: top;
    margin-top: 3px;
    direction: ltr;
    outline: none;
    ">
        <label class="search_text2" style="direction: ltr;  
    background: #f4f4f4;
    border-radius: 15px;
    padding: 0px
px
 8px;
    margin-left: 9px;
    border: none;
    font-size: 13px;
    color: #1e1e1e;">+۹۸</label>
    </div>



<br>

<?php 

if (isset($_POST['mobile'])){

    echo '

    <div class="search_divar" style="    background-color: #ffffff;
    border: 1px solid #eeeeee;">
        <i class="fa-solid fa-code search1"></i> 

        <input name="code" placeholder=" کد ۶ رقمی" maxlength="6" style="    border: none;
    width: 60%;
    height: 34px;
    margin: 0;
    vertical-align: top;
    margin-top: 3px;
    direction: ltr;
    outline: none;
    ">
        <label class="search_text2" style="direction: ltr;   
    border-radius: 15px;
    padding: 0px
px
 8px;
    margin-left: 9px;
    border: none;
    font-size: 13px;
    color: #1e1e1e;"> </label>
    </div>


';
}

?>














</div>
 






















 


    <br>
    <br>
    <br>
    <div class="divbottom2">

    
<button type="submit" tabindex="0" style="     background-color: #be3737;
    border: 1px solid transparent;
    border-radius: 4px;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    display: inline-flex;
    font-size: 1rem;
    font-weight: 500;
    height: 2.5rem;
    justify-content: center;
    min-width: 6rem;
    outline: none;
    overflow: hidden;
    padding: 0 16px;
    width: 100%;
    line-height: 38px; "><span ><?php echo $buttontext ; ?></span></button>

    </div>



</form>



<div class="divbottom">


    <div class="bottom2">
 


<buttom class="btn_bottom">
<a href="index.php" style="    color: #a62626;
    text-decoration: auto;">
    <span><img src="divar2.png" style="width:32px;"></span>
    <br>
    <span style="    font-size: 13px;  color:   #878787;">آگهی‌ها</span> 
</a>
</buttom>
       



<buttom class="btn_bottom" style="padding-top: 8px; ">
    <span style="text-align: center; margin-bottom: 4px;"><i class=" fa-regular fa-list"></i></span>
    <br>
    <span style="     font-size: 13px;      color: #878787; margin-top: 4px; display: block; font-weight: 100;">دسته‌ها</span> 
</buttom>
    





<buttom class="btn_bottom" style="padding-top: 8px; ">
    <span style="text-align: center; font-size: 20px;"><i class="fa-solid fa-circle-plus"></i></span>
    <br>
    <span style="     font-size: 12px;      color: #878787;  display: block; font-weight: 100;">ثبت‌آگهی</span> 
</buttom>
       





<buttom class="btn_bottom" style="padding-top: 8px; ">
    <span style="text-align: center; font-size: 20px;"><i class="fa-solid fa-comment"></i></i></span>
    <br>
    <span style="     font-size: 12px;      color: #878787;  display: block; font-weight: 100;">چت</span> 
</buttom>
       





<buttom class="btn_bottom" style="padding-top: 8px; ">
<a href="login.php" style="    color: #a62626;
    text-decoration: auto;">
    <span style="text-align: center; font-size: 20px;"><i class="fa-solid fa-user"></i></span>
    <br>
    <span style="     font-size: 12px;      color: #a62626;  display: block; font-weight: 100;">دیوار من</span> 
</a>
</buttom>
       


 
</div>

</div>
    
</body>
</html>