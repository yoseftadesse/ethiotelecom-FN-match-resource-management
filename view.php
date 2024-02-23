



<table  class ="table" border="1">
<thead>
<tr><th><strong>NO</strong></th><th><strong>Region</strong></th><th><strong>Specific Location</strong>
<th><strong>NE_ID </strong></th><th><strong>NE Capacity</strong></th><th><strong>DATA Capacity </strong>
<th><strong>Connected data Customer</strong></th><th><strong>VOICE Capacity</strong></th><th><strong>Connected voice Customere</strong>
<th><strong>S/C Capacity</strong></th><th><strong>S/C Free OK line</strong></th>
</th><th><strong>Power Connected From</strong> </th><th><strong>Alternative Power connection or BACKUP</strong></th><th><strong>Protection</strong></th> <th><strong>Data free for sale</strong></th><th><strong>Voice free for sale</strong></th></tr>
</thead>

<tbody>
<?php
require('db.php');
$count=1;
$sel_query="SELECT * FROM resource";
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
</tr>
<?php $count++; } ?>
</tbody>
</table>

