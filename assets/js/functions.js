function pushState(options,targetTitle,targetUrl) {

    window.history.pushState(options, targetTitle, targetUrl);

}

function goToByScroll(id) {

    $('body,html').animate({ scrollTop: $(id).offset().top - 100 }, 500);

}
function goToByScroll(id) {
    $('body,html').animate({ scrollTop: $(id).offset().top - 100 }, 500);
}
function updatePriceDetail(pid,size=0,type){

    $.ajax({
        url:'ajax/ajaxUpdatePrice.php',
        data:{pid:pid,size:size,type:type},
        dataType:'json',
        type:'post',      
        success:function(data){
            console.log(data["price-string"]);
            $('#view-price-detail').html(data["price-string"]);
        }
    });
}
function redirect(url){

    window.location.href=url;

}

function exists(el){

    if(el.length>0) return true;

    else return false

}

function onlyNumber(evt)

{

 var charCode = (evt.which) ? evt.which : event.keyCode

 if (charCode > 47 && charCode < 58)

    return true;



 return false;

}

function slugConvert(slug,focus=false)

{

    slug = slug.toLowerCase();

    slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');

    slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');

    slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');

    slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');

    slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');

    slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');

    slug = slug.replace(/đ/gi, 'd');

    slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');

    slug = slug.replace(/ /gi, "-");

    slug = slug.replace(/\-\-\-\-\-/gi, '-');

    slug = slug.replace(/\-\-\-\-/gi, '-');

    slug = slug.replace(/\-\-\-/gi, '-');

    slug = slug.replace(/\-\-/gi, '-');

    

    if(!focus)

    {

        slug = '@' + slug + '@';

        slug = slug.replace(/\@\-|\-\@|\@/gi, '');

    }



    return slug;

}

function sideScroll(element, direction, speed, distance, step) {

    scrollAmount = 0;

    var slideTimer = setTimeout(function() {

        if (direction == 'left') {

            $(element).animate({

                scrollLeft: "-=" + step

            }, "slow");

            //element.scrollLeft -= step;

        } else {

            $(element).animate({

                scrollLeft: "+=" + step

            }, "slow");

            //element.scrollLeft += step;

        }

        scrollAmount += step;

        if (scrollAmount >= distance) {

            window.clearInterval(slideTimer);

        }

    }, speed);

}

function onChangeSelect(e,p){

    $.ajax({

        url: _ROOT + 'users.js',

        type: 'POST',

        data: {p: p , src:'load-place'},

        success: function(data){

            $(e).html(data);

        }

    });

}

function onChangeCatalog(e,p,n){

    $.ajax({

        url: 'ajax/loadCatalog.php',

        type: 'POST',

        data: {p: p},

        success: function(data){

            $(e).html(data);

            if(n==='destroy'){$('#idi').html('<option>Hãng</option>');}

            $('.nice-select').niceSelect('update');

        }

    });



}

function copyToClipboard(element) {

    var $temp = $("<input>");

    $("body").append($temp);

    $temp.val($(element).text()).select();

    document.execCommand("copy");

    $temp.remove();

}

function copyToClipboardText(text) {

    var $temp = $("<input>");

    $("body").append($temp);

    $temp.val(text).select();

    document.execCommand("copy");

    $temp.remove();

}

function isBlank(a) {

    if (a.length == 0) {

        return true

    }

    return false

}

function doSearch(options) {



    if(!options) options = {};

    

    var url = '';

    

    $.each(options, function(k, v) {



        url += k+'='+v+'&';

        

    });

    $.ajax({



        url: _ROOT + 'tim-kiem?'+url.substr(0,url.length-1),

        

        type: 'GET',

        

        dataType: 'json',

        

        success: function(data){



            $('#grid-view').html(data.col);



            $('#pagingPage').html(data.page);



            $('#show').html(data.show);

            

        }

    });

    

}

