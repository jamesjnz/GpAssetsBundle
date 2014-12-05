<?php
namespace GreenPower\AssetBundle\Twig;

class GreenPowerExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('price2', array($this, 'priceFilter')),
        );
    }

    public function priceFilter($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',')
    {
        $price = number_format($number, $decimals, $decPoint, $thousandsSep);
        $price = '$'.$price."adsfsdf";

        return $price;
    }

    public function getName()
    {
        return 'greenpower_extension';
    }
}
