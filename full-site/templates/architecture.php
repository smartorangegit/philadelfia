<?php  HeadAdd(array('pageType'=>'class="architecturepage otherpages"','head'=>true));?>
  	<?php// HeaderInclude(array('pageTypeMobileAll'=>2));?>


    <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/preloader.php')?>
    <div id="perspective" class="perspective effect-laydown">
      <!-- menu -->
      <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/fixed_menu.php')?>
      <!-- end menu -->

      <div class="container">
        <div class="wrapper">


          <section class="ar_section">
            <div class="ar__text">
              <h1 class="main_name"><?=$mes['architecture-h1']?></h1>
              <p class="main_text wow fadeInDown">
                <?=$mes['Створюючи PHILADELPHIA Concept House_architecture']?>
    				  </p>
              <p class="main_text wow fadeInDown">
    						<?=$mes['Головний секрет його привабливості']?>
    					</p>
            </div>
            <div class="ar__img ar__img__1">
            </div>
          </section>
          <section class="ar_section">
            <div class="ar__img ar__img__2">
            </div>
            <div class="ar__text">
              <p class="main_text wow fadeInDown">
               <?=$mes['Ще одна яскрава риса']?>
              </p>
              <p class="main_text wow fadeInDown">
                <?=$mes['Сучасні дизайнерські рішення знайшли втілення і у суспільних просторах']?>
              </p>

            </div>

          </section>
          <section class="ar_section">
            <div class="ar__text">
              <p class="main_text wow fadeInDown">
                <?=$mes['Завдяки яскравим архітектурні інноваціям PHILADELPHIA стане першим в Україні будинком']?>
              </p>
              <p class="main_text wow fadeInDown">
                <?=$mes['Ми створюємо новий символ сучасної київської архітектури']?>
              </p>

            </div>
            <div class="ar__img ar__img__3">
            </div>
          </section>

          <style media="screen">
            .fixed_menu{  display: block;}
            p.main_text{
              margin-bottom: 12px;
            }
          </style>

        </div>

	 <?php	 FooterAdd(array('index'=>true,'html'=>'


	', 'head'=>true));	?>
