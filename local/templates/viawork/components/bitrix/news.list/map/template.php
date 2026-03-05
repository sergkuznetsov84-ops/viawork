<?php
$defaultMap = "https://yandex.ru/map-widget/v1/?ll=38.921013,47.210944&mode=whatshere&whatshere[point]=38.922268,47.210549&z=19.46";
?>

<section class="comp-20">
    <div class="comp-20-wrapper">
        <div class="container">
            <form action="" method="post">
                <?php bitrix_sessid_post(); ?>
                <div class="comp-20-main">
                    <div class="comp-20-head">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-2">
                                <div class="comp-20-head-main">
                                    <div class="comp-20-head-subtitle fadeInUp-scroll" data-delay="100">
                                        <h4>ТОЧКИ ПРОДАЖ NURUS</h4>
                                    </div>
                                    <div class="comp-20-head-title fadeInUp-scroll" data-delay="150">
                                        <h3>Найдите ближайший центр впечатлений</h3>
                                    </div>
                                    <div class="comp-20-head-select-container fadeInUp-scroll" data-delay="200">
                                        <div class="select-wrapper">
                                            <select name="country" id="country" class="custom-select2">
                                                <option value="">Страна</option>
                                                <?php
                                                $countries = [];
                                                foreach ($arResult['ITEMS'] as $item) {
                                                    $country = $item['PROPERTIES']['PROPERTY_COUNTRY']['VALUE'] ?? '';
                                                    if ($country && !in_array($country, $countries)) $countries[] = $country;
                                                }
                                                sort($countries);
                                                foreach ($countries as $country) {
                                                    echo '<option value="' . htmlspecialcharsbx($country) . '">' . htmlspecialcharsbx($country) . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>

                                        <div class="select-wrapper">
                                            <select name="city" id="city" class="custom-select2">
                                                <option value="">Город</option>
                                                <?php foreach ($arResult['ITEMS'] as $item): 
                                                    $mapUrl = $item['PROPERTIES']['PROPERTY_MAP_IFRAME']['VALUE']['TEXT'] ?? '';
                                                ?>
                                                    <option value="<?= $item['ID'] ?>"
                                                            data-country="<?= htmlspecialcharsbx($item['PROPERTIES']['PROPERTY_COUNTRY']['VALUE']) ?>"
                                                            data-map-url="<?= htmlspecialcharsbx($mapUrl) ?>">
                                                        <?= htmlspecialcharsbx($item['PROPERTIES']['PROPERTY_CITY']['VALUE']) ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="comp-20-head-article fadeInUp-scroll" data-delay="250">
                                        <p>Почувствуйте разницу. Посетите наши шоурумы или магазины, чтобы получить эксклюзивные предложения, примерить любой продукт Nurus и найти свой идеальный вариант.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comp-20-map image-animation" data-delay="300">
                        <iframe src="<?= $defaultMap ?>" id="map-iframe" style="border:0;width:100%;height:400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const countrySelect = document.getElementById('country');
    const citySelect = document.getElementById('city');
    const mapIframe = document.getElementById('map-iframe');
    const defaultMap = '<?= $defaultMap ?>';

    function decodeHtmlEntities(str) {
        const txt = document.createElement('textarea');
        txt.innerHTML = str;
        return txt.value;
    }

    function updateCityFilter() {
        const selectedCountry = countrySelect.value;
        Array.from(citySelect.options).forEach(option => {
            if (option.value === '') return;
            if (!selectedCountry || option.dataset.country === selectedCountry) {
                option.style.display = '';
            } else {
                option.style.display = 'none';
                if (option.selected) {
                    citySelect.value = '';
                    mapIframe.src = defaultMap;
                }
            }
        });
    }

    // При изменении страны
    countrySelect.addEventListener('change', function() {
        updateCityFilter();
        citySelect.value = '';
        mapIframe.src = defaultMap;
    });

    // При изменении города
    citySelect.addEventListener('change', function() {
        const selectedOption = this.options[this.selectedIndex];
        let mapUrl = selectedOption.dataset.mapUrl;
        mapIframe.src = mapUrl ? decodeHtmlEntities(mapUrl) : defaultMap;
    });

    // Select2 обработчик (если используется)
    if (window.jQuery && jQuery(citySelect).data('select2')) {
        jQuery(citySelect).on('select2:select', function(e) {
            let mapUrl = e.params.data.element.dataset.mapUrl;
            mapIframe.src = mapUrl ? decodeHtmlEntities(mapUrl) : defaultMap;
        });
    }

    // Инициализация фильтрации при загрузке
    updateCityFilter();
});
</script>
