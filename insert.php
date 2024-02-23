








<script type="text/javascript">
function ValidateForm(frm) {
if (frm.Region.value == "") { alert('First Region is required.'); frm.Region.focus(); return false; }
if (frm.SpecificLocation.value == "") { alert('First Specific Location is required.'); frm.SpecificLocation.focus(); return false; }
if (frm.NE.value == "") { alert('NE_id is required.'); frm.NE.focus(); return false; }
if (frm.NECapacity.value == "") { alert('NE Capacity is required.'); frm.NECapacity.focus(); return false; }
if (frm.DATACapacity.value == "") { alert('DATA Capacity is required.'); frm.DATACapacity.focus(); return false; }
if (frm.ConnecteddataCustomer.value == "") { alert('Connected data Customer is required.'); frm.ConnecteddataCustomer.focus(); return false; }
if (frm.VOICECapacity.value == "") { alert('VOICE Capacity is required.'); frm.VOICECapacity.focus(); return false; }
if (frm.ConnectedvoiceCustomer.value == "") { alert('Connected voice Customer is required.'); frm.ConnectedvoiceCustomer.focus(); return false; }
if (frm.SCCapacity.value == "") { alert('S/C Capacity is required.'); frm.SCCapacity.focus(); return false; }
if (frm.SCFreeOKline.value == "") { alert('S/C Free OK line is required.'); frm.SCFreeOKline.focus(); return false; }
if (frm.PowerConnectedFrom.value == "") { alert('Power Connected From is required.'); frm.PowerConnectedFrom.focus(); return false; }
if (frm.BACKUP.value == "") { alert('Alternative Power connection or BACKUP is required.'); frm.BACKUP.focus(); return false; }
if (frm.Protection.value == "") { alert('Protection is required.'); frm.Protection.focus(); return false; }

return true; }
</script>

<form action="insert.php"  method="post" name="upload" onsubmit="return ValidateForm(this);">
<table border="3" cellpadding="5" cellspacing="0">

<tr> <td style="width: 30%">
<label for="Region"><b>Region *</b></label><br/>
 <input name="Region" type="text" maxlength="50" style="width:100%;max-width: 260px" />

</td> <td style="width: 30%">
<label for="SpecificLocation"><b>Specific Location *</b></label><br />
<input name="SpecificLocation" type="text" maxlength="50" style="width:100%;max-width: 260px" />
</td> </tr> <tr> <td colspan="2">

	<tr> <td style="width: 30%">
<label for="NE"><b>NE_ID *</b></label><br />
<input name="NE" type="text" maxlength="50" style="width:100%;max-width: 260px" />
</td> <td style="width: 30%">
<label for="NECapacity"><b>NE Capacity *</b></label><br />
<input name="NECapacity" type="text" maxlength="50" style="width:100%;max-width: 260px" />
</td> </tr> <tr> <td colspan="2">
	<tr> <td style="width: 30%">
<label for="DATACapacity"><b>DATA Capacity *</b></label><br />
<input name="DATACapacity" type="text" maxlength="50" style="width:100%;max-width: 260px" />
</td> <td style="width: 30%">
<label for="ConnecteddataCustomer"><b>Connected data Customer *</b></label><br />
<input name="ConnecteddataCustomer" type="text" maxlength="50" style="width:100%;max-width: 260px" />
</td> </tr> <tr> <td colspan="2">
	<tr> <td style="width: 30%">
<label for="VOICECapacity"><b>VOICE Capacity *</b></label><br />
<input name="VOICECapacity" type="text" maxlength="50" style="width:100%;max-width: 260px" />
</td> <td style="width: 30%">
<label for="ConnectedvoiceCustomer"><b>Connected voice ustomere *</b></label><br />
<input name="ConnectedvoiceCustomer" type="text" maxlength="50" style="width:100%;max-width: 260px" />
</td> </tr> <tr> <td colspan="2">
	<tr> <td style="width: 30%">
<label for="SCCapacity"><b>S/C Capacity *</b></label><br />
<input name="SCCapacity" type="text" maxlength="50" style="width:100%;max-width: 260px" />
</td> <td style="width: 30%">
<label for="SCFreeOKline"><b>S/C Free OK line *</b></label><br />
<input name="SCFreeOKline" type="text" maxlength="50" style="width:100%;max-width: 260px" />
</td> </tr> <tr> <td colspan="2">
	<tr> <td style="width: 30%">
<label for="PowerConnectedFrom"><b>Power Connected From *</b></label><br />
<input name="PowerConnectedFrom" type="text" maxlength="50" style="width:100%;max-width: 260px" />
</td> <td style="width: 30%">
<label for="BACKUP"><b>Alternative Power connection or BACKUP *</b></label><br />
<input name="BACKUP" type="text" maxlength="50" style="width:100%;max-width: 260px" />
</td> </tr> 
<tr> <td style="width: 30%">
<label for="Protection"><b>Protection *</b></label><br />
<input name="Protection" type="text" maxlength="50" style="width:100%;max-width: 260px" />
</td></tr>
<tr> <td>

<input type="submit" value="upload"  name="upload" >
</td> </tr>
</table>
</form>


<?php
$con=mysqli_connect("localhost","root","","an");

if(isset($_POST['upload']))
{

$Region =$_POST['Region'];
$SpecificLocation = $_POST['SpecificLocation'];
$NE = $_POST['NE'];
$NECapacity = $_POST["NECapacity"];
$DATACapacity = $_POST["DATACapacity"];
$ConnecteddataCustomer = $_POST["ConnecteddataCustomer"];
$VOICECapacity = $_POST["VOICECapacity"];
$ConnectedvoiceCustomer = $_POST["ConnectedvoiceCustomer"];
$SCCapacity = $_POST["SCCapacity"];
$SCFreeOKline = $_POST["SCFreeOKline"];
$PowerConnectedFrom = $_POST["PowerConnectedFrom"];
$BACKUP = $_POST["BACKUP"];
$Protection = $_POST["Protection"];

$res=mysqli_query($con,"INSERT INTO resource values ('$Region','$SpecificLocation','$NE','$NECapacity','$DATACapacity','$ConnecteddataCustomer','$VOICECapacity','$ConnectedvoiceCustomer','$SCCapacity','$SCFreeOKline','$PowerConnectedFrom','$BACKUP','$Protection') ");


if(!$res)
	{

echo"<font color='green'><p class='wrong'>Insertion failed!!!</p></font>";
//echo' <meta content="3;registeritem.php" http-equiv="refresh" />';
	}
	else
	{

echo"<font color='green'><p class='right'>New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</p></font>";
//echo' <meta content="3;registeritem.php" http-equiv="refresh" />'; 
	}
}
mysqli_close($con);

?>