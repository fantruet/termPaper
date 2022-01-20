<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>


<?php

$arFilter = [
    "ID" => $_GET['ID']
];

$arSelect = [];
if (CModule::IncludeModule("iblock")):
    $element = CIBlockElement::GetList([], $arFilter, false,false,[]);

if($a = $element->GetNextElement()){
    $item = $a->getProperties();
}
endif;
?>


<div class="main">
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="media-info">
                        <div class="image-title">
                            <a href="">
                                <img src="<?=CFile::GetPath($item['Image']['VALUE']);?>" alt="">
                            </a>
                            <div class="play">
                                <a href="#video-player">
                                    Смотреть
                                </a>
                            </div>
                        </div>
                        <div class="media-body">
                            <div class="anime-title">
                                <div>
                                    <h1><?=$item['Name_ru']['VALUE']?></h1>
                                    <div class="synonims">
                                        <ul>
                                            <li><?=$item['Name_en']['VALUE']?></li>
                                            <li><?=$item['Name_jap']['VALUE']?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime-info">
                                <div class="next-date">
                                    <div class="next">
                                        Следующий эпизод
                                    </div>
                                    <div class="date">
                                        <?=$item['Date_next']['VALUE']?>
                                    </div>
                                </div>
                                <div class="table-state" id="top-table-state">
                                    <div class="type">Тип</div>
                                    <div class="type-inner"><?=$item['Series_type']['VALUE']?></div>
                                </div>
                                <div class="table-state">
                                    <div class="type">Эпизоды</div>
                                    <div class="type-inner"><?=$item['Episodes']['VALUE']?></div>
                                </div>
                                <div class="table-state">
                                    <div class="type">Статус</div>
                                    <div class="type-inner"><?=$item['Status']['VALUE']?></div>
                                </div>
                                <div class="table-state">
                                    <div class="type">Жанр</div>
                                    <div class="type-inner"><?foreach($item['Genres']['VALUE'] as $arItem){?>
                                        <?=$arItem;?>
                                    <?}?>
                                </div>
                                </div>
                                <div class="table-state">
                                    <div class="type">Первоисточник</div>
                                    <div class="type-inner"><?=$item['Original_source']['VALUE']?></div>
                                </div>
                                <div class="table-state">
                                    <div class="type">Сезон</div>
                                    <div class="type-inner"><?=$item['Season_number']['VALUE']?></div>
                                </div>
                                <div class="table-state">
                                    <div class="type">Выпуск</div>
                                    <div class="type-inner"><?=$item['Show_date']['VALUE']?></div>
                                </div>
                                <div class="table-state">
                                    <div class="type">Студия</div>
                                    <div class="type-inner"><?=$item['Studio']['VALUE']?></div>  
                                </div>
                                <div class="table-state">
                                    <div class="type">Возрастное ограничение</div>
                                    <div class="type-inner"><?=$item['Age_limit']['VALUE']?></div>
                                </div>
                                <div class="table-state">
                                    <div class="type">Длительность</div>
                                    <div class="type-inner"><?=$item['Duration']['VALUE']?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="description-anime">
                        <?=$item['Description']['VALUE']?>
                    </div>
                    <div class="player">
                        <div class="player-title">
                            Смотреть аниме "<?=$item['Name_ru']['VALUE']?>" онлайн
                        </div>
                        <video id="video-player" preload="metadata" controls src="<?=CFile::GetPath($item['Video']['VALUE'][0]);?>">
                            
                        </video>
                        <div class="series-selection">
                            <div>Серия:</div>
                            <?foreach($item['Video']['VALUE'] as $key => $url){?>
                                <button class="button_chose" id="<?=$key?>" data-url = <?=CFile::GetPath($url)?>><?=$key+1?></button>
                            <?}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>