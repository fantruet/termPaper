<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

if (!\Bitrix\Main\Loader::includeModule('landing'))
{
	return;
}

\Bitrix\Landing\Connector\Mobile::prologMobileHit();

if (\Bitrix\Main\Loader::includeModule('iblock')) {
    
    $elementIterator = \Bitrix\Iblock\ElementTable::getList([
        'select' => [
            '*',
        ],
        'filter' => [
            '=IBLOCK_ID' => 1,
        ]
    ]);
}
?><!DOCTYPE html>
<html lang="en">

<head>
    <?php $APPLICATION->showHead();?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Аниме</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/normalize.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/fonts.css">
    <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/style.css">
</head>

<body>
<?$APPLICATION->ShowPanel();?>
    <header class="header">
        <div class="header_top">
            <div class="container">
                <div class="header_menu">
                    <a class="logo" href="/">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/logo.png" alt="">
                    </a>
                    <a class="nav-link" href="/katalog.php">Аниме</a>
                        <a class="nav-link" href="/anime.php?ID=<?= rand(1,count($elementIterator->fetchAll())) ?>">Случайное аниме</a>
                    <button class="button_search" id="search"></button>
                    <input type="text" class="inputText">
                </div>
            </div>
        </div>
        <div class="header_bot">
            <div class="container">
                <nav class="menu">
                    <ul>
                        <li><a href="/ongoing.php">Онгоинги</a></li>
                        <li><a href="/anime-2022-god.php">2022 год</a></li>
                        <li><a href="/anime-2021-god.php">2021 год</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>