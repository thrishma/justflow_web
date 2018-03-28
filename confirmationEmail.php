<?php  if (count($confirmationEmail) > 0) : ?>
	<div class="confirmationEmail">
		<?php foreach ($confirmationEmail as $confirmationEmail) : ?>
			<p><?php echo $confirmationEmail ?></p>
		<?php endforeach ?>
	</div>
<?php  endif ?>
