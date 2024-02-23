




<div class="ritz grid-container" dir="ltr">
	<table width="30%" border="1" style="border-collapse:collapse;">

		<tbody>
	<tr style="background-color:#008000">
		
			
				
			
		</th>
		<td class="s0" dir="ltr">MC code</td>
		<td class="s1" dir="ltr">MC name</td>
		<td class="s0" dir="ltr">MC code</td>
		<td class="s1" dir="ltr">MC name</td>
		
	</tr>
	<tr style="background-color:#008000">
		
			
			
		</th>
		<td class="s3" dir="ltr">MC 1</td>
		<td class="s4" dir="ltr">Adama</td>
		<td class="s3" dir="ltr">MC 5</td>
		<td class="s4" dir="ltr">Bishoftu</td>
		</tr>
		
			<tr style="background-color:#008000">
			<td class="s3" dir="ltr">MC 2</td>
			<td class="s4" dir="ltr">Assela</td>
			<td class="s3" dir="ltr">MC 6</td>
			<td class="s4" dir="ltr">Ginir</td>
			</tr>
			<tr style="background-color:#008000">
				
					
					<td class="s3" dir="ltr">MC 3</td>
					<td class="s4" dir="ltr">Bale Robe</td>
					<td class="s3" dir="ltr">MC 7</td>
					<td class="s4" dir="ltr">Metehara</td>
					
				</tr>
					<tr style="background-color:#008000">
						
							
							<td class="s3" dir="ltr">MC 4</td>
							<td class="s4" dir="ltr">Batu</td>
							
						</tr>
  </tbody>
</table>
</div>

    <div class="ritz grid-container" dir="ltr">
	<table width="30%" border="1" style="border-collapse:collapse;">

		<tbody>
			 <form action="pinformation.php" method="POST" nsubmit='return checkvalidations()'>
	
							<tr style="background-color:#008000"><th id="0R5" style="height: 20px;" class="row-headers-background">
								
								<td class="s6" dir="ltr" colspan="4">Site Information</td>
								<td class="s6" dir="ltr" colspan="2">Task Domain</td>
								<td class="s6" dir="ltr" colspan="2">Task detail</td>
								<td class="s7" dir="ltr" rowspan="2">Spare part used (Item code and discreption)</td>
								<td class="s7" dir="ltr" rowspan="2">Task progress (Open/ Closed)</td>
								<td class="s8" dir="ltr" rowspan="2">Task Duration</td>
								<td class="s8" dir="ltr" rowspan="2">Date</td>
								<td class="s9" dir="ltr" rowspan="2">Team Members ID</td>
								<td class="s7" dir="ltr" rowspan="2">Challenges</td>
								<td class="s7" dir="ltr" rowspan="2">Remark</td>
							</tr>
								<tr style="background-color:#008000"><th id="0R6" style="height: 20px;" class="row-headers-background">
									
									<td class="s7" dir="ltr" input type="text" name= "Region">Region</td>
									<td class="s10" dir="ltr">Site_Id</td>
									<td class="s11 softmerge" dir="ltr">
										<div class="softmerge-inner" style="width: 99px; left: -3px;">Power solution type</div>
									</td>
									<td class="s11 softmerge" dir="ltr">
										<div class="softmerge-inner" style="width: 99px; left: -3px;">Maintenance center</div>
									</td>
									<td class="s11 softmerge" dir="ltr">
											<div class="softmerge-inner" style="width: 99px; left: -3px;">P&amp;E System</div>
										</td>
										<td class="s11 softmerge" dir="ltr">
											<div class="softmerge-inner" style="width: 99px; left: -3px;">Type and capacity</div></td>
										<td class="s11 softmerge" dir="ltr">
											<div class="softmerge-inner" style="width: 99px; left: -3px;">Task type</div>
										</td>
										<td class="s12 softmerge" dir="ltr">
											<div class="softmerge-inner" style="width: 99px; left: -3px;">Detail Task Discription</div>
										</td>
									</tr>
								</form>
								</tbody>
							<?php
require('db.php');
$count=1;
//$sel_query="SELECT * FROM power";
$sel_query = mysqli_query($conn,"SELECT * FROM power  WHERE WEEK(date) = week(now()) ");
$result = mysqli_query($con,$sel_query);
			$intt=mysqli_num_rows($result);
			echo'there are <input type="button"  id="intt" value='.$intt.'> record';

while($row = mysqli_fetch_assoc($result)) {
	
   
	?>
<tr>
<td align="center"><?php echo $count; ?></td>
<td align="center"><?php echo $row["Region"]; ?></td>
<td align="center"><?php echo $row["SiteId"]; ?></td>
<td align="center"><?php echo $row["Powersolutiontype"]; ?></td>
<td align="center"><?php echo $row["Maintenancecenter"]; ?></td>
<td align="center"><?php echo $row["PESystem"]; ?></td>
<td align="center"><?php echo $row["Typeandcapacity"]; ?></td>
<td align="center"><?php echo $row["Tasktype"]; ?></td>
<td align="center"><?php echo $row["DetailTaskDiscription"]; ?></td>
<td align="center"><?php echo $row["SparepartusedItemcodeanddiscreption"]; ?> </td>
<td align="center"><?php echo $row["TaskprogressOpenClosed"]; ?>
<td align="center"><?php echo $row["TaskDuration"]; ?></td>
<td align="center"><?php echo $row["date"]; ?></td>
<td align="center"><?php echo $row["TeamMembersID"]; ?></td>
<td align="center"><?php echo $row["Challenges"]; ?></td>
<td align="center"><?php echo $row["Remark"]; ?></td>
</tr>
<?php $count++; } ?>
							</table>
						</div>
						