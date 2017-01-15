      <div class="bottom">
       <div id="iitkgpsf">
        <a href="http://iitkgp.ac.in/" target="_blank"><img class="iitLogo" src="../images/iit.png"></a>
        <a href="http://springfest.in/" target="_blank"><img class="iitLogo" src="../images/favicon.png"></a>
      </div>
      <div id="sponsors">
        <a href="https://www.jio.com/" target="_blank"><img class="iitLogo" src="../images/jio.png"></a>
        <a href="https://www.kaspersky.co.in/" target="_blank"><img class="iitLogo" src="../images/kaspersky.png"></a>
        <a href="https://www.znetlive.com/" target="_blank"><img class="iitLogo" src="../images/znetlivelogo.png"></a>
      </div>
    </div>
    <div class="sidePanel">
      <div id="currentUser">
        <p>USERNAME</p>
        <h1><?php echo $_SESSION['username'];?></h1>
      </div>
      <div class="leaderBoard">
        <h1>Leaderboard</h1>
        <div>
         <?php
         include "../modal/winner.php";
         ?> 
       </div>
     </div>
     <div class="social">
      <a href="https://www.facebook.com/springfest.iitkgp" target="_blank">
       <div class="socialDiv">
        <i class="fa fa-facebook-f" style="font-size:32px"></i>
      </div>
    </a>
    <a href="https://twitter.com/springfest_kgp" target="_blank">
     <div class="socialDiv">
      <i class="fa fa-twitter" style="font-size:32px"></i>
    </div>
  </a>
  <a href="https://www.youtube.com/user/SpringFestForever?spfreload=10" target="_blank">
   <div class="socialDiv">
    <i class="fa fa-youtube-play" style="font-size:32px"></i>
  </div>
</a>
<a href="#">
 <div class="socialDiv">
  <div class="tooltip" id='logout-button' ><i class="fa fa-close" style="font-size:32px"></i>
   <span class="tooltiptext" >LOGOUT!</span>
 </div>
</div>
</a>
</div>


<script src="../script/jquery.js"></script>
<script src="../script/main.js" ></script>
<script src="../script/mouse.parallax.js"></script>
<script src="../script/script.js"></script>
<script src="../script/AjaxGlobalHandler.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    } )(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-90317776-1', 'auto');
    ga('send', 'pageview');

  </script>
</body>
</body>
</html>
