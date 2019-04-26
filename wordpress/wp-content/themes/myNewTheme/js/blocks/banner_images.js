
(function($){
$(
    function () {

        var IMGTIMER = setInterval(function () {
            moveRight();
        }, 10000);

        function moveRight() {

            $(".banner_image ").animate({
                left: "-100%"

            }, 5000, function () {
                 setTimeout(() => {
                     $(".banner_image").css("left", "0px");

                }, 4000);


             


            })
        }



    }())

})(jQuery)