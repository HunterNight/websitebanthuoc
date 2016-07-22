<div class="uk-width-medium-1-2">
    <div class="md-card">
        <div class="md-card-content">
            <h3 class="heading_a uk-margin-bottom">Sản phẩm bán chạy </h3>

            <div class="uk-accordion" data-uk-accordion>
                <h3 class="uk-accordion-title uk-accordion-title-primary">Sản phẩm bán chạy </h3>

                <div class="uk-accordion-content">
                    <div class="md-card-content">
                        <div class="uk-overflow-container">
                            <table class="uk-table uk-table-striped">
                                <thead>
                                <tr>
                                    <th><strong>STT</strong></th>
                                    <th><strong>Ảnh</strong></th>
                                    <th><strong> Sản phẩm bán chạy</strong></th>
                                    <th><strong>Số lượng</strong></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $stt = 1;
                                foreach ($arrayProduct as $product) {
                                    $i =$stt; ?>

                                    <tr>
                                        <td>
                                            <div
                                                <?php
                                                if ($i== 1) {
                                                    echo "class='uk-alert uk-alert-danger' style='text-align: center'";
                                                }
                                                if ($i== 2) {
                                                    echo "class='uk-alert uk-alert-success' style='text-align: center'";
                                                }
                                                if ($i == 3) {
                                                    echo "class='uk-alert uk-alert-info' style='text-align: center'";
                                                }


                                                ?>

                                                ><?php echo $stt; ?></div>
                                        </td>
                                        <td><img src="<?php echo $product['Picture']; ?>" alt="" style="width: 50px;height: 50px"></td>
                                        <td><?php echo $product['ProductName']; ?></td>
                                        <td><?php echo $product['TongSanPham']; ?></td>
                                    </tr>
                                    <?php $stt++;
                                } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>