<!-- Modal -->
<div class="modal fade" id="view-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Product Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <section class="content container-fluid">
          <div class="box box-success">
            <div class="row">
              <div class="col-md-6">
                <ul class="list-group">

                  <center>
                    <p class="list-group-item list-group-item-success">Product Details</p>
                  </center>
                  <li class="list-group-item"><b>Category Name</b> :<span><input class="border-0" id="product-name" disabled></span></li>
                  <li class="list-group-item"><b>Product Name</b> :<span><input class="border-0" id="category-name" disabled></span></li>
                  <li class="list-group-item"><b>Instock</b> :<span><input class="border-0" id="quantity-num" disabled></span></li>
                  <li class="list-group-item"><b>Price</b> :<span><input class="border-0" id="price-price" disabled></span></li>
                </ul>
              </div>
              <div class="col-md-6">
                <ul class="list-group">
                  <center>
                    <p class="list-group-item list-group-item-success">Product Image</p>
                  </center>
                  <img id="image-chan" alt="Product Image" class="img-responsive">
                </ul>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const viewButton = document.querySelectorAll('.view_P');
        const viewProductName = document.getElementById('product-name');
        const viewCategory = document.getElementById('category-name');
        const viewInstock = document.getElementById('quantity-num');
        const viewPrice = document.getElementById('price-price');
        const viewImageChan = document.getElementById('image-chan');

        viewButton.forEach(button => {
            button.addEventListener('click', function () {
                const row = button.closest('tr');
                const productName = row.querySelector('td:nth-child(2)').innerText;
                const categoryName = row.querySelector('td:nth-child(3)').innerText;
                const instockNum = row.querySelector('td:nth-child(4)').innerText;
                const pricePrice = row.querySelector('td:nth-child(5)').innerText;
                const imageChan = row.querySelector('td:nth-child(7)').innerText;

                viewProductName.value = productName;
                viewCategory.value = categoryName;
                viewInstock.value = instockNum;
                viewPrice.value = pricePrice;
                viewImageChan.src = imageChan;
            });
        });
    });
</script>