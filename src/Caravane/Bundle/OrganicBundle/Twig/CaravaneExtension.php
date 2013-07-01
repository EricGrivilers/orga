<?php

namespace Caravane\Bundle\OrganicBundle\Twig;

class CaravaneExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'menu' => new \Twig_Filter_Method($this, 'menuFilter'),
        );
    }

    public function menuFilter($path,$slug)
    {
        if(preg_match("/".$slug."/",$path)) {
          return true;
        }
        return false;
    }

    public function getName()
    {
        return 'caravane_extension';
    }
}
