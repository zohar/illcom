<?php
// $Id: views-view.tpl.php,v 1.13.2.2 2010/03/25 20:25:28 merlinofchaos Exp $
?>
<?php if (count($new_rows) > 1): ?>
<div id="featured-slider">
<?php endif;?>
	<?php foreach($new_rows as $row):?>
		<div class="featured-slide">
			<?php if ($row['type'] == 'image'):?>
			<a href="<?php print $row['link_href']?>" title="<?php print $row['link_title']?>">
			<div class="slide-info">
				<h3><?php print $row['title']?></h3>
				<?php print $row['desc'];?>
			</div>
			<?php print $row['image'];?>
			</a>
			<?php else: ?>
				<?php print $row['embed'];?>
			<?php endif; ?>
		</div>
	<?php endforeach; ?>
<?php if (count($new_rows) > 1): ?>
</div>
<?php endif;?>