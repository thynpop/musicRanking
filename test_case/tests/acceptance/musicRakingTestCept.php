<?php
  date_default_timezone_set('America/New_York');

  $I = new AcceptanceTester($scenario);
  $I->wantTo('ensure that frontpage works');
  $I->amOnPage('/');
# $I->seeCurrentUrlEquals('/login');

function test_login($I)
{
$I->amOnPage('/index.html');
 
$I->fillField('Enter song name or singer name','Dust');

	   $I->wait('2');
     $I->click('SEARCH');
     $I->wait('2');
     #$I->seeCurrentUrlEquals('/searchn.php');
     $I->wait('2');
     $I->click('//*[@id="InvoiceTable"]/tbody/tr/td[4]/a');
     $I->wait('10');
   #  $I->seeCurrentUrlEquals('/mv.html');


}
// in test:
test_login($I);