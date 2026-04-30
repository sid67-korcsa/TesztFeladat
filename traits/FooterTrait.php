<?php

/**
 * Trait FooterTrait
 */
trait FooterTrait {

    protected function footer() {
        $htmlFooter = '
            </body>    
            </html>
        ';

        return $htmlFooter;
    }

}