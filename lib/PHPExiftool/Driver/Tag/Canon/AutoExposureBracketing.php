<?php

namespace PHPExiftool\Driver\Tag\Canon;

class AutoExposureBracketing extends \PHPExiftool\Driver\Tag
{

    protected $Id = 16;

    protected $Name = 'AutoExposureBracketing';

    protected $FullName = 'Canon::ShotInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = true;

    protected $Description = 'Auto Exposure Bracketing';

    protected $Values = array(
        '-1' => array(
            'Id' => '-1',
            'Label' => 'On',
        ),
        0 => array(
            'Id' => 0,
            'Label' => 'Off',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'On (shot 1)',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'On (shot 2)',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'On (shot 3)',
        ),
    );

}