<?php
// Check logged-in
error_reporting(E_ERROR);
session_start();
if(!isset($_SESSION['gpx_userid'])) die('Please login');

// Setup database
require(DOCROOT.'/includes/classes/core.php');
$Core = new Core;
$Core->dbconnect();
?>
<?php

include("./configuration.php");
$GLOBALS['mysqli'] = mysqli_connect($settings['db_host'],$settings['db_username'],$settings['db_password'],$settings['db_name']);
$conn = mysqli_connect($settings['db_host'],$settings['db_username'],$settings['db_password'],$settings['db_name']);


?>
<div id="homeic_boxes_client" style="width:100%;">
    <div class="homeic_box_client" onClick="javascript:mainpage('servers','g');">
        <img src="images/icons/medium/servers.png" /><?php echo 'Servers - ALPHA' ?>
    </div>
    <div class="homeic_box_client" onClick="javascript:mainpage('servers','v');">
        <img src="images/icons/medium/servers.png" /><?php echo $lang['voice_servers']; ?>
    </div>
    <div class="homeic_box_client" onClick="javascript:mainpage('settings','');">
        <img src="images/icons/medium/edit.png" /><?php echo 'Settings' ?>
    </div>
    <div class="homeic_box_client" onClick="javascript:window.location='logout.php';">
        <img src="images/icons/medium/logout.png" /><?php echo $lang['logout']; ?>
    </div>

    <!-- <?php
    if($_SESSION['MASK'] == 1){
        echo '
    <div class="homeic_box_client" id="update">
        <img src="images/icons/medium/logout.png" /><?php echo "Unmasquerade" ?>
    </div>
    ';
  }

    ?>


    <script>
    // Check for system update
    $("#update").click(function(e) {
      e.preventDefault();
      $.ajax({
        type:'POST',
        url:'/ajax/MasqueradeStop.php',
      });
    });
    </script> -->

</div>
