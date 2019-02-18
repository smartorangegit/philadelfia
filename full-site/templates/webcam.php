<?php  HeadAdd(array('pageType'=>'class="housepage"','head'=>true));?>
  	<?php// HeaderInclude(array('pageTypeMobileAll'=>2));?>


    <div id="perspective" class="perspective effect-laydown">
<?//if (!$detectMob) :?>
      <!-- menu -->
      <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/fixed_menu.php')?>
      <!-- end menu -->

	<?//endif;?>


      <div class="container">
        <div class="wrapper">

          	<?php HeaderInclude();?>

        <div class="main_values main_webcam">
          <div class="name_wrap wow bounceInDown" data-wow-duration="2s">
            <div class="content_name"><h1><?H1page()?></h1></div>
          </div>
          <div class="content_subname">
            <?=$mes['webcam-message']?>
          </div>
          <!-- <div class="webcam_box">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/J_3Pg4zk964" frameborder="0" allowfullscreen></iframe>
          </div> -->
          <div class="content_subname">
            <?=$mes['Запланований час завершення будівництва']?>
          </div>
          <a class="link web_link" href="<?UrlAdd('building')?>"><?=$mes['хід будівництва']?> <i class="icon-long-arrow-right"></i></a>

        </div>
      </div>

      <?php	 FooterAdd(array('index'=>true,'html'=>'


     ', 'head'=>true));	?>
