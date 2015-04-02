<?php 
$I = new FunctionalTester($scenario);
$I->am('a guest');
$I->wantTo('Sign Up for Artees!');

$I->amOnPage('/');
$I->click('Sign Up for Free');
$I->seeCurrentUrlEquals('/register');

$I->fillField('Username:', 'JohnDoe');
$I->fillField('Email:', 'john@example.com');
$I->fillField('Password:', 'demo');
$I->fillField('Password Confirmation:', 'demo');

$I->click('Sign Up');

$I->seeCurrentUrlEquals('');
$I->see('Welcom to Artees!');
