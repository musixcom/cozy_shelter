<?php 
foreach($food as $f){ ?>
                <div class="row">
                    <div class="col-sm-3 box">
                        <img src="../public/uploads/<?php echo $f['img']; ?>" alt="<?php echo $f['name']; ?>" class="img-fluid">
                        <hr>
                        <h4><?php echo $f['name']; ?></h4>
                        <h5><?php echo $f['fcat']; ?>  - Rs. <?php echo $f['price']; ?></h5>
                        <p><?php echo $f['dis']; ?></p>
                        <form action="foodform.php" method="post">
                            <input type="text" value="<?php echo $f['id']; ?>" name="id" style="display:none;">
                            <button type="submit" class="btn btn-primary">order</button>
                        </form>
                    </div>
                </div>
            <?php } ?>
