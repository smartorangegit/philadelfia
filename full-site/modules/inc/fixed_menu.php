<div class="fixed_menu">
  <div class="menu clearfix">
    <div class="left_nav">
      <a href="tel:<?=$mes['tel']?>" class="only_mobile"><i class="icon-phone"></i></a>
      <span class="no_mobile main_call"><i class="icon-phone"></i><span class="phone_number"><a class="phone_click" href="tel:<?=$mes['tel']?>"><?=$mes['tel']?></a></span></span>
      <a id="call_on" class="button20 no_mobile"><?=$mes['замовити дзвінок']?></a>
    </div>
    <div class="right_nav">
      <?php global $len;
          if ($len){
           echo '<div class="lang">
           <span id="lang_open">'.$mes['fut-mes4'].' <i class="icon-chevron-down"></i></span>
           <ul id="lang">';
				  	GLOBAL $LANG, $SETPAGE;
					
							$LANGS=$len;	$LANGS[]=$len_default;

							$correct_mas=explode("/", $_SERVER['REQUEST_URI']);

							if ($LANG==$len_default) {	$t_LANG='/';	}
							else {	$t_LANG='/'.$LANG;	}

																foreach ($LANGS as $t){
										if ($t==$mes['fut-mes3']) {	continue;	}

										$mes_t = parse_ini_file('modules/language/'.$t.'.ini'); ;
										$tHref='/'.$t.'/';
										if ($t==$len_default) {$t=$len_default; $tHref='/';}


								if(in_array($correct_mas[1], $LANGS, true)) {

									$Href=str_replace('/'.$correct_mas[1].'/', $tHref, $_SERVER['REQUEST_URI']);

								} else {

									$Href='/'.$t.$_SERVER['REQUEST_URI'];
								}
									if ($SETPAGE=='news-open') {	$Href=$tHref.'news/';	}


									echo '
									<li class="lang__item">
										<a class="lang__link" data-nav-item="2" href="'.$Href.'">'.$mes_t['fut-mes4'].'</a>
									</li>';

									}
          echo'</ul></div>';
          } ?>
      <!-- <a class="no_mobile"  href="<?UrlAdd('architecture/location')?>"><i class="icon-location2"></i></a> -->
      <!-- <a class="no_mobile" href="<?UrlAdd('contacts')?>"><i class="icon-mail2"></i></a> -->
      <a href="#" id="<?if ($detectMob) {echo 'show_mobilemenu';}else {echo 'showMenu';}?>"><i class="icon-menu" style="display:  inline-block; vertical-align: middle;"></i><span class="no_mobile"><?=$mes['меню']?></span> </a>
    </div>
    <div class="fixed_logo">
      <a href="/" title="PHILADELPHIA - CONCEPT HOUSE">
              <img src="/img/philadelphia-concept-house-logo.svg" alt="Лого житлового комплексу PHILADELPHIA Concept House місто Київ" title="Лого житлового комплексу PHILADELPHIA Concept House місто Київ" >
      </a>
    </div>
  </div>
</div>
