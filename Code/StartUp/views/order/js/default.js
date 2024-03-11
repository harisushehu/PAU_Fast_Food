$(function() {
	
	$.get('order/xhrGetListings', function(o) {		
                
			for (var i = 0; i < o.length; i++)
		{
                    if(i == 0)
                    {
                        $('#listInserts').append('<div class="row">');
                    }
                    
			$('#listInserts').append('<div class="grid_4"><div class="gall_block"><div class="maxheight"><div class="gall_bot"><div class="text1">' + o[i].order + '</div>' +o[i].type+ '<br><a id="del" class="btn" rel="'+o[i].id+'" href="#">Cancel</a></div></div></div></div>');
                    
                    if(i == o.length)
                    {
                      $('#listInserts').append('</div>');
                    }
		}  
                
		$('#del').live('click', function() {
			delItem = $(this);
			var id = $(this).attr('rel');
			
			$.post('order/xhrDeleteListing', {'id': id}, function(o) {
				delItem.parent().remove();
                                
                                alert('Your have successfully cancel you order'); 
                                
			}, 'json');
			
			return false;
		});
		
	}, 'json');

});