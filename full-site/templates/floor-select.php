<?php  HeadAdd();?>
  	<?php HeaderInclude(array('pageTypeMobileAll'=>true));?>

    <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/all_preloader.php')?>
    <style media="screen"> body{ visibility: hidden; }</style>

    <div id="perspective" class="perspective effect-laydown">
      <div class="container">
        <div class="wrapper select_wrapper">
        	<?php HeaderInclude();?>

          <svg class="floorselect__img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" viewBox="0 0 1365 1186" width="1365" height="1186">
            <image width="1365" height="1220" xlink:href="/img/bg_choice.jpg" id="image3388" y="-34" overflow="visible" fill="#f55"/>
            <a xlink:href="/section1/floor16/">
              <path class="st0" data-level="16" data-sale="10" d="M650.5 289.314v35.5l48.5-201h113.5l185.5 254v-24.5l7-4.6-194.7-288.2H703l-4 6-13.2 56.2z"/>
            </a>
            <a xlink:href="/section1/floor15/">
              <path class="st0" data-level="15" data-sale="11" d="M1003 424.814l-190-246-114 1.7-48.5 184.6v-40.3l48.5-201h113.5l185.5 254 5 7z"/>
            </a>
            <a xlink:href="/section1/floor14/">
              <path class="st0" data-level="14" data-sale="10" d="M654.3 372.114v22.4l45.4-157.7h114l184.3 219.7v-23l5-8.7-190-246-114 1.7-48.5 184.6z"/>
            </a>
            <a xlink:href="/section1/floor13/">
              <path class="st0" data-level="13" data-sale="9" d="M650.5 407.114v44l49.2-158h113l185.6 203.7v-24.3l6.7-7.7-7-8.3-184.3-219.7h-114l-45.4 157.7z"/>
            </a>
            <a xlink:href="/section1/floor12/">
              <path class="st0" data-level="12" data-sale="12"  d="M699 349.514h113.3l190.7 190.3v-38.3l-4.7-4.7-185.6-203.7h-113l-49.2 158v45.7z"/>
            </a>
            <a xlink:href="/section1/floor11/">
              <path class="st0" data-level="11" data-sale="10" d="M654 500.514v31.6l46-126h113.3l185.7 169.4v-25.4l6-6.6-2-3.7-190.7-190.3H699l-48.5 147.3z"/>
            </a>
            <a xlink:href="/section1/floor10/">
              <path class="st0" data-level="10" data-sale="9" d="M650.5 538.514v42l48.5-118h114l185.7 152.6v-26.6l6.3-7-191.7-175.4H700l-46 126z"/>
            </a>
            <a xlink:href="/section1/floor9/">
              <path class="st0" data-level="9" data-sale="10" d="M699.7 518.514H813l190 139v-38.7l-4.3-3.7-185.7-152.6H699l-48.5 118v43.6z"/>
            </a>
            <a xlink:href="/section1/floor8/">
              <path class="st0" data-level="8" data-sale="11" d="M655.3 631.514v31l43.4-87H813l184 116.3v-25.3l8-6.4-2-2.6-190-139H699.7l-49.2 105.6z"/>
            </a>
            <a xlink:href="/section1/floor7/">
              <path class="st0" data-level="7" data-sale="10" d="M650.5 667.814v44.3l48.8-79.6H813l184.7 99.3v-27.3l7.3-7-8-5.7-184-116.3H698.7l-43.4 87z"/>
            </a>
            <a xlink:href="/section1/floor6/">
              <path class="st0" data-level="6" data-sale="9" d="M699.3 688.114h114l189.7 86.7v-39.7l-5.3-3.3-184.7-99.3H699.3l-48.8 79.6v43z"/>
            </a>
            <a xlink:href="/section1/floor5/">
              <path class="st0" data-level="5" data-sale="5" d="M650.5 755.114l32 8.4 16.5-19h114.3l185.4 66.3v-28.3l6.3-7.7h-2l-189.7-86.7h-114z"/>
            </a>
            <a xlink:href="/section1/floor4/">
              <path class="st0" data-level="4" data-sale="6" d="M682.5 763.514l130.5 36.3 185.3 51.3v-29l6.7-9.3-6.3-2-185.4-66.3H699z"/>
            </a>
          </svg>

          <div class="main_values main_select">
            <div class="main_select__left">
              <h1 class="select_name wow fadeIn" data-wow-duration="2s">Обрати <br>поверх</h1>
              <div class="black_line"></div>
              <div class="select_text">
                <p>Вибір планувань квартир.</p>
                <p>Оберіть потрібний Вам поверх на будинку праворуч</p>
              </div>
              <a id="call_price" class="button6 select__link" href="#">Дізнатись ціну   <i class="icon-long-arrow-right"></i></a>
              <ul class="select__list">
                <li><a href="#">1-кімнатні квартири</a></li>
                <li><a href="#">2-кімнатні квартири</a></li>
                <li><a href="#">3-кімнатні квартири</a></li>
              </ul>
            </div>
            <div class="main_select__right">
              <div id="floorNumber" class="select__box"> 2 </div>
              <p class="select__italic">Поверх</p>
              <div id="flatsNumber" class="select__box"> 10 </div>
              <p class="select__italic">Кількість квартир у продажі</p>
            </div>
          </div>

        </div>
      <!-- </div> -->
      <style>
      .select_wrapper{
        background: url('/img/main_choise.jpg');
        background-size: cover;
      }
        .floorselect__img {
          height: auto;
          min-height: 300px;
          display: block;
          margin: 0 auto;
          max-width: 100%;
          /* max-height: 100vh; */
          padding: 40px 0 0;
        }
        .floorselect__img a{
          display: block;
        }
        .main_select{
          position: absolute;
          width: 1080px;
          top: 0;
          left: 50%;
          transform: translate(-50%,0);
          pointer-events: none;
        }
        .main_select__left{
          width: 250px;
          float: left;
        }
        .main_select__right{
          width: 140px;
          float: right;
          text-align: center;
          padding-top: 140px;
        }
        .select_name{
          font-size: 48px;
          font-family: "SCHLBKI";
        }
        .select_text{
          font-family: "CynthoPro-Light";
          font-size: 14px;
          letter-spacing:1px;
          line-height: 1.4;
        }
        .select__list{
          font-family: "SCHLBKI";
        }
        .select__list li{
          line-height: 2;
          text-decoration: underline;
          pointer-events: all;
        }
        .select__link{
          margin: 20px 0;
          text-align: center;
          text-transform: uppercase;
          pointer-events: all;
        }
        .black_line{
          width: 90px;
          height: 1px;
          background-color: #000;
          margin: 24px 0;
        }
        .floorselect__img .st0{
          opacity:.25;
          fill:#afcb74;
          cursor: pointer;
        }
        .floorselect__img .st0:hover{
          opacity:.7;
        }
        .select__box{
          width: 64px;
          height: 64px;
          border: 1px solid #4d4d4d;
          text-align: center;
          font-size: 30px;
          font-family: "CynthoPro-Light";
          line-height: 60px;
          margin: 20px auto;
        }
        .select__italic{
          font-family: "SCHLBKI";
          font-size: 14px;
          margin-bottom: 12px;
        }

      </style>


	     <?php	 FooterAdd(array('html'=>'

       <script type="text/javascript">
       $(".floorselect__img path").hover(function(){
         var level = this.dataset.level;
         var sale = this.dataset.sale;
         $("#floorNumber").html(level);
         $("#flatsNumber").html(sale);
         });

         </script>


	'));	?>
