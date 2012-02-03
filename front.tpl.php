		<div id="front-header">
			<div class="container">
				<a title="Arts and Sciences homepage" href="http://artsandsciences.osu.edu" id="banner">&nbsp;</a>
				<div id="front-image" class="span-11">
					<?php print $front_image; ?>
				</div>
				<div id="front-links" class="span-10 last">
					<?php print $front_links; ?>
				</div>
			</div>
			<div id="front-header-tile">&nbsp;</div>
		</div>

	<div id="main-content" class="container">
		<div>

			<div class="content span-24">
				<div id="front-content" class="span-16">
					<?php if($tabs){ ?>
						<?php print $tabs ?>
					<?php } ?>
					<?php if($messages){ ?>
						<div id="message"><?php print $messages ?></div>
					<?php } ?>
					<?php print $before_content ?>
					<?php print $content ?>
				</div>
				<div id="news-events" class="span-8 last">
					<?php print $right; ?>
				</div>
			</div>

		</div><!-- #leftcontent-nostyle -->

	</div>