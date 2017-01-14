<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Labyrinth 7.0 | Spring Fest 2017</title>
    <link rel="shortcut icon" href="favicon.png">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php
date_default_timezone_set("Asia/Kolkata");
$d = (string)date("Y-m-d H:i:s");
$d1 = date_create($d);
$d2 = date_create("2017-01-15 15:00:00");
$diff = date_diff($d1, $d2);
$h = $diff->h;
if($diff->d > 0){
  $h += ($diff->d*24);
}
$i = $diff->i;
$s = $diff->s;
?>
<div class="wrap">  
  <h1>spring fest iit kharagpur <br /><strong>labyrinth 7.0</strong></h1>

  <div class="countdown">
    <div class="bloc-time hours" data-init-value="<?php echo $h; ?>">
      <span class="count-title">Hours</span>

      <div class="figure hours hours-1">
        <span class="top">0</span>
        <span class="top-back">
          <span>0</span>
        </span>
        <span class="bottom">0</span>
        <span class="bottom-back">
          <span>0</span>
        </span>
      </div>

      <div class="figure hours hours-2">
        <span class="top">0</span>
        <span class="top-back">
          <span>0</span>
        </span>
        <span class="bottom">0</span>
        <span class="bottom-back">
          <span>0</span>
        </span>
      </div>
    </div>

    <div class="bloc-time min" data-init-value="<?php echo $i; ?>">
      <span class="count-title">Minutes</span>

      <div class="figure min min-1">
        <span class="top">0</span>
        <span class="top-back">
          <span>0</span>
        </span>
        <span class="bottom">0</span>
        <span class="bottom-back">
          <span>0</span>
        </span>        
      </div>

      <div class="figure min min-2">
       <span class="top">0</span>
        <span class="top-back">
          <span>0</span>
        </span>
        <span class="bottom">0</span>
        <span class="bottom-back">
          <span>0</span>
        </span>
      </div>
    </div>

    <div class="bloc-time sec" data-init-value="<?php echo $s; ?>">
      <span class="count-title">Seconds</span>

        <div class="figure sec sec-1">
        <span class="top">0</span>
        <span class="top-back">
          <span>0</span>
        </span>
        <span class="bottom">0</span>
        <span class="bottom-back">
          <span>0</span>
        </span>          
      </div>

      <div class="figure sec sec-2">
        <span class="top">0</span>
        <span class="top-back">
          <span>0</span>
        </span>
        <span class="bottom">0</span>
        <span class="bottom-back">
          <span>0</span>
        </span>
      </div>
    </div>
  </div>
</div>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
    <script src="index.js"></script>
</body>
</html>
