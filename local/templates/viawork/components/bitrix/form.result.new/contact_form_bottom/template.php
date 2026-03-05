<?php

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
{
	die();
}

/**
 * @var array $arResult
 */


	 //endwhile
	?>


<section class="comp-104 style-1" id="comp-104">
  <div class="comp-104-wrapper" >
    <div class="container" >
      <div class="comp-104-main" >
		<?if ($_REQUEST['WEB_FORM_ID'] == 2 && $_REQUEST['formresult'] == 'addok') {?>
			<div class="comp-104-head" >
				<div class="title" >
					<h2>Откройте для себя свой потенциал</h2>
				</div>
			</div>
			<div class="row" >
				<div class="col-lg-6 offset-lg-3 col-xl-4 offset-xl-4" >
					<div class="comp-104-form" >
						<div id="gf_9" class="gform_anchor" tabindex="-1" >
						</div>
						<div id="gform_confirmation_wrapper_9" data-form-theme="orbital" class="gform_confirmation_wrapper gform_wrapper gform-theme gform-theme--foundation gform-theme--framework gform-theme--orbital " >
							<div id="gform_confirmation_message_9" class="gform_confirmation_message_9 gform_confirmation_message" >Спасисибо за Ваше обращение!  Мы свяжемся с вами в ближайшее время.</div></div>
					</div>
				</div>
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
			<div class="comp-104-head" >
			<div class="title" >
				<h2>Откройте для себя свой потенциал</h2>
			</div>
			</div>
			<div class="row" >
			<div class="col-lg-6 offset-lg-3 col-xl-4 offset-xl-4" >
				<div class="comp-104-form" >
					<div class="gf_browser_chrome gform_wrapper gform-theme gform-theme--foundation gform-theme--framework gform-theme--orbital" data-form-theme="orbital" data-form-index="0" id="gform_wrapper_9" >
						<div id="gf_9" class="gform_anchor" tabindex="-1" >
						</div>
						<?=$arResult["FORM_HEADER"]?>
						<div class="gform-body gform_body" >
							<div id="gform_fields_9" class="gform_fields top_label form_sublabel_below description_below validation_below" >
								<div id="field_9_1" class="gfield gfield--type-text gfield--input-type-text gfield_contains_required field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" >
									<label class="gfield_label gform-field-label" for="input_9_1">
										ФИО
										<span class="gfield_required">
											<span class="gfield_required gfield_required_text">(Required)</span>
										</span>
									</label>
									<div class="ginput_container ginput_container_text" >
											<input name="form_text_14" id="input_9_1" type="text" value="" class="large" tabindex="49" placeholder="ФИО" aria-required="true" aria-invalid="false">
									</div>
								</div>
								<div id="field_9_3" class="gfield gfield--type-phone gfield--input-type-phone gfield--width-half field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" >
									<label class="gfield_label gform-field-label" for="input_9_3">Телефон</label>
									<div class="ginput_container ginput_container_phone" >
										<input name="form_text_15" id="input_9_3" type="tel" value="" class="large" tabindex="50" placeholder="Телефон" aria-invalid="false">
									</div>
								</div>
								<div id="field_9_4" class="gfield gfield--type-email gfield--input-type-email gfield--width-half field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" >
									<label class="gfield_label gform-field-label" for="input_9_4">E-Mail</label>
									<div class="ginput_container ginput_container_email" >
										<input name="form_email_16" id="input_9_4" type="email" value="" class="large" tabindex="51" placeholder="E-Mail" aria-invalid="false">
									</div>
								</div>
								<div id="field_9_5" class="gfield gfield--type-fileupload gfield--input-type-fileupload gfield--width-full field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible" >
									<label class="gfield_label gform-field-label" for="input_9_5">Файл</label>
									<div class="ginput_container ginput_container_fileupload" >
										<input type="hidden" name="MAX_FILE_SIZE" value="524288000">
										<input name="form_file_17" id="input_9_5" type="file" class="large" aria-describedby="gfield_upload_rules_9_5" onchange="javascript:gformValidateFileSize( this, 524288000 );" tabindex="52">
										<span class="gfield_description gform_fileupload_rules" id="gfield_upload_rules_9_5">Max. file size: 500 MB.</span>
										<input name="form_file_17" class="inputfile" size="0" type="file">
									</div>
								</div>
								<fieldset id="field_9_6" class="gfield gfield--type-consent gfield--type-choice gfield--input-type-consent gfield--width-full field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible">
									<legend class="gfield_label gform-field-label gfield_label_before_complex">Consent</legend>
									<div class="ginput_container ginput_container_consent" >
										<input name="input_7.1" id="input_9_7_1" type="checkbox" value="1" tabindex="54" aria-invalid="false">
										<label class="gform-field-label gform-field-label--type-inline gfield_consent_label" for="input_9_7_1">
											Я согласен с 
											<a href="/privacy_policy/">политикой обработки персональных данных</a> 
										</label>
									</div>
								</fieldset>
								<fieldset id="field_9_7" class="gfield gfield--type-consent gfield--type-choice gfield--input-type-consent gfield--width-full field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible">
									
								</fieldset>
								
							</div>
						</div>
						<div class="gform-footer gform_footer top_label" > <div class="button button-group text-left" >
							<input type="hidden" name="web_form_apply" value="Y">
							<input type="submit" class="btn btn-primary rounded-0 sending-button gform_button" name="web_form_submit" value="Отправить">
						</div> 
					</div>
					</form>
				</div>        
				</div>
			</div>
			</div>
		</div>
	  <?}?>
    </div>
  </div>
</section>

<style>
	.comp-104-form .gform_footer .sending-button{
		background: #f17247;
		border: none;
		border-radius: 3px !important;
		color: #fff;
		font-family: Gellix Medium;
		font-size: 14px;
		font-style: normal;
		font-weight: 500;
		line-height: normal;
		padding: 14px 0;
		text-transform: uppercase;
		width: 100%;
	}
	.gform_submission_error {
		color: red;
		display: block;
		font-size: 16px;
		font-style: normal;
		font-weight: 600;
		line-height: normal;
		text-align: center;
		margin-bottom: 32px !important;
	}
</style>