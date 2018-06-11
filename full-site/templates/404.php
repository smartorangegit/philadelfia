<?php  HeadAdd();?>

    <div id="perspective" class="perspective effect-laydown">
      <!-- menu -->
      <?php include ($_SERVER['DOCUMENT_ROOT'].'modules/inc/fixed_menu.php')?>
      <!-- end menu -->
      <div class="container">
        <div class="wrapper">

        <div class="main_values">
          <div class="box_404">
            <img src="/img/404.svg" alt="404"/>
              <!-- <p class="message__heading">Дякуємо! <br> Ваша заявка успішно відправлена.</p> -->
            <div class="info_404">
              <p>Можливо ви ввели неправильну адресу або даної сторінки не існує.</p>
              <p class="italic">
                Переконайтеся, що адреса введена коректно або поверніться на попередню сторінку.
              </p>
              <div class="white_line"></div>
              <p class="not_exist school">Сторінка не знайдена</p>
            </div>



            <a class="link link_404 link__message" href="javascript:history.go(-1)" mce_href="javascript:history.go(-1)"><i class="icon-long-arrow-left"></i> НАЗАД</a>
            <a class="link link_404 link__message" href="<?UrlAdd()?>">НА ГОЛОВНУ <i class="icon-long-arrow-right"></i></a>
          </div>
        </div>

		  <style media="screen">
      .otherpages .fixed_menu{
    background-color: rgba(0, 0, 0, 0);
    z-index: 1999;
}
    .main_values{ min-height: calc(100vh - 42px); padding-bottom: 40px; }
    .wrapper{ background: url('/img/bg_error.jpg'); background-size: 100% 100%; }
    .menu_wrap, .footer_all{ background: none;}
    .footer_wrap{ border-top: 1px solid white; }
    .menu{border-bottom: 1px solid white;}
    .box_404{text-align: center; position: relative; }
    .box_404 img {  max-width: 45%;}
    .info_404{  color: white;  margin-top: -20%;}
    .info_404 p{  margin: 10px auto;}
    .white_line{  width: 200px;  height: 1px;  background: #fff;  margin: 20px auto;}
    .not_exist{  font-size: 48px;}
    .link_404{  max-width: 150px;  color: white;  border: none;  font-size: 14px;  position: absolute;  top: 50%;}
    .icon-long-arrow-left{  margin-left: 0;  margin-right: 4px;}
    .link_404:hover .icon-long-arrow-left{ margin-left: 0; margin-right: 12px;}
    .link_404:last-child{ right: 0; }
    .otherpages .footer_all{  margin-top: -40px;  z-index: 10;  position: relative;}
      @media only screen and (max-width:768px) {
        .box_404 img {    max-width: 90%;}
        .info_404 { margin-top: -36%; font-size: 16px;}
        .not_exist {    font-size: 36px;}
        .otherpages .footer_all{  margin-top: -80px;}
        .link_404{  max-width: 136px;   font-size: 12px;   top: -8%;}
      }

    </style>

		 <?php	 FooterAdd(array('pageType'=>true));	?>
