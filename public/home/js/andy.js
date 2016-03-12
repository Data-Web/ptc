$(document).ready(function() {
    $('.andy-slider').nivoSlider();
    var pull = $('.andy-responsive i');
        menu = $('.nav-header');
    
    $('.page-item:last').css('border', 'none');

    $(pull).click(function() {
        menu.slideToggle();
    });

    $(window).resize(function() {
        var w = $(window).width();
        if (w > 992) 
            menu.removeAttr('style');
    });

    setTimeout(function() {
        $('.alert-added').fadeOut();
    }, 3000)

    var owl = $(".owl-doitac");
    owl.owlCarousel({
    	autoPlay: 4000,
    	items : 7,
        itemsDesktop : [1199, 5],
        itemsDesktopSmall : [979, 4],
        itemsTablet : [768, 3],
        itemsTabletSmall : false,
        itemsMobile : [479, 2],
        itemsMobile : [319, 1],
        pagination : false,
    });
    $(".prev-carousel").click(function(){
      owl.trigger('owl.prev');
    });
    $(".next-carousel").click(function(){
      owl.trigger('owl.next');
    });

    var owlGallery = $("#product-gallery-image");
    owlGallery.owlCarousel({
        autoPlay : false,
        items : 3,
        itemsDesktop : [1199, 3],
        itemsDesktopSmall : [979, 4],
        itemsTablet : [768, 4],
        itemsTabletSmall : false,
        itemsMobile : [479, 2],
        pagination : false,
    });

    // Custom Navigation Events
    $("#prev_gallery_image").click(function(){
      owlGallery.trigger('owl.prev');
    });
    $("#next_gallery_image").click(function(){
      owlGallery.trigger('owl.next');
    });

    /** FANCYBOX **/
    $('.fancybox-buttons').fancybox({
        openEffect  : 'none',
        closeEffect : 'none',

        prevEffect : 'none',
        nextEffect : 'none',

        closeBtn  : true,

        helpers : {
            title : {
                type : 'inside'
            },
            buttons : {}
        },

        afterLoad : function() {
            this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
        }
    });
    /** END FANCYBOX **/
});