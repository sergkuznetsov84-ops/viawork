<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

/**
 * @var array $arResult
 */

?>

<style>#gform_wrapper_3[data-form-index="0"].gform-theme,[data-parent-form="3_0"]{--gf-color-primary: #204ce5;--gf-color-primary-rgb: 32, 76, 229;--gf-color-primary-contrast: #fff;--gf-color-primary-contrast-rgb: 255, 255, 255;--gf-color-primary-darker: #001AB3;--gf-color-primary-lighter: #527EFF;--gf-color-secondary: #fff;--gf-color-secondary-rgb: 255, 255, 255;--gf-color-secondary-contrast: #112337;--gf-color-secondary-contrast-rgb: 17, 35, 55;--gf-color-secondary-darker: #F5F5F5;--gf-color-secondary-lighter: #FFFFFF;--gf-color-out-ctrl-light: rgba(17, 35, 55, 0.1);--gf-color-out-ctrl-light-rgb: 17, 35, 55;--gf-color-out-ctrl-light-darker: rgba(104, 110, 119, 0.35);--gf-color-out-ctrl-light-lighter: #F5F5F5;--gf-color-out-ctrl-dark: #585e6a;--gf-color-out-ctrl-dark-rgb: 88, 94, 106;--gf-color-out-ctrl-dark-darker: #112337;--gf-color-out-ctrl-dark-lighter: rgba(17, 35, 55, 0.65);--gf-color-in-ctrl: #fff;--gf-color-in-ctrl-rgb: 255, 255, 255;--gf-color-in-ctrl-contrast: #112337;--gf-color-in-ctrl-contrast-rgb: 17, 35, 55;--gf-color-in-ctrl-darker: #F5F5F5;--gf-color-in-ctrl-lighter: #FFFFFF;--gf-color-in-ctrl-primary: #204ce5;--gf-color-in-ctrl-primary-rgb: 32, 76, 229;--gf-color-in-ctrl-primary-contrast: #fff;--gf-color-in-ctrl-primary-contrast-rgb: 255, 255, 255;--gf-color-in-ctrl-primary-darker: #001AB3;--gf-color-in-ctrl-primary-lighter: #527EFF;--gf-color-in-ctrl-light: rgba(17, 35, 55, 0.1);--gf-color-in-ctrl-light-rgb: 17, 35, 55;--gf-color-in-ctrl-light-darker: rgba(104, 110, 119, 0.35);--gf-color-in-ctrl-light-lighter: #F5F5F5;--gf-color-in-ctrl-dark: #585e6a;--gf-color-in-ctrl-dark-rgb: 88, 94, 106;--gf-color-in-ctrl-dark-darker: #112337;--gf-color-in-ctrl-dark-lighter: rgba(17, 35, 55, 0.65);--gf-radius: 3px;--gf-font-size-secondary: 14px;--gf-font-size-tertiary: 13px;--gf-icon-ctrl-number: url("data:image/svg+xml,%3Csvg width='8' height='14' viewBox='0 0 8 14' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M4 0C4.26522 5.96046e-08 4.51957 0.105357 4.70711 0.292893L7.70711 3.29289C8.09763 3.68342 8.09763 4.31658 7.70711 4.70711C7.31658 5.09763 6.68342 5.09763 6.29289 4.70711L4 2.41421L1.70711 4.70711C1.31658 5.09763 0.683417 5.09763 0.292893 4.70711C-0.0976311 4.31658 -0.097631 3.68342 0.292893 3.29289L3.29289 0.292893C3.48043 0.105357 3.73478 0 4 0ZM0.292893 9.29289C0.683417 8.90237 1.31658 8.90237 1.70711 9.29289L4 11.5858L6.29289 9.29289C6.68342 8.90237 7.31658 8.90237 7.70711 9.29289C8.09763 9.68342 8.09763 10.3166 7.70711 10.7071L4.70711 13.7071C4.31658 14.0976 3.68342 14.0976 3.29289 13.7071L0.292893 10.7071C-0.0976311 10.3166 -0.0976311 9.68342 0.292893 9.29289Z' fill='rgba(17, 35, 55, 0.65)'/%3E%3C/svg%3E");--gf-icon-ctrl-select: url("data:image/svg+xml,%3Csvg width='10' height='6' viewBox='0 0 10 6' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath fill-rule='evenodd' clip-rule='evenodd' d='M0.292893 0.292893C0.683417 -0.097631 1.31658 -0.097631 1.70711 0.292893L5 3.58579L8.29289 0.292893C8.68342 -0.0976311 9.31658 -0.0976311 9.70711 0.292893C10.0976 0.683417 10.0976 1.31658 9.70711 1.70711L5.70711 5.70711C5.31658 6.09763 4.68342 6.09763 4.29289 5.70711L0.292893 1.70711C-0.0976311 1.31658 -0.0976311 0.683418 0.292893 0.292893Z' fill='rgba(17, 35, 55, 0.65)'/%3E%3C/svg%3E");--gf-icon-ctrl-search: url("data:image/svg+xml,%3Csvg width='640' height='640' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M256 128c-70.692 0-128 57.308-128 128 0 70.691 57.308 128 128 128 70.691 0 128-57.309 128-128 0-70.692-57.309-128-128-128zM64 256c0-106.039 85.961-192 192-192s192 85.961 192 192c0 41.466-13.146 79.863-35.498 111.248l154.125 154.125c12.496 12.496 12.496 32.758 0 45.254s-32.758 12.496-45.254 0L367.248 412.502C335.862 434.854 297.467 448 256 448c-106.039 0-192-85.962-192-192z' fill='rgba(17, 35, 55, 0.65)'/%3E%3C/svg%3E");--gf-label-space-y-secondary: var(--gf-label-space-y-md-secondary);--gf-ctrl-border-color: #686e77;--gf-ctrl-size: var(--gf-ctrl-size-md);--gf-ctrl-label-color-primary: #112337;--gf-ctrl-label-color-secondary: #112337;--gf-ctrl-choice-size: var(--gf-ctrl-choice-size-md);--gf-ctrl-checkbox-check-size: var(--gf-ctrl-checkbox-check-size-md);--gf-ctrl-radio-check-size: var(--gf-ctrl-radio-check-size-md);--gf-ctrl-btn-font-size: var(--gf-ctrl-btn-font-size-md);--gf-ctrl-btn-padding-x: var(--gf-ctrl-btn-padding-x-md);--gf-ctrl-btn-size: var(--gf-ctrl-btn-size-md);--gf-ctrl-btn-border-color-secondary: #686e77;--gf-ctrl-file-btn-bg-color-hover: #EBEBEB;--gf-field-img-choice-size: var(--gf-field-img-choice-size-md);--gf-field-img-choice-card-space: var(--gf-field-img-choice-card-space-md);--gf-field-img-choice-check-ind-size: var(--gf-field-img-choice-check-ind-size-md);--gf-field-img-choice-check-ind-icon-size: var(--gf-field-img-choice-check-ind-icon-size-md);--gf-field-pg-steps-number-color: rgba(17, 35, 55, 0.8);}</style>
	
