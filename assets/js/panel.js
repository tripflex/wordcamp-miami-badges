// General panel scripts .
function wordcamp_miami_badges_randomUUID() {
		var s = [], itoh = '0123456789ABCDEF';
		for (var i = 0; i <6; i++) s[i] = Math.floor(Math.random()*0x10);
		return s.join('');
}
var wordcamp_miami_badges_field_callbacks = [];
jQuery('document').ready(function($){
	// add row
	$('body').on('click', '.wordcamp-miami-badges-add-group-row', function(){
		var clicked = $( this ),
			rowid = wordcamp_miami_badges_randomUUID(),
			template = $( '#' + clicked.data('rowtemplate')).html().replace(/{{id}}/g, rowid);
			if(clicked.data('field')){	
				var ref = clicked.data('field').split('-');
				template = template.replace(/\_\_i\_\_/g, ref[ref.length-2]);
			}
			//console.log(clicked.parent().parent().find('.groupitems').last());
			template = template.replace(/\_\_count\_\_/g, clicked.parent().parent().find('.groupitems').length);
			clicked.parent().before(template);

			for(var callback in wordcamp_miami_badges_field_callbacks){
				if( typeof window[wordcamp_miami_badges_field_callbacks[callback]] === 'function'){
					window[wordcamp_miami_badges_field_callbacks[callback]]();
				}
			}

	});
	$('body').on('click', '.wordcamp-miami-badges-removeRow', function(){
		$(this).next().remove();
		$(this).remove();
		////console.log(this);
	});
	// tabs
	$('body').on('click', '.wordcamp-miami-badges-metabox-config-nav li a, .wordcamp-miami-badges-shortcode-config-nav li a, .wordcamp-miami-badges-settings-config-nav li a, .wordcamp-miami-badges-widget-config-nav li a', function(){
		$(this).parent().parent().find('.current').removeClass('current');
		$(this).parent().parent().parent().parent().find('.group').hide();
		$(''+$(this).attr('href')+'').show();
		$(this).parent().addClass('current');
		if($(this).data('tabset').length){
			$('#'+$(this).data('tabset')).val($(this).data('tabkey'));
		}
		return false;
	});

	// initcallbacks
	setInterval(function(){
		$('.wordcamp-miami-badges-init-callback').each(function(k,v){
			var callback = $(this);
			if( typeof window[callback.data('init')] === 'function'){
				console.log(callback.data('init'));
				window[callback.data('init')]();
				callback.removeClass('wordcamp-miami-badges-init-callback');
			}
		});
	}, 100);
});
