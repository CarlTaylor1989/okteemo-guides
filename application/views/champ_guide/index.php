<div class="container">
	<div class="row">
		<div class="span12">
			<h1>Guide for <?php echo $champ_name->name; ?></h1>
			<?php foreach ($guides_info as $guide_key) { ?>
				<div>
					<h2><?php echo $guide_key->title; ?></h2>
					<h3><?php echo $guide_key->sub_title; ?></h3>
					<p><?php echo $guide_key->author; ?></p>
				</div>
			<?php } ?>
		</div>
	</div>
</div>