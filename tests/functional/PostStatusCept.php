<?php 
$I = new FunctionalTester($scenario);

$I->am('an Artees Member');
$I->wantTo('post a status');

$I->signIn();

$I->amOnPage('statuses');

$I->postAStatus('Feeling Creative');

$I->seeCurrentUrlEquals('/statuses');
$I->see('Feeling Creative');


