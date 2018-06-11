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
            <div class="content_subname">
              Систему цінностей PHILADELPHIA Concept House окреслює формула STEP: Security, Technologies, Emotions, Privacy
            </div>
          </div>
            <ul class="values_box">
              <li class="values_item wow fadeInDown">
                <img src="/img/values/1.jpg" alt="values">
                <div class="figcaption">
                  <p class="values_name">SECURITY</p>
                  <ul class="values_list">
                    <li>Продумана система безпеки</li>
                    <li>Постійний відео-нагляд за суспільними просторами та прибудинковою територією</li>
                    <li>Система сигналізації у кожній квартирі</li>
                  </ul>
                </div>
              </li>
              <li class="values_item wow fadeInRight">
                <img src="/img/values/2.jpg" alt="values">
                <div class="figcaption">
                  <p class="values_name">EMOTIONS</p>
                  <ul class="values_list">
                    <li>Естетичне задоволення красою зовні та всередині будинку</li>
                    <li>Вид з панорамних вікон, що надихає</li>
                    <li>Радість від спілкування із однодумцями, які поділяють ваші цінності</li>
                  </ul>
                </div>
              </li>
              <li class="values_item wow fadeInLeft" >
                <img src="/img/values/3.jpg" alt="values">
                <div class="figcaption">
                  <p class="values_name">PRIVACY</p>
                  <ul class="values_list">
                    <li>Розташування у тихому центрі міста</li>
                    <li>Невелика кількість сусідів</li>
                    <li>Club Lounge, призначений лише для	мешканців будинку та їх гостей</li>
                  </ul>
                </div>
              </li>
              <li class="values_item wow fadeInUp" >
                <img src="/img/values/4.jpg" alt="values">
                <div class="figcaption">
                  <p class="values_name">TECHNOLOGIES</p>
                  <ul class="values_list">
                    <li>Високотехнологічний фасад будинку</li>
                    <li>Система «розумний дім», мета якої – забезпечення максимального рівня комфорту мешканців та енергозбереження заради економії</li>
                  </ul>
                </div>
              </li>
            </ul>
        </div>
      </div>
      <style media="screen">
        .fixed_menu{  display: block;   background-color: rgba(0,0,0,0.45);}
      </style>


   	     <?php	 FooterAdd();	?>
