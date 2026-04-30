<?php

require_once ('configs/JSON.php');

/**
 * Trait ContentTrait
 */
trait ContentTrait {

    use JsonTrait;

    /**
     * @return string
     */
    protected function content() {

        $products = $this->getJSON();

        $contentView = '
            <header>
                <div id="product-title">
                    <h1>Termékkártyák</h1>
                </div>
            </header>
            
            <!-- CONTENT -->
            <main>
            
                <!-- exportalas -->
                <a id="export"><button id="export-button" type="button">Exportálás</button></a> 
                <br />
                <div class="main">
                <div class="products-grid">';

        foreach ($products as $product) {
            if (is_array($product)) {
                foreach ($product as $prod) {
                    $stocks = $this->analyze($prod);
                    $contentView .= '
                        <div class="product-card">
                            <div class="product-image"><img class="product-image-img" src="' . $prod->Kep . '" /></div>
                            <p class="product-name">' . $prod->Nev . '</p>
                            <p class="product-price">' . $prod->Ar . '</p>
                            <p class="product-stock">' . $prod->Keszlet . '</p>
                            <p class="product-button">'. $stocks. '</p>
                        </div>
                    ';
                }
            }
        }

        $contentView .= "</div></div></main>";


        return $contentView;
    }

    /**
     * @param object $product
     * @return string
     */
    protected function analyze($product): string {

        if($product->Keszlet == 1) {
            return "<button class='product-button-stock' id='stock'>Kosárba</button>";
        } elseif ($product->Keszlet == 0) {
            return "<button class='product-button-instock' id='instock'>Értesítést kérek</button>";
        } else {
            return "";
        }
    }

}