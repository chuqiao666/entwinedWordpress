(function($){

    var logosSlider = {
    
        count: 0,
        scroller: function () {
            console.log(this.count);
               var count = this.count;
            setInterval((count)=> {
                // console.log(this.count);
                if(this.count >= $("#logo_horizontal_lines > div").length){
                    this.count = 1;

                }else{
                    this.count ++;

                }
                // console.log(this.count);
                $("#logo_horizontal_lines >.row").hide();
                $("#logo_horizontal_lines > div:nth-child("+ this.count + ")").fadeIn("slow");
            }, 4000);
        }
    
    }
    
    
    logosSlider.scroller();
   


})(jQuery);

