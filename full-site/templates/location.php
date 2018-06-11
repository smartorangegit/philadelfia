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
                Розташування
              </h1>
              <div class="main_text">
                <p class="wow fadeIn">
                  PHILADELPHIA Concept House розташований у центрі Печерську, за адресою: Кловський узвіз, 19.
                </p>
                <p class="wow fadeIn">
                  Ця частина міста відрізняється якісною та насиченою інфраструктурою. Найближчі магазини, кафе та ресторани знаходяться на відстані у декілька хвилин пішки.
                </p>
                <p class="wow fadeIn">
                  А коли ви відправитесь на прогулянку, ваш маршрут охопить найгарніші київські парки та історичні пам’ятки, головна з яких, безперечно, Києво-Печерська лавра.
                </p>
              </div>
              <div class="table_time">
                <table>
                  <tr><td class="minute">1</td><td><span class="">хвилина </span><br>пішки</td><td>
                    <ul>
                      <li>до найближчих кафе та ресторанів</li>
                      <!-- <li>до найближчого продуктового магазину</li> -->
                    </ul></td>
                  </tr>
                  <tr><td class="minute">5</td><td><span class="">хвилин </span><br>пішки</td><td>
                    <ul>
                      <li>до найближчого супермаркету</li>
                      <li>до найближчого парку</li>
                    </ul></td>
                  </tr>
                  <tr><td class="minute">7</td><td><span class="">хвилин </span><br>пішки</td><td>
                    <ul>
                      <li>до найближчої станції метро</li>
                    </ul></td>
                  </tr>
                </table>
                <table>

                  <tr><td class="minute">10</td><td><span class="">хвилин </span><br>пішки</td><td>
                    <ul>
                      <li>до Києво-Печерської Лаври</li>
                    </ul></td>
                  </tr>
                  <tr><td class="minute">15</td><td><span class="">хвилин </span><br>пішки</td><td>
                    <ul>
                      <li>до Верховної Ради</li>
                    </ul></td>
                  </tr>
                  <tr><td class="minute" >5</td><td style="white-space: nowrap;"><span class="">хвилин </span><br>на авто</td><td>
                    <ul>
                      <li>до Хрещатика</li>
                    </ul></td>
                  </tr>
                </table>
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
