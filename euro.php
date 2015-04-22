<?php
/**
 * Template Name: euro
 */
get_header();?>


<div id="content">
	<div id="tables">
		<div id="grpA" class="myTables">
			<table class="buttonSpace" >
				<tr>
					<th>Group A</th>
				</tr>
				<tr>
					<td class="hide table">1.</td>
				</tr>
				<tr>
					<td class="hide table">2.</td>
				</tr>
				<tr>
					<td class="hide table">3.</td>
				</tr>
				<tr>
					<td class="hide table">4.</td>
				</tr>
			</table>
		</div><!-- grpa end -->
		<div id="grpB" class="myTables">
			<table class="buttonSpace" >
				<tr>
					<th>Group B</th>
				</tr>
				<tr>
					<td class="hide table">1.</td>
				</tr>
				<tr>
					<td class="hide table">2.</td>
				</tr>
				<tr>
					<td class="hide table">3.</td>
				</tr>
				<tr>
					<td class="hide table">4.</td>
				</tr>
			</table>
		</div><!-- grpb end -->
		<div id="grpC" class="myTables">
			<table>
				<tr>
					<th>Group C</th>
				</tr>
				<tr>
					<td class="hide table">1.</td>
				</tr>
				<tr>
					<td class="hide table">2.</td>
				</tr>
				<tr>
					<td class="hide table">3.</td>
				</tr>
				<tr>
					<td class="hide table">4.</td>
				</tr>
			</table>
		</div><!-- grpc end -->
		<div id="grpD" class="myTables">
			<table>
				<tr>
					<th>Group D</th>
				</tr>
				<tr>
					<td class="hide table">1.</td>
				</tr>
				<tr>
					<td class="hide table">2.</td>
				</tr>
				<tr>
					<td class="hide table">3.</td>
				</tr>
				<tr>
					<td class="hide table">4.</td>
				</tr>
			</table>
		</div><!-- grpd end -->
	</div><!-- tables end -->
	
<?php
require('pesdrawbuttons.php');
?>

<script>	
	
	var oReq = new XMLHttpRequest();
	oReq.onload = function (){
		templateUrl = this.responseText;
		return templateUrl;
	};
	oReq.open("get", "http://52.16.241.39/blog/wp-content/themes/pesdraw/getTemplateUrl.php", true);
	
	oReq.send();
	</script>
	
	


<script src="<?php bloginfo('template_url');?>/js/euro.js"></script>
<script src="<?php bloginfo('template_url');?>/js/scrollTopButton.js"></script>
<script src="<?php bloginfo('template_url');?>/js/scroll.js"></script>
