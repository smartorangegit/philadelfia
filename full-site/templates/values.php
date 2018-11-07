<?php  HeadAdd(array('pageType'=>'class="housepage"','head'=>true));?>
  	<?php// HeaderInclude(array('pageTypeMobileAll'=>2));?>


    <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/preloader.php')?>
    <div id="perspective" class="perspective effect-laydown">
<?//if (!$detectMob) :?>
      <!-- menu -->
      <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/fixed_menu.php')?>
      <!-- end menu -->

	<?//endif;?>
      <div class="container">
        <div class="wrapper">

        <div class="main_values">
          <div class="name_wrap wow fadeIn" data-wow-duration="2s">
            <div class="content_name"><h1><?H1page()?></h1></div>

          </div>
		    <div class="content_subname">
              <?=$mes['Систему цінностей PHILADELPHIA Concept House окреслює формула STEP']?>
            </div>
            <ul class="values_box">
              <li class="values_item wow fadeInDown">
                <img src="/img/values/1.jpg" alt="values">
                <div class="figcaption">
                  <h2 class="values_name">SECURITY</h2>
				<?=$mes['Продумана система безпеки']?>
                </div>
              </li>
              <li class="values_item wow fadeInRight">
                <img src="/img/values/2.jpg" alt="values">
                <div class="figcaption">
                  <h2 class="values_name">EMOTIONS</h2>
				<?=$mes['Естетичне задоволення красою зовні та всередині будинку']?>
                </div>
              </li>
              <li class="values_item wow fadeInLeft" >
                <img src="/img/values/3.jpg" alt="values">
                <div class="figcaption">
                  <h2 class="values_name">PRIVACY</h2>
				<?=$mes['Розташування у тихому центрі міста']?>
                </div>
              </li>
              <li class="values_item wow fadeInUp" >
                <img src="/img/values/4.jpg" alt="values">
                <div class="figcaption">
                  <h2 class="values_name">TECHNOLOGIES</h2>
					<?=$mes['Високотехнологічний фасад будинку']?>
                </div>
              </li>
            </ul>

        </div>
      </div>
      <style media="screen">
        .fixed_menu{  display: block;   background-color: rgba(0,0,0,0.45);}
      </style>


   	     <?php	 FooterAdd();	?>
