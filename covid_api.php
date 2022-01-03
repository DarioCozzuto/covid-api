<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://covid-193.p.rapidapi.com/statistics",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: covid-193.p.rapidapi.com",
		"x-rapidapi-key: 8116278b11mshc2e7e9e84502335p1754c8jsnd639e8cb9630"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

$data = json_decode($response, TRUE);

$data_num_array = $data['response'];

//Access to Italy array strings
for ($num = 0; $num < 236; $num++) {

	$data_array = $data_num_array[$num];

	foreach ($data_array as $key=>$value) { 
		
		if ($key == 'country' && $value == 'Italy') {

			$country = $data['response'][$num]['country'];
			$total_cases = $data['response'][$num]['cases']['total'];
			$new_cases = $data['response'][$num]['cases']['new'];
			$total_deaths = $data['response'][$num]['deaths']['total'];
			$active_cases = $data['response'][$num]['cases']['active']; 

		}
	}
}





