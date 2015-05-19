<?php

namespace Caravane\Bundle\OrganicBundle\Twig;

class CaravaneExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'menu' => new \Twig_Filter_Method($this, 'menuFilter'),
            new \Twig_SimpleFilter('classFilter', array($this, 'getClassFilter')),
        );
    }

    public function menuFilter($path,$slug)
    {
        if(preg_match("/".$slug."/",$path)) {
          return true;
        }
        return false;
    }

    public function getClassFilter($object)
    {

        return (new \ReflectionClass($object))->getShortName();
    }

    public function getName()
    {
        return 'caravane_extension';
    }
}
