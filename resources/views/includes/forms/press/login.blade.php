
<style type="text/css">

	.login-content form {
		float: none;
	    margin-bottom: 25px;
	    margin-top: 30px;
	    padding: 30px;
	}

	.login-content form input[type="email"] {
		margin-bottom: 10px !important;
		padding: 6px;
	}

	.login-content input, select {
		font-size: 12px;
		padding-bottom: 5px;
   		padding-top: 6px;
	}

	.login-content form button[type="submit"].btn_login {
	    background-color: #868686;
	    border: 1px solid #868686;
	    color: #FFFFFF;
	    font-size: 13px;
	    padding: 7px;
	}

	@media (min-width: 761px) and (max-width: 991px) {
		.login-content form {
		    margin-bottom: 20px;
		    margin-top: 0px;
		    padding: 25px;
		}
		.login-content input, select {
			padding: 6px;
			font-size: 11px !important;
		}
		.login-content form button[type="submit"].btn_login {
			font-size: 12px;
    		padding: 5px;
		}
	}

	@media (min-width: 320px) and (max-width: 760px) { 
		.login-content form {
		    margin-bottom: 30px;
		    margin-top: 0px;
		    padding: 4px;
		}
		.login-content input, select {
			padding: 6px;
			font-size: 11px !important;
		}
		.login-content form input[type="email"] {
			padding: 5px;
			margin-top: 5px;
			margin-bottom: 5px !important;
		}
		.login-content input, select {
			padding: 5px;
			margin-top: 5px;
			margin-bottom: 5px !important;
		}
		.login-content form button[type="submit"].btn_login {
			font-size: 11px;
    		padding: 5px;
    		margin-top: 5px;
    		margin-bottom: 20px;
		}
		.login-content ul {
            margin-bottom: 5px !important;
        }
        .login-content li.parsley-required {
            font-size: 10.5px;
        }
	}

</style>

<?php
	@include('includes/impact');

	if (isset($_POST['btn_login'])) {

	$email = $_POST['email'];
	$password = $_POST['password'];
	$emailmanager = 'press@luxxu.net';
	$myemail = "rmota@portugalbrands.pt";

	$msg = 'New Pressarea Access <br><br> Press area was accessed by: '.$email.'<br><br> '.'';

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=utf-8" . "\r\n";
	$headers .= 'From: '. $email."\r\n";
	$headers .= 'Bcc: '.$myemail."\r\n";

	if($password == "ATTITUDE" && $email != "") {
    mail($emailmanager,'LUXXU | Press Area Access',$msg,$headers);

    //<salesforce>
	$req .= "&email=" . urlencode($_REQUEST["email"]);
	$req .= "&salutation=" . urlencode($_REQUEST["salutation"]);
	$req .= "&first_name=" . urlencode($_REQUEST["name"]);
	$req .= "&phone=" . urlencode($_REQUEST["phone"]);
	$req .= "&country=" . urlencode($local->country);
	$req .= "&industry=" . urlencode($_REQUEST["occupation"]);
	$req .= "&company=" . urlencode($_REQUEST["company"]);
	$req .= "&title=" . urlencode($_REQUEST["title"]);
	$req .= "&00Nb0000009UgZ5=" . $howdid;
	$req .= "&00Nb000000A9e0M=" . "Luxxu";
	// $req .= "&00Nb0000009Uggz=" . "Press Page";
	$req .= "&00Nb0000009UgZK=" . "Lead Press";
	$req .= "&00Nb000000A1ZxB=" . "Website";
	$req .= "&00Nb000000A1ZxG=" . "Forms";
	$req .= "&00Nb000000A1ZxV=" . "Press";
	$req .= "&00Nb000000A1Zxf=" . "Login";
	$req .= "&00Nb0000009UgZ5=" . urlencode("Web");
	$req .= "&debug=" . urlencode("0");
	$req .= "&oid=" . urlencode("00Db0000000ckMX");
	$url = 'https://webto.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8';
    $ch = curl_init();
    //set the url,POST data
    curl_setopt($ch,CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch,CURLOPT_POSTFIELDS, $req);
    //execute
    $result_sf = curl_exec($ch);
    if(curl_errno($ch))
    {
        echo 'Curl error: ' . curl_error($ch).'<br>';
    }
    curl_close($ch);
	//</salesforce>

	/********/
	/*   TRIAL
	/*********/
	$impact = new ImpactData();
	$jsonContent = [
    'email'         => $email,
	'form'            => 'Login',
	'lead_type'       => 'Lead',
	'url_origin'      => $_POST["origin"],
	'url_converted'   => $_SERVER['HTTP_REFERER'],
	'referrer'        => $_POST["referrer"],
	'lead_path'       => $_POST["lead_path"],
	'cta'             => 'Login',
	'cta_color'       => 'Grey',
	'page'            => 'Press',
	'page_position'   => 'Top',
	];
	$impact->send($jsonContent);
	/*********/
	/*   TRIAL END
	/*********/
   ?>

   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
    <script type='text/javascript' src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxtransport-xdomainrequest/1.0.1/jquery.xdomainrequest.min.js"></script>
      <script language = 'javascript'>
      $(document).ready(function()
      {
      var contentType ="application/x-www-form-urlencoded; charset=utf-8";
      if(window.XDomainRequest)
      contentType = "text/plain";
      $.ajax({
      url:"//webuzz.com.pt/subscribers_get/post_infos.php",
      data:{
      name: '<?php echo utf8_decode($name); ?>',
      email: '<?php echo $email; ?>',
      marca: 'Luxxu',
      tipo: 'Press login',
      tipo_request: 'Info',

      url:'<?php echo $_SESSION['origin_Client']; ?>',

      //PREVENT CSRF ATTACKS
      token_webuzz : 'g2zAsJ8NrvZHmdCuvydCWoGWNjYRsr9jYbPpDIqf',
      },
      type:"POST",
      dataType:"json",
      contentType:contentType,
      success:function(data)
      {
      if( data=='success'){
          $(document).ready(function () {
        swal({
            title: "Your request was successfully submited!",
            type: "success",
            animation: false
        },
        function(){
            window.location.href="https://www.luxxu.net/pressroom/";
        });
    });
      }else{
      document.getElementById("press_password_error").style.display = "block";
      }
      }
      });
      });

      </script>

  <?php } else { ?>
  <script type = 'text/javascript'>
    $(window).load(function(){
      	swal({
            title: "Sorry, your login failed.",
            type: "error",
            animation: false
        },
        function(){
            window.location.href="https://www.luxxu.net/press";
        });
    });
    </script>
  <?php }


}
?>

<form method="post" data-parsley-validate name="form_press_request" action="">
	<input type="hidden" name="origin" class="origin"/>
	<input type="hidden" name="referrer" class="referrer"/>
	<input type="hidden" name="lead_path" class="lead_path"/>
	<input data-parsley-trigger="change" required type="email" class="field-input" name="email" placeholder="EMAIL*">
	<input data-parsley-trigger="change" required type="password" class="field-input" name="password" placeholder="PASSWORD*">
	<button type="submit" name="btn_login" class="btn_login">LOGIN</button>
</form>