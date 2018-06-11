<?php  HeadAdd(array('pageType'=>'class="appartments"','head', 'offstyle'=>true, 'html'=>'
  <link rel="stylesheet" type="text/css" href="/css/component-line.css" />
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" type="text/css" href="/css/ion.rangeSlider.css">
  <link rel="stylesheet" type="text/css" href="/css/ion.rangeSlider.skinHTML5.css">
  <link rel="stylesheet" href="/css/onlymobile.css">

  '));?>
    <?php HeaderInclude(array('pageTypeMobile'=>true)); ?>


    <div class="wrapper">
      <div class="content">
        <div class="main_values main_params">
          <div class="name_wrap wow fadeIn" data-wow-duration="2s">
            <div class="content_name name_params"><h1><?H1page()?></h1></div>
          </div>
          <div class="main_params">
            <div class="range_box clearfix wow fadeInDown">
              <div class="range_box_item">
                <span class="range_name range_name__1">Поверх</span>
                <input type="text" id="floor" data-min='<?= $Rest['floor']['min']?>' data-max='<?=$Rest['floor']['max']?>' name="" value="">
              </div>
              <div class="range_box_item">
                <span class="range_name range_name__2">Кількість кімнат</span>
                <input type="text" id="room" data-min='<?= $Rest['room']['min']?>' data-max='<?=$Rest['room']['max']?>' name="" value="">
              </div>
              <div class="range_box_item">
                <span class="range_name range_name__3">Площа м<sup>2<sup></span>
                <input type="text" id="size" data-min='<?= $Rest['area']['min']?>' data-max='<?=$Rest['area']['max']?>' name="" value="">
              </div>
              <a class="close" href="<?UrlAdd($section_floor_url)?>"><i class="icon-close"></i></a>
            </div>
            <div class="range_results wow fadeInUp">
              <div class="tabscontent_table">
			  
				<?
				TableFlatsMobile($REZULT);
				?>
				
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
	
	<?php FooterMobileAdd(array('pageType'=>true, 'html'=>'
    <script src="/js/ion.rangeSlider.js"></script>
    <script src="/js/range.js"></script>'));
	?>
