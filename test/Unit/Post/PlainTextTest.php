<?php

namespace CommentarTest\Post;

use Commentar\Post\PlainText;

class PlainTextTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testConstructCorrectInterface()
    {
        $formatter = new PlainText();

        $this->assertInstanceOf('\\Commentar\\Post\\Format', $formatter);
    }

    /**
     *
     */
    public function testConstructCorrectInstance()
    {
        $formatter = new PlainText();

        $this->assertInstanceOf('\\Commentar\\Post\\PlainText', $formatter);
    }

    /**
     * @covers Commentar\Post\PlainText::parse
     */
    public function testParseSimple()
    {
        $formatter = new PlainText();

        $this->assertSame('foo', $formatter->parse('foo'));
    }

    /**
     * @covers Commentar\Post\PlainText::parse
     */
    public function testParsePreventXss()
    {
        $formatter = new PlainText();

        $original  = '<script>alert(\'foo\');</script><script>alert("bar");</script>';
        $formatted = '&lt;script&gt;alert(&apos;foo&apos;);&lt;/script&gt;&lt;script&gt;alert(&quot;bar&quot;);&lt;/script&gt;';

        $this->assertSame($formatted, $formatter->parse($original));
    }

    /**
     * @covers Commentar\Post\PlainText::parse
     */
    public function testParseUtf8()
    {
        $formatter = new PlainText();

        $original  = 'ñȝðæTH̘Ë͖́̉ ͠P̯͍̭O̚​N̐Y̡ H̸̡̪̯ͨ͊̽̅̾̎Ȩ̬̩̾͛ͪ̈́̀́͘ ̶̧̨̱̹̭̯ͧ̾ͬC̷̙̲̝͖ͭ̏ͥͮ͟Oͮ͏̮̪̝͍M̲̖͊̒ͪͩͬ̚̚͜Ȇ̴̟̟͙̞ͩ͌͝S̨̥̫͎̭ͯ̿̔̀ͅ';
        $formatted = 'ñȝðæTH̘Ë͖́̉ ͠P̯͍̭O̚​N̐Y̡ H̸̡̪̯ͨ͊̽̅̾̎Ȩ̬̩̾͛ͪ̈́̀́͘ ̶̧̨̱̹̭̯ͧ̾ͬC̷̙̲̝͖ͭ̏ͥͮ͟Oͮ͏̮̪̝͍M̲̖͊̒ͪͩͬ̚̚͜Ȇ̴̟̟͙̞ͩ͌͝S̨̥̫͎̭ͯ̿̔̀ͅ';

        $this->assertSame($formatted, $formatter->parse($original));
    }
}
