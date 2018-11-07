<?php  HeadAdd(array('pageType'=>'class="mainpage"','head'=>true));?>
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


          <section class="section_location">
            <div class="location_left">
              <h1 class="main_name wow fadeIn">
                <?=$mes['location-h1']?>
              </h1>
              <div class="main_text">
                <p class="wow fadeIn">
                  <?=$mes['PHILADELPHIA Concept House розташований у центрі Печерську, за адресою_location']?>
                </p>
                <p class="wow fadeIn">
                  <?=$mes['Ця частина міста відрізняється якісною та насиченою інфраструктурою_location']?>
                </p>
                <p class="wow fadeIn">
                  <?=$mes['А коли ви відправитесь на прогулянку_location']?>
                </p>
              </div>
              <div class="table_time">
				<?=$mes['table_time_location']?>
              </div>
              <!-- <a href="<?UrlAdd('floor-bselect/')?>" class="button20">Обрати квартиру</a> -->
            </div>
            <div class="location_right">
              <style media="screen">
              .gmnoprint{
                /* display: none; */
              }
              .gm-style-mtc{display: none!important;}
              /* .gm-style .gm-style-cc span, .gm-style .gm-style-cc a, */
              .gm-style .gm-style-mtc div
              {
                font-size: 10px;
                display: none;
              }
              </style>
              <div id="map1" class="map">

              </div>
            </div>
          </section>


          <style media="screen">
            .fixed_menu{  display: block;   background-color: rgba(0,0,0,0.45);}

          </style>

        </div>
        <!-- <script src="/js/script.js"></script> -->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <!-- AIzaSyDehzKltJ2hA0p9O2BWYkXG2Z4q7A-3TTM -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDehzKltJ2hA0p9O2BWYkXG2Z4q7A-3TTM&sensor=false"></script>

        <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCb1nF3LPA_ZOACIAdwgtrh0nrQd4NYybA&sensor=false"></script> -->
        <script src="/js/map.js"> </script>
	 <?php	 FooterAdd(array('index'=>true,'html'=>'
    <script src="/js/jquery.js"></script>


	', 'head'=>true));	?>
