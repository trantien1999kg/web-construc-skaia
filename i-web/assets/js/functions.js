function redirect(url){
    window.location.href=url;
} 
function updateSt(url,table,id,type,value){
    $.ajax({
        url:'ajax/'+url+'.php',
        type:'post',
        data:{
            table:table,
            id:id,
            value:value,
            type:type
        },
        success: function(){
            window.location.reload();
        }
    });
}
function checkStatus(table,id,val,type){
    $.ajax ({
        type: "POST",
        url: "ajax/update_status.php",
        data: {
            table: table,
            id:id,
            val:val,
            type:type
        },
        dataType: 'json',
        success: function(result) {
            if(result.status==1){
                console.log('Đã cập nhật trạng thái');
            }else{
                alert('Bạn không cập nhật được trạng thái này');
            }
        }
    });
}
function onChangePage(val,table,type,el,field_change){
    var params={
        val:val,
        table:table,
        type:type,
        field_change:field_change
    }

    $.ajax({
        url:'ajax/load_catalogy.php',
        data:params,
        type:'post',
        success:function(data){
            $('#'+el).html(data);
        }
    });

}
 function changeSlug(name,el,url='',title='',title_seo=''){
    var res = name.split("_");

    if($('#checkUrl'+res[1]).is(':checked')){
        // console.log('Khóa không cho thay đổi link');
        return false;
    }else{
        // console.log('Cho thay đổi link');
        var v = $('#'+name).val();
        var slug = getSlug(v);
        $('#'+el).val(slug);
        if(url!=''){
            $('#'+url).text(slug);
        }
        var seo = $('#'+title_seo).val();
        if(seo!=''){
            $('#'+title).text(seo);
        }else{
            $('#'+title).text(v);
        }
    }
}
function changeSeo(name,el,ty){
    var v = $('#'+name).val();
    if(ty=='null'){
        $('#'+el).text(v);
    }else{
        if(v!=''){
            $('#'+el).text(v);
        }else{
            $('#'+el).text($('#'+el).val());
        }
    }
}
function OnlyNumber(evt)
{
 var charCode = (evt.which) ? evt.which : event.keyCode
 if (charCode > 47 && charCode < 58)
    return true;

 return false;
}
function changeUrl(name,el){
    var v = $('#'+name).val();
    v = getSlug(v,'-');
    $('#'+name).val(v);
    $('#'+el).text(v);
}
 function login(username,password){
    var _username=$('#'+username).val();
    var _password=$('#'+password).val();
    var _flag=true;
    if(_username==''){
        errorLog('Bạn chưa nhập tên đăng nhập!','error');
        $('#'+username).focus();
        _flag=false;
        return false;
    }
    if(_password==''){
        errorLog('Bạn chưa nhập mật khẩu!','error');
        $('#'+password).focus();
        _flag=false;
        return false;
    }
    if(_flag==true){
        $.ajax({
            url:'ajax.php',
            type:'POST',
            data:{
                username:_username,
                password:_password
            },
            dataType:'json',
            error:function(a,b,c){
                alert(c);
            },
            beforeSend:function(){
                $(this).addClass('loading');
            },
            success:function(data){
                if(data.status==200){
                    window.location.href = data.url;
                }else{
                    FRAMEWORK.errorPage(data.message,data.error);
                }
            },
            complete : function () {
                setTimeout(function() {
                    $(this).removeClass('loading');
                }, 2000);
            }
        });
    }
}