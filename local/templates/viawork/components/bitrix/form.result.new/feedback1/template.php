<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

/**
 * @var array $arResult
 */

?>


<section class="comp-25">
	<div class="comp-25-wrapper" >
		<div class="container" >
			<div class="comp-25-main" >
				<div class="comp-25-head" >
					<div class="title fadeInUp-scroll visible" data-delay="200" >
						<?php
if ($APPLICATION->GetCurPage() == "/contacts/") {
    echo '<h2>Контакты</h2>';
} else {
    echo '<h3>Оставьте заявку</h3>';
}
?>

					</div>
				</div>	
				<?if ($_REQUEST['WEB_FORM_ID'] == 1 && $_REQUEST['formresult'] == 'addok') {?>
					<div class="comp-25-form fadeInUp-scroll visible" data-delay="300" >
						<div  class="gform_confirmation_message_3 gform_confirmation_message" >Спасибо за ваше обращение! Мы свяжемся с вами в ближайшее время.</div>
					</div>
				<?}else{?>
				<?
				if (!empty($arResult["FORM_ERRORS"])) {?>
					<div class="gform_validation_errors" id="gform_3_validation_container" data-js="gform-focus-validation-error" autofocus="" tabindex="-1" >
						<h2 class="gform_submission_error hide_summary">
						<span class="gform-icon gform-icon--circle-error">

						</span>Возникла проблема с вашей заявкой. Пожалуйста, проверьте поля ниже. </h2>
					</div>
				<?}
				?>
				<div class="comp-25-form fadeInUp-scroll visible" data-delay="300" >			
					<div class="gf_browser_unknown gform_wrapper gform-theme gform-theme--foundation gform-theme--framework gform-theme--orbital" data-form-theme="orbital" data-form-index="0" id="gform_wrapper_3" >
						<div id="gf_3" class="gform_anchor" tabindex="-1" ></div>                
							<?=$arResult["FORM_HEADER"]?>
								<div class="gform-body gform_body" >
									<div id="gform_fields_3" class="gform_fields top_label form_sublabel_below description_below validation_below" >
										<div id="field_3_1" class="gfield gfield--type-text gfield--input-type-text gfield--width-half field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" >
											<label class="gfield_label gform-field-label" for="input_3_1">Имя</label>
											<div class="ginput_container ginput_container_text" >
												<input name="form_text_1" id="input_3_1" type="text" value="" class="large" tabindex="49" placeholder="Имя" aria-invalid="false">
											</div>
										</div>
										<div id="field_3_3" class="gfield gfield--type-text gfield--input-type-text gfield--width-half field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" >
											<label class="gfield_label gform-field-label" for="input_3_3">Фамилия</label>
											<div class="ginput_container ginput_container_text" >
												<input name="form_text_2" id="input_3_3" type="text" value="" class="large" tabindex="50" placeholder="Фамилия" aria-invalid="false">
											</div>
										</div>
										<div id="field_3_4" class="gfield gfield--type-email gfield--input-type-email gfield--width-half field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" >
											<label class="gfield_label gform-field-label" for="input_3_4">Email</label>
											<div class="ginput_container ginput_container_email" >
											<input name="form_email_3" id="input_3_4" type="email" value="" class="large" tabindex="51" placeholder="Email" aria-invalid="false">
										</div>
									</div>
									<div id="field_3_5" class="gfield gfield--type-phone gfield--input-type-phone gfield--width-half field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" >
										<label class="gfield_label gform-field-label" for="input_3_5">Номер телефона</label>
										<div class="ginput_container ginput_container_phone" >
											<input name="form_text_4" id="input_3_5" type="tel" value="" class="large" tabindex="52" placeholder="Номер телефона" aria-invalid="false">
										</div>
									</div>
									<div id="field_3_12" class="gfield gfield--type-select gfield--input-type-select gfield--width-half field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" >
										<label class="gfield_label gform-field-label" for="input_3_12">Что вас интересует</label>
										<div class="ginput_container ginput_container_select" >
											<select name="form_dropdown_SIMPLE_QUESTION_216_DDNoX_iZzCn_IuHq3_WsZMv"  class="large gfield_select select2-hidden-accessible" tabindex="-1" aria-invalid="false" aria-hidden="true">
												<option value="" selected="selected" class="gf_placeholder" data-select2-id="select2-data-2-6p6h">Выберите что вас интересует</option>
												<option value="5">Информация о товаре</option>
												<option value="6">Партнерство в проекте</option>
												<option value="7">Акустические кабины Calma</option>
												<option value="8">Стать дилером</option>
											</select>
										</div>
									</div>
									<div id="field_3_7" class="gfield gfield--type-text gfield--input-type-text gfield--width-half field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" >
										<label class="gfield_label gform-field-label" for="input_3_7">Компания | Организация</label>
										<div class="ginput_container ginput_container_text" >
											<input name="form_text_9" id="input_3_7" type="text" value="" class="large" tabindex="54" placeholder="Компания | Организация" aria-invalid="false">
									</div>
								</div>
								<div id="field_3_8" class="gfield gfield--type-text gfield--input-type-text gfield--width-half field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" >
									<label class="gfield_label gform-field-label" for="input_3_8">Страна</label>
									<div class="ginput_container ginput_container_text" >
										<input name="form_text_10" id="input_3_8" type="text" value="" class="large" tabindex="55" placeholder="Страна" aria-invalid="false">
									</div>
								</div>
								<div id="field_3_9" class="gfield gfield--type-text gfield--input-type-text gfield--width-half field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" >
									<label class="gfield_label gform-field-label" for="input_3_9">Город</label>
									<div class="ginput_container ginput_container_text" >
										<input name="form_text_11" id="input_3_9" type="text" value="" class="large" tabindex="56" placeholder="Город" aria-invalid="false">
									</div>
								</div>
								<div id="field_3_10" class="gfield gfield--type-textarea gfield--input-type-textarea gfield--width-full field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" >
									<label class="gfield_label gform-field-label" for="input_3_10">Сообщение</label>
									<div class="ginput_container ginput_container_textarea" >
										<textarea name="form_textarea_12" id="input_3_10" class="textarea large" tabindex="57" placeholder="Сообщение" aria-invalid="false" rows="10" cols="50">
										</textarea>
									</div>
								</div>
								<fieldset id="field_3_11" class="gfield gfield--type-consent gfield--type-choice gfield--input-type-consent gfield--width-full field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible">
									<legend class="gfield_label gform-field-label gfield_label_before_complex">Consent</legend>
									<div class="ginput_container ginput_container_consent" >
										<input name="input_11.1" id="input_3_11_1" type="checkbox" value="1" require tabindex="58" aria-invalid="false"> 
										<label class="gform-field-label gform-field-label--type-inline gfield_consent_label" for="input_3_11_1">Я согласен с <a href="/privacy_policy/">политикой обработки персональных данных</a></label>
									</div>
								</fieldset>
							</div>
						</div>
						<div class="gform-footer gform_footer top_label" > 
							<div class="button button-group text-left" >
								<input type="hidden" name="web_form_apply" value="Y">
								<input type="submit" name="web_form_submit" value="Отправить" class="btn btn-primary rounded-0 sending-button gform_button" >
							</div>
						</form>
					</div>
				</div>
			</div>
			</div>
		</div>
	</section>
<?}?>

<style>
.comp-25-form .ginput_container_select:after {
    background: url(/local/templates/viawork/components/bitrix/form.result.new/feedback1/images/select-icon.svg);
    background-repeat: no-repeat;
    background-size: cover;
    content: "";
    height: 11px;
    position: absolute;
    right: 16px;
    top: 50%;
    transform: translateY(-50%);
    transform-origin: center;
    transition: transform .4s ease;
    width: 19px;
}
input.sending-button {
    background: none;
    background-color: #1e1e1e;
    border: none;
    border-radius: 8px !important;
    color: #fff;
    cursor: pointer;
    font-family: Gellix Medium;
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    letter-spacing: -.28px;
    line-height: 150%;
    padding: 12px 0;
    transition: transform .3s ease;
    width: 350px;
}
</style>