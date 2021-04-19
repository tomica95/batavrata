<?php

    require_once "models/products/functions.php";

    $id = $_GET['id'];

    $product = findProductById($id);

?>
<div class="single-proizvod">
        <div class="left">
            <a href="<?=$product->big?>" ><img src="<?=$product->big?>"/></a>
        </div>
        <div class="right">
            <h1></h1>
            <ul class="single-proizvod-spec">
                <li>
                    <span>Naziv: </span> <?=$product->productName?>
                </li>
                <li>
                    <span>Boja: </span> <?=$product->color?>
                </li>
                <li>
                    <span>Debljina plota: </span> <?=$product->width?>
                </li>
                <li>
                    <span>Dimenzije: </span> <?=$product->dimension?>
                </li>
                <li>
                    <span>Broj brava: </span> <?=$product->number_locks?>
                </li>
                <li>
                    <span>Rok za dostavu: </span> <?=$product->purchasetime?>
                </li>
                <li>
                    <span>Opis: </span> <?=$product->description?>
                </li>
                <li>
                    <span>Cena: </span> <?=$product->price?>
                </li>
            </ul>
        </div>
</div>
