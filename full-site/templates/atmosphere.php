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


          <section class="main_two content_atmosfera">




            <div class="content_wrap clearfix">
              <div class="atmo__top">
                <h1 class="content_name">ATMOSFERA</h1>
                <div class="content_subname"><?=$mes['це високотехнологічна управляюча компанія']?></div>
              </div>
              <div class="atmo__top">
                <div class="atmoinfo__box">
                <div class="atmo__img">
                  <img src="/img/atm/sfera.svg" alt="">

                </div>
                  <div class="main_text">
                    <p>
                       <?=$mes['Мета системи ATMOSFERA']?>
                    </p>
                    <p>
                      <?=$mes['ATMOSFERA знаходиться поруч на всіх етапах відносин мешканця']?>
                    </p>
                  </div>
                </div>
                <div class="atmo_video">
                  <iframe width="100%" height="350" src="https://www.youtube.com/embed/LYWyG4refiI"; frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                </div>

              </div>

              <div class="atm__box">
                <div class="atm_icon">
                  <img src="/img/atm/atm2.png" alt="">
                </div>
                <div class="atm__content">
                  <h2 class="content_subname"><?=$mes['УПРАВЛЯЮЧА КОМПАНІЯ ATMOSFERA']?></h2>
						<?=$mes['команда професіоналів з укомплектованою матеріально']?>
                </div>
              </div>
              <div class="atm__box">
                <div class="atm_icon">
                  <img src="/img/atm/atm3.png" alt="">
                </div>
                <div class="atm__content">
                  <h2 class="content_subname"><?=$mes['МОБІЛЬНИЙ ДОТАТОК SFERA']?></h2>
					<?=$mes['звітність про будівництво']?>
                </div>
              </div>

              <div class="atm__box">
                <div class="atm_icon">
                  <img src="/img/atm/atm4.png" alt="">
                </div>
                <div class="atm__content">
                  <h2 class="content_subname"><?=$mes['ЧАТ SFERA']?></h2>
					<?=$mes['вирішення екстрених проблем']?>
                </div>
              </div>

              <div class="atm__box">
                <div class="atm_icon">
                  <img src="/img/atm/atm5.png" alt="">
                </div>
                <div class="atm__content">
                  <h2 class="content_subname"><?=$mes['СИСТЕМА «РОЗУМНИЙ ДІМ»']?></h2>
                  <?=$mes['управління вуличним освітленням']?>
                </div>
              </div>

              <div class="atm__box">
                <div class="atm_icon">
                  <img src="/img/atm/atm6.png" alt="">
                </div>
                <div class="atm__content">
                  <h2 class="content_subname"><?=$mes['СИСТЕМА «РОЗУМНА КВАРТИРА»']?></h2>
                  <div class="main_text">
                    <p>
                      <?=$mes['Система «розумний дім» встановлена у всіх місцях загального користування']?>
                    </p>
                    <p>
                      <?=$mes['Система «розумна квартира» є частиною приватного простору']?>
                    </p>
                  </div>

                </div>
              </div>
              <div class="atm__footer">
                <div>
                  <?=$mes['SAGA Development прагне створювати не лише будинки']?>
                </div>
                <div>
                  <?=$mes['Ми мріємо досягнути затишку']?>
                </div>
                <div>
                  <?=$mes['Саме тому в кожному будинку присутня ATMOSFERA – система для життя.']?>
                </div>
              </div>
              <div class="button docum__link" id="callformPrice" href="#"><?=$mes['h-mes19']?></div>


            </div>
            <style media="screen">
            .content_atmosfera{
              background: url('/img/atm1.jpg') center no-repeat;
              background-size: cover;
              padding-top: 60px;
              box-sizing: border-box;
            }
            .content_atmosfera .main_text{font-size: 16px;}
            .content_atmosfera img{width: 100%;}
            .content_atmosfera *{box-sizing: border-box;}
            .content_atmosfera .content_wrap{
              width: 100%;
              max-width: 1200px;
              padding: 100px 10px 0;
              margin: 0 auto;
            }
            .content_atmosfera .button.docum__link{
              width: 100%;
              max-width: 280px;
              margin: 50px auto;
              display: block;
              text-align: center;
            }
            .atmo__top{
              display: flex;
              justify-content: space-between;
              display: -webkit-flex;
              -webkit-justify-content: space-between;
              margin-bottom: 30px;
            }
            .atmo__top .content_subname{padding-left: 20px;}
            .atmo__top .content_text{padding: 0;}
            .atmo_video{width: 60%;}
            .atmoinfo__box{
              width: 40%;
              padding: 24px;
            }
            .atmo__img{
              width: 100px;
              margin: 0 20px;
              float: left;
            }
            .atm__box{
              border-top: 1px solid #5c5c5d;
              padding: 60px 0;
              display: flex;
              display: -webkit-flex;
              justify-content: space-between;
              align-items: center;
              -webkit-justify-content: space-between;
              -webkit-align-items: center;
            }
            .atm__box .content_subname{
              font-size: 48px;
              text-align: left;
              line-height: normal;
              padding: 0 40px;
            }
            .atm__box .content_text{
              padding: 20px 40px;
            }
            .atm_icon{
              width: 100px;
              padding: 16px;
            }
            .atm__content{
              width: 100%;
            }
            .atm__content ul{
              list-style: disc;
              list-style-position: inside;
              column-count: 2;
              line-height: 1.6;
              padding: 20px 40px;
            }
            .atm__footer{
              border-top: 1px solid #5c5c5d;
              border-bottom: 1px solid #5c5c5d;
              padding: 60px 40px;
              display: flex;
              display: -webkit-flex;
              line-height: 1.6;
              margin-bottom: 60px;
            }
            .atm__footer > div{
              padding: 24px;
            }
            @media only screen and (max-width:1024px) {
              .atmo__top:nth-child(2){
                flex-direction: column-reverse;
                align-items: center;
                -webkit-flex-direction: column-reverse;
                -webkit-align-items: center;
              }
              .atmoinfo__box{
                width: 100%;
              }
              .atmo_video{
                width: 80%;
              }
            }
              @media only screen and (max-width:768px){
                .content_atmosfera .content_wrap { padding: 20px 10px 0;}
                .atmo__top{
                  flex-direction: column;
                  align-items: center;
                  -webkit-flex-direction: column;
                  -webkit-align-items: center;
                }
                .atmo__top .content_subname {
                  padding-left: 0px;
                  font-size: 18px;
                }
                .atmoinfo__box{padding: 0;}
                .atmo__img {width: 85px;}
                .atmo_video {width: 100%;}
                iframe{ height: 180px;}
                .atm__box{
                  flex-direction: column;
                  -webkit-flex-direction: column;
                  padding: 16px 0;
                }
                .atm__box .content_subname {
                  font-size: 30px;
                  padding: 0;
                }
                .atm__content ul {
                  column-count: 1;
                  padding: 0;
                }
                .atm__box .content_text {padding: 20px 0;}
                .atm__footer {
                  padding: 0;
                  flex-direction: column;
                  -webkit-flex-direction: column;
                }
                .atm__footer > div { padding: 14px 0;}
              }
            </style>

          </section>

          <style media="screen">
            .fixed_menu{  display: block;   background-color: rgba(0,0,0,0.45);}
          </style>

        </div>

	 <?php	 FooterAdd(array('index'=>true,'html'=>'
    <script src="/js/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

	', 'head'=>true));	?>
