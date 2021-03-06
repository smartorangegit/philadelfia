<?php  HeadAdd();?>
  	<?php //HeaderInclude(array('pageTypeMobileAll'=>true));?>


    <style media="screen"> body{ visibility: hidden; }</style>

    <div id="perspective" class="perspective effect-laydown">
      <!-- menu -->
      <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/fixed_menu.php')?>
      <!-- end menu -->
      <div class="container">
        <div class="wrapper select_wrapper">
          <div class="main_values main_select">
            <div class="main_select__left">
              <h1 class="select_name wow fadeIn" data-wow-duration="2s"><?H1page()?>
                <!-- на будинку <span class="no_mobile">праворуч</span>  -->
              </h1>
              <div class="black_line"></div>
              <ul class="select__list">
                <li><a href="<?UrlAdd('1-kimnatni')?>"><?=$mes['1-кімнатні квартири_floor-bselect']?></a></li>
                <li><a href="<?UrlAdd('2-kimnatni')?>"><?=$mes['2-кімнатні квартири_floor-bselect']?></a></li>
                <li><a href="<?UrlAdd('3-kimnatni')?>"><?=$mes['3-кімнатні квартири_floor-bselect']?></a></li>
              </ul>
              <div class="main_select__infobox">
                <div class="infobox__item">
                  <div id="floorNumber1"> 2 </div>
                  <p class="select__italic"><?=$mes['поверх']?></p>
                </div>
                <div class="infobox__item">
                  <div id="flatsNumber"> 5 </div>
                  <p class="select__italic"><?=$mes['квартир у продажі']?></p>
                </div>
                <a href="/section1/floor4/" class="infobox__item hidden_desktop" id="new_link_house">
                  <svg xmlns="http://www.w3.org/2000/svg"height="32" viewBox="0 0 40 40" width="32">

                    <path fill="#ffffff" d="m20 0c-11.027 0-20 8.973-20 20s8.973 20 20 20 20-8.973 20-20-8.973-20-20-20zm7.059 22.281h-9.187l2.142 2.521c.815.96.698 2.399-.263 3.216-.429.363-.953.543-1.476.543-.646 0-1.288-.272-1.739-.806l-5.334-6.278c-.723-.853-.723-2.103 0-2.953l5.334-6.279c.814-.961 2.254-1.078 3.215-.264.961.815 1.078 2.256.263 3.217l-2.142 2.521h9.187c1.26 0 2.28 1.021 2.28 2.281s-1.021 2.281-2.28 2.281z" transform="matrix(-1 0 0 1 40 0)"/></svg>
                  </svg>
                  <span class=""><?=$mes['переглянути']?></span>
                </a>
              </div>
              <!-- <a id="call_price" class="button20 select__link" href="#">Дізнатись ціну   <i class="icon-long-arrow-right"></i></a> -->
            </div>
            <svg class="arrow_blink" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 186 36.5" style="enable-background:new 0 0 186 36.5;" xml:space="preserve">
            <style type="text/css">.st0{fill:#FFFFFF;}.st1{fill:#E4E4E4;}.st2{font-family:'HE_L';font-size:12px;}</style>
            <g><polygon class="st0" points="155,4 4,4 4,34 155,34 182,19 	"/><polygon class="st1" points="4,4 4,19 182,19 182,19 155,4 	"/></g>
            <text transform="matrix(1 0 0 1 16 22.2998)" class="st2"><?=$mes['Оберіть поверх тут']?></text>
            </svg>

          </div>

          <svg class="floorselect__img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" viewBox="0 0 1365 1215.4" width="1365" height="1215.4">
            <image xlink:href="/img/house_black.jpg" y="-1.2" id="image3389" height="1220" width="1365" overflow="visible" fill="#f55"/>
            <a xlink:href="/section1/floor16/">
              <path class="st0" data-level="16" data-sale="5" data-href="/section1/floor16/" d="M699 135.5l-13.2 56.2-35.3 166.6v35.5l48.5-201h113.5l185.5 254v-24.5l7-4.6-194.7-288.2H703z"/>
            </a>
            <a xlink:href="<?UrlAdd('section1/floor15')?>">
              <path class="st0" data-level="15" data-sale="5" data-href="<?UrlAdd('section1/floor15')?>" d="M1003 493.8l-190-246-114 1.7-48.5 184.6v-40.3l48.5-201h113.5l185.5 254 5 7z"/>
            </a>
            <a xlink:href="<?UrlAdd('section1/floor14')?>">
              <path class="st0" data-level="14" data-sale="5" data-href="<?UrlAdd('section1/floor14')?>" d="M650.5 434.1l3.8 7v22.4l45.4-157.7h114L998 525.5v-23l5-8.7-190-246-114 1.7z"/>
            </a>
            <a xlink:href="<?UrlAdd('section1/floor13')?>">
              <path class="st0" data-level="13" data-sale="5"data-href="<?UrlAdd('section1/floor13')?>"  d="M699.7 305.8l-45.4 157.7-3.8 12.6v44l49.2-158h113l185.6 203.7v-24.3l6.7-7.7-7-8.3-184.3-219.7z"/>
            </a>
            <a xlink:href="<?UrlAdd('section1/floor12')?>">
              <path class="st0" data-level="12" data-sale="5" data-href="<?UrlAdd('section1/floor12')?>"  d="M699 418.5h113.3L1003 608.8v-38.3l-4.7-4.7-185.6-203.7h-113l-49.2 158v45.7z"/>
            </a>
            <a xlink:href="<?UrlAdd('section1/floor11')?>">
              <path class="st0" data-level="11" data-sale="5"data-href="<?UrlAdd('section1/floor11')?>"  d="M699 418.5l-48.5 147.3 3.5 3.7v31.6l46-126h113.3L999 644.5v-25.4l6-6.6-2-3.7-190.7-190.3z"/>
            </a>
            <a xlink:href="<?UrlAdd('section1/floor10')?>">
              <path class="st0" data-level="10" data-sale="5"data-href="<?UrlAdd('section1/floor10')?>"  d="M654 601.1l-3.5 6.4v42l48.5-118h114l185.7 152.6v-26.6l6.3-7-191.7-175.4H700z"/>
            </a>
            <a xlink:href="<?UrlAdd('section1/floor9')?>">
              <path class="st0" data-level="9" data-sale="5" data-href="<?UrlAdd('section1/floor9')?>" d="M699.7 587.5H813l190 139v-38.7l-4.3-3.7L813 531.5H699l-48.5 118v43.6z"/>
            </a>
            <a xlink:href="<?UrlAdd('section1/floor8')?>">
              <path class="st0" data-level="8" data-sale="5" data-href="<?UrlAdd('section1/floor8')?>" d="M699.7 587.5l-49.2 105.6 4.8 7.4v31l43.4-87H813l184 116.3v-25.3l8-6.4-2-2.6-190-139z"/>
            </a>
            <a xlink:href="<?UrlAdd('section1/floor7')?>">
              <path class="st0" data-level="7" data-sale="5" data-href="<?UrlAdd('section1/floor7')?>" d="M698.7 644.5l-43.4 87-4.8 5.3v44.3l48.8-79.6H813l184.7 99.3v-27.3l7.3-7-8-5.7-184-116.3z"/>
            </a>
            <a xlink:href="<?UrlAdd('section1/floor6')?>">
              <path class="st0" data-level="6" data-sale="5" data-href="<?UrlAdd('section1/floor6')?>" d="M699.3 757.1h114l189.7 86.7v-39.7l-5.3-3.3L813 701.5H699.3l-48.8 79.6v43z"/>
            </a>
            <a xlink:href="<?UrlAdd('section1/floor5')?>">
              <path class="st0" data-level="5" data-sale="5" data-href="<?UrlAdd('section1/floor5')?>" d="M699.3 757.1l-48.8 67 32 8.4 16.5-19h114.3l185.4 66.3v-28.3l6.3-7.7h-2l-189.7-86.7z"/>
            </a>
            <a xlink:href="<?UrlAdd('section1/floor4')?>">
              <path class="st0" data-level="4" data-sale="5" data-href="<?UrlAdd('section1/floor4')?>" d="M813 868.8l185.3 51.3v-29l6.7-9.3-6.3-2-185.4-66.3H699l-16.5 19z"/>
            </a>
          </svg>
<div class="super_seo_text">
		<div class="main_text">
		<?=$mes['Життя у престижному районі Києва формує свої звички та цінності']?>
		</div>
</div>
		<style>
.super_seo_text {
	width: 100%;
	max-width: 1200px;
	padding: 20px 10px 40px;
	margin: 0 auto;
}
</style>
</div>
        <div id="floorNumber" class="select__box"></div>


	     <?php	 FooterAdd(array('html'=>'

       <script type="text/javascript">
       $( "path" ).each(function() {
         var myBox = $("#floorNumber");
         var infoBox1 = $("#floorNumber1");
         var infoBox2 = $("#flatsNumber");
         var newlink = $("#new_link_house");

         if ($(window).width() > 1024){

           $(this).mouseenter(function() {

             var offset = $(this).offset();
             var level = this.dataset.level;
             var flatSale = this.dataset.sale;
             myBox.html(level);
             infoBox1.html(level);
             infoBox2.html(flatSale);
             $(".arrow_blink").hide("slow");
             myBox.css("opacity","1");
             myBox.offset({top:offset.top, left:offset.left});
             });
             $(this).mouseleave(function() {
               var myBox = $("#floorNumber");
               myBox.css("opacity","0");
               });
           }
          else{
            $(this).click(function(e){
              e.preventDefault();
              var level = this.dataset.level;
              var flatSale = this.dataset.sale;
              var href = this.dataset.href;
              myBox.html(level);
              infoBox1.html(level);
              infoBox2.html(flatSale);
              newlink.attr("href", href);
                $(".floorselect__img .st0").css("animation","none");

            });
            }

     });
         </script>


	'));	?>
