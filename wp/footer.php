    <footer class="page-footer">
        <div class="page-footer__wrapper">
            <div class="footer-logo">
                <div class="footer-logo__image">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/logo.svg" alt="" />
                </div>
                <h2 class="footer-logo__title">Lucky Frank
                    <br>
                    <small>территория настоящих мужчин</small>
                </h2>
                <div class="footer-logo__cards">
                    <img src="<?php bloginfo("stylesheet_directory"); ?>/img/cards.png" alt="Платежи картой Lucky Frank"/>
                </div>
            </div>

            <div class="footer-block">
                <header class="footer-block__header">
                    <h3 class="footer-block__title">Краснодар</h3>
                </header>
                <div class="footer-block__content">
                    <div class="footer-info">
                        <div class="footer-info__icon icon-phone"></div>
                        <p class="footer-info__text">
                            <a href="tel:<?php the_field("phone-link", 5); ?>">
                                <?php the_field("phone-vsl", 5); ?>
                            </a>
                        </p>
                    </div>
                    <div class="footer-info">
                        <div class="footer-info__icon icon-location"></div>
                        <p class="footer-info__text"><?php the_field("address", 5); ?></p>
                    </div>
                    <div class="footer-info">
                        <div class="footer-info__icon icon-mail-alt"></div>
                        <p class="footer-info__text">
                            <a href="mailto:<?php the_field("e-mail", 5); ?>"><?php the_field("e-mail", 5); ?></a>
                        </p>
                    </div>
                    <div class="footer-info">
                        <div class="social social--footer">
                        <a class="social-icon icon-instagram" href="<?php the_field("social-inst", 5); ?> ">Instagram</a>
                        <a class="social-icon icon-vkontakte" href="<?php the_field("social-vk", 5); ?> ">Vkontakte</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer-block">
                <header class="footer-block__header">
                    <h3 class="footer-block__title">Москва</h3>
                </header>
                <div class="footer-block__content">
                    <div class="footer-info">
                        <div class="footer-info__icon icon-phone"></div>
                        <p class="footer-info__text">
                            <a href="tel:+79855729406">
                                +7 985 572-94-06
                            </a>
                        </p>
                    </div>
                    <div class="footer-info">
                        <div class="footer-info__icon icon-location"></div>
                        <p class="footer-info__text">Волгоградский проспект 60к1</p>
                    </div>
                    <div class="footer-info">
                        <div class="footer-info__icon icon-mail-alt"></div>
                        <p class="footer-info__text">
                            <a href="mailto:<?php the_field("e-mail", 5); ?>"><?php the_field("e-mail", 5); ?></a>
                        </p>
                    </div>
                    <div class="footer-info">
                        <div class="social social--footer">
                        <a class="social-icon icon-instagram" href="https://www.instagram.com/lucky.frank.barbershop.msc/">Instagram</a>
                        <a class="social-icon icon-vkontakte" href="https://vk.com/luckyfrankmsk">Vkontakte</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <div class="footer-block">
                <header class="footer-block__header">
                    <h3 class="footer-block__title">Часы работы</h3>
                </header>
                <div class="footer-block__content">
                    <div class="footer-info">
                        <div class="footer-info__icon icon-clock"></div>
                        <p class="footer-info__text footer-info__text--schedule">
                            <?php the_field("work-time-long", 5); ?>
                        </p>
                    </div>
                </div>
            </div> -->

            <div class="page-footer__quote">
                <blockquote class="quote quote--inversed">
                    <div class="quote__deco"> </div>
                    <h3 class="quote__title">Frank
                        <em>Says:</em>
                    </h3>
                    <p class="quote__text">
                        <?php the_field("quote-footer", 5); ?>
                    </p>
                    <div class="quote__signature">
                        <img src="<?php bloginfo("stylesheet_directory"); ?>/img/sign.png" alt="" />
                    </div>
                </blockquote>
            </div>

        </div>
    </footer>

    <script type="text/javascript" src="//w87814.yclients.com/widgetJS" charset="UTF-8"></script>
    <script src="<?php bloginfo("stylesheet_directory"); ?>/menu.js?v=4"></script>
    <script src="<?php bloginfo("stylesheet_directory"); ?>/map.js?v=4"></script>
    <script async="async" defer="defer" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyClofSbCu6EYSgaWdfCK5G1i_eUXgL4RCk&amp;callback=initMap&amp;language=ru"></script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter48084299 = new Ya.Metrika2({
                    id:48084299,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/tag.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks2");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/48084299" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
<script type="text/javascript">
(function () {
  try {
    var a = document
    .querySelectorAll('.footer-info [href="tel:+79181959419"], .footer-info [href="tel:+79855729406"], .header-contacts [href="tel:+79181959419"], .header-contacts [href="tel:+79855729406"]')
    if (a != null && a.length) {
      for (var i = 0; i < a.length; i++) {
        a[i].addEventListener('click', function () {
          yaCounter48084299.reachGoal('klik-phone')
        })
      }
    }
  } catch (e) {}
})()
</script>
    <?php wp_footer(); ?>
