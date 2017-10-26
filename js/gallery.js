var _screenWidth = $(window).width();
    var _screenHeight = $(window).height();
    
    var imageNames = [];
    var fadeTimerAmount = 500;
    //var slideTimer = 2000;
    
    var _urlPone = './includes/gallery-page/';
    var _JSONurl = './getimages.php';
    var _url = './gallery-images/'; 
    
var currentSlide;
    var timeOut = null;
    var firstRun = 1;

$(document).ready(function() {
    $.ajax({
        async: false,
        url: _JSONurl,
        dataType: "json",
        success: function(data){
            $.each(data, function(i,filename){
                $('#gThumb').prepend('<img class="img" src="'+ _url +filename + '" data-imgValue = "'+i+'">');
                imageNames[i] = filename;
            });
        }
    });
    
    //Sets the full-container to a height that pushes everthrting in place.
    if(jQuery.browser.mobile){
        $('#full-container').css('height','auto');
    }
    else{
        $('#full-container').css('height',_screenHeight - 175);
    }
    
    
    // Sets the large image to the first image in the list
    $('#largeImage .image').html('<img class="image-responsive mainImage" src ='+_url +imageNames[imageNames.length-1]+'>');
    
    currentSlide = imageNames.length-1;
});



 function slideChange(key){
         $('.image').slideUp(fadeTimerAmount);
        setTimeout(function(){
            $('.image').html('<img class="image-responsive mainImage" src ='+_url +imageNames[key]+'>');
        }, fadeTimerAmount );
        $('.image').slideDown(fadeTimerAmount+200 );
    }

function slideChangeFade(key){
         $('.image').fadeOut(fadeTimerAmount);
        setTimeout(function(){
            $('.image').html('<img class="image-responsive mainImage" src ='+_url +imageNames[key]+'>');
        }, fadeTimerAmount );
        $('.image').fadeIn(fadeTimerAmount+200 );
    }


$(window).load(function(){

    var resetTimer= null;
    
   $('#next').click(function(e,simulated){
        if(!simulated){
            clearTimeout(timeOut);
        }
        currentSlide--;
        if(currentSlide < 0)
            currentSlide = imageNames.length-1;
         slideChangeFade(currentSlide);
        
    });
    $('#prev').click(function(e,simulated){
        if(!simulated){
            clearTimeout(timeOut);
        }
        currentSlide++;
        if(currentSlide > imageNames.length-1)
            currentSlide = 0;
         slideChangeFade(currentSlide);
        
    });
    
    $('img').click(function(e,simulated){
        if(!simulated){
            clearTimeout(timeOut);
            clearInterval(resetTimer);
        }
        var key = $(this).attr('data-imgValue');
        slideChange(key);
        currentSlide = key;
        
        // basically resets the timer and starts the cycling again.
        resetTimer = setInterval(function(){$('#next').trigger('click',[true]);},5000);
        
    });
    
    (function autoAdvance(){
       if(firstRun == 1){
           firstRun++;
       }else{
            // Simulating a click on the next arrow.
           $('#next').trigger('click',[true]);
       }
        // Schedulling a time out in 5 seconds.
        timeOut = setTimeout(autoAdvance,5000);
    })();

});
