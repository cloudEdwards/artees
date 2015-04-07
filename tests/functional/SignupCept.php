

<?php 


$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('Sign Up for Artees!');

$I->amOnPage('/');
$I->click('Sign Up for Free');
$I->seeCurrentUrlEquals('/register');

$I->fillField('user', 'JohnDoe');
$I->fillField('mail', 'john@example.com');
$I->fillField('pswrd', 'demo');
$I->fillField('confirmPassword', 'demo');

$I->click('Sign Up');



$I->seeCurrentUrlEquals('');
$I->see('Welcome to Artees!');

$I->assertTrue(Auth::check());