<?php 

if ($_POST['value'] == "RemoveUSB"){  
	$output = shell_exec('sudo /sbin/modprobe -r g_mass_storage');
}
if ($_POST['value'] == "LoadUSB"){ 
	$output = shell_exec('sudo /sbin/modprobe  g_mass_storage file=/usr/html/usb-drive.img stall=0 removable=1');
}
if ($_POST['value'] == "WifiRouter"){ 
	$output = shell_exec('sudo /bin/sh /usr/html/Resources/Router/zrun.sh');
}
if ($_POST['value'] == "Node"){ 
	$fp = fopen('wpa_supplicant.conf', 'w');
	fwrite($fp,'network={'.PHP_EOL);
	fwrite($fp,'	ssid="'.trim($_POST['sid']).'"'.PHP_EOL);
	fwrite($fp,'	psk="'.trim($_POST['pwd']).'"'.PHP_EOL);
	fwrite($fp,'	key_mgmt=WPA-PSK'.PHP_EOL);
	fwrite($fp,'}');
	fclose($fp); 
	$output = shell_exec('sudo /bin/sh /usr/html/Resources/Node/zrun.sh');
}
if ($_POST['value'] == "Reboot"){ 
	$output = shell_exec('sudo /sbin/reboot' );
}

?>  

