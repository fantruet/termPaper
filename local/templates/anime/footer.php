<?php
use \Bitrix\Landing\Manager;
use \Bitrix\Landing\Assets;
use \Bitrix\Main\Loader;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}?>

<footer>
    <div class="social">
        <a href="https://vk.com" title="Группа Вк" target="_blank">
            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/vk.png" alt="Вк" title="Вк">
        </a>
        <a href="https://facebook.com" title="Группа facebook" target="_blank">
            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/facebook.png" alt="facebook" title="facebook">
        </a>
        <a href="https://twitter.com" title="Группа twitter" target="_blank">
            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/twitter.png" alt="twitter" title="twitter">
        </a>
    </div>

    <div class="rights">
        Все права защищены &copy;  2022
    </div>
</footer>
	<script src="<?=SITE_TEMPLATE_PATH?>/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/slick.min.js"></script>
    <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/main.js"></script>  
</html>