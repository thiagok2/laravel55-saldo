<?php

$this->group(['middleware' => ['auth'],'namespace' => 'Admin','prefix' => 'admin'], function(){

   
    $this->post('transfer-store', 'BalanceController@transferStore')->name('transfer.store');
    $this->post('confirm-transfer', 'BalanceController@confirmTransfer')->name('confirm.transfer');
    $this->post('deposit', 'BalanceController@depositStore')->name('deposit.store');
    $this->post('withdrawn', 'BalanceController@withdrawnStore')->name('withdrawn.store');

    $this->any('historic-search', 'BalanceController@searchHistoric')->name('historic.search');
    

    $this->get('historic', 'BalanceController@historic')->name('admin.historic');
    $this->get('transfer', 'BalanceController@transfer')->name('balance.transfer');
    $this->get('deposit', 'BalanceController@deposit')->name('balance.deposit');
    $this->get('withdrawn', 'BalanceController@withdrawn')->name('balance.withdrawn');

    $this->get('historic', 'BalanceController@historic')->name('admin.historic');
    $this->get('balance','BalanceController@index')->name('admin.balance');

    $this->get('/','AdminController@index')->name('admin.home');
});

//$this->get('admin','Admin\AdminController@index')->name('admin.home');

$this->get('/', 'Site\SiteController@index' )->name('home');



Auth::routes();
