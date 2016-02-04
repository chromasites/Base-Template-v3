<?php if ( get_field('socicon_placement', 'option') ) { ?>

	<?php if( have_rows('socicon', 'option') ): ?>
	
	    <ul class="socicons <?php the_field('socicon_size', 'option'); ?> <?php the_field('socicon_style', 'option'); ?> <?php the_field('socicon_color', 'option'); ?> <?php the_field('socicon_shadow', 'option'); ?>">
	
	    <?php while( have_rows('socicon', 'option') ): the_row();
			
			$sociconfield = get_sub_field_object('socicon_type');
			$sociconvalue = get_sub_field('socicon_type');
			$sociconlabel = $sociconfield['choices'][ $sociconvalue ]; ?>
			
	        <li class="socicon socicon-<?php the_sub_field('socicon_type'); ?>">
	        <a href="<?php the_sub_field('socicon_link'); ?>" title="<?php echo $sociconlabel; ?>" target="_blank">
	        <span class="fa fa-<?php the_sub_field('socicon_type'); ?>"></span>
	        </a>
	        </li>
	
	    <?php endwhile; ?>
	
	    </ul>
	
	<?php endif; ?>

<?php } ?>