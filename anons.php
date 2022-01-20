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
    // echo '<pre>';
    // print_r($a->getProperties());
    // echo '</pre>';
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
                        </div>
                        <div class="media-body">
                            <div class="anime-title">
                                <div>
                                    <h1><?=$item['Name']['VALUE']?></h1>
                                    <div class="synonims">
                                        <ul>
                                            <li><?=$item['Name_en']['VALUE']?></li>
                                            <li><?=$item['Name_jap']['VALUE']?></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="anime-info">
                                <div class="table-state" id="top-table-state">
                                    <div class="type">Тип</div>
                                    <div class="type-inner"><?=$item['Log_type']['VALUE']?></div>
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
                                    <div class="type-inner"><?=$item['original_source']['VALUE']?></div>
                                </div>
                                <div class="table-state">
                                    <div class="type">Сезон</div>
                                    <div class="type-inner"><?=$item['Season']['VALUE']?></div>
                                </div>
                                <div class="table-state">
                                    <div class="type">Студия</div>
                                    <div class="type-inner"><?=$item['Studio']['VALUE']?></div>  
                                </div>
                                <div class="table-state">
                                    <div class="type">Возрастное ограничение</div>
                                    <div class="type-inner"><?=$item['Limitation']['VALUE']?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="description-anime">
                        <?=$item['Plot']['VALUE']?>
                    </div>
                </div>
            </div>
        </div>
    </div>





<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>