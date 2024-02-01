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
                                <tbody id="table-body">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function openViewCategory(product_id) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = JSON.parse(xhr.responseText);
                var tableBody = document.getElementById('table-body');
                tableBody.innerHTML = '';
                for (var i = 0; i < data.length; i++) {
                    var newRow = document.createElement('tr');
                    var productIdCell = document.createElement('td');
                    var productNameCell = document.createElement('td');

                    productIdCell.textContent = data[i].product_id;
                    productNameCell.textContent = data[i].product_name;

                    newRow.appendChild(productIdCell);
                    newRow.appendChild(productNameCell);

                    tableBody.appendChild(newRow);
                }
            }
        };

        xhr.open('GET', 'api/get_product.php?id=' + product_id, true);
        xhr.send();
    }
</script>
