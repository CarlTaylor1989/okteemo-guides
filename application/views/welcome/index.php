<script type="text/javascript">
var subjects = [<?php foreach ($champion_name as $champ_name) { echo '"'.stripslashes($champ_name->name).'",'; }?>];
$(document).ready(function(){
	$('#search').typeahead({source: subjects});

	var guidesChampionListFilter = function() {
		var name = $('#search').val();
		var $possible = $('#champion_list > a');
		$possible.hide();
		
		if(name.length) {
			$possible = $possible.filter('[data-name*="' + $.trim(name.toLowerCase()) + '"]');
		}

		$possible.show();
	}
	$('#search').keyup(function(){
		guidesChampionListFilter();
	});
	$('#search').focus();
});
</script>
<div class="container">
	<div class="row">
		<div class="span12">
			<form>
				<input type="text" class="span12" placeholder="Choose a..." id="search" data-provide="typeahead" data-items="4" autocomplete="off" />
			</form>
		</div>
	</div>
	<div class="row">
		<div class="span12">
			<div id="champion_list">
				<?php foreach ($champion_name as $champ_name) { ?>
					<a href="?champion=<?php echo strtolower($champ_name->name); ?>" style="width: 80px; height: 80px; background-color: #FFFFFF; display: block; float: left; margin-right: 20px; margin-bottom: 20px;" data-name="<?php echo strtolower($champ_name->name); ?>"><?php echo $champ_name->name; ?></a>
				<?php } ?>
			</div>
		</div>
	</div>
</div>