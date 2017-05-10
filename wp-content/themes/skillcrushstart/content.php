<article id="post-<?php the_ID(); ?>" class="post-entry">
	<div class="entry-wrap">
		<header class="entry-header">
				<!-- div tag added to update date info on posts -->
				<div class="entry-meta">
					<h3 class="entry-time"><?php the_date(); ?></h3>
				</div>

					<h2 class="entry-title">
					<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h2>
		</header>
		<div class="entry-summary">

				<figure>
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail('full'); ?>
						<?php endif; ?>
				</figure>

			<?php the_content(); ?>
		</div>

		<footer class="entry-footer">
			<div class="entry-meta">
					<!-- span tag added to update category & author info on posts -->
					<span class="entry-terms comments author">
						Written by <?php the_author(); ?>
						/
						Posted in <?php the_category(', '); ?>
						/   <!-- slash indicates spacing between date, category, & author -->

							<?php echo get_comments_number(); ?> comments
							     <!-- took out span tag from prev & replaced with just php tag -->
										<!-- <span class="entry-terms comments"><?php echo get_comments_number(); ?> comments</span> -->
					</span>

			</div>
		</footer>
	</div>
</article>
