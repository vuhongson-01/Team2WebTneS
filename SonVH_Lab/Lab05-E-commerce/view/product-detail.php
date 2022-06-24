<?php
    include_once 'model/Model.php';
    $product_detail_id = $_GET["product-detail-id"];
    
    $prd = (new Model())->getShoes()[$product_detail_id];
?>

<div class="product-detail-div">
    <div class="product-detail-label">
        <a>Shoes</a>
        <a class=""><?php echo $prd->class; ?></a>
        <a><?php echo $prd->name; ?></a>
    </div>
    <div class="product-detail-view">
        <div class="product-image-container">
            <?php
            for ($i = 1; $i <= 5; $i++){
                $imgPath = $prd->image.$i;
                echo'
                    <div class="image-slide">    
                        <img src="asset/images/'.$imgPath.'.jpg" width="100%">
                    </div>';
            }
            ?>
            <div class="row">
                <?php
                    for ($j = 1; $j <= 5; $j++){
                        $imgPath = $prd->image.$j;
                        echo'
                            <div class="column">    
                                <img class="demo cursor" src="asset/images/'.$imgPath.'.jpg" width="100%" onclick="currentSlide('.$j.')">
                            </div>';
                    }
                    ?>
                </div>
        </div>

        <div class="product-detail-information">
            <div class="product-detail-component name-and-price">
                <span class="product-detail-name"><?php echo $prd->name;?></span>
                <h3 class="product-detail-price"><?php echo $prd->cost;?> VND</h3>                
            </div>
            <div class="product-detail-component">
                <p class="description">Từ tinh thần sáng tạo ngẫu hứng, Track 6 lắp ghép các mảng sắc tách biệt để tạo nên diện mạo tổng thể tương phản cá tính. Thiết kế có chút thay đổi trong chi tiết và sử dụng chất vải canvas NE để tạo nên bản nâng cấp so với phiên bản cũ, đem lại cảm giác lên chân tự tin trong mọi trải nghiệm “bay nhảy” thường ngày.</p>           
            </div>
            <div class="product-detail-component">
                <?php echo'<div class="product-detail-color" style="background-color: '.$prd->color.'"></div>' ?>
            </div>

            <div class="product-detail-component">
                <div class="size">
                    <h3>SIZE</h3>
                    <select>
                        <option value="35">35</option>
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                        <option value="41">41</option>
                        <option value="42">42</option>
                        <option value="43">43</option>
                        <option value="44">44</option>
                        <option value="45">45</option>
                        <option value="46">46</option>
                    </select>
                </div>
                <div class="amount">
                    <h3>AMOUNT</h3>
                    <select>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                </div>

                <button class="add-to-cart-btn">ADD TO CART</button>
                <button class="pay-btn">PAY</button>
            </div>

            <div class="product-detail-component">
                <img src="asset/Size-chart.jpg" width="100%">
            </div>
        </div>
    </div>  
    
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        function currentSlide(n) {
            showSlides(n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("image-slide");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[n-1].style.display = "block";
        }
    </script>
</div>

 