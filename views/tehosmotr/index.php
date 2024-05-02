<?php

/* 
 * 2021 Jan 30
 * File: index.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

use app\blocks\Campaigns\CampaignsBlock;
use app\blocks\SeoText\SeoTextBlock;
use app\blocks\Contacts\ContactsBlock;
use yii\widgets\Breadcrumbs;
use yii\helpers\Html;

// Получаем данные для главных страниц разделов (и приравненых к таковым)
$currentPage = Yii::$app->controller->currentPage;

// Генерация метатегов
$this->title = $currentPage->title;
$this->registerMetaTag(['name' => 'description', 'content' => $currentPage->description]);
$this->registerMetaTag(['name' => 'keywords', 'content' => $currentPage->keywords]);

?>

<section>

    <div class="teh_back">
        <div class="container-vmf tech-container">
            <div class="table_content">
                <div class="table">
                    <h3>Цены на технический осмотр транспортных средств</h3>
                    <table border="1">

                        <th>КАТЕГОРИЯ ТС</th>
                        <th>ЦЕНА</th>
                        <tr>
                            <td>M1 - Легковые</td>
                            <td>1200 руб</td>
                        </tr>
                        <tr>
                            <td>M2 - Автобусы, до 5т</td>
                            <td>1950 руб</td>
                        </tr>
                        <tr>
                            <td>M3 - Автобусы, от 5т</td>
                            <td>2300 руб</td>
                        </tr>
                        <tr>
                            <td>N1 - Грузовые, до 3.5т</td>
                            <td>1300 руб</td>
                        </tr>
                        <tr>
                            <td>N2 - Грузовые, от 3.5 до 12т</td>
                            <td>2200 руб</td>
                        </tr>
                        <tr>
                            <td>N3 - Грузовые, от 12т</td>
                            <td>2400 руб</td>
                        </tr>
                        <tr>
                            <td>O1 - Прицепы, до 0.75т</td>
                            <td>1050 руб</td>
                        </tr>
                        <tr>
                            <td>O2 - Прицепы, от 0.75т до 3.5т</td>
                            <td>1050 руб</td>
                        </tr>
                        <tr>
                            <td>O3 - Прицепы, от 3.5т до 10т</td>
                            <td>1600 руб</td>
                        </tr>
                        <tr>
                            <td>O4 - Прицепы, от 10т</td>
                            <td>1600 руб</td>
                        </tr>
                        <tr>
                            <td>L - Мотоциклы</td>
                            <td>-</td>
                        </tr>

                    </table>
                </div>
                <div class="form">
                    <h4>График проведения ТехОсмотра</h4>
                    <h4>Запись на техосмотр <br> <strong>+7 (978) 713-55-53</strong></h4>
                    <form id="recall-form">
                        <?= Html::hiddenInput('type'); ?>
                        <?= Html::hiddenInput(\Yii::$app->getRequest()->csrfParam, \Yii::$app->getRequest()->getCsrfToken(), []); ?>
                        <h4 class="text-center" id="recall-form-name"></h4>
                        <div class="form-group">
                            <label for="client_name">Ваше имя</label>
                            <?= Html::textInput('client_name', '', ['class' => 'form-control', 'id' => 'client_name', 'required' => true]); ?>
                        </div>
                        <div class="form-group">
                            <label for="client_phone">Номер телефона</label>
                            <?= Html::textInput('client_phone', '', ['class' => 'form-control', 'id' => 'client_phone', 'placeholder' => '+7 (___) ___-__-__', 'required' => true]); ?>
                        </div>
                        <div class="form-group">
                            <?= Html::checkbox('obrabotkaDanix', true) ?> <a href="/agreement/" target="_blank">Согласен с политикой конфиденциальности</a>
                        </div>
                        <div class="form-group">
                            <div id="form-recall-send" class="mbtn">ЗАПИСАТЬСЯ</div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="tex_label">
            <h2>Предоставляем услуги автострахования ОСАГО и изготовление номерных знаков!</h2>
        </div>
        <div class="teh-info">
            <a href="http://ivo.garant.ru/#/document/12187349/paragraph/1636:0">Федеральный закон от 1 июля 2011 года № 170-ФЗ “О техническом осмотре транспортных средств и о внесении изменений в отдельные законодательные акты Российской Федерации”</a>
            <hr>
            <a href="https://ivo.garant.ru/#/document/70103612/paragraph/16:0">Правила проведения технического осмотра транспортных средств, утверждённые постановлением Правительства Российской Федерации от 5 декабря 2011 года № 1008</a>
            <hr>
            <a href="https://docviewer.yandex.ru/view/116332564/?*=7izSF0c2jys8f3V5WF49%2FTLaSGN7InVybCI6InlhLWJyb3dzZXI6Ly80RFQxdVhFUFJySlJYbFVGb2V3cnVNTlJ5RTJtOVptQm1yX2c3S1E5UUtOSWpzUnZiX1BJSmMzZEdkeVA0aDZEd01hWmR4STA0TUk0RjFRYUg0OWhnQkhlMy14dVg1eWJ0QWFSVE5JMGVTOUluWG1DRFFnRlNUSjQwSjNnOHhlWjF3SnpsbWlRM3dkOHE2STVjZWZxVWc9PT9zaWduPTFYVHdXTWl4OUhIZEJGQjFqR1BSV25vY2JfTlNTMXlEdGRYRi1TNTZPUjA9IiwidGl0bGUiOiJGT1JNQV9USVBPVk9HT19ET0dPVk9SQS5kb2MiLCJub2lmcmFtZSI6ZmFsc2UsInVpZCI6IjExNjMzMjU2NCIsInRzIjoxNjM3Njc1MDM2MjcxLCJ5dSI6IjgzNTg3ODE4ODE2MjU4MzQxNzkifQ%3D%3D">Форма типового договора о проведении технического осмотра</a>
            <hr>
            <p>Для прохождения технического осмотра владелец транспортного средства или его представитель, в том числе представитель, действующий на основании доверенности, оформленной в простой письменной форме, обязан представить оператору технического осмотра:</p>
            <p>1) документ, удостоверяющий личность, и доверенность (для представителя владельца транспортного средства);</p>
            <p>2) свидетельство о регистрации транспортного средства или паспорт транспортного средства.</p>

            <h2 style="color: #4054B2; margin-bottom: 25px;">Аккредитованный оператор технического осмотра транспортных средств</h2>

            <p>ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ «РОДНИК»</p>
            <p>ИНН 9110001589</p>
            <p>AДРЕС ЮРИДИЧЕСКИЙ / ПОЧТОВЫЙ :297420, Крым Респ, г Евпатория, проезд Межквартальный, 6</p>
            <p>Адрес ПТО:297420, Крым Респ, г Евпатория, проезд Межквартальный, д 11а</p>
            <p>Координаты пункта технического осмотра: 45.221858  33.353750</p>
        </div>
    </div>

</section>
