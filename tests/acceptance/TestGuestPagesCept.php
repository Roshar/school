<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Open the home/join/login pages');
$i->amOnPage('/');
$i->see('Welcome','h1');