<section class="comp-25">
	<div class="comp-25-wrapper" bis_skin_checked="1">
		<div class="container" bis_skin_checked="1">
			<div class="comp-25-main" bis_skin_checked="1">
				<div class="comp-25-head" bis_skin_checked="1">
					<div class="title fadeInUp-scroll visible" data-delay="200" bis_skin_checked="1">
						<h2>Контакты</h2>
					</div>
				</div>	
<?if ($_REQUEST['WEB_FORM_ID'] == 1 && $_REQUEST['formresult'] == 'addok') {?>
	<div class="comp-25-form fadeInUp-scroll visible" data-delay="300" >
		<div  class="gform_confirmation_message_3 gform_confirmation_message" >Спасибо за ваше обращение! Мы свяжемся с вами в ближайшее время.</div>
	</div>
<?}else{?>
<?
if (!empty($arResult["FORM_ERRORS"])) {?>
	<div class="gform_validation_errors" id="gform_3_validation_container" data-js="gform-focus-validation-error" autofocus="" tabindex="-1" bis_skin_checked="1">
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
								<option value="7">Акустические капсулы Calma</option>
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
						<label class="gform-field-label gform-field-label--type-inline gfield_consent_label" for="input_3_11_1">Я согласен с <a href="">политикой обработки персональных данных</a></label>
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
    background: url(/images/select-icon.svg);
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