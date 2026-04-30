<?php

/**
 * Trait HeaderTrait
 */
trait HeaderTrait
{

    protected $title = "Teszt feladat";

    protected function header()
    {
        $htmlHeader = '
            <!doctype html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>' . $this->title . '</title>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
                <script src="includes/js/test.js"></script>
                <!-- STYLES -->
            <style>
            
                @keyframes divAnimation {
                    from {background-color: #f0bb46;}
                    to {background-color: #faf4e8;}
                }
                html, body {
                    color: rgba(33, 37, 41, 1);
                    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
                    font-size: 16px;
                    margin: 0;
                    padding: 0;
                    -webkit-font-smoothing: antialiased;
                    -moz-osx-font-smoothing: grayscale;
                    text-rendering: optimizeLegibility;
                }
                header {
                    background-color: rgba(247, 248, 249, 1);
                    padding: 0;
                }
                header h1 {
                    font-size: 2.5rem;
                    font-weight: 500;
                }
                header #product-title h1 {
                    font-size: 2.5rem;
                    font-weight: 500;
                    text-align: center;
                }
                .main {
                    padding: 20px;
                }
                .products-grid {
                    display: grid;
                    grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
                    gap: 16px;
                    margin-top: 20px;
                }
                .product-card {
                    background: #ffffff;
                    border-radius: 8px;
                    padding: 16px;
                    box-shadow: 0 8px 8px rgba(0,0,0,0.1);
                    border: 1px solid #e5e5e5;
                }
                .product-image {
                    margin: auto;
                    display: table;
                    align-content: center;
                    animation-name: divAnimation;
                    animation-duration: 4s;
                }
                .product-image-img {
                    width: 100px;
                    height: 100px;
                    padding: 1px;
                    align-content: center;
                }
                .product-name {
                    font-style: normal;
                    font-weight: bold;
                }
                .product-price {
                    font-style: italic;
                }
                .product-stock {
                    font-style: normal;
                    font-size: large;
                }
                .product-button {
                    text-align: right;
                }
                .product-button-stock {
                    background: #f7efed;
                }
                .product-button-instock {
                    color: white;
                    background: dimgray;
                }
                section {
                    margin: 0 auto;
                    max-width: 1100px;
                    padding: 2.5rem 1.75rem 3.5rem 1.75rem;
                }
                #export {
                    float: right;
                    margin-right: 20px;
                }
                footer {
                    background-color: rgba(221, 72, 20, .8);
                    text-align: center;
                }
            </style>
    
            </head>
            <body>    
        ';

        return $htmlHeader;
    }

}
