$(document).ready(function() {

    // created a run everything code so that on window resize it would rerun this js.
    function runEverything() {

        // RESET VALUES
        $(document).width('auto');
        $(window).height('auto');
        $('.maincolumn, .sidebar-affixed, #main, #header, #footer').height('auto');

        // SET VARIABLES
        var docWidth     = $(document).width(),
            windowHeight = $(window).height(),
            scrollAmount = $(window).scrollTop();

        var headerHeight = 0;
            if ($('#header').length > 0) {
                headerHeight = $('#header').outerHeight();
            };

        var footerHeight    = 0,
            footerHeightFix = 0; // will remove border-top from footerHeight calculation
            if ($('#footer').length > 0) {
                footerHeight    = $('#footer').outerHeight(),
                footerHeightFix = footerHeight - parseInt($('#footer').css('border-top-width'));
            };

        var maincolumnOffset = 0,
            maincolumnHeight = 0;
            if ($('.maincolumn').length > 0) {
                maincolumnOffset = $('.maincolumn').offset().top,
                maincolumnHeight = $('.maincolumn').outerHeight();
            };

        var sidebarWidth = 0;
            if ($('.sidebar').length > 0) {
                sidebarWidth  = $('.sidebar').outerWidth();
            };

        var sidebaraffixedHeight = 0,
            sidebaraffixedOffset = 0; // remove bottom-padding from height calculation
            if ($('.sidebar-affixed').length > 0) {
                sidebaraffixedHeight = $('.sidebar-affixed').outerHeight(),
                sidebaraffixedOffset = $('.sidebar-affixed').offset().top;
            };


        console.log("docWidth =", docWidth);
        console.log("windowHeight =", windowHeight);
        console.log("headerHeight =", headerHeight);
        console.log("footerHeight =", footerHeight);
        console.log("footerHeightFix =", footerHeightFix);
        console.log("maincolumnOffset =", maincolumnOffset);
        console.log("maincolumnHeight =", maincolumnHeight);
        console.log("sidebarWidth =", sidebarWidth);
        console.log("sidebaraffixedHeight =", sidebaraffixedHeight);
        console.log("sidebaraffixedOffset =", sidebaraffixedOffset);


        // TESTING CLASS
        // add #test to end of any url to get special targeted css. This can be used for testing small updates live without appearing 'live'
        // if (location.href.match('#test')) {
        //     $('body').addClass('test');
        // };


        // START CAROUSEL
        // @from: bootstrap
        $('.carousel').carousel({
            interval: 8000,
            pause: "false" // does not pause rotation when hovering over image
        });


        // SET CSS FOR AFFIX
        // removed any pre-appended styles because they stack on top of one another on window resize.
        $('style[data-type="affix-css"]').remove();
        // add css
        $('body').append('<style type="text/css" data-type="affix-css"> .js-affixed-bottom {bottom:' + sidebaraffixedHeight + 'px;} </style>');
        if (docWidth > 767) {
            // width needs to be the same as the container element
            $('.sidebar-affixed').css("width", sidebarWidth);
        };


        // SET CSS FOR MAIN, FOOTER
        // exact border width pushes content below fixed header perfectly
        $('#main').css('border-top-width', headerHeight + 'px');
        // if window is too vertically challenged, adjust styles
        // on small page sizes the footer would partially show, which looked awkward since it's not immediately obvious to scroll to view the whole footer.
        if (windowHeight < (headerHeight + footerHeightFix)) {
            $('#footer').css('position', 'static');
            $('#main').css('margin-bottom', 0);
        } else {
            $('#footer').css('position', 'fixed');
            // to show the footer (footer is set to fixed positioning), give #main a margin the same height as the footer
            $('#main').css('margin-bottom', footerHeightFix + 'px');
        };


        // HEADER BOX SHADOW ADJUSTMENT
        // @from: https://stackoverflow.com/questions/9179708/replicating-bootstraps-main-nav-and-subnav
        // increases the box shadowing when scrolling, then removes when scrolling is not happening
        $(document).scroll(function(){
            $('.navbar-inner').addClass('box-shadow');
            // timeout @from: https://stackoverflow.com/questions/9144560/jquery-scroll-detect-when-user-stops-scrolling
            clearTimeout($.data(this, 'scrollTimer'));
            $.data(this, 'scrollTimer', setTimeout(function() {
                $('.navbar-inner').removeClass('box-shadow');
            }, 200));
        });


        // SIDEBAR AFFIX
        // I used to use bootstrap's affix function, but it didn't work well (perhaps interaction issues w/ scrollspy). i rewrote it here.
        if (docWidth > 767) {
            $(window).scroll(function() {
                // recalculate variable
                scrollAmount = $(window).scrollTop();

                if (scrollAmount <= 0) {
                    // if there's no scroll, set affix to top
                    $('#content-careers .sidebar-affixed').removeClass('js-affixed js-affixed-bottom').addClass('js-affixed-top');
                } else if (scrollAmount > (maincolumnHeight - (2 * sidebaraffixedHeight))) {
                    // else set affix to bottom when scrolling near bottom of main column
                    $('#content-careers .sidebar-affixed').removeClass('js-affixed-top js-affixed').addClass('js-affixed-bottom');
                } else {
                    // otherwise set affix, which fixes sidebar position
                    $('#content-careers .sidebar-affixed').removeClass('js-affixed-top js-affixed-bottom').addClass('js-affixed');
                };
            });
        };


        // ADJUST JOBLIST POSITIONING WITH SIDENAV CLICK
        // @from: https://stackoverflow.com/questions/9288482/how-do-i-set-the-offset-for-scrollspy-in-bootstrap
        // the nav uses element IDs to scroll to job lists. These would link to the top of the page and get covered by the banner.
        // this should run only for tablets and above
        if (docWidth > 767) {
            function scrollTo(id) {
                $(id)[0].scrollIntoView();
                window.scrollBy(0, -(maincolumnOffset));
            };
            $('.sidenav li a').click(function(e) {
                $('.sidenav li a').removeClass('active');
                var hash = $(this).attr('href');
                e.preventDefault();
                document.location.hash = hash;
                scrollTo(hash);
                $(this).addClass('active');
            });
            if(document.location.hash) {
                $(window).load(function() {
                    scrollTo(document.location.hash);
                });
            };
        };


        // ADJUST CARD HEIGHTS TO BE EQUAL
        // @from: css-tricks.com/equal-height-blocks-in-rows/

        $(window).load(function(){
            var currentTallest = 0,
                currentRowStart = 0,
                rowDivs = new Array(),
                $el,
                topPosition = 0;

            $('.row .card').each(function() {
                $el = $(this);
                topPostion = $el.position().top;
                $el.height('auto');

                if (currentRowStart != topPostion) {

                // we just came to a new row.  Set all the heights on the completed row
                for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                    rowDivs[currentDiv].height(currentTallest);
                }

                // set the variables for the new row
                rowDivs.length = 0; // empty the array
                currentRowStart = topPostion;
                currentTallest = $el.height();
                rowDivs.push($el);

                } else {
                    // another div on the current row.  Add it to the list and check if it's taller
                    rowDivs.push($el);
                    currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
                }

                // do the last row
                for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
                    rowDivs[currentDiv].height(currentTallest);
                }
            });
        });

    };
    runEverything();


    // RERUN JS ON WINDOW RESIZE
    // @from: https://stackoverflow.com/questions/22720595/re-run-js-script-on-window-resize-or-mobile-screen-change
    // @from: https://stackoverflow.com/questions/7280307/resize-javascript-window
    $(window).resize(function() {
        // this tells the js to rerun everything even on window height adjustment
        $(window).height($(this).height());
        runEverything();
    }).resize();


});
