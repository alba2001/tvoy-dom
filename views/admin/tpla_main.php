<?php
defined('SYSPATH') or die('No direct script access.');
?>
<style type="text/css">
    div.main{
        width: 1024px;
        background-color: gainsboro;
    }
    div.sidebar{
        float: left;
        width: 30%;
        padding: 5px;
    }
    .sidebar ul{
        list-style-type: none;
        list-style-image:url('../../media/img/Folder-Closed.png');
    }
    div.header{
        width: 100%;
        height: 25px;
        border-radius: 5px;
        border: 1px solid black;
    }
    .header h3{margin: 0 5px;padding: 0}
</style>
<div class="main">
    <div class="header">
        <h3>Твой дом</h3>
    </div>
    <div class="sidebar">
        <ul>
            <li>Контакты</li>
            <li>Отзывы</li>
            <li>Недвижимость</li>
        </ul>
    </div>
</div>
