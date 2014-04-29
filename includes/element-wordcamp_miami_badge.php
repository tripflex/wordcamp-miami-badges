<div class="wordcamp_miami_badge">
	<?php
		$badge_type = $atts['badge_type'];
		if($badge_type == 'attending'):
	?>
			<a href="http://2014.miami.wordcamp.org/"><img src="http://2014.miami.wordcamp.org/files/2014/03/wcmia_2014_badge_sponsoring.png" alt="I am a Proud Sponsor of WordCamp Miami 2014" title="I am a Proud Sponsor of WordCamp Miami 2014" width="150" height="175" /></a>
	<?php 
		elseif($badge_type == 'speaking'): 
	?>
			<a href="http://2014.miami.wordcamp.org/"><img src="http://2014.miami.wordcamp.org/files/2014/03/wcmia_2014_badge_speaking.png" alt="I am Speaking at WordCamp Miami 2014" title="I am Speaking at WordCamp Miami 2014" width="150" height="175" /></a>
	<?php
		elseif($badge_type == 'sponsor'):
	?>
	<a href="http://2014.miami.wordcamp.org/"><img src="http://2014.miami.wordcamp.org/files/2014/03/wcmia_2014_badge_sponsoring.png" alt="I am a Proud Sponsor of WordCamp Miami 2014" title="I am a Proud Sponsor of WordCamp Miami 2014" width="150" height="175" /></a>
	<?php
		elseif($badge_type == 'volunteer'):
	?>
			<a href="http://2014.miami.wordcamp.org/"><img src="http://2014.miami.wordcamp.org/files/2014/03/wcmia_2014_badge_volunteering.png" alt="I am Volunteering at WordCamp Miami 2014" title="I am Volunteering at WordCamp Miami 2014" width="150" height="175" /></a>
	<?php
		endif;
	?>
</div>