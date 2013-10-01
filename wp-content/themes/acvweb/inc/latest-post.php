<div class="latest main-block">
    <h1 class="block-title"><span>LATEST POSTS</span></h1>
    <div class="latest-content container">
        <?php for ($row = 1; $row <= 2; ++$row):?>
            <div style="width: 5000px;">
                <?php
                $totalCol = 0;
                while ($totalCol < 12):
                    $col = rand(1, 2);
                    $totalCol += $col;
                    if ($totalCol > 12 && $col == 2) {
                        $col = 1;
                    }
                    $height = 240;
                    $width = 356;
                    $res = $width * $col . 'x' . $height;
                    ?>
                    <article class="<?php echo ($col == 2) ? 'two' : 'one';?>">
                        <img src="holder.js/<?php echo $res?>">
                        <div class="description">
                            <time>AAAAAA</time>
                            <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h4>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas vel adipiscing nisl.
                                Sed ultrices, elit vitae pulvinar tincidunt, nunc odio vestibulum eros, sit amet semper felis magna id diam
                            </p>
                            <a href="#" class="read-more btn btn-default">Read More</a>
                        </div>
                    </article>
                <?php endwhile;?>
            </div>
        <?php endfor;?>
    </div>
</div>