<h1>Notifications</h1>

<?php
    
    include("functions.php");

    $id = $_GET['id'];
	
    $query = "SELECT * from `newze` where `id` = '$id';";
    if(count(fetchAll($query))>0){
        foreach(fetchAll($query) as $i){
				
				$query1 = "UPDATE `newze` SET `status` = 'yes we need an adhoc' WHERE `id` = '$id';";
				fetchAll($query1);
				
				$name = "ppsder";
				  
				  
				  $message = "Facility : $i[facility]. \n. $i[description]. \n VRID : $i[vrid] \n CPT : $i[cpt].";
				  
				  $to = "prashri@amazon.com, ppsder@amazon.com";

					$email_subject = "Transmitting RS new tool FUNCTION";

					$email_body = "Yes we need Adhoc as per \n $name\n".
											"\n $message";
				
				
				$headers = array(
					'From' => 'shadrachid@gmail.com',
					'Reply-To' => 'ppsder@amazon.com',
					'X-Mailer' => 'PHP/' . phpversion()
				);
				


				mail($to,$email_subject,$email_body,$headers);
				
				echo 'From : shadrachid@gmail.com';
				echo '/nTo :'.$to;
				echo '/nSubject :' .$email_subject;
				echo '/n'.$email_body;
        }
    }
    
?><br/>
<a href="index.php">Back</a>
<!--P.Shadrach Sudershan(ppsder)-->