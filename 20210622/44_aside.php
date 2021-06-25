<div>
    <div class="list-group list-group-flush">
        <a class="list-group-item list-group-item-action" href="42_product_list.php">產品列表</a>
    </div>
    <div class="py-2">
        <form action="43_product_filter.php" method="get">
            price:
            <div class="input-group mb-3">
                <input type="text" class="form-control" name="min"
                    <?php
                    if (isset($_GET['min'])){
                    ?>
                        value="<?= $_GET['min']?>"
                    <?php } ?>

                >
                <span class="input-group-text" id="basic-addon1"> < </span>
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"> > </span>
                <input type="text" class="form-control" name="max"
                    <?php
                    if (isset($_GET['max'])){
                        ?>
                        value="<?=$_GET['max']?>"
                        <?php } ?>
                >
            </div>
            <button class="btn btn-info" type="submit">篩選</button>
        </form>
    </div>
</div>