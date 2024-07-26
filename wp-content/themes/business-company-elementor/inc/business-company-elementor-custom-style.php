 <?php 
/**
 * Custom Style for Business Company Elementor theme.
 * @package     Business Company Elementor
 * @author      wptexture
 * @copyright   Copyright (c) 2021, Business Company Elementor
 * @since       Business Company Elementor1.0.0
 */
function business_company_elementor_custom_style(){
$business_company_elementor_style=""; 
$business_company_elementor_style.= business_company_elementor_responsive_slider_funct( 'business_company_elementor_logo_width', 'business_company_elementor_logo_width_responsive');

/**********************/
//Scheme Color
/**********************/
$business_company_elementor_color_scheme = esc_html(get_theme_mod('business_company_elementor_color_scheme','opn-light'));


/**************************/
// Above Header
/**************************/
    $business_company_elementor_above_brdr_clr = esc_html(get_theme_mod('business_company_elementor_above_brdr_clr','#fff'));  
    $business_company_elementor_style.=".top-header,body.business-company-elementor-dark .top-header{border-bottom-color:{$business_company_elementor_above_brdr_clr}}";
    $business_company_elementor_style.= business_company_elementor_responsive_slider_funct( 'business_company_elementor_abv_hdr_hgt', 'business_company_elementor_top_header_height_responsive');
    $business_company_elementor_style.= business_company_elementor_responsive_slider_funct( 'business_company_elementor_abv_hdr_botm_brd', 'business_company_elementor_abv_hdr_botm_brd_responsive');

/**************************/
// Above Fooetr
/**************************/
    $business_company_elementor_above_frt_brdr_clr = esc_html(get_theme_mod('business_company_elementor_above_frt_brdr_clr','#fff'));  
    $business_company_elementor_style.=".top-footer,body.business-company-elementor-dark .top-footer{border-bottom-color:{$business_company_elementor_above_frt_brdr_clr}}";
    $business_company_elementor_style.= business_company_elementor_responsive_slider_funct( 'business_company_elementor_above_ftr_hgt', 'business_company_elementor_top_footer_height_responsive');
    $business_company_elementor_style.= business_company_elementor_responsive_slider_funct( 'business_company_elementor_abv_ftr_botm_brd', 'business_company_elementor_top_footer_border_responsive');

/**************************/
// Below Fooetr
/**************************/
    $business_company_elementor_bottom_frt_brdr_clr = esc_html(get_theme_mod('business_company_elementor_bottom_frt_brdr_clr'));  
    $business_company_elementor_style.=".below-footer,body.business-company-elementor-dark .below-footer{border-top-color:{$business_company_elementor_bottom_frt_brdr_clr}}";
    $business_company_elementor_style.= business_company_elementor_responsive_slider_funct( 'business_company_elementor_btm_ftr_hgt', 'business_company_elementor_below_footer_height_responsive');
    $business_company_elementor_style.= business_company_elementor_responsive_slider_funct( 'business_company_elementor_btm_ftr_botm_brd', 'business_company_elementor_below_footer_border_responsive');
/*********************/
// Global Color Option
/*********************/ 
  $business_company_elementor_theme_clr = esc_html(get_theme_mod('business_company_elementor_theme_clr','#ff4651'));

  $business_company_elementor_style.=".single_add_to_cart_button.button.alt, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce #respond input#submit, .woocommerce button.button, .woocommerce input.button,.cat-list a:after,.tagcloud a:hover, .texture-tags-wrapper a:hover,.ribbon-btn,.btn-main-header,.page-contact .leadform-show-form input[type='submit'],.woocommerce .widget_price_filter .business-company-elementor-widget-content .ui-slider .ui-slider-range,
.woocommerce .widget_price_filter .business-company-elementor-widget-content .ui-slider .ui-slider-handle,.entry-content form.post-password-form input[type='submit'],#bizEcommerce-mobile-bar a,#bizEcommerce-mobile-bar,.post-slide-widget .owl-carousel .owl-nav button:hover,.woocommerce div.product form.cart .button,#search-button,#search-button:hover, .woocommerce ul.products li.product .button:hover,.slider-content-caption a.slide-btn,.page-template-frontpage .owl-carousel button.owl-dot, .woocommerce #alm-quick-view-modal .alm-qv-image-slider .flex-control-paging li a,.button.return.wc-backward,.button.return.wc-backward:hover,.woocommerce .texture-product-hover a.add_to_cart_button:hover,
.woocommerce .texture-product-hover .texture-wishlist a.add_to_wishlist:hover,
.texture-wishlist .yith-wcwl-wishlistaddedbrowse:hover,
.texture-wishlist .yith-wcwl-wishlistexistsbrowse:hover,
.texture-quickview a:hover, .texture-compare .compare-button a.compare.button:hover,
.texture-woo-product-list .texture-quickview a:hover,.woocommerce .texture-product-hover a.th-button:hover,#alm-quick-view-modal .alm-qv-image-slider .flex-control-paging li a.flex-active,.menu-close-btn:hover:before, .menu-close-btn:hover:after,.cart-close-btn:hover:after,.cart-close-btn:hover:before,.cart-contents .count-item,[type='submit']:hover,.comment-list .reply a,.nav-links .page-numbers.current, .nav-links .page-numbers:hover,.woocommerce .texture-product-image-tab-section .texture-product-hover a.add_to_cart_button:hover,.woocommerce .texture-product-slide-section .texture-product-hover a.add_to_cart_button:hover,.woocommerce .texture-compare .compare-button a.compare.button:hover,.texture-product .woosw-btn:hover,.texture-product .wooscp-btn:hover,.woosw-copy-btn input{background:{$business_company_elementor_theme_clr}}
  .open-cart p.buttons a:hover,
  .woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .woocommerce #respond input#submit:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.texture-slide .owl-nav button.owl-prev:hover, .texture-slide .owl-nav button.owl-next:hover, .business-company-elementor-slide-post .owl-nav button.owl-prev:hover, .business-company-elementor-slide-post .owl-nav button.owl-next:hover,/*.texture-list-grid-switcher a.selected,*/ .texture-list-grid-switcher a:hover,.woocommerce .woocommerce-error .button:hover, .woocommerce .woocommerce-info .button:hover, .woocommerce .woocommerce-message .button:hover,#searchform [type='submit']:hover,article.texture-post-article .texture-readmore.button:hover,.business-company-elementor-load-more button:hover,.woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current,.texture-top2-slide.owl-carousel .owl-nav button:hover,.product-slide-widget .owl-carousel .owl-nav button:hover, .texture-slide.texture-brand .owl-nav button:hover,.texture-heading-wrap:before,.woocommerce ul.products li.product .texture-product-hover a.add_to_cart_button:hover{background-color:{$business_company_elementor_theme_clr} !important;} 
  .texture-product-hover .th-button.add_to_cart_button, .woocommerce ul.products .texture-product-hover .add_to_cart_button, .woocommerce .texture-product-hover a.th-butto, .woocommerce ul.products li.product .product_type_variable, .woocommerce ul.products li.product a.button.product_type_grouped,.open-cart p.buttons a:hover,.texture-slide .owl-nav button.owl-prev:hover, .texture-slide .owl-nav button.owl-next:hover, .business-company-elementor-slide-post .owl-nav button.owl-prev:hover, .business-company-elementor-slide-post .owl-nav button.owl-next:hover,body .woocommerce-tabs .tabs li a::before,/*.texture-list-grid-switcher a.selected,*/ .texture-list-grid-switcher a:hover,.woocommerce .woocommerce-error .button, .woocommerce .woocommerce-info .button, .woocommerce .woocommerce-message .button,#searchform [type='submit']:hover,article.texture-post-article .texture-readmore.button,.woocommerce .texture-product-hover a.th-button,.business-company-elementor-load-more button,.texture-top2-slide.owl-carousel .owl-nav button:hover,.product-slide-widget .owl-carousel .owl-nav button:hover, .texture-slide.texture-brand .owl-nav button:hover,.page-contact .leadform-show-form input[type='submit'],.woocommerce .texture-product-hover a.product_type_simple,.post-slide-widget .owl-carousel .owl-nav button:hover{border-color:{$business_company_elementor_theme_clr}} .loader {
    border-right: 4px solid {$business_company_elementor_theme_clr};
    border-bottom: 4px solid {$business_company_elementor_theme_clr};
    border-left: 4px solid {$business_company_elementor_theme_clr};}
    .woocommerce .texture-product-image-cat-slide .texture-woo-product-list:hover .texture-product,.woocommerce .texture-product-image-cat-slide .texture-woo-product-list:hover .texture-product,[type='submit']{border-color:{$business_company_elementor_theme_clr}} .business-company-elementor-off-canvas-sidebar-wrapper .menu-close-btn:hover,.main-header .cart-close-btn:hover{color:{$business_company_elementor_theme_clr};}";
   //text
   $business_company_elementor_text_clr = esc_html(get_theme_mod('business_company_elementor_text_clr'));
   $business_company_elementor_style.="body,.woocommerce-error, .woocommerce-info, .woocommerce-message {color: {$business_company_elementor_text_clr}}";
   //title
   $business_company_elementor_title_clr = esc_html(get_theme_mod('business_company_elementor_title_clr'));
   $business_company_elementor_style.=".site-title span a,.sprt-tel b,.widget.woocommerce .widget-title, .open-widget-content .widget-title, .widget-title,.texture-title .title,.texture-hglt-box h6,h2.texture-post-title a, h1.texture-post-title ,#reply-title,h4.author-header,.page-head h1,.woocommerce div.product .product_title, section.related.products h2, section.upsells.products h2, .woocommerce #reviews #comments h2,.woocommerce table.shop_table thead th, .cart-subtotal, .order-total,.cross-sells h2, .cart_totals h2,.woocommerce-billing-fields h3,.page-head h1 a{color: {$business_company_elementor_title_clr}}";
   //link
   $business_company_elementor_link_clr = esc_html(get_theme_mod('business_company_elementor_link_clr'));
   $business_company_elementor_link_hvr_clr = esc_html(get_theme_mod('business_company_elementor_link_hvr_clr'));
   $business_company_elementor_style.="a,#open-above-menu.business-company-elementor-menu > li > a{color:{$business_company_elementor_link_clr}} #open-above-menu.business-company-elementor-menu > li > a:hover,#open-above-menu.business-company-elementor-menu li a:hover{color:{$business_company_elementor_link_hvr_clr}}";

  // loader
   $business_company_elementor_loader_bg_clr = esc_html(get_theme_mod('business_company_elementor_loader_bg_clr','#9c9c9'));
   $business_company_elementor_style.=".business_company_elementor_overlayloader{background-color:{$business_company_elementor_loader_bg_clr}}";
  

