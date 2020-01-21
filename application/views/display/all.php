<div class="s-app-group">
	<div class="s-app-group-title"> برنامه های جدید برگزیده </div>
	<?php
	foreach ($applications as $application) { ?>
	<div class="s-app-panel">
		<a href="<?php echo base_url('index.php/display/app'); ?>">
			<img src=" <?php echo base_url('Assets/img/apps/icon/icon.svg') ?>" class="s-app-icon"/>
			<div class="s-app-name"> <?php echo $application->name; ?> </div>
			<?php if ($application->price == 0) {
				?>
				<div class="s-app-price">رایگان</div>
				<?php if ($application->inpay == 1) { ?>
					<div class="s-app-price">پرداخت درون برنامه ای</div>
				<?php } ?>
			<?php } else { ?>
				<div class="s-app-price">  <?php echo 'تومان' . $application->price; ?> </div>
			<?php } ?>
		</a>
	</div>
<?php } ?>
