var $jq = jQuery.noConflict();
$jq(document).ready(function () {
    var $activeSlide = $jq('#heroMarqueeCarousel').find('.item.active');
    var color = $activeSlide.data('color');
    $jq('.heroMarqueeCarouselWrapper .fastFacts').css('background-color', color);
    $jq(".carousel").swiperight(function () {
        $jq(this).carousel('prev');
    });
    $jq(".carousel").swipeleft(function () {
        $jq(this).carousel('next');
    });
});

var PTCApp=(function($){
    var $talk = $jq('.talk-to-us');
    
    $talk.find('.flag').on('click', function(){
        $talk.toggleClass('active');
    });

    $jq('.panel-heading a').on('click', function(){
        var newImage = $jq(this).data('image');
        $jq('.newsModuleWrapper').css('background-image', newImage);
    });

    $jq('#heroMarqueeCarousel').on('slide.bs.carousel', function () {
        var $activeSlide = $jq('#heroMarqueeCarousel').find('.item.active');
        var $items = $jq('#heroMarqueeCarousel .item');
        var index = $activeSlide.index('#heroMarqueeCarousel .item');

        if(index >= $items.length-1 ){ index=-1; }
        index++;

        var color = $items.eq(index).data('color');

        setTimeout(function(){
            $jq('.heroMarqueeCarouselWrapper .fastFacts').css('background-color',color);
        }, 300);

    })

    function mobileCarousel(){
        var $targets = $jq('.carousel-target');

        var initCarousel = function initCarousel(){
            if($jq(window).width() < 768){
                $targets.addClass('carousel-inner');
            }else{
                $targets.removeClass('carousel-inner');
            }
        }

        if($targets.length > 0){
            initCarousel();
            $jq(window).resize(initCarousel);
        }

    }

    function initEqualHeights(target){

            // equal height targets
        var equalEls = target.find('.equal-col'),

            // look for custom breakpoint specified in markup
            breakpoint = parseInt(target.data('breakpoint')) || false,
            $window = $jq(window);

        // update the height of the targets
        function setHeights(els){

            var greatestHeight = 0;

            if((breakpoint && $window.width() > breakpoint) || !breakpoint ){

                // force height: auto, for natural height calculation
                els.css('height', 'auto');

                // loop through targets and find tallest
                $jq.each(equalEls, function(index, coltarget){
                    var $target = $jq(coltarget),
                        thisHeight;

                    thisHeight = $target.height();
                    if(thisHeight > greatestHeight){
                        greatestHeight = thisHeight;
                        // console.log(greatestHeight);
                    }

                });

                // set height of all targets to height of tallest in grouping
                equalEls.height(greatestHeight);
            }else{
                els.css('height', 'auto');
            }

        }

        // calculate resize
        setHeights(equalEls);

        // attach listeners that trigger resizing
        $window.on('resize', function(){
            setHeights(equalEls);
        });

    }

    function loadEqualTargets(){
        // get grouping wrapper
        var equalHeightTargets = $jq('.equal-row');

        if(equalHeightTargets.length > 0){

            // for each row, set initial height and attach resize event listener
            $jq.each(equalHeightTargets, function(index, targetRow){
                initEqualHeights($jq(targetRow));
            });

        }
    }

    // initialize equal heights on load since we depend on final height calculation
    $jq(window).on('load', function(){
        loadEqualTargets();
    });

    $jq(document).on('reset-heights', function(){
        loadEqualTargets();
    });

    $jq('.largeEventIntroWrapper .expand').on('click', function(e) {
        e.preventDefault();
        var $this = $jq(this);
        var $collapse = $this.closest('.collapse-group').find('.collapse');
        $collapse.collapse('toggle');
    });

    $jq('.dropdown-close').on('click', function(){
        $jq('wide-dropdown').removeClass('open');
    });

    //Header Search Display on Mobile
    var $mobileSearch = $jq('.navbar-form.mobile')
    $mobileSearch.find('button').on('click touchstart',function(e){
        e.preventDefault();
        $mobileSearch.find('.form-group').toggle().toggleClass('visible');
    });

    //> Polyfill component for support of text input "placeholder" attribute

    //### Placeholder Polyfill

    // define placeholder module
    var placeholder = function placeholder(){

        // check for browser placeholder support
        var placeholderSupport = ("placeholder" in document.createElement('input'));

        // if placholder not native substitute placeholder for value
        if(!placeholderSupport){
            $jq('input[placeholder]').each(function(index, input){
                var $input = $jq(input);
                $input.val($input.attr('placeholder'));
                // attach 'click' listener to recreate placeholder behavior
                $input.on('click', function(){
                    $jq(this).val('');
                });
            });
        }

    };

    placeholder();
    mobileCarousel();


})(jQuery);
