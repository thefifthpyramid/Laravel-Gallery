
$(".sub_image").click(function(){
    $(window).scrollTop(320);
    $('#main_cover').attr('src',$(this).find('img').attr('src'));
})
