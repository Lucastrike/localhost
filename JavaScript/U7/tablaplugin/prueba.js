

var data = '{"employee_id": 1234567,"name": "Jeff Fox","hire_Date": "1/1/2013","location": {"zip_Code": 1234,"city": "San Francisco","country": "United States"},"consultant": "false"}';

var json = JSON.parse(data);
//console.log(json);

alert(json.name);
