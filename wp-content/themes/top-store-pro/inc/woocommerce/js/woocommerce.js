/********************************/
// TopStoreWooLib Custom Function
/********************************/
(function ($) {
    var TopStoreWooLib = {
        init: function (){
            this.bindEvents();
        },
        bindEvents: function (){
            var $this = this;
            $this.listGridView();
            $this.OffCanvas();
            $this.cartDropdown();
            $this.AddtoCartQuanty();
            $this.AutoCompleteSearch();
            $this.CategoryTabFilter();
            $this.CategoryTabListFilter();
            $this.ProductSlide();
            $this.ProductListSlide();
            $this.CategorySlider();
            $this.BrandSlider();
            $this.FeaturedProductSlider();
          },
        listGridView: function (){
            var wrapper = $('.thunk-list-grid-switcher');
            var class_name = '';
            wrapper.find('a').on('click', function (e){
              e.preventDefault();
                var type = $(this).attr('data-type');
                switch (type){
                    case "list":
                        class_name = "thunk-list-view";
                        break;
                    case "grid":
                        class_name = "thunk-grid-view";
                        break;
                    default:
                        class_name = "thunk-grid-view";
                        break;
                }
                if (class_name != ''){
                    $(this).closest('#shop-product-wrap').attr('class', '').addClass(class_name);
                    $(this).closest('.thunk-list-grid-switcher').find('a').removeClass('selected');
                    $(this).addClass('selected');
                }
              
            });
        },
        OffCanvas: function () {
                   var off_canvas_wrapper = $( '.top-store-off-canvas-sidebar-wrapper');
                   var opn_shop_offcanvas_filter_close = function(){
                  $('html').css({
                       'overflow': '',
                       'margin-right': '' 
                     });
                  $('html').removeClass( 'top-store-enabled-overlay' );
                 };
                 var trigger_class = 'off-canvas-button';
                 if( 'undefined' != typeof topstore_Off_Canvas && '' != topstore_Off_Canvas.off_canvas_trigger_class ){
                       trigger_class = topstore_Off_Canvas.off_canvas_trigger_class;
                 }
                 $(document).on( 'click', '.' + trigger_class, function(e){
                        e.preventDefault();
                       var innerWidth = $('html').innerWidth();
                       $('html').css( 'overflow', 'hidden' );
                       var hiddenInnerWidth = $('html').innerWidth();
                       $('html').css( 'margin-right', hiddenInnerWidth - innerWidth );
                       $('html').addClass( 'top-store-enabled-overlay' );
                 });

                off_canvas_wrapper.on('click', function(e){
                   if ( e.target === this ) {
                     opn_shop_offcanvas_filter_close();
                     }
                });

                off_canvas_wrapper.find('.top-store-filter-close').on('click', function(e) {
                 opn_shop_offcanvas_filter_close();
               });
             },
       cartDropdown: function (){
           /* woo, wc_add_to_cart_params */
              if ( typeof wc_add_to_cart_params === 'undefined' ){
               return false;
              }
              $( document ).on( 'click', '.ajax_add_to_cart', function(e){ // Remove button selector
                 e.preventDefault();
                var data1 = {
                 'action': 'top_store_product_count_update'
                };
                 $.post(
                 woocommerce_params.ajax_url, // The AJAX URL
                 data1, // Send our PHP function
                 function(response_data){
                 $('a.cart-content').html(response_data);
                 }
               );
             });
          // Ajax remove cart item
               $( document ).on( 'click', 'a.remove', function(e){ // Remove button selector
               e.preventDefault();
          // AJAX add to cart request
              var $thisbutton = $( this );
              if ( $thisbutton.is( '.remove' ) ){
                //Check if the button has a product ID
               if ( ! $thisbutton.attr( 'data-product_id' ) ){ 
              return true;
               }
            }
              $product_id = $thisbutton.attr( 'data-product_id' );
              var data = {'product_id':$product_id,
             'action': 'top_store_product_remove'
            };
            $.post(
            woocommerce_params.ajax_url, // The AJAX URL
            data, // Send our PHP function
            function(response){
            $('.top-store-quickcart-dropdown').html(response);
            var data = {
           'action': 'top_store_product_count_update'
            };
           $.post(
           woocommerce_params.ajax_url, // The AJAX URL
           data, // Send our PHP function
           function(response_data){
           $('.cart-content').html(response_data);
           }
         );
       }
   );
      return false;
  });
}, 
       AddtoCartQuanty: function (){
                $('form.cart').on( 'click', 'button.plus, button.minus', function(){
                // Get current quantity values
                var qty = $( this ).siblings('.quantity').find( '.qty' );
                var val = parseFloat(qty.val()) ? parseFloat(qty.val()) : '0';
                var max = parseFloat(qty.attr( 'max' ));
                var min = parseFloat(qty.attr( 'min' ));
                var step = parseFloat(qty.attr( 'step' ));
 
                // Change the value if plus or minus
                if ( $( this ).is( '.plus' ) ) {
                    if ( max && ( max <= val ) ) {
                        qty.val( max );
                    } else {
                        qty.val( val + step );
                    }
                } else {
                    if ( min && ( min >= val ) ) {
                        qty.val( min );
                    } else if ( val > 1 ) {
                        qty.val( val - step );
                    }
                }
                 
            });

        },
        

AutoCompleteSearch:function(){
                   var cat ='';
                   $('.search-autocomplete').autocomplete({
                   classes: {
                       "ui-autocomplete" : "th-wp-auto-search",   
                   }, 
                   minLength:1,
                   source: function( request, response, term){
                    var matcher = $.ui.autocomplete.escapeRegex( request.term );
                    if($("#product_cat").val()){
                      var cat = $("#product_cat").val();
                    }else{
                      var cat = '0';
                    }
                    
                    
                    $(".search-autocomplete").removeClass("ui-autocomplete-loading");
                    $("#search-button").addClass("ui-autocomplete-loading"); 
                    $.ajax({
                      type: 'POST',
                      dataType: 'json',
                      url: topstore.ajaxUrl,
                      data: {
                      action :'top_store_pro_search_site',
                       'match':matcher,  
                       'cat':cat,              
                       },
                      success: function(res){ 
                        if(res.data.length!== 0){
                        var oldFn = $.ui.autocomplete.prototype._renderItem;
                        $.ui.autocomplete.prototype._renderItem = function( ul, item){
                            var re = new RegExp(this.term, "ig") ;
                            var t = item.label.replace(re,"<span style='font-family:JosefinSans-Bold; color:#fe696a;'>" + this.term + "</span>");
                            return $( "<li></li>" )
                                .data( "item.autocomplete", item )
                                .append( "<a href=" + item.link + "><div class='srch-prd-img'>" + item.imglink + "</div><div class='srch-prd-content'><span class='title'>" + t + "</span><span class='price'>" + item.price + "</spn></div></a>" )
                                .appendTo( ul );

                        }
                      }else{
                         $.ui.autocomplete.prototype._renderItem = function( ul, item){
                         return $( "<li></li>" )
                                .data( "item.autocomplete", item )
                                .append( "<div class='no-result-msg'>No Result Found</div>" )
                                .appendTo( ul );
                              }

                      };
                        response(res.data.slice(0, 5));   
                        if(res.data.length > 5){
                        var href = window.location.href;
                        var index = href.indexOf('/wp-admin');
                        var homeUrl = href.substring(0, index);
                        var serachurl = homeUrl + '?s='+ matcher +'&product_cat='+cat+'&post_type=product';
                        $(".th-wp-auto-search").append('<a href="'+ serachurl +'" class="search-bar__view-all" >View all results</a>');
                       }
                        $(".search-autocomplete").removeClass("ui-autocomplete-loading");
                        $("#search-button").removeClass("ui-autocomplete-loading"); 
                      
                      },

                    });
                  },
                  response: function(event, ui){
                          if (ui.content.length == 0){
                              var noResult = { value:"",label:"",imglink:"",price:"" }; 
                              ui.content.push(noResult);  
                              
                          }
                      },
                }).bind('focus change', function(){ 
                   $(this).autocomplete("search");
                   } 
                );


 },
/***********************/        
// Front Page Function
/***********************/  
      CategoryTabFilter:function(){
                         //product slider 
                          if(topstore.top_store_single_row_slide_cat == true){
                          var sliderow = false;
                          }else{
                          var sliderow = true;
                          }
                    // slide autoplay
                            if(topstore.top_store_cat_slider_optn == true){
                            var cat_atply = true;
                            }else{
                            var cat_atply = false; 
                            } 
                     //no.slide
                            if(topstore.top_store_sidebar_front_option =='no-sidebar'){
                             var numslide = parseInt('5');
                            }else if(topstore.top_store_sidebar_front_option =='disable-left-sidebar' || topstore.top_store_sidebar_front_option =='disable-right-sidebar'){
                             var numslide = parseInt('4');
                            }else{
                             var numslide = parseInt('4');
                            }       
                            var owl = $('.thunk-product-cat-slide');
                                     owl.owlCarousel({
                                       items:numslide,
                                       nav: true,
                                       owl2row:sliderow, 
                                       owl2rowDirection: 'ltr',
                                       owl2rowTarget: 'thunk-woo-product-list',
                                       navText: ["<i class='slick-nav fa fa-angle-left'></i>",
                                       "<i class='slick-nav fa fa-angle-right'></i>"],
                                       loop:cat_atply,
                                       dots: false,
                                       smartSpeed: 1800,
                                       autoHeight: false,
                                       margin: 15,
                                       autoplay:cat_atply,
                                       autoplayHoverPause: true,
                                       autoplayTimeout: parseInt(topstore.top_store_cat_slider_speed),
                                       responsive:{
                                       0:{
                                           items:2,
                                           margin:7.5,
                                       },
                                       768:{
                                           items:3,
                                       },
                                       900:{
                                           items:3,
                                       },
                                       1025:{
                                           items:numslide,
                                       }
                                   }
                                });
                          $('#thunk-cat-tab li a:first').addClass('active');
                          $(document).on('click', '#thunk-cat-tab li a', function(e){
                          $('#thunk-cat-tab .tab-content').append('<div class="thunk-loadContainer"> <div class="loader"></div></div>');
                          $(".thunk-product-tab-section .thunk-loadContainer").css("display", "block");
                          $('#thunk-cat-tab li a.active').removeClass("active");
                          $(this).addClass('active');
                                  var data_term_id = $( this ).attr( 'data-filter' );
                                  $.ajax({
                                      type: 'POST',
                                      url: topstore.ajaxUrl,
                                      data: {
                                        action :'top_store_pro_cat_filter_ajax',
                                        'data_cat_slug':data_term_id,
                                       },
                                dataType: 'html'
                              }).done( function( response ){
                                if ( response ){
                                 $('#thunk-cat-tab .tab-content').html('<div class="thunk-slide thunk-product-cat-slide owl-carousel"></div> <div class="thunk-loadContainer"> <div class="loader"></div></div>');
                                 $(".thunk-slide.thunk-product-cat-slide.owl-carousel").append(response);
                                 var owl = $('.thunk-product-cat-slide');
                                 owl.owlCarousel({
                                 items:numslide,
                                 nav: true,
                                 owl2row:sliderow, 
                                 owl2rowDirection: 'ltr',
                                 owl2rowTarget: 'thunk-woo-product-list',
                                 navText: ["<i class='slick-nav fa fa-angle-left'></i>",
                                 "<i class='slick-nav fa fa-angle-right'></i>"],
                                 loop:cat_atply,
                                 dots: false,
                                 smartSpeed: 1800,
                                 autoHeight: false,
                                 margin:15,
                                 autoplay:cat_atply,
                                 autoplayHoverPause: true,
                                 autoplayTimeout: parseInt(topstore.top_store_cat_slider_speed),
                                 responsive:{
                                  0:{
                                           items:2,
                                           margin:7.5,
                                       },
                                       768:{
                                           items:3,
                                       },
                                       900:{
                                           items:3,
                                       },
                                       1025:{
                                           items:numslide,
                                       }
                             }
                               });
                            $(".thunk-product-tab-section .thunk-loadContainer").css("display", "none");

                              $(".thunk-product").hover(function() { 
                                $('.thunk-slide .owl-stage-outer').css("margin", "-6px -6px -100px"); 
                                $('.thunk-slide .owl-stage-outer').css("padding", "6px 6px 100px");
                                $('.thunk-slide .owl-nav').css("top", "-52px");
                              }, function() { 
                                $('.thunk-slide .owl-stage-outer').css("margin", "0"); 
                                $('.thunk-slide .owl-stage-outer').css("padding", "0"); 
                                $('.thunk-slide .owl-nav').css("top", "-58px");
                             }); 
             
                            } 
                          } );
                              e.preventDefault();
                           });

              },
      CategoryTabListFilter:function(){
                                     //product slider 
                            if(topstore.top_store_single_row_slide_cat_tb_lst == true){
                            var sliderow_lst = false;
                            }else{
                            var sliderow_lst = true;
                            }
                            // slide autoplay
                            if(topstore.top_store_cat_tb_lst_slider_optn == true){
                            var cat_atply_lst = true;
                            }else{
                            var cat_atply_lst = false; 
                            }
                            //no.slide
                            if(topstore.top_store_sidebar_front_option =='no-sidebar'){
                             var numslide = parseInt('5');
                            }else if(topstore.top_store_sidebar_front_option =='disable-left-sidebar' || topstore.top_store_sidebar_front_option =='disable-right-sidebar'){
                             var numslide = parseInt('4');
                            }else{
                             var numslide = parseInt('4');
                            }
                             var owl = $('.thunk-product-tab-cat-slide');
                                 owl.owlCarousel({
                                   items:numslide,
                                   nav: true,
                                   owl2row:sliderow_lst, 
                                   owl2rowDirection: 'ltr',
                                   owl2rowTarget: 'thunk-woo-product-list',
                                   navText: ["<i class='slick-nav fa fa-angle-left'></i>",
                                   "<i class='slick-nav fa fa-angle-right'></i>"],
                                   loop:cat_atply_lst,
                                   dots: false,
                                   smartSpeed: 1800,
                                   autoHeight: false,
                                   margin: 15,
                                   autoplay:cat_atply_lst,
                                   autoplayHoverPause: true,
                                   autoplayTimeout: parseInt(topstore.top_store_cat_tb_lst_slider_speed),
                                   responsive:{
                                    0:{
                                           items:2,
                                           margin:7.5,
                                       },
                                       768:{
                                           items:3,
                                       },
                                       900:{
                                           items:3,
                                       },
                                       1025:{
                                           items:numslide,
                                       }
                               }
                            });
                        $('#thunk-cat-list-tab li a:first').addClass('active');
                        $(document).on('click', '#thunk-cat-list-tab li a', function(e){
                        $('#thunk-cat-list-tab .tab-content').append('<div class="thunk-loadContainer"> <div class="loader"></div></div>');
                        $(".thunk-product-tab-list-section .thunk-loadContainer").css("display", "block");
                        $('#thunk-cat-list-tab li a.active').removeClass("active");
                        $(this).addClass('active');
                                var data_term_id = $( this ).attr( 'data-filter' );
                                $.ajax({
                                    type: 'POST',
                                    url: topstore.ajaxUrl,
                                    data: {
                                      action :'top_store_pro_cat_list_filter_ajax',
                                      'data_cat_slug':data_term_id,
                                     },
                              dataType: 'html'
                            }).done( function( response ){
                              if ( response ){
                               $('#thunk-cat-list-tab .tab-content').html('<div class="thunk-slide thunk-product-tab-cat-slide owl-carousel"></div><div class="thunk-loadContainer"> <div class="loader"></div></div>');
                               $(".thunk-slide.thunk-product-tab-cat-slide.owl-carousel").append(response);
                               var owl = $('.thunk-product-tab-cat-slide');
                               owl.owlCarousel({
                               items:numslide,
                               nav: true,
                               owl2row:sliderow_lst, 
                               owl2rowDirection: 'ltr',
                               owl2rowTarget: 'thunk-woo-product-list',
                               navText: ["<i class='slick-nav fa fa-angle-left'></i>",
                               "<i class='slick-nav fa fa-angle-right'></i>"],
                               loop:cat_atply_lst,
                               dots: false,
                               smartSpeed: 1800,
                               autoHeight: false,
                               margin: 15,
                               autoplay:cat_atply_lst,
                               autoplayHoverPause: true,
                               autoplayTimeout: parseInt(topstore.top_store_cat_tb_lst_slider_speed),
                               responsive:{
                               0:{
                                           items:2,
                                           margin:7.5,
                                       },
                                       768:{
                                           items:3,
                                       },
                                       900:{
                                           items:3,
                                       },
                                       1025:{
                                           items:numslide,
                                       }
                           }
                             });
                          } 
                          $(".thunk-product-tab-list-section .thunk-loadContainer").css("display", "none");
                        } );
                            e.preventDefault();
                        });

      },
       ProductSlide:function(){
                if(topstore.top_store_single_row_prdct_slide == true){
                var sliderow_p = false;
                }else{
                var sliderow_p = true;
                }
                // slide autoplay
                if(topstore.top_store_product_slider_optn == true){
                var cat_atply_p = true;
                }else{
                var cat_atply_p = false; 
                }
                //no.slide
                            if(topstore.top_store_sidebar_front_option =='no-sidebar'){
                             var numslide = parseInt('5');
                            }else if(topstore.top_store_sidebar_front_option =='disable-left-sidebar' || topstore.top_store_sidebar_front_option =='disable-right-sidebar'){
                             var numslide = parseInt('4');
                            }else{
                             var numslide = parseInt('4');
                            }
                var owl = $('.thunk-product-slide');
                     owl.owlCarousel({
                       items:numslide,
                       nav: true,
                       owl2row:sliderow_p, 
                       owl2rowDirection: 'ltr',
                       owl2rowTarget: 'thunk-woo-product-list',
                       navText: ["<i class='slick-nav fa fa-angle-left'></i>",
                       "<i class='slick-nav fa fa-angle-right'></i>"],
                       loop:cat_atply_p,
                       dots: false,
                       smartSpeed: 1800,
                       autoHeight: false,
                       margin:15,
                       autoplay:cat_atply_p,
                       autoplayHoverPause: true,
                       autoplayTimeout: parseInt(topstore.top_store_product_slider_speed),
                       responsive:{
                        0:{
                                           items:2,
                                           margin:7.5,
                                       },
                                       768:{
                                           items:3,
                                       },
                                       900:{
                                           items:3,
                                       },
                                       1025:{
                                           items:numslide,
                                       }
                   }
                });

      },
      ProductListSlide:function(){
                          if(topstore.top_store_single_row_prdct_list == true){
                            var sliderow_l = false;
                            }else{
                            var sliderow_l = true;
                            }
                            // slide autoplay
                            if(topstore.top_store_product_list_slide_optn == true){
                            var cat_atply_l = true;
                            }else{
                            var cat_atply_l = false; 
                            }
                            //no.slide
                            if(topstore.top_store_sidebar_front_option =='no-sidebar'){
                             var numslide = parseInt('5');
                            }else if(topstore.top_store_sidebar_front_option =='disable-left-sidebar' || topstore.top_store_sidebar_front_option =='disable-right-sidebar'){
                             var numslide = parseInt('4');
                            }else{
                             var numslide = parseInt('4');
                            }
                            var owl = $('.thunk-product-list');
                                 owl.owlCarousel({
                                   items:numslide,
                                   nav: true,
                                   owl2row:sliderow_l, 
                                   owl2rowDirection: 'ltr',
                                   owl2rowTarget: 'thunk-woo-product-list',
                                   navText: ["<i class='slick-nav fa fa-angle-left'></i>",
                                   "<i class='slick-nav fa fa-angle-right'></i>"],
                                   loop:cat_atply_l,
                                   dots: false,
                                   smartSpeed: 1800,
                                   autoHeight: false,
                                   margin: 15,
                                   autoplay:cat_atply_l,
                                   autoplayHoverPause: true,
                                   autoplayTimeout: parseInt(topstore.top_store_product_list_slider_speed),
                                   responsive:{
                                   0:{
                                           items:2,
                                           margin:7.5,
                                       },
                                       768:{
                                           items:3,
                                       },
                                       900:{
                                           items:3,
                                       },
                                       1025:{
                                           items:numslide,
                                       }
                               }
                            });
                      
      },
       CategorySlider:function(){
                     // slide autoplay
                     if(topstore.top_store_category_slider_optn == true){
                      var cat_atply_c = true;
                      }else{
                      var cat_atply_c = false; 
                      }
                      // no.slide
                      if(topstore.top_store_sidebar_front_option =='no-sidebar'){
                       var numslide = parseInt('7');
                      }else if(topstore.top_store_sidebar_front_option =='disable-left-sidebar' || topstore.top_store_sidebar_front_option =='disable-right-sidebar'){
                       var numslide = parseInt('6');
                      }else{
                       var numslide = parseInt('5');
                      }

                      var owl = $('.thunk-cat-slide');
                           owl.owlCarousel({
                             items:numslide,
                             nav: true,
                             navText: ["<i class='slick-nav fa fa-angle-left'></i>",
                             "<i class='slick-nav fa fa-angle-right'></i>"],
                             loop:cat_atply_c,
                             dots: false,
                             smartSpeed: 1800,
                             autoHeight: false,
                             margin:15,
                             autoplay:cat_atply_c,
                             autoplayHoverPause: true,
                             autoplayTimeout: parseInt(topstore.top_store_category_slider_speed),
                             responsive:{
                             0:{
                                           items:3,
                                           margin:7.5,
                                       },
                                       768:{
                                           items:4,
                                       },
                                       900:{
                                           items:4,
                                       },
                                       1025:{
                                           items:5,
                                       },
                                       1200:{
                                           items:numslide,
                                       }
                         }
              });

       }, 
       BrandSlider:function(){
                       // slide autoplay
                      if(topstore.top_store_brand_slider_optn == true){
                      var brd_atply = true;
                      }else{
                      var brd_atply = false; 
                      }
                      //no.slide
                            if(topstore.top_store_sidebar_front_option =='no-sidebar'){
                             var numslide = parseInt('7');
                            }else if(topstore.top_store_sidebar_front_option =='disable-left-sidebar' || topstore.top_store_sidebar_front_option =='disable-right-sidebar'){
                             var numslide = parseInt('5');
                            }else{
                             var numslide = parseInt('4');
                            }
                      var owl = $('.thunk-brand');
                           owl.owlCarousel({
                             items:numslide,
                             nav: true,
                             navText: ["<i class='brand-nav fa fa-angle-left'></i>",
                             "<i class='brand-nav fa fa-angle-right'></i>"],
                             loop:brd_atply,
                             dots: false,
                             smartSpeed: 1800,
                             autoHeight: false,
                             margin:15,
                             autoplay:brd_atply,
                             autoplayHoverPause: true,
                             autoplayTimeout: parseInt(topstore.top_store_brand_slider_speed),
                             responsive:{
                             0:{
                                 items:3,
                                 margin:7.5,
                             },
                             600:{
                                 items:4,
                             },
                             1024:{
                                 items:4,
                             },
                             1025:{
                                 items:numslide,
                             }
                         }
                 });
                          
        },
        FeaturedProductSlider:function(){
                          if(topstore.top_store_feature_product_slider_optn == true){
                          var ftr_atply = true;
                          }else{
                          var ftr_atply = false; 
                          }
                          //no.slide
                            if(topstore.top_store_sidebar_front_option =='no-sidebar'){
                             var numslide = parseInt('4');
                            }else if(topstore.top_store_sidebar_front_option =='disable-left-sidebar' || topstore.top_store_sidebar_front_option =='disable-right-sidebar'){
                             var numslide = parseInt('3');
                            }else{
                             var numslide = parseInt('3');
                            }
                          var owl = $('.thunk-featured-product-slide');
                               owl.owlCarousel({
                                 items:numslide,
                                  nav: true,
                                 owl2row:true, 
                                 owl2rowDirection: 'ltr',
                                 owl2rowTarget: 'thunk-woo-product-list',
                                 navText: ["<i class='slick-nav fa fa-angle-left'></i>",
                                 "<i class='slick-nav fa fa-angle-right'></i>"],
                                 loop:ftr_atply,
                                 dots: false,
                                 smartSpeed: 1800,
                                 autoHeight: false,
                                 margin:15,
                                 autoplay:ftr_atply,
                                 autoplayHoverPause: true,
                                  autoplayTimeout: parseInt(topstore.top_store_feature_product_slider_speed),
                                 responsive:{
                                      0:{
                                           items:2,
                                           margin:7.5,
                                       },
                                       550:{
                                           items:2,
                                           margin:7.5,
                                       },
                                       768:{
                                           items:2,
                                       },
                                       900:{
                                           items:3,
                                       },
                                       1025:{
                                           items:numslide,
                                       }
                             }
                               });

                          $('#thunk-feature-product-tab li a:first').addClass('active');
                          $(document).on('click', '#thunk-feature-product-tab li a', function(e){
                          $('#thunk-feature-product-tab .tab-content').append('<div class="thunk-loadContainer"><div class="loader"></div></div>');
                          $(".thunk-feature-product-section .thunk-loadContainer").css("display", "block");

                          $('#thunk-feature-product-tab li a.active').removeClass("active");
                          $(this).addClass('active');
                                  var data_term_id = $( this ).attr( 'data-filter' );
                                  $.ajax({
                                      type: 'POST',
                                      url: topstore.ajaxUrl,
                                      data: {
                                        action :'top_store_pro_cat_filter_ajax',
                                        'data_cat_slug':data_term_id,
                                       },
                                dataType: 'html'
                              }).done( function( response ){
                                if ( response ){
                                 $('#thunk-feature-product-tab .tab-content').html('<div class="thunk-slide thunk-featured-product-slide owl-carousel"></div> <div class="thunk-loadContainer"> <div class="loader"></div></div>');
                                 $(".thunk-slide.thunk-featured-product-slide.owl-carousel").append(response);
                                 var owl = $('.thunk-featured-product-slide');
                                 owl.owlCarousel({
                                 items:numslide,
                                 nav: true,
                                 owl2row:true, 
                                 owl2rowDirection: 'ltr',
                                 owl2rowTarget: 'thunk-woo-product-list',
                                 navText: ["<i class='slick-nav fa fa-angle-left'></i>",
                                 "<i class='slick-nav fa fa-angle-right'></i>"],
                                 loop:ftr_atply,
                                 dots: false,
                                 smartSpeed: 1800,
                                 autoHeight: false,
                                 margin: 15,
                                 autoplay:ftr_atply,
                                 autoplayHoverPause: true,
                                 autoplayTimeout: parseInt(topstore.top_store_feature_product_slider_speed),
                                 responsive:{
                                      0:{
                                           items:2,
                                           margin:7.5,
                                       },
                                       550:{
                                           items:2,
                                           margin:7.5,
                                       },
                                       768:{
                                           items:2,
                                       },
                                       900:{
                                           items:3,
                                       },
                                       1025:{
                                           items:numslide,
                                       }
                             }
                               });
                            } 
                            $(".thunk-feature-product-section .thunk-loadContainer").css("display", "none");
                             $(".thunk-product").hover(function() { 
                                $('.thunk-slide .owl-stage-outer').css("margin", "-6px -6px -100px"); 
                                $('.thunk-slide .owl-stage-outer').css("padding", "6px 6px 100px");
                                $('.thunk-slide .owl-nav').css("top", "-52px");
                              }, function() { 
                                $('.thunk-slide .owl-stage-outer').css("margin", "0"); 
                                $('.thunk-slide .owl-stage-outer').css("padding", "0"); 
                                $('.thunk-slide .owl-nav').css("top", "-58px");
                             }); 
             
                          } );

                          $.ajax({
                                      type: 'POST',
                                      url: topstore.ajaxUrl,
                                      data: {
                                        action :'top_store_pro_cat_filter_featured_big_prd_ajax',
                                        'data_cat_slug':data_term_id,
                                       },
                                dataType: 'html'
                              }).done( function( response ){
                                if ( response ){
                                 $(".content-featured-wrap .thunk-woo-product-list").remove();
                                 $(".content-featured-wrap").append(response);
                                 } 
                           } );
                        
                              e.preventDefault();
                              });

         },
      }
    TopStoreWooLib.init();
})(jQuery);