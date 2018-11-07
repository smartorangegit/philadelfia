  <form class="form" action="" id='call_form'>
    <input type="text" onkeyup="javascript:countme('call_form');" name="name" value="" placeholder="<?=$mes['name']?> *">
    <!--<input type="tel" class='inputtelmask' name="tel" value="" placeholder="Телефон *">-->
    <input type="email" name="email" value="" placeholder="E-mail *">
    <textarea name="text" rows="5" placeholder="<?=$mes['Повідомлення']?>"></textarea>
	
					<input  name="typ" class="webad" type="hidden" value="1" >
					<input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
					<input  name="metka" class="metka" type="hidden" value="Форма зворотнього зв'язку  - PHILADELPHIA "/>
					<input  name="inn" class="userInn" type="hidden" value="PHILADELPHIA - CONCEPT HOUSE"/>
	
	
    <!-- <div class="captcha">
    </div> -->
	<div class="succses__form_info">
		<p class="succses__form_text"></p>
	</div>
    <button class="link submit" data-id='call_form' type="submit" name="button"><?=$mes['НАДІСЛАТИ']?> <i class="icon-long-arrow-right"></i></button>
	
  </form>