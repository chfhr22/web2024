$(function(){
    currentIndex = 0;
    $(".slider__wrap").append($(".slider").first().clone(true));

    setInterval(function(){
        currentIndex++;
        $(".slider__wrap").animate({},3000)
    });
});