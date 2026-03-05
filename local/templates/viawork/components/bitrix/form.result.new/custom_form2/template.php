<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

/**
 * @var array $arResult
 */
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["web_form_submit"])) {
    $errors = [];

    if (empty($_POST["personal_data_consent"])) {
        $errors["personal_data_consent"] = "Необходимо дать согласие на обработку персональных данных.";
    }

    if (empty($_POST["kvkk_consent"])) {
        $errors["kvkk_consent"] = "Необходимо подтвердить ознакомление с уведомлением KVKK.";
    }

    // Добавляем к стандартным ошибкам формы
    if (!empty($errors)) {
        $arResult["isFormErrors"] = "Y";
        $arResult["FORM_ERRORS"] = array_merge($arResult["FORM_ERRORS"] ?? [], $errors);
        $arResult["FORM_ERRORS_TEXT"] .= implode("<br>", $errors);
    }
}
?>

<section class="comp-104 style-1" id="comp-104">
    <div class="comp-104-wrapper">
        <div class="container">
            <div class="comp-104-main">
                <div class="comp-104-head">
                    <div class="title">
                        <h2><?= $arResult["FORM_TITLE"] ?? 'Discover Your Potential' ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                        <div class="comp-104-form">
                            
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
                            
                            <?php if ($arResult["isFormNote"] != "Y"): ?>
                            
                            <?= $arResult["FORM_HEADER"] ?>
                            
                            <div class="gform_wrapper gform-theme gform-theme--orbital" data-form-theme="orbital">
                                <div class="gform-body gform_body">
                                    <div class="gform_fields top_label form_sublabel_below description_below validation_below">
                                        
                                        <?php
                                        foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion) {
                                            if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] == 'hidden') {
                                                echo $arQuestion["HTML_CODE"];
                                            } else {
                                                $hasError = isset($arResult["FORM_ERRORS"][$FIELD_SID]);
                                                $fieldType = $arQuestion['STRUCTURE'][0]['FIELD_TYPE'];
                                                $isTextarea = $fieldType == 'textarea';
                                                $isSelect = $fieldType == 'dropdown';
                                                $isCheckbox = $fieldType == 'checkbox';
                                                $isFile = $fieldType == 'file';
                                                
                                                // Определяем ширину поля
                                                $widthClass = 'gfield--width-full';
                                                if (in_array($fieldType, ['text', 'email', 'tel'])) {
                                                    $widthClass = 'gfield--width-half';
                                                }
                                        ?>
                                        
                                        <div id="field_<?=$FIELD_SID?>" class="gfield <?=$widthClass?> field_sublabel_below field_description_below field_validation_below gfield_visibility_visible <?= $hasError ? 'gfield--error' : '' ?>">
                                            
                                            <?php if (!$isCheckbox): ?>
                                                <label class="gfield_label gform-field-label" for="input_<?=$FIELD_SID?>">
                                                    <?//=$arQuestion["CAPTION"]?>
                                                    <?php if ($arQuestion["REQUIRED"] == "Y"): ?>
                                                        <!-- <span class="gfield_required">
                                                            <span class="gfield_required gfield_required_text">(Required)</span>
                                                        </span> -->
                                                    <?php endif; ?>
                                                </label>
                                            <?php endif; ?>
                                            
                                            <div class="ginput_container">
                                                <?php if ($isTextarea): ?>
                                                    <textarea name="<?=$FIELD_SID?>" 
                                                              id="input_<?=$FIELD_SID?>" 
                                                              class="textarea large" 
                                                              placeholder="<?=$arQuestion["CAPTION"]?>"
                                                              rows="5" 
                                                              cols="50"><?= $arResult["VALUES"][$FIELD_SID] ?? '' ?></textarea>
                                                <?php elseif ($isSelect): ?>
                                                    <select name="<?=$FIELD_SID?>" 
                                                            id="input_<?=$FIELD_SID?>" 
                                                            class="large gfield_select">
                                                        <option value=""><?=$arQuestion["CAPTION"]?></option>
                                                        <?php echo $arQuestion["HTML_CODE"]; ?>
                                                    </select>
                                                <?php elseif ($isFile): ?>
    <input type="hidden" name="MAX_FILE_SIZE" value="524288000">
    <div class="file-upload-simple">
        <label for="input_<?=$FIELD_SID?>" class="file-label">
            <span class="file-label-text">Файл</span>
            <input name="<?=$FIELD_SID?>" 
                   id="input_<?=$FIELD_SID?>" 
                   type="file" 
                   class="large file-input"
                   aria-describedby="gfield_upload_rules_<?=$FIELD_SID?>"
                   onchange="javascript:gformValidateFileSize(this, 524288000);">
        </label>
        <span class="gfield_description gform_fileupload_rules" id="gfield_upload_rules_<?=$FIELD_SID?>">
            Max. file size: 500 MB.
        </span>
    </div>
    <style>
        .file-upload-simple .file-input {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
}

.file-upload-simple .file-label {
    display: inline-block;
    padding: 12px 20px;
    background: #fff;
    border: 1px solid #686e77;
    border-radius: 3px;
    color: #112337;
    cursor: pointer;
    font-size: 14px;
    transition: all 0.3s ease;
    text-align: center;
    width: 100%;
    box-sizing: border-box;
    align-items: center;
    background: #e9ebef;
    border-radius: 3px;
    color: #373f43;
    cursor: pointer;
    display: flex;
    height: 45px;
    position: relative;
    --content-text: "No File Chosen";
    font-size: 14px;
    /* height: 100%; */
    line-height: normal;
    padding: 0 68px 0 14px;
}

.file-upload-simple .file-label:hover {
    border-color: #101113ff;
}

.file-upload-simple .file-input:focus + .file-label {
    outline: none;
    border-color: #101113ff;
    box-shadow: 0 0 0 2px rgba(32, 76, 229, 0.1);
}
        </style>
                                                <?php elseif ($isCheckbox): ?>
                                                    <fieldset class="gfield_checkbox">
                                                        <?php if ($arQuestion["CAPTION"]): ?>
                                                            <legend class="gfield_label gform-field-label gfield_label_before_complex">
                                                                <?//=$arQuestion["CAPTION"]?>
                                                            </legend>
                                                        <?php endif; ?>
                                                        <div class="ginput_container_consent">
                                                            <input name="<?=$FIELD_SID?>" 
                                                                   id="input_<?=$FIELD_SID?>" 
                                                                   type="checkbox" 
                                                                   value="1">
                                                            <label class="gform-field-label gform-field-label--type-inline gfield_consent_label" for="input_<?=$FIELD_SID?>">
                                                                <?php if (strpos($arQuestion["CAPTION"], 'KVKK') !== false): ?>
                                                                    <a href="/privacy-policy/">KVKK Information Notice</a> I have read and accept.
                                                                <?php else: ?>
                                                                    I consent to the processing of my personal data and to receiving all types of communication in order to be informed about campaigns.
                                                                <?php endif; ?>
                                                            </label>
                                                        </div>
                                                    </fieldset>
                                                <?php else: ?>
                                                    <input name="<?=$FIELD_SID?>" 
                                                           id="input_<?=$FIELD_SID?>" 
                                                           type="<?= $fieldType == 'email' ? 'email' : ($fieldType == 'tel' ? 'tel' : 'text') ?>" 
                                                           value="<?= $arResult["VALUES"][$FIELD_SID] ?? '' ?>" 
                                                           class="large" 
                                                           placeholder="<?=$arQuestion["CAPTION"]?>"
                                                           <?= $arQuestion["REQUIRED"] == "Y" ? 'aria-required="true"' : '' ?>
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
                                                <?//=GetMessage("FORM_CAPTCHA_TABLE_TITLE")?>
                                                <!-- <span class="gfield_required">*</span> -->
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
                                           <fieldset class="gfield gfield--type-consent gfield--type-choice gfield--input-type-consent gfield--width-full field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible <?= isset($arResult["FORM_ERRORS"]["personal_data_consent"]) ? 'gfield--error' : '' ?>">
                                            <legend class="gfield_label gform-field-label gfield_label_before_complex">Consent</legend>
                                            <div class="ginput_container1 ginput_container_consent">
                                                <input name="personal_data_consent" id="personal_data_consent" type="checkbox" value="1" required>
                                                <label class="gform-field-label gform-field-label--type-inline gfield_consent_label" for="personal_data_consent">
                                                   Я даю согласие на обработку моих персональных данных и получение всех видов сообщений в целях информирования о проводимых акциях.
                                                    <span class="gfield_required">*</span>
                                                </label>
                                            </div>
                                        </fieldset>
                                        
                                        <fieldset class="gfield gfield--type-consent gfield--type-choice gfield--input-type-consent gfield--width-full field_sublabel_below gfield--no-description field_description_below field_validation_below gfield_visibility_visible <?= isset($arResult["FORM_ERRORS"]["personal_data_consent"]) ? 'gfield--error' : '' ?>">
                                            <legend class="gfield_label gform-field-label gfield_label_before_complex">Consent</legend>
                                            <div class="ginput_container1 ginput_container_consent">
                                                <input name="kvkk_consent" id="kvkk_consent" type="checkbox" value="1" required>
                                                <label class="gform-field-label gform-field-label--type-inline gfield_consent_label" for="kvkk_consent">
                                                    <a href="/privacy-policy/">Информационное уведомление KVKK</a> Я прочитал(а) и принимаю.
                                                    <span class="gfield_required">*</span>
                                                </label>
                                            </div>
                                             <?php if (isset($arResult["FORM_ERRORS"]["personal_data_consent"])): ?>
        <div class="gfield_description gfield_validation_message">
            <?= htmlspecialcharsbx($arResult["FORM_ERRORS"]["personal_data_consent"]) ?>
        </div>
    <?php endif; ?>
                                        </fieldset>
                                    </div>
                                </div>
                                
                                <div class="gform-footer gform_footer top_label">
                                    <div class="button button-group text-left">
                                        <button type="submit" 
                                                name="web_form_submit" 
                                                class="btn btn-primary rounded-0 sending-button gform_button"
                                                <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled" : "");?>>
                                            <?=htmlspecialcharsbx(trim($arResult["arForm"]["BUTTON"]) == '' ? 'SEND' : $arResult["arForm"]["BUTTON"]);?>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <?= $arResult["FORM_FOOTER"] ?>
                            
                            <?php endif; ?>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <script>
document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('form');
  form.addEventListener('submit', function (e) {
    let valid = true;

    // Убираем старые ошибки
    document.querySelectorAll('.gfield--error').forEach(el => el.classList.remove('gfield--error'));

    // Проверяем обязательные поля
    form.querySelectorAll('[aria-required="true"], [data-required="true"]').forEach(input => {
      if (input.type === 'checkbox' && !input.checked) {
        valid = false;
        input.closest('.gfield').classList.add('gfield--error');
      } else if (input.value.trim() === '') {
        valid = false;
        input.closest('.gfield').classList.add('gfield--error');
      }
    });

    if (!valid) {
      e.preventDefault();
      alert('Пожалуйста, заполните обязательные поля или отметьте необходимые согласия.');
    }
  });
});
</script>


</section>