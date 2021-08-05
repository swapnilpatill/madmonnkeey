$(document).ready(function(){
    var timer; 
    $('#shetterTop').css('top', '-0%');
    $('#shetterBottom').css('bottom', '-0%');
    $('body').jpreLoader({
      
    loaderVPos: '50%',
    autoClose: true,
    closeBtnText: "Let's Begin!",
     
    }, function() {	 
    clearInterval(timer);
    $('#shetterBottom')
    .animate({"bottom":'-100%'}, 1900);
    $('#shetterTop')
    .animate({"top":'-100%'}, 1900, function() {
      
       
    });
    });
    if ($('body').width() > 1024) {
        var s = skrollr.init({
            forceHeight: false,
            smoothScrolling: true
        });
    }
       // read more
        // var showChar = 250;  
        // var ellipsestext = "";
        // var moretext = "Read More";
        // var lesstext = "Read Less";
        // $('.subtextwrap p').each(function() {
        //     var content = $(this).html();
        //     if(content.length > showChar) {
        //         var c = content.substr(0, showChar);
        //         var h = content.substr(showChar, content.length - showChar);
        //         var html = c + '<span class="moreellipses">' + ellipsestext+ '&nbsp;</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink readmoreBtn">' + moretext + '</a></span>';
        //         $(this).html(html);
        //     }
        // });
        // $(".morelink").click(function(){
        //     if($(this).hasClass("less")) {
        //         $(this).removeClass("less");
        //         $(this).html(moretext);
        //     } else {
        //         $(this).addClass("less");
        //         $(this).html(lesstext);
        //     }
        //     $(this).parent().prev().toggle();
        //     $(this).prev().toggle();
        //     return false;
        // });
         var moretext = "Read More";
        var lesstext = "Read Less";
        $(".readmoreBtn").click(function(){
            if($(this).hasClass("less")) {
                $(this).removeClass("less");
                $(this).html(moretext);
            } else {
                $(this).addClass("less");
                $(this).html(lesstext);
            }
            $(this).prev().slideToggle();
           // $(this).prev().toggle();
            return false;
        });
// mobile menu
    $('.hamburger').click(function(){
        if($('.mainMenuwrap').css("display") == "block"){
           $(this).removeClass('is-active'); 
           $('.mainMenuwrap').slideUp();

        }else{
           $('.mainMenuwrap').slideDown();
           $(this).addClass('is-active');
        }
    })
//filter and pagination
    var options = {
        valueNames: [
            { data: ['category']}
        ],
        page: 12,
        pagination: true
    };
    var userList = new List('users', options);
    function resetList(){
        userList.filter();
        userList.update();
        $(".filter-all").prop('checked', true);
        $('.filter').prop('checked', false);
    };
    
    function updateList(){
    var values_category = $("input[name=category]:checked").val();
        console.log(values_category);
        userList.filter(function (item) {
            var categoryFilter = false;
            if(values_category == "all")
            { 
                categoryFilter = true;
            } else {
                categoryFilter = item.values().category == values_category;
                
            }
            return  categoryFilter
        });
        userList.update();
    }
    $(function(){
    $("input[name=category]").change(updateList);
        userList.on('updated', function (list) {
            if (list.matchingItems.length > 0) {
                $('.no-result').hide()
            } else {
                $('.no-result').show()
            }
        });
    });

    var options2 = {
         
        page: 6,
        pagination: true
    };
    var userList2 = new List('users2', options2);
    function resetList(){
        userList2.filter();
        userList2.update();
        
    };


 $('.wrapiiack .wrapiiackList li').click(function(){
     $(this).find('.popupWrap').fadeIn();
 });
 $('.closeIconwrap').click(function(){
     $('.popupWrap').fadeOut();
     return false
 });
 $('.consulSlider').slick({
    infinite: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
        
        {
          breakpoint: 580,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]

  });

});