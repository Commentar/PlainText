PlainText
=

[![Build Status](https://travis-ci.org/Commentar/PlainText.png?branch=master)](https://travis-ci.org/Commentar/PlainText) [![Scrutinizer Quality Score](https://scrutinizer-ci.com/g/Commentar/PlainText/badges/quality-score.png?s=6967b8d784480858ab1d43c843c0b6f93b458640)](https://scrutinizer-ci.com/g/Commentar/PlainText/) [![Code Coverage](https://scrutinizer-ci.com/g/Commentar/PlainText/badges/coverage.png?s=ce21df878423aca4a002985a3320cb30f74d4678)](https://scrutinizer-ci.com/g/Commentar/PlainText/) [![Latest Stable Version](https://poser.pugx.org/Commentar/plain-text/v/stable.png)](https://packagist.org/packages/Commentar/plain-text) [![Total Downloads](https://poser.pugx.org/Commentar/plain-text/downloads.png)](https://packagist.org/packages/Commentar/plain-text)

Plain text post formatter for the [Commentar][commentar] project.

Installation
-

Add the formatter to the project's `composer.json` file:

    "require": {
        "commentar/plain-text": "0.0.*",
    }

Use it in your templates:

    <?php echo $this->renderView('PlainText', ['content' => $comment['content']]); ?>

[commentar]:https://github.com/Commentar/Commentar
