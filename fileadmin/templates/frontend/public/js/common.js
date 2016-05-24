(function ($) {
    var tempString = '';
    $(window).scroll(function(){
        if ($(window).scrollTop()>300){
            $(".go-to-top").fadeIn(500);
        } else {
            $(".go-to-top").fadeOut(500);
        }
    });
    $(document).ready(function ($) {
        //check mobile video
        if(/(iPad|iPhone|iPod|Android|iOS|micromessenger)/ig.test(window.navigator.userAgent)){
            $('.sticky-bar').css('top', '90%');
            $('.sticky-bar .qrcode, .sticky-bar .share').remove();
            $('.slider-video').remove();
        }else{
            //page qr code
            $('#pageQrCode').attr('src', 'fileadmin/scripts/qrcode/qrcode.php?code='+encodeURIComponent(window.location.href));
            $('.slider-video').each(function(){
                $(this).removeClass('hide').next('.slider-image').remove();
            });
        }

        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });

        $("span.menu").click(function () {
            $(" ul.navig").slideToggle("fast", function () {
            });
        });

        $('.bxslider').bxSlider({
            pause: 10000,
            auto: true,
            onSliderLoad: function(){
                $('.banner-description.hide').removeClass('hide');
                $('.banner-description img').removeAttr('width');
                $('.banner-description img').removeAttr('height');
            }
        });

        $('.news-bxslider').bxSlider({
            adaptiveHeight: true,
            //mode: 'fade',
            controls: false,
            auto: true,
            pager: false
        });

        $('.bxslider-partner').bxSlider({
            adaptiveHeight: true,
            minSlides: 2,
            maxSlides: 6,
            moveSlides: 1,
            slideWidth: 190,
            controls: false,
            //ticker: true,
            //speed: 50000,
            auto: true,
            autoHover: true
        });

        //backstretch
        $(".banner1").backstretch((typeof bannerArray!='undefined'?bannerArray:['fileadmin/templates/frontend/public/images/banner-default.png']), {duration: 4000, fade: 1000});

        //filter list
        var filterList = {
            init: function () {
                // MixItUp plugin
                // http://mixitup.io
                $('#portfoliolist').mixitup({
                    targetSelector: '.portfolio',
                    filterSelector: '.filter',
                    effects: ['fade'],
                    easing: 'snap',
                    // call the hover effect
                    onMixEnd: filterList.hoverEffect()
                });
            },
            hoverEffect: function () {
                // Simple parallax effect
                $('#portfoliolist .portfolio').hover(
                    function () {
                        $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                        $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                    },
                    function () {
                        $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                        $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                    }
                );
            }
        };
        // Run the show!
        filterList.init();

        //lightbox
        $(".swipebox").swipebox();

        //percent process
        $('.poll').each(function(){
            var _this = $(this), percent = 0;
            var pollObj = _this.find('.poll_items .poll_item');
            var pollLength = _this.find('.poll_items .poll_item').length;
            var percentProcess = _this.find('.skill>div');
            //var percentText = _this.find('.poll_percent');
            var timer = setInterval(function(){
                pollObj.removeAttr('style');
                percent += 0.1;
                if(percent>100){
                    percent = 100;
                    //percentText.addClass('complete').html('100%');
                    clearInterval(timer);
                }else{
                    pollObj.eq(parseInt(percent/(100/pollLength))).css({
                        'color' : '#00bf1f',
                        '-webkit-animation': 'bounceIn 600ms linear 300ms both',
                        '-moz-animation': 'bounceIn 600ms linear 300ms both',
                        '-o-animation': 'bounceIn 600ms linear 300ms both',
                        '-ms-animation': 'bounceIn 600ms linear 300ms both',
                        'animation': 'bounceIn 600ms linear 300ms both'
                    });
                }
                percentProcess.css('width', percent+'%');
                //percentText.html(parseInt(percent) + '%');
            }, 10);
        });

        //table
        $('.csc-default table').each(function () {
            if(!$(this).hasClass('table')){
                $(this).addClass('table');
            }
            if(!$(this).parent().hasClass('table-responsive')){
                $(this).wrap('<div class="table-responsive"></div>');
            }
        });



        //date time picker
        $('.datepicker').datetimepicker({
            format: 'YYYY-MM-DD',
            locale: 'zh-cn'
        });

        //indexed search
        $('.navig .search-icon').click(function(){
            $('.navig').hide();
            $('.search-box').fadeIn('slow');
            $('.search-box .search-text').focus();
        });
        $('.search-box .search-close').click(function(){
            $('.search-box').hide();
            $('.navig').fadeIn('slow');
        });
        $('.tx-indexedsearch-browsebox').each(function(){
            $(this).addClass('text-center');
            var currentPage = $(this).find('.tx-indexedsearch-browselist-currentPage');
            currentPage.addClass('active').html(currentPage.find('strong').html());
            $(this).find('.browsebox').addClass('pagination pagination-sm').find('li>a').each(function(){
                $(this).html($(this).html().replace(/(Page\ |Next\ |\ Previous)/g, ''));
            });
        });

        //share
        $('.sticky-bar .share .fa').click(function(e){
            $(this).next().trigger('click');
            e.stopPropagation();
        });

    });
})(jQuery);