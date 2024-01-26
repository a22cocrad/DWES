<?php

$lista_paises = [];

$client = new SoapClient("http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso");

$lista_paises = $client->ListOfCountryNamesByName();



foreach ($lista_paises->ListOfCountryNamesByNameResult->tCountryCodeAndName as $pais) {
    echo $pais->sName . "<br>";
}