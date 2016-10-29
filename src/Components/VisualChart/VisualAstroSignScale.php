<?php
/**
 * Class displaying the scales with 12 divisions and sign captions
 *
 * @copyright Copyright &copy; 2016 astrolog-online.net
 * @author Zemlyansky Alexander <meraponimaniya@mail.ru>
 * @package VisualChart
 * @since 0.1
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace vulkan\Components\VisualChart;

use vulkan\Core\SignScale;
use vulkan\Core\C;

class VisualAstroSignScale extends SignScale
{

    use SectionScaleVisualEngine;
    use CommonVisualParamsTrait;

    const DEFAULT_CSS_CLASS = 'vul-scale';

    //protected $_symbols = '♈♉♊♋♌♍♎♏♐♑♒♓';

    /* @var $_chart \vulkan\Visual\VisualChart */
    public $chart;

    function __construct() {
        parent::__construct();
    }

    public function drawCaptions() {
        $this->chart->canvas->beginGroup('vul-scale-captions');
        foreach (C::$signInfos as $idx => $signInfo) {
            $this->drawCaption($idx++, $signInfo->caption);
        }
        $this->chart->canvas->endGroup();
    }

    public function draw() {
        $this->drawAll();
    }

}