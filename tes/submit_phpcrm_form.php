<?php
if(ISSET($_POST))
{
	$name=$_POST['name'];
  $email=$_POST['email'];
	$phone=$_POST['phone'];
  $education_label=$_POST['education_label'];

  $technicalmachinery=$_POST['technicalmachinery'];
  $technical_computers=$_POST['technical_computers'];
  $technical_research=$_POST['technical_research'];
  $electronics=$_POST['electronics'];
  $other_theme=$_POST['other_theme'];

  $History=$_POST['History'];
  $political_science=$_POST['political_science'];
  $design_art=$_POST['design_art'];
  $paintings=$_POST['paintings'];
  $other_theme=$_POST['other_theme'];

  $address=$_POST['address'];
	$city=$_POST['city'];
  $state=$_POST['state'];
  $zip_code=$_POST['zip_code'];
  $country=$_POST['country'];
  


  $field1="<b>Education Level:</b> ".$education_label."<br>"."<b>Your Project Type (Science): </b>"."<br>"."Technical Machinery: ".$technicalmachinery."<br>"."Technical Computers: ".$technical_computers."<br>"."Technical Research: ".$technical_research."<br>"."Electronics: ".$electronics."<br>"."Other science theme: ".$other_theme."<br>"."<b>Your Project Type (Art): </b>"."<br>"."History: ".$History."<br>"."Political Science: ".$political_science."<br>"."Design Art: ".$design_art."<br>"."Paintings: ".$paintings."<br>"."Other Art Theme: ".$other_theme."<br>"."<b>Address: </b>"."<br>"."Street: ".$address."<br>"."City: ".$city."<br>"."State: ".$state."<br>"."Zip Code: ".$zip_code."<br>"."Country: ".$country;
}
else
{
echo "Thanks";	
exit();	
}
$Token_Key='#'; // Located in admin section under setup
$WebURL='#'; // CRM Url like https://www.abc.com/crm-folder
//Lead Fields
$post_data=array('name'=>$name,'phone'=>$phone,'email'=>$email,'email'=>$email, 'field_1'=>$field1);
$PHPCRM = curl_init();
curl_setopt_array($PHPCRM, array(
  CURLOPT_URL=>$WebURL.'/index.php/crm_api/leads/add_lead/'.$Token_Key,
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => $post_data,
));

$response = curl_exec($PHPCRM);
curl_close($PHPCRM);
header("Location:thanks.php");
exit();
//echo $response;
?>