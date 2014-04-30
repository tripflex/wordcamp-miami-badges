<?php
	$custom_style = '';
	$badge_type = $atts['badge_type'];
	$alignment = $atts['alignment'];
	if($alignment == 'left') $custom_style = 'float: left;';
	if($alignment == 'right') $custom_style = 'float: right;';
	if($alignment == 'center') $custom_style = 'margin: auto;';
?>
<div class="wordcamp_miami_badge" style="<?php echo $custom_style; ?>">
	<?php
		if($badge_type == 'attending'):
	?>
			<a href="http://2014.miami.wordcamp.org/"><img src="http://2014.miami.wordcamp.org/files/2014/03/wcmia_2014_badge_attending.png" alt="I am Attending WordCamp Miami 2014" title="I am Attending WordCamp Miami 2014" width="150" height="175" /></a>
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