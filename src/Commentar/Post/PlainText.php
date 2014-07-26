<?php
/**
 * Plain text post formatter
 *
 * PHP version 5.4
 *
 * @category   Commentar
 * @package    Post
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 * @copyright  Copyright (c) 2014 Pieter Hordijk
 * @license    http://www.opensource.org/licenses/mit-license.html  MIT License
 * @version    0.0.2
 */
namespace Commentar\Post;

/**
 * Plain text post formatter
 *
 * @category   Commentar
 * @package    Post
 * @author     Pieter Hordijk <info@pieterhordijk.com>
 */
class PlainText implements Format
{
    /**
     * Parses the content of the post and returns formatted and safe content
     *
     * @param string $content The content of the post
     *
     * @return string The parsed content
     */
    public function parse($content)
    {
        return nl2br(htmlspecialchars($content, ENT_QUOTES | ENT_HTML5 | ENT_SUBSTITUTE, 'UTF-8'), false);
    }
}
