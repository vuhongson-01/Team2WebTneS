<?php include_once("model/Model.php");
    $model = new Model();
    $product = $model->getShoes();
?>

        <div class="tag">
            <div class="use-for">
                <a id="all" href="index.php?dest=product" onclick="choose(1)">ALL</a>
                <a id="men" href="index.php?dest=men" onclick="choose(2)">MEN</a>
                <a id="woman" href="index.php?dest=woman" onclick="choose(3)">WOMAN</a>
            </div>

            <div class="category shape">
                <a id="title1" class="tag-title" onclick="expand(1)">STYLE <i id="e1" class="fa-solid fa-angle-down"></i></a>
                <div id="cate1" class="pick style">
                    <?php 
                        foreach ($model->shape as $s){
                            echo '<a class="option-checkbox '.$s.'" onclick="markAttribute('.$s.')">'.$s.'<i id="'.$s.'" class="fa-solid fa-xmark"></i></a>';
                        }                
                    ?>
                </div>
            </div>


            <div class="category class">
                <a id="title2" class="tag-title" onclick="expand(2)">CLASS <i id="e2" class="fa-solid fa-angle-down"></i></a>
                <div id="cate2" class="pick class">
                    <?php 
                        foreach ($model->class as $s){
                            echo '<a class="option-checkbox '.$s.'" onclick="markAttribute('.$s.')">'.$s.'<i id="'.$s.'" class="fa-solid fa-xmark"></i></a>';
                        }                
                    ?>
                </div>
            </div>

            <!-- <div class="category budget">
                <a id="title3" class="tag-title" onclick="expand(3)">BUDGET <i id="e3" class="fa-solid fa-angle-down"></i></a>
                <div id="cate3" class="pick budget">
                    <?php 
                        // foreach ($model->budget as $s){
                        //     echo '<a class="option-checkbox">'.$s.'<i class="fa-solid fa-xmark"></i></a>';
                        // }                
                    ?>
                </div>
            </div> -->

            <div class="category size">
                <a id="title4" class="tag-title" onclick="expand(4)">SIZE <i id="e4" class="fa-solid fa-angle-down"></i></a>
                <table id="cate4" class="pick size">
                    <?php 
                        echo '<tr>';
                        $i = 0;
                        foreach ($model->size as $s_key => $s_value){
                            $i++;
                            echo '<td><a class="option-checkbox">'.$s_key.'</a></td>';
                            if ($i % 4 == 0)
                                echo '</tr><tr>';
                        }   
                        echo '</tr>';            
                    ?>
                </table>
            </div>

            <div class="category color">
                <a id="title5" class="tag-title" onclick="expand(5)">COLOR <i id="e5" class="fa-solid fa-angle-down"></i></a>
                <table id="cate5" class="pick color">
                    <?php 
                        echo '<tr>';
                        $i = 0;
                        foreach ($model->color as $s){
                            $i++;
                            echo '<td style="background: '.$s.'"><a class="option-checkbox" ></a></td>';
                            if ($i % 6 == 0)
                                echo '</tr><tr>';
                        }    
                        echo '</tr>';  
                    ?>
                </table>
            </div> 

        </div>
