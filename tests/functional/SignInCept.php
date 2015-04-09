<?php 
$I = new FunctionalTester($scenario);

$I->am('an Artees member');
$I->wantTo('login to my Artees account');

$I->signIn();


$I->see('Welcome Back!');
$I->seeInCurrentUrl('/statuses');

