<?php if($page != 'about') { ?>
<div class="cntrTxt"><a class="bioLnk" href="../about.php"><img class="daveBio mt-4" src="img/dave_biopic-min.jpg"></a></div>
<?php } ?>

<p class="nav-name big-txt cntrTxt cntrBlock"><?php echo $name; ?></p>
<p class="cntrTxt mt-0 mb-0 pb-0"><?php echo $myTitle; ?></p>
<div class="cntrTxt">
    <?php addSocialIcons(); ?>
</div>
        
<div class="contactWpr">

<!--<div class="meetCtn">
  
    <link href="https://assets.calendly.com/assets/external/widget.css" rel="stylesheet">
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript"></script>
    <a class="" href="" onclick="Calendly.initPopupWidget({url: 'https://calendly.com/davepierce/30min?primary_color=ffc681'});return false;"><img class="webcamIco" src="img/webcam_ico-min.png">Schedule a Video Call</a>
    
</div>-->

    <a href="tel:585-622-6492"><img class="contactIco phoneIco" src="img/phone-min.png"><span><?php echo $phone; ?></span></a>

    <br>

    <div class="mailCtn">
        <a target="_blank" class="mailLnk" href="mailto:<?php echo $email; ?>">
            <img class="contactIco emailIco" src="img/email-min.png"><span><?php echo $email; ?></span>
        </a>
    </div>
</div>

<nav>
    <ul class="nav-box mt-4">
          <li class="">
            <a class="boxLnk" href="index.php">My Portfolio <? if ($page == 'portfolio'){echo '<span class="sr-only">(current)</span>';} ?></a>
          </li>
          <li class="boxLnk">
            <?php if($page != "about"){ echo '<a class="" href="about.php">About Me</a>'; } ?>
            
          </li>
    </ul>
</nav>