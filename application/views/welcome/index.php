<script type="text/javascript">
var subjects = [<?php foreach ($champion_name as $champ_name) { echo '"'.stripslashes($champ_name->name).'",'; }?>];
$(document).ready(function(){
	$( document ).tooltip({
		track: true
	});
	var guidesChampionListFilter = function() {
		var name = $('#search').val();
		var $possible = $('#champion_list > a');
		$possible.hide();
		
		if(name.length) {
			$possible = $possible.filter('[data-name*="' + $.trim(name.toLowerCase()) + '"]');
			$possible.fadeIn(200);
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
				<input type="text" class="span12" placeholder="Choose a champion..." id="search" autocomplete="off" />
			</form>
		</div>
	</div>
	<div class="row">
		<div class="span12">
			<div id="champion_list">
				<?php foreach ($champion_name as $champ_name) { ?>
					<a href="guide/<?php echo strtolower($champ_name->name); ?>" data-toggle="tooltip" title="<?php echo $champ_name->title; ?>" style="background: url(http://lkimg.zamimg.com/shared/riot/images/champions/<?php echo $champ_name->id; ?>_104.png) top left no-repeat;" data-name="<?php echo strtolower($champ_name->name); ?>" alt="<?php echo $champ_name->title; ?>" class="champion_icon img-rounded">

						<div style="background-color: #000000; position: absolute; bottom: 0; width: 100%; text-align: center; line-height: 26px;"><?php echo $champ_name->name; ?></div></a>
				<?php } ?>
			</div>
		</div>
	</div>
</div>