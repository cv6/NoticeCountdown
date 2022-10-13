<?php

namespace cv6\NoticeCountdown;

use XF\Mvc\Entity\Entity;
use XF\Mvc\Entity\Structure;
use cv6\DiceRoller\SubContainer\Dice;
use FG\ASN1\Universal\Integer;

class Listener
{
    public static function noticeEntityStructure(\XF\Mvc\Entity\Manager $em, \XF\Mvc\Entity\Structure &$structure)
    {
        $structure->columns['cv6_countdown'] = ['type' => Entity::STR, 'default' => NULL];
    }

}