//Move to top 
$business_company_elementor_move_to_top_bg_clr      = esc_html(get_theme_mod('business_company_elementor_move_to_top_bg_clr'));
$business_company_elementor_move_to_top_icon_clr    = esc_html(get_theme_mod('business_company_elementor_move_to_top_icon_clr'));
$business_company_elementor_style.="#move-to-top{background:{$business_company_elementor_move_to_top_bg_clr};color:{$business_company_elementor_move_to_top_icon_clr}}";

// Slider BG 
   $business_company_elementor_lay3_bg_img_ovrly = esc_html(get_theme_mod('business_company_elementor_lay3_bg_img_ovrly','#eaeaea'));
   $business_company_elementor_lay3_bg_background_image_url          = esc_url(get_theme_mod('business_company_elementor_lay3_bg_background_image_url',''));
   
   $business_company_elementor_lay3_bg_background_repeat         = esc_html(get_theme_mod('business_company_elementor_lay3_bg_background_repeat','no-repeat'));
   $business_company_elementor_lay3_bg_background_position       = esc_html(get_theme_mod('business_company_elementor_lay3_bg_background_position','center center'));
   $business_company_elementor_lay3_bg_background_size           = esc_html(get_theme_mod('business_company_elementor_lay3_bg_background_size','auto'));
   $business_company_elementor_lay3_bg_background_attach         = esc_html(get_theme_mod('business_company_elementor_lay3_bg_background_attach','scroll'));
   $business_company_elementor_style.=".texture-slider-section.slide-layout-3:before{background:{$business_company_elementor_lay3_bg_img_ovrly}}";
   $business_company_elementor_style.=".texture-slider-section.slide-layout-3{background-image:url($business_company_elementor_lay3_bg_background_image_url);
    background-repeat:{$business_company_elementor_lay3_bg_background_repeat};
    background-position:{$business_company_elementor_lay3_bg_background_position};
    background-size:{$business_company_elementor_lay3_bg_background_size};
    background-attachment:{$business_company_elementor_lay3_bg_background_attach};}";

    // ribbon
   $business_company_elementor_ribbon_bg_img_url          = esc_url(get_theme_mod('business_company_elementor_ribbon_bg_img_url',BUSINESS_COMPANY_ELEMENTOR_THEME_URI .'assets/img/ribbon.jpg'));
   $business_company_elementor_ribbon_bg_background_repeat        = esc_html(get_theme_mod('business_company_elementor_ribbon_bg_background_repeat','no-repeat'));
   $business_company_elementor_ribbon_bg_background_position       = esc_html(get_theme_mod('business_company_elementor_ribbon_bg_background_position','center center'));
   $business_company_elementor_ribbon_bg_background_size           = esc_html(get_theme_mod('business_company_elementor_ribbon_bg_background_size','cover'));
   $business_company_elementor_ribbon_bg_background_attach         = esc_html(get_theme_mod('business_company_elementor_ribbon_bg_background_attach','scroll'));
   
   $business_company_elementor_style.="section.texture-ribbon-section{background-image:url($business_company_elementor_ribbon_bg_img_url);
    background-repeat:{$business_company_elementor_ribbon_bg_background_repeat};
    background-position:{$business_company_elementor_ribbon_bg_background_position};
    background-size:{$business_company_elementor_ribbon_bg_background_size};}";


  /**************************/
  //Above Header Color Option
  /**************************/
   $business_company_elementor_above_hd_bg_clr = esc_html(get_theme_mod('business_company_elementor_above_hd_bg_clr','#1f4c94'));
   $business_company_elementor_abv_header_background_image = esc_html( get_theme_mod('header_image'));
   $business_company_elementor_style.=".top-header:before{background:{$business_company_elementor_above_hd_bg_clr}}";
   $business_company_elementor_style.= ".top-header{background-image:url($business_company_elementor_abv_header_background_image);
   }";
   
    $business_company_elementor_abv_content_txt_clr = esc_html(get_theme_mod('business_company_elementor_abv_content_txt_clr','#fff'));
    $business_company_elementor_abv_content_link_clr = esc_html(get_theme_mod('business_company_elementor_abv_content_link_clr','#fff'));
    $business_company_elementor_style.= ".top-header .top-header-bar{color:{$business_company_elementor_abv_content_txt_clr}} .top-header .top-header-bar a{color:{$business_company_elementor_abv_content_link_clr}}";

  /**************************/
  //Main Header Color Option
  /**************************/
   $business_company_elementor_main_hd_bg_clr = esc_html(get_theme_mod('business_company_elementor_main_hd_bg_clr','#2457AA'));
   $business_company_elementor_main_content_txt_clr = esc_html(get_theme_mod('business_company_elementor_main_content_txt_clr','#888'));
   $business_company_elementor_main_content_link_clr = esc_html(get_theme_mod('business_company_elementor_main_content_link_clr','#fff'));
   $business_company_elementor_style.=".main-header:before,.sticky-header:before, .search-wrapper:before{background:{$business_company_elementor_main_hd_bg_clr}}
    .site-description,main-header-col1,.header-support-content,.mhdrthree .site-description p{color:{$business_company_elementor_main_content_txt_clr}} .mhdrthree .site-title span a,.header-support-content a, .texture-icon .count-item,.main-header a,.texture-icon .cart-icon a.cart-contents,.sticky-header .site-title a{color:{$business_company_elementor_main_content_link_clr}}";

  /**************************/
  //Below Header Color Option
  /**************************/
   $business_company_elementor_below_hd_bg_clr = esc_html(get_theme_mod('business_company_elementor_below_hd_bg_clr','#1f4c94'));
   $business_company_elementor_category_text_clr = esc_html(get_theme_mod('business_company_elementor_category_text_clr',''));
   $business_company_elementor_category_icon_clr = esc_html(get_theme_mod('business_company_elementor_category_icon_clr',''));
   $business_company_elementor_style.=".below-header:before{background:{$business_company_elementor_below_hd_bg_clr}}
      .menu-category-list .toggle-title,.toggle-icon{color:{$business_company_elementor_category_text_clr}}
      .below-header .cat-icon span{background:{$business_company_elementor_category_icon_clr}}
   ";

  /**************************/
  //Header Square Icon Option
  /**************************/
   $business_company_elementor_sq_icon_bg_clr = esc_html(get_theme_mod('business_company_elementor_sq_icon_bg_clr','#1f4c94'));
   $business_company_elementor_sq_icon_clr = esc_html(get_theme_mod('business_company_elementor_sq_icon_clr','#fff'));
   $business_company_elementor_style.=".header-icon a ,.header-support-icon a.whishlist ,.texture-icon .cart-icon a.cart-contents i,.cat-icon,.sticky-header .header-icon a , .sticky-header .texture-icon .cart-icon a.cart-contents,.responsive-main-header .header-support-icon a,.responsive-main-header .texture-icon .cart-icon a.cart-contents,.responsive-main-header .menu-toggle .menu-btn,.sticky-header-bar .menu-toggle .menu-btn,.header-icon a.account,.header-icon a.prd-search {background:{$business_company_elementor_sq_icon_bg_clr};color:{$business_company_elementor_sq_icon_clr}} .cat-icon span,.menu-toggle .icon-bar{background:{$business_company_elementor_sq_icon_clr}}";
   /**************************/
  //Main Menu
  /**************************/
  $business_company_elementor_menu_link_clr = esc_html(get_theme_mod('business_company_elementor_menu_link_clr'));
  $business_company_elementor_menu_link_hvr_clr = esc_html(get_theme_mod('business_company_elementor_menu_link_hvr_clr'));
  $business_company_elementor_style.=".business-company-elementor-menu > li > a,.menu-category-list .toggle-title,.toggle-icon{color:{$business_company_elementor_menu_link_clr}} .business-company-elementor-menu > li > a:hover,.business-company-elementor-menu .current-menu-item a{color:{$business_company_elementor_menu_link_hvr_clr}}";

  $business_company_elementor_sub_menu_bg_clr      = esc_html(get_theme_mod('business_company_elementor_sub_menu_bg_clr'));
  $business_company_elementor_sub_menu_lnk_clr     = esc_html(get_theme_mod('business_company_elementor_sub_menu_lnk_clr'));
  $business_company_elementor_sub_menu_lnk_hvr_clr = esc_html(get_theme_mod('business_company_elementor_sub_menu_lnk_hvr_clr'));
  $business_company_elementor_style.=".business-company-elementor-menu li ul.sub-menu li a{color:{$business_company_elementor_sub_menu_lnk_clr}} .business-company-elementor-menu li ul.sub-menu li a:hover{color:{$business_company_elementor_sub_menu_lnk_hvr_clr}}   .business-company-elementor-menu ul.sub-menu{background:{$business_company_elementor_sub_menu_bg_clr}}";
