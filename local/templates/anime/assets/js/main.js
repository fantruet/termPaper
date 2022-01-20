$(document).ready(function(){
    $('.slider_inner').slick({
        arrows:true,
        slidesToShow: 7,
        autoplay:true,
        autoplaySpeed:10000
    });
    $('.button_chose').click(function(){
        $('#video-player').attr('src',$(this).data('url'));
    })
});
$(function() {
    let header = $('.header_top');
    let hederHeight = header.height(); // вычисляем высоту шапки
     
    $(window).scroll(function() {
      if($(this).scrollTop() > 1) {
       header.addClass('header_top_fixed');
       $('body').css({
          'paddingTop': hederHeight+'px' // делаем отступ у body, равный высоте шапки
       });
        } else {
       header.removeClass('header_top_fixed');
       $('body').css({
        'paddingTop': 0 // удаляю отступ у body, равный высоте шапки
       })
      }
    });
});

document.querySelector('#search').onclick = open;

let button_search = $('.button_search');
let text = $('.inputText');
let flag = 0;

function open(){
    if (flag == 0){
        text.addClass('inputTextVisable');
        button_search.addClass('button_search_cross')
        flag++;
    }else{
        text.removeClass('inputTextVisable');
        button_search.removeClass('button_search_cross');
        flag--;
    }
}




