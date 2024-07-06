<?php

/*
 * 02.12.2020
 * File: PricelistBlock.php
 * Encoding: UTF-8
 * Project: RMS special for Quality Motors team
 * 
 * Author: Gafuroff Alexandr 
 * E-mail: gafuroff.al@yandex.ru
 */

namespace app\blocks\PricelistROD;

use app\models\IndependensServices;
use Yii;
use app\blocks\Block;
use app\models\Pricelist;
use yii\helpers\VarDumper;

/**
 * Description of PricelistBlock
 *
 * @author Александр
 */
class PricelistRODBlock extends Block
{
    /**
     * @var app\models\Pricelist;
     */
    protected $pricelist;
    protected $groupId;
    protected $priceId;

    protected $testprice;
    public $serviceName;

    public $brand;
    public $model;
    public $service;
//    public $subdomain;
    public $h1;
    public $brandName;
    public $modelName;

//    protected $header = 'Прайс лист на ремонт и обслуживание авто';
//    protected $headerPostfix = ' цена:';

    public function init()
    {
        parent::init();
        $price = [
            'Техническое обслуживание' => [
                ['0', 'Замена помпы (замена водяного насоса)', 'zamena-pompy-zamena-vodyanogo-nasosa', 1.5,],
                ['0', 'Замена свечей зажигания', 'zamena-svechej-zazhiganiya', 0.4,],
                ['0', 'Чистка дроссельной заслонки', 'ochistka-drosselnoj-zaslonki', 0.5,],
                ['0', 'Сброс межсервисного интервала', 'sbros-mezhservisnogo-intervala', 0.2,],
                ['0', 'Экспресс-замена масла с защитой ДВС', 'ekspress-zamena-masla', 0.8,],
                ['0', 'Замена масла в АКПП', 'zamena-masla-v-akpp', 2,],
                ['0', 'Полная замена масла в АКПП', 'polnaya-zamena-masla-v-akpp', 2.5,],
                ['0', 'Частичная замена масла в АКПП', 'chastichnaya-zamena-masla-v-akpp', 1.5,],
                ['0', 'Замена масла в редукторе раздатки', 'zamena-masla-v-reduktore-razdatki', 0.5,],
                ['0', 'Замена масла в двигателе', 'zamena-masla-v-dvigatele', 0.6,],
                ['0', 'Замена масла в ДВС', 'zamena-masla-v-dvs', 0.7,],
                ['0', 'Замена фильтров', 'zamena-filtrov', 0.3,],
                ['0', 'Замена воздушного фильтра', 'zamena-vozdushnogo-filtra', 0.3,],
                ['0', 'Замена топливного фильтра', 'zamena-maslyanogo-filtra', 0.4,],
                ['0', 'Замена салонного фильтра', 'zamena-salonnogo-filtra', 0.3,],
                ['0', 'Замена топливного фильтра дизель', 'zamena-toplivnogo-filtra', 0.5,],
                ['0', 'Замена приводных ремней', 'zamena-privodnyh-remney', 1,],
                ['0', 'Замена ремня ГРМ', 'zamena-remnya-grm', 4,],
                ['0', 'Замена цепи ГРМ', 'zamena-cepi-grm', 8,],
            ],

            'Диагностика' => [
                ['0', 'Диагностика ходовой части', 'diagnostika-hodovoj-chasti', 0.5,],
                ['0', 'Диагностика систем', 'diagnostika-sistem', 0.5,],
                ['0', 'Комплексная диагностика', 'kompleksnaya-diagnostika', 2,],
                ['0', 'Компьютерная диагностика авто', 'kompyuternaya-diagnostika', 0.5,]
            ],

            'Ремонт трансмиссии' => [
                ['0', 'Замена масла в мостах', 'zamena-masla-v-mostah', 0.4,],
                ['0', 'Ремонт карданного вала (кардана)', 'remont-kardannogo-vala-kardana', 4, 5,],
                ['0', 'Замена масла в МКПП', 'zamena-masla-v-mkpp', 0.4,],
                ['0', 'Ремонт коробки МКПП', 'remont-korobki-mkpp', 7,],
                ['0', 'Замена внутреннего шруса', 'zamena-vnutrennego-shrusa', 2,],
                ['0', 'Замена наружного шруса', 'zamena-naruzhnogo-shrusa', 2,],
                ['0', 'Замена привода', 'zamena-privoda', 1.5,],
                ['0', 'Замена пыльника шруса', 'zamena-pylnika-shrusa', 2,],
                ['0', 'Замена шруса', 'zamena-shrusa', 1.5,],
                ['0', 'Ремонт полного привода', 'remont-polnogo-privoda', 2,],
                ['0', 'Ремонт приводов', 'remont-privodov', 1,],
                ['0', 'Замена приводного ремня', 'zamena-privodnogo-remnya', 0.7,],
                ['0', 'Замена масла в раздатке', 'zamena-masla-v-razdatke', 0.4,],
                ['0', 'Замена раздатки (раздаточной коробки)', 'zamena-razdatki', 4,],
                ['0', 'Ремонт раздаточной коробки (раздатки)', 'remont-razdatochnoy-korobki-razdatki', 7,],
                ['0', 'Замена масла в редукторе', 'zamena-masla-v-reduktore', 0.4,],
                ['0', 'Замена редуктора', 'zamena-reduktora', 3,],
                ['0', 'Ремонт редукторов', 'remont-reduktora', 7,],
                ['0', 'Замена сальников', 'zamena-salnikov', 1,],
                ['0', 'Замена сцепления', 'zamena-scepleniya', 5,],
            ],

            'Ремонт двигателя' => [
                ['0', 'Диагностика двигателя', 'diagnostika-dvigatelya', 0.5,],
                ['0', 'Замена гидрокомпенсаторов', 'zamena-gidrokompensatorov', 7,],
                ['0', 'Замена опоры двигателя', 'zamena-opory-dvigatelya', 1,],
                ['0', 'Замена подушек двигателя', 'zamena-podushek-dvigatelya', 1.5,],
                ['0', 'Капитальный ремонт двигателя', 'kapitalnyj-remont-dvigatelya', 30,],
                ['0', 'Переборка двигателя', 'pereborka-dvigatelya', 25,],
                ['0', 'Промывка двигателя', 'promyvka-dvigatelya', 1.2,],
                ['0', 'Промывка радиатора', 'promyvka-radiatora', 1,],
                ['0', 'Регулировка клапанов', 'regulirovka-klapanov', 2.5,],
                ['0', 'Замена масляного насоса', 'zamena-maslyanogo-nasosa', 5,],
                ['0', 'Замена топливного насоса', 'zamena-toplivnogo-nasosa', 2,],
                ['0', 'Замена прокладки клапанной крышки', 'zamena-prokladki-klapannoj-kryshki', 1.5,],
                ['0', 'Промывка инжектора', 'promyvka-inzhektora', 2,],
                ['0', 'Промывка систем автомобиля', 'promyvka-sistem-avtomobilya', 0.8,],
                ['0', 'Промывка системы охлаждения', 'promyvka-sistemy-ohlazhdeniya', 1.5,],
                ['0', 'Промывка топливной системы', 'promyvka-toplivnoj-sistemy', 2,],
                ['0', 'Промывка дроссельной заслонки', 'promyvka-drosselnoj-zaslonki', 0.5,],
                ['0', 'Мойка радиатора', 'mojka-radiatora', 0.4,],
                ['0', 'Замена распредвала', 'zamena-raspredvala', 3,],
                ['0', 'Замена сальника коленчатого вала', 'zamena-salnika-kolenchatogo-vala', 5,],
                ['0', 'Замена охлаждающей жидкости', 'zamena-ohlazhdayushchej-zhidkosti', 1,],
                ['0', 'Замена антифриза', 'zamena-antifriza', 1,],
                ['0', 'Замена радиатора охлаждения', 'zamena-radiatora-ohlazhdeniya', 1.2,],
                ['0', 'Ремонт радиаторов охлаждения', 'remont-radiatorov-ohlazhdeniya', 1,],
                ['0', 'Замена бензонасоса', 'zamena-benzonasosa', 2.5,],
                ['0', 'Ремонт топливной системы', 'remont-toplivnoy-sistemy', 0.5,],
                ['0', 'Ремонт турбины', 'remont-turbiny', 12,],
                ['0', 'Ремонт ГБЦ двигателя', 'remont-gbc-dvigatelya', 12,]
            ],

            'Ремонт дизельных двигателей' => [
                ['0', 'Диагностика дизельных двигателей', 'diagnostika-dizelnyh-dvigateley', 1,],
                ['0', 'Замена свечей накаливания', 'zamena-svechej-nakalivaniya', 2,],
                ['0', 'Замер компрессии', 'zamer-kompressii', 1,],
                ['0', 'Замена форсунок', 'zamena-forsunok', 2,],
                ['0', 'Ремонт турбин дизельных двигателей', 'remont-turbin-dizelnyh-dvigatelej', 18,],
                ['0', 'Ремонт форсунок', 'remont-forsunok', 8,],
                ['0', 'Замена ТНВД', 'zamena-tnvd', 5,],
                ['0', 'Ремонт ТНВД', 'remont-tnvd', 22,]
            ],

            'Ремонт электрооборудования' => [
                ['0', 'Ремонт электрики', 'remont-ehlektriki', 0.5,],
                ['0', 'Ремонт электропроводки', 'remont-ehlektroprovodki', 0.5,],
                ['0', 'Замена и ремонт трапеции дворников', 'zamena-i-remont-trapecii-dvornikov', 1.5,],
                ['0', 'Замена стеклоочистителя (дворника)', 'zamena-stekloochistitelya-dvornika', 1,],
                ['0', 'Проверка аккумулятора', 'proverka-akkumulyatora', 0.3,],
                ['0', 'Ремонт стеклоподъемника', 'remont-steklopodemnika', 1,],
                ['0', 'Замена датчиков', 'zamena-datchikov', 0.5,],
                ['0', 'Ремонт датчиков', 'remont-datchikov', 0.8,],
                ['0', 'Замена ламп освещения', 'zamena-lamp-osveshcheniya', 0.2,],
                ['0', 'Регулировка фар', 'regulirovka-far', 0.5,],
                ['0', 'Замена предохранителей', 'zamena-predohraniteley', 0.3,],
                ['0', 'Диагностика кондиционера', 'diagnostika-kondicionera', 0.6,],
                ['0', 'Ремонт автокондиционера', 'remont-avtokondicionera', 3,],
                ['0', 'Заправка кондиционера', 'zapravka-kondicionera', 3,],
                ['0', 'Замена генератора', 'zamena-generatora', 1.5,],
                ['0', 'Ремонт генератора', 'remont-generatora', 2,],
                ['0', 'Ремонт и замена моторчика печки', 'remont-i-zamena-motorchika-pechki', 2,],
                ['0', 'Ремонт печки автомобиля', 'remont-pechki-avtomobilya', 3,],
                ['0', 'Замена радиатора печки', 'zamena-radiatora-pechki', 7,],
                ['0', 'Замена стартера', 'zamena-startera', 1.5,],
                ['0', 'Ремонт стартера', 'remont-startera', 3,],
                ['0', 'Замена замка зажигания', 'zamena-zamka-zazhiganiya', 2,],
                ['0', 'Ремонт системы зажигания', 'remont-sistemy-zazhiganiya', 1,]
            ],

            'Ремонт глушителя' => [
                ['0', 'Замена гофры', 'zamena-gofry', 1.5,],
                ['0', 'Сварка глушителей', 'svarka-glushiteley', 0.5,],
                ['0', 'Замена катализатора на пламегаситель', 'zamena-katalizatora-na-plamegasitel', 1.5,],
                ['0', 'Ремонт катализатора', 'remont-katalizatora', 1.5,],
                ['0', 'Замена катализатора', 'zamena-katalizatora', 1,],
                ['0', 'Удаление катализатора', 'udalenie-katalizatora', 2,],
                ['0', 'Замена впускного коллектора', 'zamena-vpusknogo-kollektora', 1,]
            ],

            'Ремонт ходовой (подвески)' => [
                ['0', 'Диагностика подвески', 'diagnostika-podveski', 0.5,],
                ['0', 'Замена задней подвески', 'zamena-zadnej-podveski', 3,],
                ['0', 'Ремонт задней подвески', 'remont-zadney-podveski', 1,],
                ['0', 'Замена амортизаторов', 'zamena-amortizatorov', 2,],
                ['0', 'Замена стабилизаторов', 'zamena-stabilizatorov', 1.8,],
                ['0', 'Ремонт передней подвески', 'remont-peredney-podveski', 1,],
                ['0', 'Ремонт пневмоподвески', 'remont-pnevmopodveski', 4,],
                ['0', 'Замена ступицы', 'zamena-stupicy', 2,],
                ['0', 'Замена шаровой опоры', 'zamena-sharovoj-opory', 0.5,],
                ['0', 'Замена сайлентблоков подвески', 'zamena-saylentblokov-podveski', 0.8,],
                ['0', 'Замена сайлентблоков задней балки', 'zamena-saylentblokov-zadney-balki', 1.5,]
            ],

            'Шиномонтаж' => [
                ['0', 'Шиномонтаж R-13 радиус', 'shinomontazh-r-13', 0.7,],
                ['0', 'Шиномонтаж R-14 радиус', 'shinomontazh-r-14', 0.8,],
                ['0', 'Шиномонтаж R-15 радиус', 'shinomontazh-r-15', 0.9,],
                ['0', 'Шиномонтаж R-16 радиус', 'shinomontazh-r-16', 1,],
                ['0', 'Шиномонтаж R-17 радиус', 'shinomontazh-r-17', 1.2,],
                ['0', 'Шиномонтаж R-18 радиус', 'shinomontazh-r-18', 1.4,],
                ['0', 'Шиномонтаж R-19 радиус', 'shinomontazh-r-19', 1.6,],
                ['0', 'Шиномонтаж R-20 радиус', 'shinomontazh-r-20', 2,],
                ['0', 'Шиномонтаж R-21 радиус', 'shinomontazh-r-21', 2,],
                ['0', 'Шиномонтаж R-22 радиус', 'shinomontazh-r-22', 2.4,]
            ],

            'Ремонт рулевого управления' => [
                ['0', 'Диагностика рулевой рейки', 'diagnostika-rulevoj-rejki', 0.5,],
                ['0', 'Замена рулевой рейки', 'zamena-rulevoj-rejki', 4,],
                ['0', 'Ремонт рулевой рейки', 'remont-rulevoy-reyki', 15,],
                ['0', 'Ремонт насоса ГУР', 'remont-nasosa-gur', 12,],
                ['0', 'Замена жидкости ГУР', 'zamena-zhidkosti-gur', 0.8,],
                ['0', 'Замена гидроусилителя', 'zamena-gidrousilitelya', 2.5,],
                ['0', 'Ремонт гидроусилителя руля', 'remont-gidrousilitelya-rulya', 12,],
                ['0', 'Ремонт рулевого управления', 'remont-rulevogo-upravleniya', 10,]
            ],

            'Ремонт тормозной системы' => [
                ['0', 'Замена задних тормозных дисков', 'zamena-zadnih-tormoznyh-diskov', 0.8,],
                ['0', 'Замена передних тормозных дисков', 'zamena-perednih-tormoznyh-diskov', 1,],
                ['0', 'Замена тормозных дисков', 'zamena-tormoznyh-diskov', 1,],
                ['0', 'Замена задних тормозных колодок (барабан)', 'zamena-zadnih-tormoznyh-kolodok-baraban', 1,],
                ['0', 'Замена задних тормозных колодок', 'zamena-zadnih-tormoznyh-kolodok', 0.8,],
                ['0', 'Замена передних тормозных колодок', 'zamena-perednih-tormoznyh-kolodok', 0.8,],
                ['0', 'Замена тормозных колодок зад (эл ручник)', 'zamena-tormoznyh-kolodok-zad-ehl-ruchnik', 1.2,],
                ['0', 'Ремонт и обслуживание тормозного суппорта', 'remont-i-obsluzhivanie-tormoznogo-supporta', 0.8,],
                ['0', 'Диагностика тормозной системы', 'diagnostika-tormoznoj-sistemy', 0.5,],
                ['0', 'Замена тормозной жидкости', 'zamena-tormoznoj-zhidkosti', 0.8,],
                ['0', 'Замена тормозных трубок', 'zamena-tormoznyh-trubok', 1.2,],
                ['0', 'Прокачка тормозов', 'prokachka-tormozov', 0.7,],
                ['0', 'Ремонт ручного тормоза (ручник)', 'remont-ruchnogo-tormoza-ruchnik', 0.8,],
                ['0', 'Замена тормозного цилиндра', 'zamena-tormoznogo-cilindra', 0.8,]
            ],

            'Покраска кузова' => [
                ['0', 'Покраска бампера', 'pokraska-bampera', 10,],
                ['0', 'Покраска двери автомобиля', 'pokraska-dveri-avtomobilya', 10,],
                ['0', 'Покраска суппортов', 'pokraska-supportov', 4,],
                ['0', 'Покраска деталей', 'pokraska-detalej', 5,],
                ['0', 'Покраска капота', 'pokraska-kapota', 12,],
                ['0', 'Покраска порогов', 'pokraska-porogov', 4,],
                ['0', 'Покраска крыла', 'pokraska-kryla', 8,],
                ['0', 'Локальная покраска автомобиля', 'lokalnaya-pokraska-avtomobilya', 10,],
                ['0', 'Подбор краски', 'podbor-kraski', 0,],
                ['0', 'Покраска сколов автомобиля', 'pokraska-skolov-avtomobilya', 1,],
                ['0', 'Покраска царапин автомобиля', 'pokraska-carapin-avtomobilya', 1,]
            ],
            'Кузовной ремонт' => [
                ['0', 'Ремонт крышки багажника', 'remont-kryshki-bagazhnika', 1,],
                ['0', 'Ремонт вмятин', 'remont-vmyatin', 1,],
                ['0', 'Ремонт царапин', 'remont-carapin', 1,],
                ['0', 'Ремонт сколов', 'remont-skolov', 1,],
                ['0', 'Удаление вмятин без покраски', 'udalenie-vmyatin-bez-pokraski', 2,],
                ['0', 'Ремонт боковых зеркал', 'remont-bokovyh-zerkal', 1.5,],
                ['0', 'Ремонт бампера', 'remont-bampera', 1.5,],
                ['0', 'замена бампера', 'remont-i-zamena-bampera', 2],
                ['0', 'Ремонт двери автомобиля', 'remont-dveri-avtomobilya', 2,],
                ['0', 'Ремонт крыла', 'remont-kryla', 1,],
                ['0', 'Замена крыла', 'zamena-kryla', 2,],
                ['0', 'Замена капота', 'zamena-kapota', 2,],
                ['0', 'Ремонт капота', 'remont-kapota', 1.5,],
                ['0', 'Ремонт порогов автомобиля', 'remont-porogov', 4,]
            ],

            'Ремонт автостекол' => [
                ['0', 'Замена заднего стекла', 'zamena-zadnego-stekla', 4,],
                ['0', 'Установка лобового стекла', 'ustanovka-lobovogo-stekla', 5,],
                ['0', 'Вклейка стекол', 'vklejka-stekol', 5,],
                ['0', 'Замена лобового стекла', 'zamena-lobovogo-stekla', 5,],
                ['0', 'Замена стекол', 'zamena-stekol', 1.5,],
                ['0', 'Установка стекол', 'ustanovka-stekol', 1.5,],
                ['0', 'Замена автостекол', 'zamena-avtostekol', 1.5,],
                ['0', 'Замена стекла двери', 'zamena-stekla-dveri', 2,],
                ['0', 'Замена бокового стекла', 'zamena-bokovogo-stekla', 2,]
            ],
            'Детейлинг' => [
                ['0', 'Мойка авто', 'mojka-avto', 0.3,],
                ['0', 'Комплексная мойка', 'kompleksnaya-mojka', 0.8],
                ['0', 'Техническая мойка', 'tekhnicheskaya-mojka', 0.3],
                ['0', 'Мойка двигателя', 'mojka-dvigatelya', 0.5],
                ['0', 'Химчистка салона', 'himchistka-salona', 8],
                ['0', 'Химчистка пола', 'himchistka-pola', 1.5],
                ['0', 'Химчистка сидений', 'himchistka-sidenij', 1],
                ['0', 'Химчистка потолка', 'himchistka-potolka', 1.5],
                ['0', 'Химчистка передних сидений', 'himchistka-perednih-sidenij', 1],
                ['0', 'Химчистка багажника', 'himchistka-bagazhnika', 1.5],
                ['0', 'Химчистка задних сидений', 'himchistka-zadnih-sidenij', 1],
                ['0', 'Полировка кузова', 'polirovka-kuzova', 5],
                ['0', 'Полировка детали', 'polirovka-detali', 2,],
                ['0', 'Полировка фар', 'polirovka-far', 2,],
                ['0', 'Полировка бампера', 'polirovka-bampera', 3,],
                ['0', 'Абразивная полировка кузова', 'abrazivnaya-polirovka-kuzova', 15,],
                ['0', 'Покрытие кузова керамикой', 'pokrytie-kuzova-keramikoj', 8.5,],
                ['0', 'Нанесение покрытия Ceramic Pro', 'nanesenie-pokrytiya-ceramic-pro', 8,],
                ['0', 'Нанесение керамики', 'nanesenie-keramiki', 8,],
                ['0', 'Обработка и покрытие жидким стеклом', 'obrabotka-i-pokrytie-zhidkim-steklom', 6,],
                ['0', 'Антидождь', 'antidozhd', 1.2,],
                ['0', 'Покрытие гидрофобным составом', 'pokrytie-gidrofobnym-sostavom', 1.5,],
                ['0', 'Защита кузова жидким стеклом', 'zashchita-kuzova-zhidkim-steklom', 4,],
                ['0', 'Предпродажная подготовка авто', 'predprodazhnaya-podgotovka-avto', 5,],
            ],
            'Дополнительное оборудование' => [
                ['0', 'Установка фаркопа и ТСУ (тягово-сцепное устройство)', 'ustanovka-farkopa-i-tsu-tyagovo-scepnoe-ustrojstvo', 5,],
                ['0', 'Замена двигателя на силовую установку с другими характеристиками', 'zamena-dvigatelya-na-silovuyu-ustanovku-s-drugimi-harakteristikami', 30],
                ['0', 'Установка бампера', 'ustanovka-bampera', 1],
                ['0', 'Установка подножек', 'ustanovka-podnozhek', 1],
                ['0', 'Установка ремней безопасности', 'ustanovka-remnej-bezopasnosti', 1],
                ['0', 'Регистрация ГБО (газо-балонного оборудования)', 'registraciya-gbo-gazo-balonnogo-oborudovaniya', 20],
                ['0', 'Установка глушителя', 'ustanovka-glushitelya', 0.5],
                ['0', 'Установка насадок на глушители', 'ustanovka-nasadok-na-glushiteli', 0.3],
                ['0', 'Установка дефлекторов', 'ustanovka-deflektorov', 0.5],
                ['0', 'Установка биксенона', 'ustanovka-biksenona', 1.5],
                ['0', 'Установка камеры заднего вида', 'ustanovka-kamery-zadnego-vida', 1],
                ['0', 'Установка ксенона', 'ustanovka-ksenona', 1],
                ['0', 'Установка парктроников', 'ustanovka-parktronikov', 1.5],
            ]
        ];

        $this->testprice = $price;

        if ($this->brand && $this->brand->show_price) {
            $priceWithBrand = [];
            foreach ($price as $key => $items) {
                $arr = [];
                foreach ($items as $item) {
                    $item[2] = strtolower($this->brand->url) . '/' . $item[2];
                    $arr[] = $item;
                }
                $priceWithBrand[$key] = $arr;
            }
            $this->testprice = $priceWithBrand;
        }

        if ($this->model && $this->model->show_price) {
            $priceWithModel = [];
            foreach ($price as $key => $items) {
                $arr = [];
                foreach ($items as $item) {
                    $item[2] = strtolower($this->brand->url) . '/' . strtolower($this->model->url) . '/' . $item[2];
                    $arr[] = $item;
                }
                $priceWithModel[$key] = $arr;
            }
            $this->testprice = $priceWithModel;
        }

        if ($this->service) {
            $item = IndependensServices::findOne($this->service->parent_id)->toArray();
            $this->testprice = [$item['name'] => $price[$item['name']]];
        }

    }


    protected function getPriceGroup($group, $items, $iter, $brand)
    {
        ob_start();
        include __DIR__ . '/views/group.php';
        return ob_get_clean();
    }

    protected function generatePriceItems($priceItems)
    {
        $items = '';
        foreach ($priceItems as $item) {
            $items .= $this->getItem($item);
        }
        return $items;
    }

    protected function generatePriceGroups()
    {
        $groups = '';
        $iter = 0;


        foreach ($this->testprice as $key => $group) {
            $iter++;
            $brand = $this->brand;
            $items = $this->generatePriceItems($group);
            $groups .= $this->getPriceGroup($key, $items, $iter, $brand);

        }

        return $groups;
    }

    public function run()
    {
        return $this->render([
            'h1' => $this->h1,
            'groups' => $this->generatePriceGroups(),
            'brandName' => isset($this->brand->name) ? $this->brand->name : null,
            'modelName' => isset($this->model->name) ? $this->model->name : null,
            'serviceName' => $this->serviceName
        ]);
    }


}
