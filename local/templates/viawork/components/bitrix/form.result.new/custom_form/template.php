<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @var array $arResult
 */
?>

<section class="comp-25">
    <div class="comp-25-wrapper">
        <div class="container">
            <div class="comp-25-main">
                <div class="comp-25-head">
                    <div class="title fadeInUp-scroll visible" data-delay="200">
                        <h2><?= $arResult["FORM_TITLE"] ?? 'Contact' ?></h2>
                    </div>
                </div>
                <div class="comp-25-form fadeInUp-scroll visible" data-delay="300">
                    <?php if ($arResult["isFormErrors"] == "Y"): ?>
                        <div class="form-errors">
                            <?=$arResult["FORM_ERRORS_TEXT"];?>
                        </div>
                    <?php endif; ?>
                    <?php if (!empty($arResult["FORM_NOTE"])): ?>
                        <div class="form-note">
                            <?= $arResult["FORM_NOTE"] ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($arResult["isFormNote"] != "Y"){ ?>
                    
                    <?= $arResult["FORM_HEADER"] ?>
                    
                    <div class="gform_wrapper" data-form-index="0">
                        <div class="gform-body gform_body">
                            <div class="gform_fields top_label form_sublabel_below description_below validation_below">
                                <?php
                                $fieldIndex = 0;
                                foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion) {
                                    if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden') {
                                        echo $arQuestion["HTML_CODE"];
                                    } else {
                                        $fieldIndex++;
                                        $hasError = isset($arResult["FORM_ERRORS"][$FIELD_SID]);
                                        $fieldType = $arQuestion['STRUCTURE'][0]['FIELD_TYPE'];
                                        $isTextarea = $fieldType == 'textarea';
                                        $isSelect = $fieldType == 'dropdown';
                                        $isCheckbox = $fieldType == 'checkbox';
                                        
                                        // Определяем ширину поля на основе типа
                                        $widthClass = 'gfield--width-full';
                                        if (in_array($fieldType, ['text', 'email', 'tel'])) {
                                            $widthClass = 'gfield--width-half';
                                        }
                                ?>
                                
                                <div id="field_<?=$FIELD_SID?>" class="gfield <?=$widthClass?> field_sublabel_below field_description_below field_validation_below <?= $hasError ? 'gfield--error' : '' ?>">
                                    
                                    <?php if (!$isCheckbox): ?>
                                        <label class="gfield_label gform-field-label" for="input_<?=$FIELD_SID?>">
                                            <?=$arQuestion["CAPTION"]?>
                                            <?php if ($arQuestion["REQUIRED"] == "Y"): ?>
                                                <span class="required">*</span>
                                            <?php endif; ?>
                                        </label>
                                    <?php endif; ?>
                                    
                                    <div class="ginput_container">
                                        <?php if ($isTextarea): ?>
                                            <textarea name="<?=$FIELD_SID?>" 
                                                      id="input_<?=$FIELD_SID?>" 
                                                      class="textarea large" 
                                                      placeholder="<?=$arQuestion["CAPTION"]?>"
                                                      rows="10" 
                                                      cols="50"><?= $arResult["VALUES"][$FIELD_SID] ?? '' ?></textarea>
                                      <?php elseif ($isSelect): ?>
                                        <select name="<?=$FIELD_SID?>" 
                                                id="input_<?=$FIELD_SID?>" 
                                                class="large gfield_select">
                                            <option value=""><?=$arQuestion["CAPTION"]?></option>
                                            <?php foreach ($arQuestion['STRUCTURE'] as $option): ?>
                                                <option value="<?=$option['ID']?>" 
                                                    <?=($option['ID'] == ($arResult["VALUES"][$FIELD_SID] ?? '')) ? 'selected' : ''?>>
                                                    <?=htmlspecialcharsbx($option['MESSAGE'])?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>

                                        <?php elseif ($isCheckbox): ?>
                                            <fieldset class="gfield_checkbox">
                                                <legend class="gfield_label gform-field-label">
                                                    <?=$arQuestion["CAPTION"]?>
                                                    <?php if ($arQuestion["REQUIRED"] == "Y"): ?>
                                                        <span class="required">*</span>
                                                    <?php endif; ?>
                                                </legend>
                                                <?= $arQuestion["HTML_CODE"] ?>
                                            </fieldset>
                                        <?php else: ?>
                                            <input name="<?=$FIELD_SID?>" 
                                                   id="input_<?=$FIELD_SID?>" 
                                                   type="<?= $fieldType == 'email' ? 'email' : ($fieldType == 'tel' ? 'tel' : 'text') ?>" 
                                                   value="<?= $arResult["VALUES"][$FIELD_SID] ?? '' ?>" 
                                                   class="large" 
                                                   placeholder="<?=$arQuestion["CAPTION"]?>"
                                                   <?= $hasError ? 'aria-invalid="true"' : '' ?>>
                                        <?php endif; ?>
                                        
                                        <?php if ($hasError): ?>
                                            <div class="gfield_description gfield_validation_message">
                                                <?=htmlspecialcharsbx($arResult["FORM_ERRORS"][$FIELD_SID])?>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                
                                <?php
                                    }
                                }
                                
                                // CAPTCHA
                                if($arResult["isUseCaptcha"] == "Y") {
                                ?>
                                <div class="gfield gfield--width-full">
                                    <label class="gfield_label gform-field-label">
                                        <?=GetMessage("FORM_CAPTCHA_TABLE_TITLE")?>
                                        <span class="required">*</span>
                                    </label>
                                    <div class="ginput_container">
                                        <input type="hidden" name="captcha_sid" value="<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" />
                                        <div class="captcha-image">
                                            <img src="/bitrix/tools/captcha.php?captcha_sid=<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" 
                                                 alt="CAPTCHA" />
                                        </div>
                                        <input type="text" 
                                               name="captcha_word" 
                                               class="large" 
                                               placeholder="<?=GetMessage("FORM_CAPTCHA_FIELD_TITLE")?>"
                                               required />
                                    </div>
                                </div>
                                <?php } ?>
                                
                            </div>
                        </div>
                        
                        <div class="gform-footer gform_footer top_label">
                            <div class="button button-group text-left">
                                <button type="submit" 
                                        name="web_form_submit" 
                                        class="btn btn-primary rounded-0 sending-button gform_button"
                                        <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled" : "");?>>
                                    <?=htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? GetMessage("FORM_ADD") : $arResult["arForm"]["BUTTON"]);?>
                                </button>
                             
                            </div>
                        </div>
                    </div>
                    
                    <?= $arResult["FORM_FOOTER"] ?>
                    
                    <?}else{?>
                        <div id="gform_confirmation_message_3" class="gform_confirmation_message_3 gform_confirmation_message" >Спасибо за обращение! Мы свяжемся с вами в ближайшее время.</div>
                    
                    <?}?> 
                    
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .comp-25-form .gform_fields input, .comp-25-form .gform_fields textarea {
    background: #fff;
    border: none;
    border-radius: 8px;
    /* box-shadow: 0 3px 10px 0 rgba(0,0,0,.25); */
    font-size: 16px;
    font-style: normal;
    font-weight: 500;
    line-height: 150%;
    padding: 8px 16px;
    transition: border-color .3s ease;
    width: 100%;
}
.ginput_container {
    background: #fff;
    border: none !important;
    border-radius: 8px !important;
    box-shadow: 0 3px 10px 0 rgba(0, 0, 0, .25);
    color: #1e1e1e;
    font-family: Gellix Medium;
    font-size: 16px;
    font-style: normal;
    font-weight: 500;
    /* height: 40px !important; */
    line-height: 0%;
    /* padding: 8px 16px; */
    transition: border-color .3s 
ease;
    width: 100%;
}
select {
    background-color: transparent;
    border: unset;
    border-radius: 3px;
    box-shadow: none;
    color: #fff;
    cursor: pointer;
    font-size: 14px;
    font-style: normal;
    font-weight: 500;
    height: 44px;
    line-height: normal;
    padding: 0 20px;
    position: relative;
    transition: background .3s ease;
    width: 100%;
    color: #1e1e1e;
    font-family: Gellix Medium;
    font-size: 16px;
    font-style: normal;
    font-weight: 500;
}
</style>