<div class="col-12 py-2">
    共 <?= $result->num_rows ?> 筆
</div>


<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        ?>
        <div class="col-lg-3 mb-3">
            <div class="card">
                <figure class="ratio ratio-1x1">
                    <div class="">
                        <img class="cover-fit" src="/img/<?= $row['picture'] ?>" alt="">
                    </div>
                </figure>
                <div class="p-2">
                    <h3 class="h5"><?= $row['name'] ?></h3>
                    <div>$ <?= $row['price'] ?></div>
                </div>

            </div>
        </div>
        <?php
    }
} else {
    echo "沒有商品";
}
?>