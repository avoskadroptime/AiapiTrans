<?php

/** @var yii\web\View $this */
use yii\helpers\Html;
$this->title = 'Главная';
?>

<div class="site">

    <section class="WeCan">

        <div class="wcDox">
            <div class="wcLeft wrapper">
                <h2>Мы можем:</h2>
                <ol class="wcOl">
                    <li>Перевозить грузы в большинство стран мира</li>
                    <li>Оформлять груз на таможне</li>
                    <li>Страховать грузы</li>
                    <li>Сертифицировать товары</li>
                    <li>Сопровождать сделки с поставщиками</li>
                </ol>
            </div>
            <div class="wcRight">
            </div>
        </div>
        <div class="wcWolna1"><?= Html::img('@web/images/Длинная волна.png') ?></div>
        <div class="wcWolna2"><?= Html::img('@web/images/короткая волна.png') ?></div>
        <div class="wc_arrows">
            <?= Html::img('@web/images/blueArrows.png') ?>
        </div>
        <div class="pere2"></div>
    </section>
    <section class="Trans">
        <div class="TrDox wrapper">
            <div class="Tr4Bl">
                <div class="TrBl TrBl1">
                    <div class="TrH3">ЖД доставка</div>
                    <div class="TrTxt">Железнодорожный транспорт применим, прежде всего, для перевозок больших грузов на большие расстояния.</div>
                </div>
                <div class="TrBl TrBl2">
                    <div class="TrH3">Авия доставка</div>
                    <div class="TrTxt">Это удобный и оперативный сервис. Мы стремимся предложить клиентам оптимальную стоимость перевозки грузов.</div>
                </div>
                <div class="TrBl TrBl3">
                    <div class="TrH3">Морская доставка</div>
                    <div class="TrTxt">Низкая себестоимость перевозки грузов на дальние расстояния. Использование контейнеров гарантирует высокую степень защиты груза.</div>
                </div>
                <div class="TrBl TrBl4">
                    <div class="TrH3">Авто доставка</div>
                    <div class="TrTxt">Доставка авто может происходить по схеме от двери до двери. Мы подберем наилучший вариант доставки авто с наименьшими затратами.</div>
                </div>
            </div>
            <a class="TrButt button" href="#">Поподробнее</a>
        </div>
        <div class="Tr_arrows">
            <?= Html::img('@web/images/goldArrows.png') ?>
        </div>
    </section>
    <section class="About">

        <div class="wrapper">
            <h2 class="AbH2">Коротко о нас</h2>
            <div class="AbDox">
                <div class="AbPic"></div>
                <div class="AbTxt">
                    <div class="AbTxt1 Ab_text">Компания Aiapi Trans специализируется на внешнеэкономической деятельности: международные перевозки грузов, таможенное оформление, страхование, сертификацию товаров, сопровождение сделок во всех странах мира.</div>
                    <div class="AbTxt2 Ab_text">Специалисты компании – юристы, логисты, таможенные представители, водители, транспортные агенты в Санкт-Петербурге и регионах – ежедневно трудятся над тем, чтобы задачи клиентов решались вовремя и по оптимальным схемам.</div>
                    <div class="AbTxt3 Ab_text">Сегодня в транспортно-логистической компании Aiapi Trans работают более 100 сотрудников – специалистов по логистике перевозок, юристов, водителей, транспортных агентов.</div>
                </div>
            </div>
        </div>
    </section>
    <section class="Service">
        <div class="wrapper">
            <h2 class="SeH2">Преимущества сотрудничества с нами</h2>
            <div class="SeDox">
                <div class="Se1">
                    <div class="Se_L">
                        <div class="Se_little">
                            <div class="SeTxt_l">Нет скрытых платежей</div>
                            <div class="SePic"><?= Html::img('@web/images/security.png') ?></div>
                        </div>
                        <div class="Se_little">
                            <div class="SeTxt_l">Офисы в Москве, СПб и Шанхае</div>
                            <div class="SePic"><?= Html::img('@web/images/location.png') ?></div>
                        </div>
                    </div>
                    <div class="Se_big Se_big1">
                        <div class="Se_h3">Томоженное оформление “под ключ”</div>
                        <div class="SeTxt">Специалист компании классифицирует товар по ТНВЭД, готовит весь набор документов для подачи и подает таможенную декларацию.</div>
                    </div>
                </div>
                <div class="Se2">
                    <div class="Se_big Se_big2">
                        <div class="Se_h3">100% доставка груза</div>
                        <div class="SeTxt">Таможенный представитель Aiapi Trans несет материальную ответственность за товар, принятый к перевозке.</div>
                    </div>
                    <div class="Se_L">
                        <div class="Se_little">
                            <div class="SeTxt_l">15 лет успешной работы</div>
                            <div class="SePic"><?= Html::img('@web/images/medal.png') ?></div>
                        </div>
                        <div class="Se_car">
                            <?= Html::img('@web/images/машина.png') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
