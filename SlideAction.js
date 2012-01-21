$(document).ready(function(){
 
    activeItem = $("#accordion li:first");
    $(activeItem).addClass('active');
    
    $("#accordion li").hover(function(){
        $(activeItem).animate({width: "100px", opacity: 0.60}, {duration:300, queue:false});
        $(activeItem).removeClass('active');
        $(this).animate({width: "366px", opacity: 1.0}, {duration:300, queue:false});
        /*$("img").animate({marginLeft: "0px"});*/
        activeItem = this;
    	$(activeItem).addClass('active');
    });
    
    
 	/*activeImg = $("#accordion li:first img");
 	$(activeImg).addClass('activeImg');
 	
 	$(activeImg).animate({marginLeft:"-140px"}, {duration:30, queue:false});
 	$(this).animate({marginLeft:"0px"}, {duration:30, queue:false});
    activeImg = this;
    */
});