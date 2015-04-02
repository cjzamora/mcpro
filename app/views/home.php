<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MCPro - Municipalities, Cities and Provinces in the Philippines API</title>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);
		#main ul li {
			list-style: inline-block;
			padding: 5px; 
		}
	</style>
</head>
<body>
	<fieldset class="alert alert-warning">
		<h3>Disclaimer:</h3>
		<p>DISCLAIMER: The data is offered FOR FREE and anybody can use at their own risk. 
			The data is offered AS IS. While I will strive to keep this data up to date, I do not claim that this is a comprehensive listing and some data may be outdated or missing. 
			I will not be held liable for any inaccuracies or errors found in the data. I am not responsible for final end-user utilization of this data and any damages the user might incur in its use.</p>
	</fieldset>
	<div id="main" class="container">
		<h2>MCPro is short for Municapalities, Cities and Provinces in the Philippines.</h2>
		<p>A very basic API for getting all the cities, municipality or a province in the Philippines. This API is build on top of the Laravel framework (v4.2). </p>
        <p>To use:</p>
        <ul>
            <li>Get all the cities: <code>http://yourproject.com/api/cities</code></li>
            <li>Get all the zipcodes: <code>http://yourproject.com/api/cities/{$id_city}</code></li>
            <li>Get the province of the city: <code>http://yourproject.com/api/cities/{$id_city}/province</code></li>
            <li>Get all the provinces: <code>http://yourproject.com/api/provinces</code></li>
            <li>Get all the cities within a province <code>http://yourproject.com/api/provinces/{id_province}/city <sup>*</sup></code></li>
            <li>Get all the barangay within a city <code>http://yourproject.com/api/provinces/{id_province}/city/{id_city}</code></li>
        </ul>
        <p>Notes:</p>
        <p>* May include also the municipality.</p>
		<h3>Todo:</h3>
        <ul>
            <li>Add 3 digit code for the different city / municipality</li>
            <li>Separate the city and municipality</li>
            <li><del>Add ZIP codes for every city or municipality</del></li>
            <li><del>Add list of barangays in a particular city / municipality</del></li>
        </ul>
		<h3>Credits:</h3>
        <ul>
            <li>Oj Tibi on <a href="https://github.com/ojtibi/philippine-provinces-and-cities-sql">https://github.com/ojtibi/philippine-provinces-and-cities-sql</a> for the data.</li>
            <li>Eacomm on <a href="http://blog.eacomm.com/archives/554/philippine-barangays-lookup-table">www.eacomm.com</a> - for the list of barangays in the Philippines.
            </li>
        </ul>
		<p>&nbsp;</p>		
		<p>If you have send any bug or an update is needed, email me at <a href="mailto:jeff.decena@yahoo.com">jeff.decena@yahoo.com</a></p>
	</div>
</body>
</html>
