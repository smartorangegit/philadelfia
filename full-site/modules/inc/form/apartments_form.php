<!-- форма вызова для "дізнатись ціну" -->
<div id="callprice" class="location_form">
  <div id="formclose1"><i class="icon-close"></i></div>
  <p class="lightgrey italic"><?=$mes['ДІЗНАТИСЯ ЦІНУ']?></p>
  <form class="form" action="" id='callprice_form'  method="post">
    <input type="text"  onkeyup="javascript:countme('callprice_form');" name="" value="" placeholder="<?=$mes['name']?> *">
    <input type="tel"  class='inputtelmask inputtelvalidation' name="tel" value="" placeholder="<?=$mes['Телефон']?> *">
    <div class="form__telephone error__text form__email-valid"><?=$mes['Невірний формат телефону']?></div>
    <input type="email" name="email" value="" placeholder="E-mail *" class="form__email-input">
    <div class="form__email error__text form__email-valid"><?=$mes['Заповніть e-mail у форматі example@mail.com']?></div>
    <textarea name="text" rows="5" placeholder="<?=$mes['Повідомлення']?>"></textarea>
    <div class="form__requried-fields-text">* - <?=$mes['обовзкові поля']?></div>

	<input name="kv" value='<?=$kv?>' type="hidden" type="text">

		    		<input  name="typ" class="webad" type="hidden" value="21" >
					<input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
					<input  name="metka" class="metka" type="hidden" value="Дізнатись ціну  - PHILADELPHIA "/>
					<input  name="inn" class="userInn" type="hidden" value="PHILADELPHIA - CONCEPT HOUSE"/>
	<div class="succses__form_info">
		<p class="succses__form_text"></p>
	</div>
    <button class="link submit" type="submit" data-id='callprice_form' name="button"><?=$mes['НАДІСЛАТИ']?> <i class="icon-long-arrow-right"></i></button>

  </form>
</div>

<div id="booking" class="location_form">
  <div id="formclose3"><i class="icon-close"></i></div>
  <p class="lightgrey italic"><?=$mes['ЗАБРОНЮВАТИ КВАРТИРУ']?></p>
  <form class="form" action="" id='booking_form'  method="post">
    <input type="text"  onkeyup="javascript:countme('booking_form');" name="name" value="" placeholder="<?=$mes['name']?> *">
    <input type="tel" class='inputtelmask inputtelvalidation' name="tel" value="" placeholder=<?=$mes['Телефон']?> *">
    <div class="form__telephone error__text form__email-valid"><?=$mes['Невірний формат телефону']?></div>
    <input type="email" name="email" value="" placeholder="E-mail *">
    <div class="form__email error__text form__email-valid"><?=$mes['Заповніть e-mail у форматі example@mail.com']?></div>
	    <textarea name="text" rows="5" placeholder="<?=$mes['Повідомлення']?>"></textarea>
      <div class="form__requried-fields-text">* - <?=$mes['обовзкові поля']?></div>

	<input name="kv" value='<?=$kv?>' type="hidden" type="text">

		    		<input  name="typ" class="webad" type="hidden" value="2" >
					<input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
					<input  name="metka" class="metka" type="hidden" value="Забронювати квартиру  - PHILADELPHIA "/>
					<input  name="inn" class="userInn" type="hidden" value="PHILADELPHIA - CONCEPT HOUSE"/>
	<div class="succses__form_info">
		<p class="succses__form_text"></p>
	</div>
    <button class="link submit" type="submit" data-id='booking_form' name="button"><?=$mes['ЗАБРОНЮВАТИ']?> <i class="icon-long-arrow-right"></i></button>

  </form>
</div>