<!-- Modal -->
<div class="modal fade" id="view-category" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="edit-product-label" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #227EA2;">
                <h1 class="modal-title fs-5" id="edit-product-label" style="color:white;">Category List</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form method='post' action='' enctype='multipart/form-data'>
                    <div class="card-body">
                        <div class="table-body col-12 text-center">
                            <table id="example" class="table table-striped table-sm mx-auto">
                                <thead class="table table-dark" style="position: sticky; top: 0; background-color: white; z-index: 1;">
                                    <tr>
                                        <th class="text-center">Product Id</th>
                                        <th class="text-center">Product Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $connection = $newconnection->openConnection();

                                    $category_id = isset($_GET['category_id']) ? $_GET['category_id'] : null;

                                    $stmt = $connection->prepare("SELECT * FROM products_table WHERE category_id = ?");
                                    $stmt->bindParam(1, $category_id);
                                    $stmt->execute();
                                    $result = $stmt->fetchAll();

                                    if ($result) {
                                        foreach ($result as $row) {
                                    ?>
                                            <tr>
                                                <td><?= $row['product_id'] ?></td>
                                                <td><?= $row['product_name'] ?></td>
                                            </tr>
                                    <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

            </div>
            </form>
        </div>
    </div>
</div>

<script>
    function openViewCategory(category_id) {
        var newUrl = window.location.href.split('?')[0] + '?category_id=' + category_id;
        window.history.pushState({
            path: newUrl
        }, '', newUrl);
    }
</script>