<?php $artists = $pages->findByUID('about')->children() ?>
<?php foreach ($artists as $artist): ?>
	<div class='bio'>
		<h2 class='name'><?php echo $artist->title() ?></h2>
		<a class='profile-image <?php echo $artist->uid() ?>' href='<?php echo $artist->link() ?>'>&nbsp;</a>
		<?php echo kirbytext($artist->text()) ?>
		<p class='artist-link'>
			<a href='<?php echo $artist->link() ?>'>Learn more about <?php echo $artist->title() ?> &raquo;</a>
		</p>
	</div>
<?php endforeach ?>
