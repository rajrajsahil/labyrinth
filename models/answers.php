<?php
include 'connect.php';
$functionname = $_POST['functionname'];

if($functionname=="1")
{
$answer = $_POST['level1_ans'];

echo $user->answers($functionname,$answer);
}

else if($functionname=="2")
{
   $answer = $_POST['level2_ans'];
  echo $user->answers($functionname,$answer);
}
else if($functionname=="3")
{
   $answer = $_POST['level3_ans'];
  echo $user->answers($functionname,$answer);
}
else if($functionname=="4")
{
   $answer = $_POST['level4_ans'];
  echo $user->answers($functionname,$answer);
}
else if($functionname=="5")
{
   $answer = $_POST['level5_ans'];
  echo $user->answers($functionname,$answer);
}
else if($functionname=="6")
{
   $answer = $_POST['level6_ans'];
  echo $user->answers($functionname,$answer);
}
else if($functionname=="7")
{
   $answer = $_POST['level7_ans'];
  echo $user->answers($functionname,$answer);
}
else if($functionname=="8")
{
   $answer = $_POST['level8_ans'];
  echo $user->answers($functionname,$answer);
}
else if($functionname=="9")
{
   $answer = $_POST['level9_ans'];
  echo $user->answers($functionname,$answer);
}

else if($functionname=="10")
{
   $answer = $_POST['level10_ans'];
  echo $user->answers($functionname,$answer);
}
else if($functionname=="11")
{
   $answer = $_POST['level11_ans'];
  echo $user->answers($functionname,$answer);
}
else if($functionname=="12")
{
   $answer = $_POST['level12_ans'];
  echo $user->answers($functionname,$answer);
}
else if($functionname=="13")
{
   $answer = $_POST['level13_ans'];
  echo $user->answers($functionname,$answer);
}
else if($functionname=="14")
{
   $answer = $_POST['level14_ans'];
  echo $user->answers($functionname,$answer);
}
else if($functionname=="15")
{
   $answer = $_POST['level15_ans'];
  echo $user->answers($functionname,$answer);
}
else if($functionname=="16")
{
   $answer = $_POST['level16_ans'];
  echo $user->answers($functionname,$answer);
}
else if($functionname=="17")
{
   $answer = $_POST['level17_ans'];
  echo $user->answers($functionname,$answer);
}
else if($functionname=="18")
{
   $answer = $_POST['level18_ans'];
  echo $user->answers($functionname,$answer);
}
else if($functionname=="19")
{
   $answer = $_POST['level19_ans'];
  echo $user->answers($functionname,$answer);
}
else if($functionname=="20")
{
   $answer = $_POST['level20_ans'];
  echo $user->answers($functionname,$answer);
}
?>