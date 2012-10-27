<?php head(array('bodyid'=>'home')); ?>

<div id="primary">

    <?php if (get_theme_option('Homepage Text')): ?>
    <p><?php echo get_theme_option('Homepage Text'); ?></p>
    <?php endif; ?>

<div class="feature-content">
	
    <div class="feature-image">
		<img src="http://www.kitchensisters.org/archive/archive/files/2adadada01c9bb0d60c4668c004297d5.jpg" id="feature-image" class="circle-mask">
	</div>

	<div id="feature-text">
		<h1>Farm Aid: Saving the Family Farm</h1>
		<p>Farm Aid is as much a ritual gathering of America's farming community as it is a fundraiser and a concert.</p>
		<p>	At the annual event, corn and pig farmers trade tips and plot lobbying strategies, and college kids listen as Dave Matthews plays a killer set. It's a story of hard times and new possibilities, of farmers markets, of young people, whose parents were forced off the land, returning to farm again, and the beginning of new food chains. The Kitchen Sisters traveled to Camden, N.J., this fall to document Farm Aid for Hidden Kitchens. <a href="http://www.kitchensisters.org/archive/collections/show/6">Read More</a></p>
	</div>
</div>

</div><!-- end primary -->

<div id="secondary">

    <div id="recent-items">
        <h2><?php echo __('Recently Added Items'); ?></h2>

        <?php
        $homepageRecentItems = (int)get_theme_option('Homepage Recent Items') ? get_theme_option('Homepage Recent Items') : '3';
        set_items_for_loop(recent_items($homepageRecentItems));
        if (has_items_for_loop()):
        ?>

        <div class="items-list">
			<?php set_items_for_loop(recent_items(200)); ?>
            <?php while (loop_items()): ?>

                <?php if(item_has_thumbnail()): ?>
                <div>
                    <?php echo link_to_item(item_square_thumbnail()); ?>
                </div>
                <?php endif; ?>

            <?php endwhile; ?>
        </div>

        <?php else: ?>

        <p><?php echo __('No recent items available.'); ?></p>

        <?php endif; ?>
    </div><!--end recent-items -->

</div><!-- end secondary -->

<?php foot(); ?>
