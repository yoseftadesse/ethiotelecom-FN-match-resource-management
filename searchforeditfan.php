
<html>
<head>
	<script type="text/javascript">
function ValidateForm(frm) {
if (frm.NE.value == "") { alert('First NE_ID is required.'); frm.NE.focus(); return false; }
</script>

</head>
<body>

<form action="searchforeditfan.php"  method="post" name="search" onsubmit="return ValidateForm(this);">
<table border="3" cellpadding="5" cellspacing="0">

<tr> <td style="width: 30%">
<label for="NE"><b>NE_ID *</b></label><br/>
 <input name="NE" type="text" maxlength="50" style="width:100%;max-width: 260px" />
</td></tr>
<tr> <td>

<input type="submit" value="search"  name="search" >
</td> </tr>
</table></form>

<table  class ="table" border="1">
<thead>
<tr><th><strong>NO</strong></th><th><strong>Region</strong></th><th><strong>Specific Location</strong>
<th><strong>NE_ID </strong></th><th><strong>NE Capacity</strong></th><th><strong>DATA Capacity </strong>
<th><strong>Connected data Customer</strong></th><th><strong>VOICE Capacity</strong></th><th><strong>Connected voice Customere</strong>
<th><strong>S/C Capacity</strong></th><th><strong>S/C Free OK line</strong></th>
</th><th><strong>Power Connected From</strong> </th><th><strong>Alternative Power connection or BACKUP</strong></th><th><strong>Protection</strong></th> <th><strong>Data free for sale</strong></th><th><strong>Voice free for sale</strong></th> <th><strong>Update</strong></th></tr>
</thead>

<tbody>
<?php
require('db.php');
$count=1;
if(isset($_POST['search']))
  {
   $NE=$_POST['NE'];
$sel_query="SELECT * FROM resource where NE='{$NE}'";
//$sel_query="SELECT * FROM resource";
$result = mysqli_query($con,$sel_query);
			$intt=mysqli_num_rows($result);
			echo'there are <input type="button"  id="intt" value='.$intt.'> record';

while($row = mysqli_fetch_assoc($result)) {
	
   
	?>

<tr>
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["Region"]; ?></td>
<td align="center"><?php echo $row["SpecificLocation"]; ?></td>
<td align="center"><?php echo $row["NE"]; ?></td>
<td align="center"><?php echo $row["NECapacity"]; ?></td>
<td align="center"><?php echo $row["DATACapacity"]; ?></td>
<td align="center"><?php echo $row["ConnecteddataCustomer"]; ?></td>
<td align="center"><?php echo $row["VOICECapacity"]; ?></td>
<td align="center"><?php echo $row["ConnectedvoiceCustomer"]; ?></td>
<td align="center"><?php echo $row["SCCapacity"]; ?> </td>
<td align="center"><?php echo $row["SCFreeOKline"]; ?>
<td align="center"><?php echo $row["PowerConnectedFrom"]; ?></td>
<td align="center"><?php echo $row["BACKUP"]; ?></td>
<td align="center"><?php echo $row["Protection"]; ?></td>
<td align="center"><?php echo ($row["DATACapacity"]-$row["ConnecteddataCustomer"]); ?></td>
<td align="center"><?php echo ($row["VOICECapacity"]-$row["ConnectedvoiceCustomer"]); ?></td>
<td align="center"><a href="fanedit.php?NE=<?php echo $row["NE"]; ?>" >Edit</a></td><td align="center">
</tr>
<?php $count++; } }?>
</tbody>
</table>

</body>
</html>