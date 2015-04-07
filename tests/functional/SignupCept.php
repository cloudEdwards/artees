

<?php 


$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('Sign Up for Artees!');

$I->amOnPage('/');
$I->click('Sign Up for Free');
$I->seeCurrentUrlEquals('/register');

$I->fillField('username', 'JohnDoe');
$I->fillField('email', 'john@example.com');
$I->fillField('password', 'demo');
$I->fillField('password_confirmation', 'demo');

$I->click('Sign Up');


$I->seeCurrentUrlEquals('');
$I->see('Welcome to Artees!');