if((bool)get_theme_mod('business_company_elementor_shadow_header')==true){
$business_company_elementor_style.="header{
    box-shadow: 0 .125rem .3rem -.0625rem rgba(0,0,0,.03),0 .275rem .75rem -.0625rem rgba(0,0,0,.06)!important;
position: relative;
 }";
}
//Product title in single line
$business_company_elementor_color_scheme = (bool)get_theme_mod('business_company_elementor_prdct_single',true);
if($business_company_elementor_color_scheme==false){
   $business_company_elementor_style.=".texture-woo-product-list .woocommerce-loop-product__title {
    overflow: hidden;
    text-overflow: inherit;
    display: inherit;
    -webkit-box-orient: inherit;
    -webkit-line-clamp: inherit;
    line-height: 24px;
    max-height: inherit;}";
}
//Hide yith if WPC SMART Icon 

if( (class_exists( 'YITH_WCWL' )) ){
$business_company_elementor_style.=" .woocommerce .entry-summary .woosw-btn{
  display:none;
}";
}elseif((class_exists( 'WPCleverWoosw' ))){
$business_company_elementor_style.=" .woocommerce .entry-summary .yith-wcwl-add-to-wishlist{
  display:none;
}";
}

if( (class_exists( 'YITH_Woocompare' )) ){
$business_company_elementor_style.=" .woocommerce .entry-summary .woosc-btn, .woocommerce-shop .woosc-btn{
  display:none;
}";
}elseif((class_exists( 'WPCleverWoosc' ))){
$business_company_elementor_style.=" .woocommerce .entry-summary a.compare.button{
  display:none;
}";
}

  return $business_company_elementor_style;
}

