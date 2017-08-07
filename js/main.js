/**
 * Created by granevich on 06.05.2016.
 */

$(document).ready(function () {

    var courusel = {
         block : $('.wrapper'),

        move_left: function () {
            var elems=  $('.wrapper div');
            var width = elems.eq(0).outerWidth();
            $('#left').off('click');
            this.block.animate({
                'left':'-' + width + 'px'

            },1000, function () {
                courusel.block.css({
                    'left':0 + 'px'

                });
                elems.eq(0).clone().appendTo('.wrapper');
                elems.eq(0).remove();
                $('#left').on('click', function (e) {
                    courusel.move_left();
                });
            } );
        },


        move_right: function () {
            var elems =  $('.wrapper div');
            var width = elems.eq(0).outerWidth();
            elems.eq(-1).clone().prependTo('.wrapper');
            courusel.block.css({
                    'left':'-' + width + 'px',
                    'width':'100%'
                });
            $('#right').off('click');
           this.block.animate({
                'left': '0px'

            },1000, function () {
                elems.eq(-1).remove();
               $('#right').on('click', function (e) {
                   courusel.move_right()
               });
            });


        }
    };


    $('#left').on('click', function (e) {
            courusel.move_left();


    });
    $('#right').on('click', function (e) {
            courusel.move_right()
    });

});