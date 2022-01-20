<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
// echo '<pre>';
// print_r ($arResult['ITEMS']);
// echo '<pre>';
?>



<div class="anime-list">
	<?php
		foreach ($arResult['ITEMS'] as $key => $arItem) {
				if ($key % 4 == 0 && $key != 0) {
				?>
				</div>
				<div class="anime-list">
				<?php
			} 
			?>
			<a href=" <?= $arItem["DETAIL_PAGE_URL"].$arItem['PROPERTIES']['connection']['VALUE']?> " class="anime-in-list">
				<img src="<?= CFile::GetPath($arItem['PROPERTIES']['Image']['VALUE']) ?> " alt="">
				<div class="about-anime">
					<div class="name-title">
						<?=$arItem['PROPERTIES']['Name']['VALUE'];?>	
					</div>
					<div class="description">
						<?=$arItem['PROPERTIES']['Year_issue']['VALUE'] . " - " . $arItem['PROPERTIES']['Series']['VALUE']?>
					</div>
				</div>
			</a>
	<?php } ?> 
</div>
