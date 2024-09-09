<?php
namespace app\blocks\VideoWidget;

use app\blocks\Block;


class VideoWidget extends Block
{
    public $url = null;
    public $serviceId = null;

    public function run()
    {
        return $this->render([
            'url' => $this->url,
            'serviceId' => $this->serviceId,
        ]);
    }
}