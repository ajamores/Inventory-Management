<div class="recent-products">
    <table>
        <caption><h2>Recent Products</h2></caption>
        <thead>
            <tr>
                <th>PRODUCT NAME</th>
                <th>SKU</th>
                <th>CATEGORY</th>
                <th>STOCK</th>
                <th>STATUS</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach($last5Prods as $product): ?>
                <tr>
                    <td><?= htmlspecialchars($product['name']) ?></td>
                    <td><?= htmlspecialchars($product['sku']) ?></td>
                    <td><?= htmlspecialchars($product['category']) ?></td>
                    <td><?= htmlspecialchars($product['quantity']) ?></td>
                    <td>
                        <?php if($product['quantity'] > 10):?>
                            <p class="instock">In stock</p>
                        <?php elseif($product['quantity'] <= 10): ?>
                            <p class="lowstock">Low Stock</p>
                        <?php elseif($product === 0): ?>
                            <p class="nomore">
                                Out of Stock
                            </p>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>