//start logo width
function business_company_elementor_logo_width_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.texture-logo img,.sticky-header .logo-content img{
    max-width: ' . $v3 . 'px;
  }';
  $custom_css = business_company_elementor_add_media_query( $dimension, $custom_css );
  return $custom_css;
}
// top header height
function business_company_elementor_top_header_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.top-header .top-header-bar{
    line-height: ' . $v3 . 'px;
  }';
  $custom_css = business_company_elementor_add_media_query( $dimension, $custom_css );
  return $custom_css;
}
function business_company_elementor_abv_hdr_botm_brd_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.top-header{
    border-bottom-width: ' . $v3 . 'px;
  }';
  $custom_css = business_company_elementor_add_media_query( $dimension, $custom_css );
  return $custom_css;
}

// top footer height
function business_company_elementor_top_footer_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.top-footer .top-footer-bar{
    line-height: ' . $v3 . 'px;
  }';
  $custom_css = business_company_elementor_add_media_query( $dimension, $custom_css );
  return $custom_css;
}
function business_company_elementor_top_footer_border_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.top-footer{
    border-bottom-width: ' . $v3 . 'px;
  }';
  $custom_css = business_company_elementor_add_media_query( $dimension, $custom_css );
  return $custom_css;
}

// below footer height
function business_company_elementor_below_footer_height_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.below-footer .below-footer-bar{
    line-height: ' . $v3 . 'px;
  }';
  $custom_css = business_company_elementor_add_media_query( $dimension, $custom_css );
  return $custom_css;
}
function business_company_elementor_below_footer_border_responsive( $value, $dimension = 'desktop' ){
    $custom_css = '';
    switch ( $dimension ){
    case 'desktop':
      $v3 = $value;
      break;
    case 'tablet':
      $v3 = $value;
      break;
    case 'mobile':
      $v3 = $value;
      break;
  }
  $custom_css .= '.below-footer{
    border-top-width: ' . $v3 . 'px;
  }';
  $custom_css = business_company_elementor_add_media_query( $dimension, $custom_css );
  return $custom_css;
}