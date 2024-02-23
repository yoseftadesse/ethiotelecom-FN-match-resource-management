<!DOCTYPE html>


<?php
require('db.php');
$NE=$_REQUEST['NE'];
$result = mysqli_query($con, "SELECT * from resource where NE='".$NE."'") or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
//NE,NECapacity,DATACapacity,ConnecteddataCustomer,VOICECapacity,ConnectedvoiceCustomer,SCCapacity,SCFreeOKline,PowerConnectedFrom,BACKUP,Protection
?>
<!DOCTYPE html>
<html>
<head>

</head>
<body style="background: #D4E6F1;">

<div class="form">

<h1>Update Record</h1>

<?php


$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{

//$Region =$_POST['Region'];
//$SpecificLocation = $_POST['SpecificLocation'];
//$NE = $_POST['NE'];
//$NECapacity = $_REQUEST["NECapacity"];
//$DATACapacity = $_REQUEST["DATACapacity"];
//$ConnecteddataCustomer = $_REQUEST["ConnecteddataCustomer"];
//$VOICECapacity = $_POST["VOICECapacity"];
//$ConnectedvoiceCustomer = $_REQUEST["ConnectedvoiceCustomer"];
$SCCapacity = $_REQUEST["SCCapacity"];
$SCFreeOKline = $_REQUEST["SCFreeOKline"];
//$PowerConnectedFrom = $_REQUEST["PowerConnectedFrom"];
//$BACKUP = $_REQUEST["BACKUP"];
//$Protection = $_REQUEST["Protection"];
$con=mysqli_connect("localhost","root","","an");

$update = "update resource set  SCCapacity='".$SCCapacity."'
 ,SCFreeOKline='".$SCFreeOKline."'  where NE='".$NE."'";
mysqli_query($con, $update);
$status = "Record Updated Successfully. </br></br><a href='view.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>

<div>

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

<form action=""  method="post" name="form" onsubmit="return ValidateForm(this);">
<table border="3" cellpadding="5" cellspacing="0">
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['NE'];?>" />

	

	<tr>  <td style="width: 30%">

<label for="SCCapacity"><b>S/C Capacity *</b></label><br />
<input name="SCCapacity" type="text" maxlength="50" required value="<?php echo $row['SCCapacity'];?>" style="width:100%;max-width: 260px" />
<tr> <td style="width: 30%">
<label for="SCFreeOKline"><b>S/C Free OK line *</b></label><br />
<input name="SCFreeOKline" type="text" maxlength="50" required value="<?php echo $row['SCFreeOKline'];?>" style="width:100%;max-width: 260px" />
</td> </tr>


</td></tr>
<tr> <td>

<input type="submit" value="upload"  name="update" >
</td> </tr>
</table>
</form>




<?php } ?>


</div>
</div>
</body>
</html>