function searchEnter(t){

    var k = t.val();



    var url;





    if(!isBlank(k)){



        url = 'keywords='+k;



        window.location.href = _ROOT + 'tim-kiem?'+encodeURI(url);



    }else{



        t.focus();



    }



}

function loadScrollPage(url,type,width,height,ele){



    var a=!1;



    $(window).scroll(function(){



        $(window).scrollTop()>10 && !a&&($('#'+ele).load('ajax/load_addons.php?url='+url+'&width='+width+'&height='+height+'&type='+type),a=!0)



    });



}

function isEmail(b) {

    

    var a = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);

    

    return a.test(b)

}

function validatePhone(b){

    

    var a=/((09|03|07|08|05)+([0-9]{8})\b)/g;

    

    return a.test(b);

}

function getResult(url,eShow='',rCount=0) {

    $.ajax({

        url: _ROOT + '/' + url,

        type: "GET",

        data: {

            rowcount: rCount,

            eShow: eShow,

        },

        success: function(data){

            $(eShow).html(data);

            // goToByScroll(eShow);

        }

   });

}
// tab cửa hàng
function getResultStore(url,eShow='',eimgShow='',rCount=0) {

    $.ajax({

        url: _ROOT + '/' + url,

        type: "GET",

        data: {

            rowcount: rCount,

            eShow: eShow,

            eimgShow:eimgShow

        },

        dataType: 'json',

        success: function(data){

            $(eShow).html(data.output);

            $(eimgShow).html(data.img);

            // goToByScroll(eShow);

        }

   });

}

function eventSearch(){

    var loaidat=parseInt($('#loaidat-top').val());

    var dientich=parseInt($('#dientich-top').val());

    var huong=parseInt($('#huong-top').val());

    var price = parseInt($('#giaban-top').val());
    
    var keywords = $('#keywords').val();

    var url='tim-kiem?';

    if(loaidat!=0 && !isNaN(loaidat)){


        url+='soil-type='+loaidat+'&';

    }

    if(dientich!=0 && !isNaN(dientich)){


        url+='area='+dientich+'&';

    }

    if(huong!=0 && !isNaN(huong)){


        url+='direction='+huong+'&';

    }

    if(price!=0 && !isNaN(price)){


        url+='price='+price+'&';

    }

    if(keywords!='' && keywords!==undefined){


        url+='keywords='+keywords+'&';

    }

    if(url!='tim-kiem?'){

        redirect(url.substr(0,url.length-1));

    }else{

        $.confirm({

            title: lang.thong_bao,

            content: 'Bạn chưa chọn thông tin cần tìm!!!',

            buttons: {

                success: {

                    text: 'OK',

                    btnClass: 'btn-blue',

                },

            }

        });

    }

}

function eventSearchSideBar(){

    var loaidat=parseInt($('#sidebar-loaidat').val());

    var dientich=parseInt($('#sidebar-dientich').val());

    var huong=parseInt($('#sidebar-huong').val());

    var price = parseInt($('#sidebar-giaban').val());
    
    var keywords = $('#keywords').val();

    var url='tim-kiem?';


    if(loaidat!=0 && !isNaN(loaidat)){


        url+='soil-type='+loaidat+'&';

    }

    if(dientich!=0 && !isNaN(dientich)){


        url+='area='+dientich+'&';

    }

    if(huong!=0 && !isNaN(huong)){


        url+='direction='+huong+'&';

    }

    if(price!=0 && !isNaN(price)){


        url+='price='+price+'&';

    }

    if(keywords!='' && keywords!==undefined){


        url+='keywords='+keywords+'&';

    }

    if(url!='tim-kiem?'){

        redirect(url.substr(0,url.length-1));

    }else{

        $.confirm({

            title: lang.thong_bao,

            content: 'Bạn chưa chọn thông tin cần tìm!!!',

            buttons: {

                success: {

                    text: 'OK',

                    btnClass: 'btn-blue',

                },

            }

        });

    }

}

