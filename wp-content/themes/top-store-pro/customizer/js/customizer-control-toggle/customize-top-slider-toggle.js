( function( $ ) {
//**********************************/
// Slider settings
//**********************************/
OPNControlTrigger.addHook( 'top-store-toggle-control', function( argument, api ){
		OPNCustomizerToggles ['top_store_top_slide_layout'] = [
		    {
				controls: [    
				'top_store_lay2_adimg', 
				'top_store_lay2_url',
				'top_store_lay3_adimg',
				'top_store_lay3_url',
				'top_store_lay3_adimg2',
				'top_store_lay3_2url',
				'top_store_lay3_adimg3',
				'top_store_lay3_3url',
				'top_store_lay4_adimg1',
				'top_store_lay4_url1',
				'top_store_lay4_adimg2',
				'top_store_lay4_url2',
				],
				callback: function(slideroptn){
					if(slideroptn =='slide-layout-1'){
					return false;
					}
					return true;
				}
			},	
			{
				controls: [    
				'top_store_lay2_adimg', 
				'top_store_lay2_url',
				],
				callback: function(slideroptn){
					if(slideroptn =='slide-layout-2'){
					return true;
					}
					return false;
				}
			},	
			{
				controls: [    
				'top_store_lay3_adimg',
				'top_store_lay3_url',
				'top_store_lay3_adimg2',
				'top_store_lay3_2url',
				'top_store_lay3_adimg3',
				'top_store_lay3_3url',
				],
				callback: function(slideroptn){
					if(slideroptn =='slide-layout-3'){
					return true;
					}
					return false;
				}
			},	
			{
				controls: [    
				'top_store_lay4_adimg1',
				'top_store_lay4_url1',
				'top_store_lay4_adimg2',
				'top_store_lay4_url2',
				],
				callback: function(slideroptn){
					if(slideroptn =='slide-layout-4'){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'top_store_top_slide_lay5_content',
				],
				callback: function(slideroptn){
			    if(slideroptn =='slide-layout-5'){
					return true;
					}
					return false;
				}
			},
			{
				controls: [    
				'top_store_top_slide_content',
				],
				callback: function(slideroptn){
			    if(slideroptn =='slide-layout-5'){
					return false;
					}
					return true;
				}
			},
			 
		];	
		
		OPNCustomizerToggles ['top_store_top_slider_optn'] = [
		    {
				controls: [    
				'top_store_top_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			},
			
			];

			OPNCustomizerToggles ['top_store_cat_slider_optn'] = [
		    {
				controls: [    
				'top_store_cat_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			},
			
			];
			OPNCustomizerToggles ['top_store_product_slider_optn'] = [
		    {
				controls: [    
				'top_store_product_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			},
			
			];
			OPNCustomizerToggles ['top_store_category_slider_optn'] = [
		    {
				controls: [    
				'top_store_category_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			},
			
			];
			OPNCustomizerToggles ['top_store_product_list_slide_optn'] = [
		    {
				controls: [    
				'top_store_product_list_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			},
			
			];
			OPNCustomizerToggles ['top_store_feature_product_slider_optn'] = [
		    {
				controls: [    
				'top_store_feature_product_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			},
			
			];
			OPNCustomizerToggles ['top_store_cat_tb_lst_slider_optn'] = [
		    {
				controls: [    
				'top_store_cat_tb_lst_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			},
			
			];
			OPNCustomizerToggles ['top_store_brand_slider_optn'] = [
		    {
				controls: [    
				'top_store_brand_slider_speed',
				],
				callback: function(sliderspdoptn){
					if(sliderspdoptn == true){
					return true;
					}
					return false;
				}
			},
			
			];
    });
})( jQuery );