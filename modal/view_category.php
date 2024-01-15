<!-- Modal -->
<div class="modal fade" id="view-category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Category List</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" onclick="closeModal()"></button>
      </div>
      <div class="modal-body">
        <section class="content container-fluid">
          <div class="box box-success">
            <div class="row">
              <table>
                <thead>
                  <tr>
                    <th></th>
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
        </section>
      </div>
    </div>
  </div>
</div>

<script>
  function openViewCategory(category_id) {
    var newUrl = window.location.href.split('?')[0] + '?category_id=' + category_id;
    window.history.pushState({ path: newUrl }, '', newUrl);
  }
</script>
