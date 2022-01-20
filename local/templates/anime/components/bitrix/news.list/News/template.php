<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
// echo '<pre>';
// print_r($arResult['ITEMS']);
// echo '<pre>';
?>

<li class="first-li">
<?
foreach($arResult['ITEMS'] as $arItem){?>
	<a href="#">
		<div class="update-date"><?= $arItem['PROPERTIES']['Date']['VALUE'];?></div>
			<div class="update-list-block">
				<div class="update-info"><b><?= $arItem['PROPERTIES']['Name']['VALUE'];?></b><?=$arItem['PROPERTIES']['Description']['VALUE'];?>
			</div>
		</div>
	</a>
<?}?>
</li>