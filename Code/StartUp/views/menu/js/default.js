$(function() {
	
	$.get('menu/xhrGetListings', function(o) {		
                
			for (var i = 0; i < o.length; i++)
		{
                    if(i == 0)
                    {
                        $('#listInserts').append('<div class="row">');
                    }
                    
			$('#listInserts').append('<div class="grid_4"><div class="gall_block"><div class="maxheight"><img height="350" width="370" src=data:image;base64,' + o[i].image + '><div class="gall_bot"><div class="text1">' + o[i].name + '</div>' + o[i].price +'TL' +  '</br>' +o[i].type+ '<br><a id="del" class="btn" rel="'+o[i].id+'" href="#">Order</a></div></div></div></div>');
                    
                    if(i == o.length)
                    {
                      $('#listInserts').append('</div>');
                    }
		}  
                
		$('#del').live('click', function() {
                    
			delItem = $(this);
			var id = $(this).attr('rel');
                        
                       // var check = 0;
			
			$.post('menu/xhrDeleteListing', {'id': id}, function(o) {
                            
                            alert('Food is successfully ordered');
                          
			}, 'json');
                 
			return false;
		});
		
	}, 'json');
	
});