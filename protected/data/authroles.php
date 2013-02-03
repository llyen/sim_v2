<?php

$auth = Yii::app()->authManager;

$auth->createOperation('createCollectionPoint', 'tworzenie punktu poboru');
$auth->createOperation('readCollectionPoint', 'odczytywanie punktu poboru');
$auth->createOperation('updateCollectionPoint', 'aktualizowanie punktu poboru');
$auth->createOperation('deleteCollectionPoint', 'usuwanie punktu poboru');

$auth->createOperation('createCounter', 'tworzenie licznika');
$auth->createOperation('readCounter', 'odczytywanie licznika');
$auth->createOperation('updateCounter', 'aktualizowanie licznika');
$auth->createOperation('deleteCounter', 'usuwanie licznika');

$auth->createOperation('createCounterReading', 'tworzenie odczytu licznika');
$auth->createOperation('readCounterReading', 'odczytywanie odczytu licznika');
$auth->createOperation('updateCounterReading', 'aktualizowanie odczytu licznika');
$auth->createOperation('deleteCounterReading', 'usuwanie odczytu licznika');

$auth->createOperation('createInvoice', 'tworzenie faktury');
$auth->createOperation('readInvoice', 'odczytywanie faktury');
$auth->createOperation('updateInvoice', 'aktualizowanie faktury');
$auth->createOperation('deleteInvoice', 'usuwanie faktury');

$auth->createOperation('createInvoiceData', 'tworzenie pozycji na fakturze');
$auth->createOperation('readInvoiceData', 'odczytywanie pozycji na fakturze');
$auth->createOperation('updateInvoiceData', 'aktualizowanie pozycji na fakturze');
$auth->createOperation('deleteInvoiceData', 'usuwanie pozycji z faktury');

$auth->createOperation('createMedium', 'tworzenie medium');
$auth->createOperation('readMedium', 'odczytywanie medium');
$auth->createOperation('updateMedium', 'aktualizowanie medium');
$auth->createOperation('deleteMedium', 'usuwanie medium');

$auth->createOperation('createObject', 'tworzenie obiektu');
$auth->createOperation('readObject', 'odczytywanie obiektu');
$auth->createOperation('updateObject', 'aktualizowanie obiektu');
$auth->createOperation('deleteObject', 'usuwanie obiektu');

$auth->createOperation('createOtherConnection', 'tworzenie innego przyłącza');
$auth->createOperation('readOtherConnection', 'odczytywanie innego przyłącza');
$auth->createOperation('updateOtherConnection', 'aktualizowanie innego przyłącza');
$auth->createOperation('deleteOtherConnection', 'usuwanie innego przyłącza');

$auth->createOperation('createSupplier', 'tworzenie dostawcy');
$auth->createOperation('readSupplier', 'odczytywanie dostawcy');
$auth->createOperation('updateSupplier', 'aktualizowanie dostawcy');
$auth->createOperation('deleteSupplier', 'usuwanie dostawcy');

$auth->createOperation('createTariff', 'tworzenie taryfy');
$auth->createOperation('readTariff', 'odczytywanie taryfy');
$auth->createOperation('updateTariff', 'aktualizowanie taryfy');
$auth->createOperation('deleteTariff', 'usuwanie taryfy');

$auth->createOperation('createTariffComponent', 'tworzenie składnika taryfy');
$auth->createOperation('readTariffComponent', 'odczytywanie składnika taryfy');
$auth->createOperation('updateTariffComponent', 'aktualizowanie składnika taryfy');
$auth->createOperation('deleteTariffComponent', 'usuwanie składnika taryfy');

$auth->createOperation('createTariffComponentType', 'tworzenie typu składnika taryfy');
$auth->createOperation('readTariffComponentType', 'odczytywanie typu składnika taryfy');
$auth->createOperation('updateTariffComponentType', 'aktualizowanie typu składnika taryfy');
$auth->createOperation('deleteTariffComponentType', 'usuwanie typu składnika taryfy');

$auth->createOperation('createTariffType', 'tworzenie typu taryfy');
$auth->createOperation('readTariffType', 'odczytywanie typu taryfy');
$auth->createOperation('updateTariffType', 'aktualizowanie typu taryfy');
$auth->createOperation('deleteTariffType', 'usuwanie typu taryfy');

$auth->createOperation('createUnit', 'tworzenie jednostki');
$auth->createOperation('readUnit', 'odczytywanie jednostki');
$auth->createOperation('updateUnit', 'aktualizowanie jednostki');
$auth->createOperation('deleteUnit', 'usuwanie jednostki');

$auth->createOperation('createUser', 'tworzenie użytkownika');
$auth->createOperation('readUser', 'odczytywanie użytkownika');
$auth->createOperation('updateUser', 'aktualizowanie użytkownika');
$auth->createOperation('deleteUser', 'usuwanie użytkownika');

$role = $auth->createRole('viewer');
$role->addChild('readCollectionPoint');
$role->addChild('readCounter');
$role->addChild('readCounterReading');
$role->addChild('readInvoice');
$role->addChild('readInvoiceData');
$role->addChild('readMedium');
$role->addChild('readObject');
$role->addChild('readOtherConnection');
$role->addChild('readSupplier');
$role->addChild('readTariff');
$role->addChild('readTariffComponent');
$role->addChild('readTariffComponentType');
$role->addChild('readTariffType');
$role->addChild('readUnit');

$role = $auth->createRole('unit_admin');
$role->addChild('viewer');
$role->addChild('createCollectionPoint');
$role->addChild('createCounter');
$role->addChild('createCounterReading');
$role->addChild('createInvoice');
$role->addChild('createInvoiceData');
$role->addChild('updateCollectionPoint');
$role->addChild('updateCounter');
$role->addChild('updateCounterReading');
$role->addChild('updateInvoice');
$role->addChild('updateInvoiceData');
$role->addChild('deleteCounterReading');
$role->addChild('deleteInvoice');
$role->addChild('deleteInvoiceData');
//$bizRule='return Yii::app()->user->name==$params["counter"]->create_user;';
//$task=$auth->createTask('updateOwnCounter','aktualizowanie własnego licznika',$bizRule);
//$task->addChild('updateCounter');

$role = $auth->createRole('admin');
$role->addChild('viewer');
$role->addChild('unit_admin');
$role->addChild('createMedium');
$role->addChild('createObject');
$role->addChild('createOtherConnection');
$role->addChild('createSupplier');
$role->addChild('createTariff');
$role->addChild('createTariffComponent');
$role->addChild('createTariffComponentType');
$role->addChild('createTariffType');
$role->addChild('createUnit');
$role->addChild('createUser');
$role->addChild('updateMedium');
$role->addChild('updateObject');
$role->addChild('updateOtherConnection');
$role->addChild('updateSupplier');
$role->addChild('updateTariff');
$role->addChild('updateTariffComponent');
$role->addChild('updateTariffComponentType');
$role->addChild('updateTariffType');
$role->addChild('updateUnit');
$role->addChild('updateUser');
$role->addChild('deleteCollectionPoint');
$role->addChild('deleteCounter');
//$role->addChild('deleteCounterReading');
//$role->addChild('deleteInvoice');
//$role->addChild('deleteInvoiceData');
$role->addChild('deleteMedium');
$role->addChild('deleteObject');
$role->addChild('deleteOtherConnection');
$role->addChild('deleteSupplier');
$role->addChild('deleteTariff');
$role->addChild('deleteTariffComponent');
$role->addChild('deleteTariffComponentType');
$role->addChild('deleteTariffType');
$role->addChild('deleteUnit');
$role->addChild('deleteUser');
