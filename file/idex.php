<?php

include_once 'Address.php'; // INCLUSÂO DO ARQUIVO Address.php(classe)


if(!empty($_POST['cep'])){      //VERIFICA SE NÃO ESTA VAZIO
	
	$cep = $_POST['cep'];
	$addressCEP = new Address(); // CRIA OBJETO
	//$address = $addressCEP->get_address($cep);
	$addressCEP = $addressCEP->get_address($cep);
	//$address = (get_address($cep)); // ESCRITA DE VARIÁVEL ERRADA $cep EM VEZ DE $cp

	echo "<br><br>CEP Informado: $cep<br>";
	echo "Rua: $addressCEP->logradouro<br>";  // ESCRITA ERRADA $address EM VEZ DE $addres
                                           // ESCRITA ERRADA logradouro EM VEZ DE logradoro 
	echo "Bairro: $addressCEP->bairro<br>";
	echo "Cidade: $addressCEP->localidade<br>";
	echo "Estado: $addressCEP->uf<br>"; //ESCRITA ERRADA $address EM VEZ DE $adress
}


?>