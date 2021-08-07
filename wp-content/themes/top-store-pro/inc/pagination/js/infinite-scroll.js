/* Ajax functions */
jQuery(document).ready(function($){
        //find scroll position
        //init
 if(jQuery('#loadMore').length!='') {      
        var that    = jQuery('#loadMore');
        var page    = that.data('page');
        var count   = 2;
        var ppp     = that.data('ppp');
        var total   = that.data('total');
        var ajaxurl = that.data('url');
        jQuery(window).scroll(function(){
        if (jQuery(window).scrollTop() == jQuery(document).height() - jQuery(window).height()){
        if (count > total){
              return false;
           }else{
               loadScrolling(count,ppp,ajaxurl);
           }
           count++;
          }
       });
function loadScrolling(page,ppp,ajaxurl){
jQuery('.inifiniteLoader').show('fast');
jQuery.ajax({  
            url: ajaxurl,
            type: 'POST',
            data: {
                offset:(page * ppp),
                paged: page,
                ppp: ppp,
                action:'top_store_pro_ajax_script_load_more'
            },
    }).success( function(response){ 
if (response){ 
page++;
jQuery(".primary-content-wrap #main").append(response); // CHANGE THIS!
if(page == total){
jQuery('.inifiniteLoader').hide('1000');
jQuery('.scroll-error').append('<div id="no-more" class="text-center"><p>No more posts to load</p></div>');
  }
}
jQuery('.inifiniteLoader').hide('1000');
});
return false;
}
}
});