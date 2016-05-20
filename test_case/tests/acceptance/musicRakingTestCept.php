<?php
  date_default_timezone_set('America/New_York');

  $I = new AcceptanceTester($scenario);
  $I->wantTo('ensure that frontpage works');
  $I->amOnPage('/');
# $I->seeCurrentUrlEquals('/login');

function test_login($I)
     {
     $I->amOnPage('/index.html');  
     //test enter song name 'Dust'
     $I->fillField('Enter song name or singer name','Dust');
	   $I->wait('5');
     //click search button
     $I->click('SEARCH');
     $I->wait('2');
     //click play button
     $I->click('//*[@id="InvoiceTable"]/tbody/tr/td[4]/a');
     $I->wait('5');
     //enter 1 in song name box
     $I->fillField('Enter song name or singer name','1');
     $I->wait('2'); 
     //click search button 
     $I->click('SEARCH');
     $I->wait('5');  
     //enter song name = s
     $I->fillField('Enter song name or singer name','s');
     $I->wait('2');  
     //click search button
     $I->click('SEARCH');
     $I->wait('5');
      
      $I->fillField('Enter song name or singer name','');
     $I->wait('2');  

     $I->click('SEARCH');
     $I->wait('5');      


}
// in test:
test_login($I);