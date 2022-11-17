<?php  if(!$func->isGoogleSpeed()){ ?>

<link rel="stylesheet" href="./assets/plugins/fontawesome/css/all.min.css">

<?php }?>

<?php

    $css->setCache("cached");

    if(!$func->isGoogleSpeed()){

        $css->setCss("./assets/css/all.css");

        $css->setCss("./assets/css/fonts.css");

        $css->setCss("./assets/css/normalize.css");

    }

    $css->setCss("./assets/css/jssor.css");

    $css->setCss("./assets/css/reset.css");

    $css->setCss("./assets/css/768w.css");

    $css->setCss("./assets/css/skaia.css");

    $css->setCss("./assets/css/animate.css");

    $css->setCss("./assets/css/menu.mobile.css");

    $css->setCss("./assets/css/style.css?v=".filemtime("./assets/css/style.css"));

    $css->setCss("./assets/css/themes.css?v=".filemtime("./assets/css/themes.css"));
    
    $css->setCss("./assets/plugins/wow/animate.css");

    $css->setCss("./assets/plugins/mmenu/mmenu.css");

    $css->setCss("./assets/css/grid.css?v=".filemtime("./assets/css/grid.css"));

    $css->setCss("./assets/css/main.css?v=".filemtime("./assets/css/main.css"));

    $css->setCss("./assets/css/base.css?v=".filemtime("./assets/css/base.css"));

    $css->setCss("./assets/css/index.css?v=".filemtime("./assets/css/index.css"));

    $css->setCss("./assets/css/responsive.css?v=".filemtime("./assets/css/responsive.css"));

    echo $css->getCss();

?>

<style>
<?php if( !$func->isGoogleSpeed()) {
    ?>@font-face {

        font-family: 'SVN-BLOGSCRIPT';

        src: url('assets/images/fonts/SVN-BLOGSCRIPT.TTF') format('truetype');

    }

    /* SFU SYDNEY */
    @font-face {

        font-family: 'SFU-HEAVY';

        src: url('assets/images/fonts/SFUSYDNEYHEAVY.TTF') format('truetype');

    }

    @font-face {

        font-family: 'SFU-MEDIUM';

        src: url('assets/images/fonts/SFUSYDNEYMEDIUM.TTF') format('truetype');

    }

    @font-face {

        font-family: 'SFU-REGULAR';

        src: url('assets/images/fonts/SFUSYDNEYREGULAR.TTF') format('truetype');

    }

    @font-face {

        font-family: 'M-REGULAR';

        src: url('assets/images/fonts/Montserrat-Regular.ttf') format('truetype');

    }


    @font-face {

        font-family: 'QALISHA';

        src: url('assets/images/fonts/SVN-QALISHA.OTF') format('truetype');

    }



    /* UTM AVO */

    @font-face {

        font-family: 'UTM-Avo';

        src: url('assets/images/fonts/font/UTMAvo/UTM-Avo.ttf') format('truetype');

    }

    @font-face {

        font-family: 'fontAVO';

        src: url('assets/images/fonts/font/UTMAvo/UTMAvo.ttf') format('truetype');

    }

    @font-face {

        font-family: 'fontAVOb';

        src: url('assets/images/fonts/font/UTMAvo/UTM-AvoBold.ttf') format('truetype');

    }

    @font-face {

        font-family: 'fontAVObi';

        src: url('assets/images/fonts/font/UTMAvo/UTM-AvoBold_Italic.ttf') format('truetype');

    }

    @font-face {

        font-family: 'fontAVOi';

        src: url('assets/images/fonts/font/UTMAvo/UTM-AvoItalic.ttf') format('truetype');

    }

    @font-face {

        font-family: 'RBT-REGULAR';

        src: url('assets/images/fonts/RobotoRegular.ttf') format('truetype');

    }

    @font-face {

        font-family: 'RBT-MEDIUM';

        src: url('assets/images/fonts/ROBOTO-MEDIUM.TTF') format('truetype');

    }

    @font-face {

        font-family: 'RBT-LIGHT';

        src: url('assets/images/fonts/ROBOTO-LIGHT.TTF') format('truetype');

    }

    @font-face {

        font-family: 'RBT-BOLD';

        src: url('assets/images/fonts/ROBOTO-BOLD.TTF') format('truetype');

    }

    @font-face {

        font-family: 'RBT-BLACK';

        src: url('assets/images/fonts/ROBOTO-BLACK.TTF') format('truetype');

    }

    <?php
}

?>:root {

    --html-bg-website: <?=$row_setting['color_page']?>;

    --html-bg-website-o: <?=$row_setting['color_page']."5c"?>;

    --html-cl-website: <?=$row_setting['color_text']?>;

    --html-3: <?=$row_setting['color3']?>;

    --utmavo-normal: 'UTMAvo';

    --utmavo: 'UTM-Avo';

    --utmavo-bold: 'UTM-AvoBold';

    --utmavo-bolditalic: 'UTM-AvoBold_Italic';

    --utmavo-italic: 'UTM-AvoItalic';

    --svn-blogscript: 'SVN-BLOGSCRIPT';

}
</style>