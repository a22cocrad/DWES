<?php

$listaContinentes = [];

$client = new SoapClient("http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso?WSDL");

$listaContinentes = $client->ListOfContinentsByName();

foreach ($listaContinentes->ListOfContinentsByNameResult->tContinent as $continente) {
    echo $continente->sName . "<br>";
}
