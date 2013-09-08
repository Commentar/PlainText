<?php

namespace Commentar\Presentation\View;

use Commentar\Presentation\View\PlainText;

class PlainTextTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @covers Commentar\Presentation\View\PlainText::__construct
     */
    public function testConstructCorrectAbstractInstance()
    {
        $view = new PlainText(
            new \Commentar\Presentation\ThemeLoader(),
            $this->getMock('\\Commentar\\ServiceBuilder\\Builder')
        );

        $this->assertInstanceOf('\\Commentar\\Presentation\\View\\View', $view);
    }

    /**
     * @covers Commentar\Presentation\View\PlainText::__construct
     */
    public function testConstructCorrectInstance()
    {
        $view = new PlainText(
            new \Commentar\Presentation\ThemeLoader(),
            $this->getMock('\\Commentar\\ServiceBuilder\\Builder')
        );

        $this->assertInstanceOf('\\Commentar\\Presentation\\View\\PlainText', $view);
    }

    /**
     * @covers Commentar\Presentation\View\PlainText::__construct
     * @covers Commentar\Presentation\View\PlainText::renderTemplate
     */
    public function testRenderTemplate()
    {
        $service = $this->getMock('\\Commentar\\Post\\PlainText');
        $service->expects($this->any())
            ->method('parse')
            ->will($this->returnValue('foo'));

        $factory = $this->getMock('\\Commentar\\ServiceBuilder\\Builder');
        $factory->expects($this->any())
            ->method('build')
            ->will($this->returnValue($service));

        $view = new PlainText(
            new \Commentar\Presentation\ThemeLoader(),
            $factory,
            ['postBody' => 'foo']
        );

        $view->renderTemplate();

        $this->assertSame('<p>foo</p>', $view->postBody);
    }
}
