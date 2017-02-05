<?php

namespace Website\Controllers;

use Website\Controller as WController;

/**
 * Class IndexController
 *
 * @package Website\Controllers
 */
class IndexController extends WController
{
    public function indexAction($language)
    {
        /**
         * Add more needed assets
         */
        $this
            ->assets
            ->collection('header_css')
            ->addCss($this->utils->getCdnUrl() . 'css/flags.css', $this->utils->isCdnLocal())
            ->addCss($this->utils->getCdnUrl() . 'css/highlight.js.css', $this->utils->isCdnLocal())
            ->addCss($this->utils->getCdnUrl() . 'css/phalcon.min.css', $this->utils->isCdnLocal())
            ->addCss($this->utils->getCdnUrl() . 'css/style.css', $this->utils->isCdnLocal());

        $this->tag->setTitle("High Performance PHP Framework");

        return $this->returnResponse($language, 'home', 'index/index');
    }
}
