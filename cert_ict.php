
		<div style="background-image:url(./certs/ICT_ONLINECOPY.jpg);no-repeat;position: relative;width:1285px;height:990px; solid black;float: left;" rel="imgtip[0]">
		
			<p style=" padding:380px 0px 0px 0px;"class="ictname">
				<?echo $rows[1]."&nbsp".$rows[0];?>
			</p>
			
			<p style=" padding:45px 0px 0px 0px;"class="ictdate">
				<?echo $rows[13];?>

			</p>
		
			<p style=" padding:120px 0px 0px 0px;"class="ictcer">
				-<?echo $rows[4];?> level

			</p>
		
		
			<p style=" padding:190px 0px 0px 1050px;"class="pvqcnum">
				<?echo $rows[8];?>
			</p>
			<p style=" padding:0px 0px 0px 1050px;"class="pvqcnum">
					<?
					if   ($rows[14] != null)
					echo "Validate Code:".$rows[14];
					?>


			</p>

		</div>	
	