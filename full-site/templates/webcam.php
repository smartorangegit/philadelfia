<?php  HeadAdd();?>

  	<?php HeaderInclude(array('pageTypeMobileAll'=>true));?>

    <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/all_preloader.php')?>
    <style media="screen"> body{ visibility: hidden; }</style>
    
    <div id="perspective" class="perspective effect-laydown">
      <div class="container">
        <div class="wrapper">

          	<?php HeaderInclude();?>

        <div class="main_values">
          <div class="name_wrap wow bounceInDown" data-wow-duration="2s">
            <div class="content_name"><h1><?H1page()?></h1></div>
          </div>
          <div class="webcam_box">
            <iframe width="100%" height="100%" src="https://www.youtube.com/embed/J_3Pg4zk964" frameborder="0" allowfullscreen></iframe>
          </div>
          <div class="content_subname">
           Запланований час завершення будівництва: II квартал 2018 року
          </div>
          <a class="link web_link" href="/building/">ХІД БУДІВНИЦТВА <i class="icon-long-arrow-right"></i></a>

        </div>
      </div>
   	     <?php	 FooterAdd();	?>
