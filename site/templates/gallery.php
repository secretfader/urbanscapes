<?php snippet('header') ?>
<section class='content gallery'>
	<nav class='gallery-type'>
		<ul>
			<?php foreach($page->children as $child): ?>
			<li>
				<a href='<?php echo $child->url() ?>'><?php echo $child->title() ?></a>
			</li>
			<?php endforeach ?>
		</ul>
	</nav>
	<div class='photo barred'>
		<iframe class='shoplocket-embed' src='https://www.shoplocket.com/products/69Fpb/embed?style=modal' width='355' height='325' frameborder='0' style='max-width:100%;' scrolling='no'></iframe>
	</div>
	<div class='photo dig'>
		<iframe class='shoplocket-embed' src='https://www.shoplocket.com/products/Z30mF/embed?style=modal' width='355' height='325' frameborder='0' style='max-width:100%;' scrolling='no'></iframe>
	</div>
	<div class='photo irradiated'>
		<iframe class='shoplocket-embed' src='https://www.shoplocket.com/products/vdE6y/embed?style=modal' width='355' height='325' frameborder='0' style='max-width:100%;' scrolling='no'></iframe>
	</div>
	<div class='photo spokes'>
		<iframe class='shoplocket-embed' src='https://www.shoplocket.com/products/cr6xo/embed?style=modal' width='355' height='325' frameborder='0' style='max-width:100%;' scrolling='no'></iframe>
	</div>
</section>
<script src='https://www.shoplocket.com/assets/widgets/embed.js' type='text/javascript'></script>
<?php snippet('footer') ?>