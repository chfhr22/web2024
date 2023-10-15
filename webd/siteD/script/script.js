$(function(){
    // 슬라이드
    let currentIndex = 0;
    $(".imgWrap").append($(".image").first().clone(true));

    setInterval(function(){
        currentIndex++;
        $(".imgWrap").animate({marginTop: -400 * currentIndex + "px"}, 600);

        if(currentIndex == 3){
            setTimeout(() => {
                $(".imgWrap").animate({marginTop: 0}, 0);
                currentIndex = 0;
            },600);
        }
    }, 3000);

    // 메뉴
    $(".nav > ul > li").mouseover(function(){
        $(this).find(".submenu").stop().slideDown();
    });
    $(".nav > ul > li").mouseout(function(){
        $(this).find(".submenu").stop().slideUp();
    });

    // 팝업
    $(".popup__btn").click(function(){
        $(".popup__view").show();
    });
    $(".popup__close").click(function(){
        $(".popup__view").hide();
    });
});