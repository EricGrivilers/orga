<?php 

namespace Caravane\UiBundle\Twig;

class AccessTwigExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            'access' => new \Twig_Filter_Method($this, 'accessFilter'),
        );
    }

    public function getName()
    {
        return 'access_twig_extension';
    }

    // Description:
    // Dynamically retrieve the $key of the $obj, in the same order as
    // $obj.$key would have done.
    // Reference:
    // http://twig.sensiolabs.org/doc/templates.html
    public function accessFilter($obj, $key)
    {
        if (is_array($obj)) {
            if (array_key_exists($key, $obj)) {
                return $obj[$key];
            }
        } elseif (is_object($obj)) {
            $reflect = new \ReflectionClass($obj);
            if (property_exists($obj, $key) && $reflect->getProperty($key)->isPublic()) {
                return $obj->$key;
            }
            if (method_exists($obj, $key) && $reflect->getMethod($key)->isPublic()) {
                return $obj->$key();
            }
            $newKey = 'get' . ucfirst($key);
            if (method_exists($obj, $newKey) && $reflect->getMethod($newKey)->isPublic()) {
                return $obj->$newKey();
            }
            $newKey = 'is' . ucfirst($key);
            if (method_exists($obj, $newKey) && $reflect->getMethod($newKey)->isPublic()) {
                return $obj->$newKey();
            }
        }
        return null;
    }
}

?>