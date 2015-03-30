<?php
namespace Caravane\Bundle\OrganicBundle\Managers;


class ExportManager
{
   


    public function num2alpha($n)
    {
        for($r = ""; $n >= 0; $n = intval($n / 26) - 1)
            $r = chr($n%26 + 0x41) . $r;
        return $r;
    }
}