      <div class="bottom">
         <div id="iitkgpsf">
            <a href="http://iitkgp.ac.in/" target="_blank"><img class="iitLogo" src="../images/iit.png"></a>
            <a href="http://springfest.in/" target="_blank"><img class="iitLogo" src="../images/favicon.png"></a>
         </div>
         <div id="sponsors">
            <a href="#" target="_blank"><img class="iitLogo" src="../images/jio.png"></a>
            <a href="#" target="_blank"><img class="iitLogo" src="../images/kaspersky.png"></a>
            <a href="#" target="_blank"><img class="iitLogo" src="../images/znetlivelogo.png"></a>
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
            <a href="#">
               <div class="socialDiv">
                  <i class="fa fa-facebook-f" style="font-size:32px"></i>
               </div>
            </a>
            <a href="#">
               <div class="socialDiv">
                  <i class="fa fa-twitter" style="font-size:32px"></i>
               </div>
            </a>
            <a href="#">
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
   <script src="../script/ajaxGlobalHandler.js"></script>
</body>
</body>
</html>
