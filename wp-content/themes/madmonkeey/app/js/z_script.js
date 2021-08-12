$(document).ready(function(){
    if($('body').width() > 1023 ){
        $(".main").onepage_scroll({
          sectionContainer: ".section",
          responsiveFallback: 600,
          loop: true
        });
    }
          

    // var timer; 
    // $('#shetterTop').css('top', '-0%');
    // $('#shetterBottom').css('bottom', '-0%');
    // $('body').jpreLoader({
      
    // loaderVPos: '50%',
    // autoClose: true,
    // closeBtnText: "Let's Begin!",
     
    // }, function() {	 
    // clearInterval(timer);
    // $('#shetterBottom')
    // .animate({"bottom":'-100%'}, 1900);
    // $('#shetterTop')
    // .animate({"top":'-100%'}, 1900, function() {
      
       
    // });
    // });
    
    $('.hamburger').click(function(){
        if($('.mainMenuwrap').css("display") == "block"){
           $(this).removeClass('is-active'); 
           $('.mainMenuwrap').slideUp();

        }else{
           $('.mainMenuwrap').slideDown();
           $(this).addClass('is-active');
        }
    })
 

});

$(document).ready(function(){
    var element = $('#countdown-gampang');
    var finish_d = new Date('10/15/2021');
//finish_d.setDate(1 );
    element.CountdownGampang({
        rampung: finish_d,
        theme: "flat-colors-very-wide"
    }, function(){
        // callback that is fired when the countdown reaches 0.
        alert("Wes Wayahe Bro :)");
    });
});