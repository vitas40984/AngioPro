<?php

	function protocols_all(); {
		$prot1 = ["$id"=>"1", "$fio"=>"Иванов П.С.", "$birthDate"=>"1945-10-10", "$gender"=>"м", "$lifePlace"=>"Барнаул", "$workPlace"=>"пенсионер", "$inPatDate"=>"2016-10-12", "$operDate"=>"2016-10-13", "$Ds"=>"ИБС: СН II ф.к.", "$dose"=>"13256", "$operName"=>"Коронарография", "$extr"=>"false", "$j_description"=>"описание описание описание описание ", "$J_conclusion"=>"заключение заключение заключение заключение заключение"];
		$prot2 = ["$id"=>"2", "$fio"=>"Петров В.П.", "$birthDate"=>"1965-01-13", "$gender"=>"ж", "$lifePlace"=>"Змеиногорский р-н", "$workPlace"=>"СПК Ильич, механизатор", "$inPatDate"=>"2016-10-12", "$operDate"=>"2016-10-13", "$Ds"=>"ИБС: СН II ф.к.", "$dose"=>"13256", "$operName"=>"Аорто-артериография", "$extr"=>"false", "$j_description"=>"описание описание описание описание ", "$J_conclusion"=>"заключение заключение заключение заключение заключение"];

		$prot[0]=$prot1;
		$prot[1]=$prot2;

		return $prot;
	}

	function protocols_new($fio, $patId, $birthDate, $gender, $lifePlace, $workPlace, $inPatDate, $operDate, $Ds, $dose, $operName, $extr, $j_description, $J_conclusion); {
		# code...
	}

?>