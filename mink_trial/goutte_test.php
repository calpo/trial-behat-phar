<?php
require_once '/Users/calpo/projects/php/behat_trial/with_phar/mink.phar';

$driver = new \Behat\Mink\Driver\GoutteDriver();

// init session:
$session = new \Behat\Mink\Session($driver);

// start session:
$session->start();


// open some page in browser:
$session->visit('http://oshiete.goo.ne.jp/');

// get the current page URL:
echo $session->getCurrentUrl();
echo "\n";

// get the response status code:
echo $session->getStatusCode();
echo "\n";

// get page content:
//echo $session->getPage()->getContent();

// open another page:
$session->visit('http://oshiete.goo.ne.jp/today/');

// use history controlls:
$session->reload();
$session->back();
$session->forward();

/*
// evaluate JS expression:
echo $session->evaluateScript(
    "(function(){ return 'something from browser'; })()"
);

// wait for n milliseconds or
// till JS expression becomes true:
$session->wait(5000,
    "$('.suggestions-results').children().length > 0"
);
*/


/*
 * Local variables:
 * tab-width: 4
 * c-basic-offset: 4
 * End:
 * vim600: noet sw=4 ts=4 sts=4 fdm=marker
 * vim<600: noet sw=4 ts=4 sts=4
 */

