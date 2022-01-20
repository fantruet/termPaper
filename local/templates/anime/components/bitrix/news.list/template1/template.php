<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="slider_inner">
<?php 
// echo '<pre>';
// print_r($arResult['ITEMS']);
// echo '<pre>';

foreach($arResult['ITEMS'] as $arItem){?>
<div class="slider_item">
<a href="<?= $arItem["DETAIL_PAGE_URL"]?>">
		<div class="anime"><?=$arItem['PROPERTIES']['Name_ru']['VALUE'];?></div>
		<img  height="260" src="<?=CFile::GetPath($arItem['PROPERTIES']['Image']['VALUE']);?>" alt="">
	</a>
</div>
<?}?>	

</div>

