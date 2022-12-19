$(document).ready(function () {

    var $list = $("#crdbox02 #cardmenu01").hide(),
    $content;

    $(" .button#chicken ")
    .on("click" , function (){
        var $this = $(this);
        $this.addClass("active").siblings().removeClass("active");
        $content = $list.filter("." + this.id).hide();
        $content.slice(0,4).show(400);
        $list.not($content).hide(300);
    })
    .filter(".active")
    .click();

 




    $(".button#veg ")
    .on("click" , function (){
        var $this = $(this);
        $this.addClass("active").siblings().removeClass("active");
        $content = $list.filter("." + this.id).hide();
        $content.slice(0,4).show(400);
        $list.not($content).hide(300);
    })
    .filter(".active")
    .click();
    


    $(".button#ital ")
    .on("click" , function (){
        var $this = $(this);
        $this.addClass("active").siblings().removeClass("active");
        $content = $list.filter("." + this.id).hide();
        $content.slice(0,4).show(400);
        $list.not($content).hide(300);
    })
    .filter(".active")
    .click();



    $("#loadmore").on("click",function(){
        $content.filter(":hidden").slice(0.4).slideDown("slow");
    });


});
