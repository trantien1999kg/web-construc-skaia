<?php
    $slider=$db->rawQuery("select ten_$lang as ten,photo_$lang photo,link from #_photo where hienthi=1 and type=? order by stt asc,id desc",array('slider'));

    
?>

<link rel="stylesheet" href="assets/css/vegas.css">
<script src="assets/js/vegas.js"></script>
<?php if($slider){?>
<script type="text/javascript">
$(function() {
    $('#slodo').vegas({
        overlay: false,
        // transition: 'fade',
        transitionDuration: 4000,
        delay: 7000,
        color: 'red',
        animation: 'random',
        animationDuration: 7000,
        overlay: 'assets/vegas-master/dist/overlays/06.png',
        slides: [
            <?php for($i=0,$count_result_slider=count($slider);$i<$count_result_slider;$i++) { ?>

            {
                src: "<?= _upload_hinhanh_l.$slider[$i]['photo'] ?>",
                
                overlaytext: `
                
                <div class='d-none-m'>

                    <div class='niceText'>

                        <div class='title chayten'>
                        
                            <div class='box-slider_content mt-50'>

                            <div class="chaychu">
                                <div class="chaychu1"><?= $row_setting['scrolltext1_vi']?></div>
                                <div class="chaychu2"><?= $row_setting['scrolltext2_vi']?></div>
                            </div>

                                <div class="titleSlide wow slideInLeft" data-wow-delay="0.5s"><?= $slider[$i]['ten']?></div>

                                <div class="buttonSlide wow slideInUp" data-wow-delay="0.5s">
                                    <a href='<?= $slider[$i]['link']?>' class="xemthemSlide">XEM THÊM</a>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>`
            },

            <?php } ?>
        ],
        walk: function(slide, setting) {
            $("#slodo-content").empty();
            $("#slodo-content").append(setting.overlaytext);
            _FRAMEWORK.chaychu();
        },
    });
    $("a.next-vegas").click(function(e) {
        $('#slodo').vegas("next");
        e.preventDefault();
    })
    $("a.prev-vegas").click(function(e) {
        $('#slodo').vegas("previous");
        e.preventDefault();
    })
});
</script>

<?php }?>

<section class="p-relative slider-vegas">
    <div id="slodo">

    </div>

    <div id="slodo-content">

    </div>



</section>

