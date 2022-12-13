<?php
require_once("request.php");

$fio = "";
$sex = "";
$birthday = "";
$passport = "";
$day_pass = "";
$who_pass = "";
$residence = "";
$phone = "";
$email = "";
$hieght = "";
$weight = "";
$toppressure = "";
$bottom_pressure = "";
$employment_status = "";
$activity_kind = "";
$bank = "";
$town = "";
$contract_number = "";
$date_start = "";
$date_stop = "";
$remaining = "";
$polis_start = "";


    $fio = $_POST["fio"];
    echo($fio . ' FIO<br>');

    $sex = $_POST["sex"];
    echo($sex . ' SEX<br>');
  
    $birthday = $_POST["birthday"];
    echo($birthday . ' Birthday<br>');
  
    $passport = $_POST["passport"];
    echo($passport . ' Passport<br>');
  
    $day_pass = $_POST["day_pass"];
    echo($day_pass . ' DayPass<br>');
  
    $who_pass = $_POST["who_pass"];
    echo($who_pass . ' WhoPass<br>');
  
    $residence = $_POST["residence"];
    echo($residence . ' Residence<br>');
  
    $phone = $_POST["phone"];
    echo($phone . ' Phone<br>');
  
    $email = $_POST["email"];
    echo($email . ' Email<br>');

    $hieght = $_POST["hieght"];
    echo($hieght . ' Hieght<br>');

    $weight = $_POST["weight"];
    echo($weight . ' Weight<br>');

    $top_pressure = $_POST["top_pressure"];
    echo($toppressure . ' TopPressure<br>');

    $bottom_pressure = $_POST["bottom_pressure"];
    echo($bottom_pressure . ' BottomPressure<br>');

    $employment_status = $_POST["employment_status"];
    echo($employment_status . ' EmploymentStatus<br>');

    $activity_kind = $_POST["activity_kind"];
    echo($activity_kind . 'ActivityKind<br>');

    $bank = $_POST["bank"];
    echo($bank . ' Bank<br>');
  
    $town = $_POST["town"];
    echo($town . ' Town<br>');
  
    $contract_number = $_POST["contract_number"];
    echo($contract_number . ' ContractNumber<br>');

    $date_start = $_POST["date_start"];
    echo($date_start . ' DateStart<br>');
  
    $date_stop = $_POST["date_stop"];
    echo($date_stop . ' DateStop<br>');

    $remaining = $_POST["remaining"];
    echo($remaining . ' Remaining<br>');

    $polis_start = $_POST["polis_start"];
    echo($polis_start . ' PolisStart<br>');


//JSON Requst
$credit_data[] = array('bank'=>$bank, 'agreement_date_start'=>$date_start, 'agreement_date_end'=>$date_stop, 'agreement_number'=>$contract_number, 'city'=>$town, 'remaining_debt'=>$remaining);

$insurance_data[] = array('address'=>$residence, 'address_region'=>$residence, 'address_city'=>$town, 'address_street'=>'', 'address_house'=>'', 'address_flat'=>'',
'area'=>'', 'floors'=>'', 'kad_number'=>'', 'has_gas'=>'', 'value_of_object'=>'', 'year'=>'', 'ceiling_material'=>'');

$pasport_data[] = array('series'=>$passport, 'number'=>$passport, 'registration'=>$residence, 'registration_region'=>'', 'registration_city'=>'',
 'registration_street'=>'', 'registration_house'=>'', 'registration_flat'=>'', 'registration_kladr_id'=>'','when'=>$pasport_data, 'who'=>$who_pass, 'unit_code'=>$passport);

$insurant_data[] = array('first_name' => $fio, 'last_name'=>$fio, 'middle_name'=>$fio, 'passport'=> $pasport_data, 'birth_date'=>$birthday, 'email'=>$email, 'phone'=>$phone, 'sex'=>$sex);

$json_data[] = array('status'=>'new', 'risk'=>'IPOTEKA_PROPERTY', 'insurance_companies'=>'',
'data_input'=>array('credit'=>$credit_data, 'insurance'=>$insurance_data, 'insurant'=> $insurant_data, 'polis_date'=>$polis_start, 'discount'=>'0'));


$jsonObj = json_encode($json_data, true);
$jsonstring = json_decode($jsonObj,true);
echo('<pre>');
print_r($jsonstring);
echo('<pre>');

$request = new Request;
$config = new Config;

$apiPolises =$request->GetPolis($config::url_policies, $jsonObj);

?>