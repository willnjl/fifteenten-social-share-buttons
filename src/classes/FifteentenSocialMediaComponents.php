<?php

class FifteentenSocialMediaComponents
{
    public function __construct()
    {
        add_shortcode('FifteentenSocialLinks', 'Fifteenten_CreateSocialShortcode');
    }
}