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


          <section class="main_two section_house">
            <div class="main_two_left"></div>
            <div class="main_two_right">
              <h1 class="main_name wow fadeIn">
                <?=$mes['house-h1']?>
              </h1>
              <div class="main_text">
                <p class="wow fadeIn">
                  <?=$mes['У серці Києва_house']?>
                </p>
                <p class="wow fadeIn">
					<?=$mes['Смілива сучасна архітектура_house']?>
				</p>
                <p class="wow fadeIn">
                  <?=$mes['Цей будинок ми створюємо для тих_house']?>
                </p>
                <p class="wow fadeIn">
                  <?=$mes['Створюючи PHILADELPHIA Concept House']?>
                </p>
              </div>
              <a href="<?UrlAdd('floor-bselect')?>" class="button20" title="Купити квартиру в ЖК PHILADELPHIA Concept House" ><?=$mes['Обрати квартиру']?></a>

            </div>
          </section>


          <style media="screen">
            .fixed_menu{  display: block;   background-color: rgba(0,0,0,0.45);}
          </style>

        </div>

	 <?php	 FooterAdd(array('index'=>true,'html'=>'
    <script src="/js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	', 'head'=>true));	?>
