 <!-- форма вызова c хедера "замовити дзвінок" -->
<div class="overlay"></div>

<!-- форма вызова из меню "замовити зворотній дзвінок" -->
<div id="callback1" class="location_form">
  <div id="formclose2"><i class="icon-close"></i></div>
  <p class="lightgrey italic"><?=$mes['ЗАМОВИТИ ЗВОРОТНІЙ ДЗВІНОК']?></p>

  <form class="form" action="" id='callback_form' method="post">
    <input type="text" onkeyup="javascript:countme('callback_form');" name="name" value="" placeholder="<?=$mes['name']?> *">
    <input type="tel" class='inputtelmask inputtelvalidation' name="tel" value="" placeholder="<?=$mes['Телефон']?> *">
    <div class="form__telephone error__text form__email-valid"><?=$mes['Невірний формат телефону']?></div>
    <textarea name="text" rows="5" placeholder="<?=$mes['Повідомлення']?>"></textarea>
    <div class="form__requried-fields-text">* - <?=$mes['обовзкові поля']?></div>
    			<input  name="typ" class="webad" type="hidden" value="0" >
					<input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
					<input  name="metka" class="metka" type="hidden" value="Замовити дзвінок  - PHILADELPHIA "/>
					<input  name="inn" class="userInn" type="hidden" value="PHILADELPHIA - CONCEPT HOUSE"/>
	<div class="succses__form_info">
		<p class="succses__form_text"></p>
	</div>
    <button class="link submit" type="submit" data-id='callback_form' name="button"><?=$mes['НАДІСЛАТИ']?> <i class="icon-long-arrow-right"></i></button>

  </form>
</div>
