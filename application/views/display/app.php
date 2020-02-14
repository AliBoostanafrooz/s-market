<div class="row s-one-app-info">
	<div class="col">
		<img src=" <?php echo base_url('Assets/img/apps/icon/icon.svg') ?>" class="s-icon-one-app"/>
		<h3><?php echo $app_info[0]->name; ?></h3>
	</div>
	<div class="col">
		<table class="table">
			<tr>
				<td>تعداد دانلود</td>
				<td><?php echo "+",$app_info[0]->download_count; ?></td>
			</tr>

			<tr>
				<td>حجم برنامه</td>
				<td><?php echo $app_info[0]->size,"مگابایت"; ?></td>
			</tr>

			<tr>
				<td>تاریخ آخرین بروزرسانی</td>
				<td><?php echo $app_info[0]->update_at; ?></td>

			</tr>

			<tr>
				<td>دسته بندی</td>
				<td><?php echo $app_info[0]->category; ?></td>

			</tr>

		</table>
	</div>







	<div class="col">
		<div class="btn btn-success">دریافت برنامه</div>
	</div>
</div>
</div>

<div class="container">
	<div class="row s-one-app-info">
		<div class="col">
			توضیحات برنامه:	 <br>

			<?php echo $app_info[0]->description; ?>
			<br>
		</div>
	</div>
</div>