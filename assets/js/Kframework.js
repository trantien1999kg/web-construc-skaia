"use strict";

_KFRAMEWORK = {

    init:function(){
        _KFRAMEWORK.ClickSearch();
    },
    
    changeYoutubeFrame:(element,target)=>{
        
        var value = element.value;

        if(value!=''){
            $(target).attr('src','https://www.youtube.com/embed/'+value);
        }
        
    },

    ClickSearch:()=>{
        $(".search-Click").click(function(){
            $(this).find("i").toggleClass("fa-xmark");
            $('.nav-menu__formsearchheader').toggleClass('activeS');
        });
    }
}
_KFRAMEWORK .init();