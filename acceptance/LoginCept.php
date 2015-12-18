<?php
// php codecept.phar run acceptance LoginCept.php --steps --colors --html
require_once '_locators/login.php';
include '_bootstrap.php';

$I = new AcceptanceTester($scenario);
$I->wantTo('login cash4tags negative');
$I->amOnPage('/');
$I->see('Home');
$I->verifyPageTitle(login::$pageTitle);
$I->click(login::$LogInB);
$I->fillField(login::$emailF, $email);
$I->fillField(login::$passwordF, $password);
$I->click(login::$SignInB);
$I->wait(2);
$I->see(login::$incorrectLogIn,'.error');
