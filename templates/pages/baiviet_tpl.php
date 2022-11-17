<div class="container">

    <div class="row">

        <div class="item col-12">

            <div class="content mt10">

                <div class="other-news">

                    <div class="ul-list-detail font-detail">

                        <div class="title-default p-relative mb-10 t-center">

                            <h1>

                               <span><?=$seo->getSeo('h1')?></span>

                            </h1>

                        </div>

                        <div class="detail mt50">

                            <?=htmlspecialchars_decode($row_detail['noidung_'.$lang])?>

                        </div>

                    </div>
                    
                    <div class="detail mt20">

                        <?php include_once _source.'shareLinks.php'?>
                        
                    </div>

                </div>

            </div>

        </div>

    </div>
    
</div>