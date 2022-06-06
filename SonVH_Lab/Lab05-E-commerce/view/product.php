<?php include_once("model/Model.php");?>

            <div class="list-product">
                <div class="productlist_theearth_img"></div>

                <div class="product-detail-div" on>
                    <?php
                        $index = 0;
                        foreach ($product as $p){
                            echo '
                                <div class="product-detail">
                                    <a class="product-detail-image" href="index.php?product-detail-id='.$index.'">
                                        <img id="default-image" class="fi" src="asset/images/'.$p->image.'1.jpg" width="100%">
                                        <img id="hover-image" class="fi" src="asset/images/'.$p->image.'2.jpg" width="100%">
                                        <button class="buy-btn">BUY NOW</button>
                                    </a>
                                    <div class="product-detail-infor">
                                        <a class="name" href="index.php?product-detail-id='.$index.'">'.$p->name.'</a>
                                        <a class="color">'.$p->color.'</a>
                                        <a class="price">'.$p->cost.' VND</a>
                                    </div>
                                </div>
                            ';
                            $index++;
                        }
                    ?>
                </div>
            </div>