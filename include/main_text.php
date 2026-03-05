<section class="comp-89">
    <div class="comp-89-wrapper">
        <div class="container">
            <div class="comp-89-main">
                <div class="comp-89-content">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="description fadeInUp-scroll visible" data-delay="200">
                                <p></p>
                                <p>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">Где</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">комфорт</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">встречается</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">с</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">продуктивностью,</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">рождается</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">великая</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">работа.</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">Мы</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">гармонично</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">объединяем</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">эргономику,</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">технологии</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">и</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">гибкий</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">дизайн,</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">чтобы</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">создавать</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">рабочие</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">пространства,</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">которые</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">адаптируются</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">под</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">ваши</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">потребности,</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">а</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">не</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">наоборот.</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">Это</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">не</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">просто</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">мебель —</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">это</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">возможность</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">иметь</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">именно</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">то,</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">что</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">вам</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">нужно,</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">в</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">нужный</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">момент,</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">чтобы</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">максимально</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">раскрыть</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">ваш</div>
                                    <div style="position: relative; display: inline-block; opacity: 0.6;">потенциал.</div>
                                </p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
    .fadeInUp-scroll .word-item {
    opacity: 0.6;
    transform: translateY(20px);
    transition: opacity 0.7s ease-out, transform 0.7s ease-out;
    display: inline-block;
    position: relative;
}

.fadeInUp-scroll.visible .word-item {
    opacity: 1;
    transform: translateY(0);
}

/* Дополнительные стили для компоновки */
.comp-89-content p {
    margin: 0;
    line-height: 1.6;
}

.word-item {
    margin-right: 4px; /* небольшой отступ между словами */
}
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const element = document.querySelector('.fadeInUp-scroll');
    if (!element) return;

    // Добавляем классы к каждому слову
    const wordDivs = element.querySelectorAll('div[style*="display: inline-block"]');
    wordDivs.forEach(div => {
        div.classList.add('word-item');
    });

    // Если IntersectionObserver не поддерживается
    if (!('IntersectionObserver' in window)) {
        element.classList.add('visible');
        return;
    }

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const delay = parseInt(entry.target.dataset.delay || 0, 10);
                
                setTimeout(() => {
                    entry.target.classList.add('visible');
                    
                    // Анимация каждого слова с задержкой
                    const words = entry.target.querySelectorAll('.word-item');
                    words.forEach((word, index) => {
                        setTimeout(() => {
                            word.style.opacity = '1';
                            word.style.transform = 'translateY(0)';
                        }, index * 100); // задержка 100ms между словами
                    });
                    
                }, delay);
                
                observer.unobserve(entry.target);
            }
        });
    }, { 
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    });

    observer.observe(element);
});
        </script>