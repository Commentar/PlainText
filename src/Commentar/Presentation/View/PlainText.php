<?php
/**
 * Displays the formatted post content
 *
 * PHP version 5.4
 *
 * @category   Commentar
 * @package    Presentation
 * @subpackage View
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2013 Pieter Hordijk
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    1.0.0
 */
namespace Commentar\Presentation\View;

/**
 * Displays the formatted post content
 *
 * @category   Commentar
 * @package    Presentation
 * @subpackage View
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 */
class PlainText extends View
{
    /**
     * Renders the template of the view
     *
     * @return string The rendered template
     */
    public function renderTemplate()
    {
        $formatter = $this->serviceFactory->build('\\Commentar\\Post\\PlainText');

        $this->postBody = '<p>' . $formatter->parse($this->postBody) . '</p>';

        return $this->getContent($this->theme->getFile('blocks/content.phtml'));
    }
}
