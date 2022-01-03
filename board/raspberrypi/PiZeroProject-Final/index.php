<html>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<style>
		.button {
		  background-color: #003263;  
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
	</style>
	<head>
		<title>PS4 Jailbreak 9.00</title>
		<script>
			function loadcomplete() {
				document.getElementById("progress").innerHTML=sessionStorage.Queue+" Loaded Successfully !!";
				sessionStorage.Queue="";
			}
			
		</script>
		<script src="int64.js"></script>
		<script src="rop.js"></script>
		<script src="kexploit.js"></script>
		<script src="webkit.js"></script>
		<script src="payloads.js"></script>
	</head>
	<body class="bg">
		<script>
			window.onload = function(e){if(sessionStorage.Queue==null){sessionStorage.Queue="";}else if(sessionStorage.Queue!=""){executependingqueue(sessionStorage.Queue);}};
			window.applicationCache.ondownloading=function(){document.getElementById("progress").innerHTML="Page Caching Started!!"};
			window.applicationCache.onprogress=function(a){document.getElementById("progress").innerHTML="Caching Status: "+(Math.round(100*(a.loaded/a.total)))+"% Completed"};
			window.applicationCache.oncached=function(){document.getElementById("progress").innerHTML="Page Cached Successfully!!";setTimeout(function(){document.getElementById("progress").innerHTML="Turn Off the Internet & Reopen the Page to Run the Exploit!!"; }, 1500);};
		</script>
		<?php $ipadd = shell_exec("/sbin/ifconfig wlan0 | grep -Eo 'inet (addr:)?([0-9]*\.){3}[0-9]*' | grep -Eo '([0-9]*\.){3}[0-9]*' | grep -v '127.0.0.1'");?>
		<h1 id="progress" class="titlehead">PS4 Jailbreak 9.00 - <?php echo $ipadd ?></h1><hr><br>
		<input type="hidden" id="psip" value="localhost"/>
		<div>
			<table align="center" style="width:600px;margin-top:30px;">
			<tr>
			<td align="center" id="exploit">
			<a href="#" class="button" onclick="goldhen(); return false" style="width:60%">Exploit + GoldHEN V2b</a>
			</td>
			<td >
			<a href="RaspberyPi.php" class="button" style="width:40%">RaspberryPi</a>
			</td>
			</tr>
			<tr><td><br/></td></tr>
			<tr>
			<td colspan="2" align="center"><hr><br></td>
			</tr>
			<tr>
			<td align="center" colspan="2"><a href="#" class="button" onclick="app2usb(); return false" style="width:43%">App2USB</a>
			<a href="#" class="button" onclick="appdumper(); return false" style="width:43%">App Dumper</a></td>
			</tr><tr><td><br/></td></tr>
			<tr>
			<td align="center" colspan="2"><a href="#" class="button" onclick="disableupdates();return false" style="width:43%">Disable Updates</a>
			<a href="#" class="button" onclick="enableupdates(); return false" style="width:43%">Enable Updates</a></td>
			</tr><tr><td><br/></td></tr>
			<tr>
			<tr>
			<td align="center" colspan="2">
			<a href="#" class="button" onclick="ftp(); return false" style="width:43%">FTP</a>
			<a href="#" class="button" onclick="fanthreshold(temp.value); return false" style="width:43%;border-radius: 5px 0px 0px 5px;">Set Fan Threshold</a>
			<select id="temp" style="height:42px;border-radius: 0px 5px 5px 0px;position: absolute;" class="button">
			<option value="40">40°C</option><option value="41">41°C</option><option value="42">42°C</option><option value="43">43°C</option><option value="44">44°C</option><option value="45">45°C</option><option value="46">46°C</option><option value="47">47°C</option><option value="48">48°C</option><option value="49">49°C</option><option value="50">50°C</option><option value="51">51°C</option><option value="52">52°C</option><option value="53">53°C</option><option value="54">54°C</option><option value="55">55°C</option><option value="56">56°C</option><option value="57">57°C</option><option value="58">58°C</option><option value="59">59°C</option><option value="60">60°C</option><option value="61">61°C</option><option value="62">62°C</option><option value="63">63°C</option><option value="64">64°C</option><option value="65">65°C</option><option value="66">66°C</option><option value="67">67°C</option><option value="68">68°C</option><option value="69">69°C</option><option value="70" selected>70°C</option><option value="71">71°C</option><option value="72">72°C</option><option value="73">73°C</option><option value="74">74°C</option><option value="75">75°C</option><option value="76">76°C</option><option value="77">77°C</option><option value="78">78°C</option><option value="79">79°C</option>
			</select>
			</td>
			</tr><tr><td><br/></td></tr>
			<tr>
			<td align="center" colspan="3"><a href="#" class="button" onclick="backup(); return false" style="width:29%">DB BackUp</a>
			<a href="#" class="button" onclick="restore(); return false" style="width:29%">DB Restore</a>
			<a href="#" class="button" onclick="rifrenamer(); return false" style="width:29%">RIF Renamer</a></td>
			</tr><tr><td><br/></td></tr>
			<tr>
			<td align="center" colspan="3"><a href="#" class="button" onclick="moduledumper(); return false" style="width:29%">Module Dumper</a>
			<a href="#" class="button" onclick="kerneldumper(); return false" style="width:29%">Kernel Dumper</a>
			<a href="#" class="button" onclick="kernelclock(); return false" style="width:29%">Kernel Clock</a></td>
			</tr><tr><td><br/></td></tr>
			<tr>
			<td align="center" colspan="3"><a href="#" class="button" onclick="ps4debug(); return false" style="width:29%">PS4 Debug</a>
			<a href="#" class="button" onclick="webrte(); return false" style="width:29%">WebRTE</a>
			<a href="#" class="button" onclick="permanentuart(); return false" style="width:29%">Permanent UART</a></td>
			</tr><tr><td><br/></td></tr>
			<tr>
			<td align="center" colspan="3"><a href="#" class="button" onclick="exitidu(); return false" style="width:29%">Exit IDU</a>
			<a href="#" class="button" onclick="todex(); return false" style="width:29%">To-DEX</a>
			<a href="#" class="button" onclick="disableaslr(); return false" style="width:29%">Disable ASLR</a></td>
			</tr>
			
			</table></div>
	</body>
</html>
