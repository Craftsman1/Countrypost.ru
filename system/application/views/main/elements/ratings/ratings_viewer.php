<span class="ratings_viewer">	<input type="hidden" id="<?= $rating_type ?>" name="<?= $rating_type ?>" value="">	<? for ($i = 0;	$i < 5;	$i++) { ?>	<div class="star<?= $i ?><? if ($i <= $rating) : ?> on<? endif; ?>"></div>	<? } ?></span><span class="ratings_label">	<?= $description ?></span>