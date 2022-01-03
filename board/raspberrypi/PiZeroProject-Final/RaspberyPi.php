<html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<style>
		.button {
		  background-color: #ff9800;  
		  border-radius: 5px;
		  color: white;
		  padding: .5em;
		  text-decoration: none;
		  height:100%;
		  display:inline-table;
		  font-family: system-ui;
		}
		
		.button:focus,
		.button:hover {
		  background-color: #007bff;
		  color: White;
		}
		
		.buttonDefault {
		  background-color: #04AA6D;  
		  border-radius: 5px;
		  color: white;
		  padding: .5em;
		  text-decoration: none;
		  height:100%;
		  display:inline-table;
		  font-family: system-ui;
		}
		.buttonDefault:focus,
		.buttonDefault:hover {
		  background-color: #007bff;
		  color: White;
		}
		
		.buttonRed {
		  background-color: #f44336;  
		  border-radius: 5px;
		  color: white;
		  padding: .5em;
		  text-decoration: none;
		  height:100%;
		  display:inline-table;
		  font-family: system-ui;
		}
		.buttonRed:focus,
		.buttonRed:hover {
		  background-color: #007bff;
		  color: White;
		}
		.titlehead {
		  background-color: #003263;  
		  border-radius: 5px;
		  color: white;
		  padding: .5em;
		  text-decoration: none;
		  text-align: center;
		  margin-top: -10px;
		  margin-bottom: -10px;
		  font-family: system-ui;
		}

		.titlehead:focus,
		.titlehead:hover {
		  background-color: #007bff;
		  color: White;
		}

		.bg {
		  /* The image used */
		  background-image: url("ps4.jpg");

		  

		  /* Center and scale the image nicely */
		  background-position: center;
		  background-repeat: no-repeat;
		  background-size: cover;
		}
		.label {
  			color: white;
  			padding: 7px;
  			font-family: Arial;
		}
		.success {background-color: #04AA6D;} /* Green */
		.info {background-color: #2196F3;} /* Blue */
		.warning {background-color: #ff9800;text-align: right;} /* Orange */
		.danger {background-color: #f44336;} /* Red */ 
		.other {background-color: #e7e7e7; color: black;} /* Gray */ 
		select {
 font-size: 20px;
    	}
    	select:focus {
        	min-width: 150px;
        	width: auto;
    	}
	</style>
	<head>
		<title>Netwrok Update</title>
		<script>
			function SetAsNode(){
				var sid=document.getElementById('SSID').value
				var pwd=document.getElementById('password').value
				if (sid === "" || pwd === "") {
					alert("Valid Ssid and password please");
				    return;
				}
    			var hr = new XMLHttpRequest();
    			const url = "script.php";
    			const vars = "value="+"Node"+"&sid="+encodeURIComponent(sid)+"&pwd="+encodeURIComponent(pwd);
    			hr.open("POST", url, true);
    			hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    			hr.onreadystatechange = function() {
	    			if(hr.readyState == 4 && hr.status == 200) {
		    			var return_data = hr.responseText;
	    			}
    			}
    			hr.send(vars);
    			alert('Network Information updated, Will reflect on restarting the PS4');
			}
			
			function SetAsWifiRouter(){
				var hr = new XMLHttpRequest();
    			const url = "script.php";
    			const vars = "value="+"WifiRouter";
    			hr.open("POST", url, true);
    			hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    			hr.onreadystatechange = function() {
	    			if(hr.readyState == 4 && hr.status == 200) {
		    			var return_data = hr.responseText;
	    			}
    			}
    			hr.send(vars);
    			alert('Network Information updated, Will reflect on restarting the PS4');
			}
			function postCommand(val){
    			var hr = new XMLHttpRequest();
    			const url = "script.php";
    			const vars = "value="+encodeURIComponent(val);
    			hr.open("POST", url, true);
    			hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    			hr.onreadystatechange = function() {
	    			if(hr.readyState == 4 && hr.status == 200) {
		    			var return_data = hr.responseText;
	    			}
    			}
    			hr.send(vars);
    			alert(val+' Command has been executed');
			}
		</script>
		<script src="int64.js"></script>
		<script src="rop.js"></script>
		<script src="kexploit.js"></script>
		<script src="webkit.js"></script>
		<script src="payloads.js"></script>
	</head>
	<body class="bg">
		<?php $ipadd = shell_exec("/sbin/ifconfig wlan0 | grep -Eo 'inet (addr:)?([0-9]*\.){3}[0-9]*' | grep -Eo '([0-9]*\.){3}[0-9]*' | grep -v '127.0.0.1'");?>
		<h1 id="progress" class="titlehead">Raspberry Pi - <?php echo $ipadd ?></h1><hr><br>
		<div>
			
			<table align="center" style="width:600px;margin-top:30px;">
			<?php $cmd = shell_exec('sudo /bin/ls -l /etc/customscript/S90hostapd');?>
			<?php if (substr( $cmd, 0, 4 ) ===  '-rw-') : ?>
			<tr>
			<td align="center"><br><br><br><br><br><a href="#" class="buttonDefault" onclick="SetAsWifiRouter(); return false" style="width:50%">Default Wifi Server</a>
			</tr>
			<?php else : ?>
			<tr>
			<?php
				$filename = "Resources/Node/plainPwd";
				$fp = fopen($filename, "r");
				$content = fread($fp, filesize($filename));
				$lines = explode("\n", $content);
				fclose($fp);				
			?>
			<td align="center">
			
			<label class="label info" for="fname">SSID:</label><br>
			<select name="SSID" id="SSID">
			<?php
				exec("sudo /sbin/iwlist wlan0 scan | grep -w 'ESSID\|Quality' | sed '1!G;h;$!d'", $wifiSidList, $retval);
				$pwd="";
				foreach ($wifiSidList as $value) {
						$ln= trim($value);
						
						if (substr( $ln, 0, 5 ) ===  'ESSID'){
							$csid=str_replace('"',"",substr( $ln, 6 ));
							if ($csid ===  $lines[0]){
								echo '<option value="'.$csid.'" selected>'.$csid.'</option>';
								$pwd=$lines[1];
							}else{
								echo '<option value="'.str_replace('"',"",substr( $ln, 6 )).'">'.str_replace('"',"",substr( $ln, 6 )).'</option>';
							}
						}
				}
			?>
			</select>
			</td>
			</tr>
			<tr>
			<td align="center">
			<br><label class="label info" align="right" for="fname">Password:</label><br>
		    <input type="text" size=18  style="font-size:14pt;"id="password" name="password" value="<?php echo $pwd ?>">
		    </td>
			</tr>
			<tr>
			<td align="center"><br><a href="#" class="button" onclick="SetAsNode(); return false" style="width:29%">Connect to Wifi</a>
			</tr>
			<?php endif; ?>
			</table>
			</div>
			<div>
			<br><br>
			<table align="center" style="width:600px;margin-top:30px;">
			<tr>
			<td align="center">
				<a href="#" class="buttonRed" onclick="postCommand('Reboot'); return false" style="width:50%">Reboot Pi</a>
			</td>
			<td align="center">
				<a href="#" class="buttonRed" onclick="postCommand('Shutdown'); return false" style="width:50%">Shutdown Pi</a>
			</td>
			</tr>
			<td><br><br>
			</td>
			<tr>
			</tr>
			<tr>
				<td align="center"><a href="#" class="button" onclick="postCommand('LoadUSB'); return false" style="width:50%">USB Load</a></td>
				<td align="center"><a href="#" class="button" onclick="postCommand('RemoveUSB'); return false" style="width:50%">USB Remove</a></td>
			</tr>
			</table>
			</div>
	</body>
</html>
