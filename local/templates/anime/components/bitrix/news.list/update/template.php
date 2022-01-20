<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
// echo '<pre>';
// print_r($arResult['ITEMS']);
// echo '<pre>';
?>

<li class="first-li">
<?php
foreach($arResult['ITEMS'] as $arItem){?>
	<a href="<?= $arItem["DETAIL_PAGE_URL"].$arItem['PROPERTIES']['Anime_connection']['VALUE']?>">
		<span class="update-date">
			<?= $arItem['PROPERTIES']['Date']['VALUE'];?>
		</span>
		<img src="<?=CFile::GetPath($arItem['PROPERTIES']['Image']['VALUE']);?>" class="update-img" alt="">
		<div class="update-list-block" id="parent">
			<div class="update-info" id="child"><b><?=$arItem['PROPERTIES']['Name']['VALUE'];?></b><?=$arItem['PROPERTIES']['Description']['VALUE'];?></div>
		</div>
	</a>
<?}?>
</li>
