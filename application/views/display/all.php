<div class="s-app-group">
	<div class="s-app-group-title"> برنامه های جدید برگزیده</div>
	<?php
	foreach ($best_new_apps

			 as $app) { ?>
		<div class="s-app-panel">
			<a href='<?php echo base_url("index.php/display/app/$app->id"); ?>'>
				<img src=" <?php echo base_url('Assets/img/apps/icon/icon.svg') ?>" class="s-app-icon"/>
				<div class="s-app-name"> <?php echo $app->name; ?> </div>

				<?php if ($app->price == 0) { ?>
					<div class="s-app-price">رایگان</div>
					<?php if ($app->inpay == 1) { ?>
						<div class="s-app-price">پرداخت درون برنامه ای</div>
					<?php } ?>
				<?php } else { ?>
					<div class="s-app-price">  <?php echo 'تومان' . $app->price; ?>
					</div>
				<?php } ?>
			</a>
		</div>
	<?php } ?>
</div>


<div class="s-app-group">
	<div class="s-app-group-title"> بازیهای برگزیده تازه</div>
	<?php
	foreach ($best_new_games as $game) { ?>
		<div class="s-app-panel">
			<a href='<?php echo base_url("index.php/display/app/$app->id"); ?>'>
				<img src=" <?php echo base_url('Assets/img/apps/icon/icon.svg') ?>" class="s-app-icon"/>
				<div class="s-app-name"> <?php echo $game->name; ?> </div>

				<?php if ($game->price == 0) { ?>
					<div class="s-app-price">رایگان</div>
					<?php if ($game->inpay == 1) { ?>
						<div class="s-app-price">پرداخت درون برنامه ای</div>
					<?php } ?>
				<?php } else { ?>
					<div class="s-app-price">  <?php echo 'تومان' . $game->price; ?>
					</div>
				<?php } ?>
			</a>
		</div>
	<?php } ?>

</div>


<div class="s-app-group">
	<div class="s-app-group-title"> برنامه های بروز شده</div>
	<?php
	foreach ($best_new_updates as $update) { ?>
		<div class="s-app-panel">
			<a href='<?php echo base_url("index.php/display/app/$app->id"); ?>'>
				<img src=" <?php echo base_url('Assets/img/apps/icon/icon.svg') ?>" class="s-app-icon"/>
				<div class="s-app-name"> <?php echo $update->name; ?> </div>

				<?php if ($update->price == 0) { ?>
					<div class="s-app-price">رایگان</div>
					<?php if ($update->inpay == 1) { ?>
						<div class="s-app-price">پرداخت درون برنامه ای</div>
					<?php } ?>
				<?php } else { ?>
					<div class="s-app-price">  <?php echo 'تومان' . $update->price; ?>
					</div>
				<?php } ?>
			</a>
		</div>
	<?php } ?>

</div>
