<html>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script>
              $(document).ready(function () {
        $('#example').DataTable({
            "scrollY": "380px", // Set the desired height for vertical scrolling
            "scrollCollapse": true,
            // "paging": false, // You can leave the pagination enabled if needed
        });
    });
        $(document).ready(function () {
        $('#example1').DataTable({
            "scrollY": "300px", // Set the desired height for vertical scrolling
            "scrollCollapse": true,
            // "paging": false, // You can leave the pagination enabled if needed
        });
    });

        if (document.querySelector('.sidebar-nav')) {
            var currentUrl = window.location.href;
            var menuLinks = document.querySelectorAll('.sidebar-nav li a');

            var ifAlive = false;

            menuLinks.forEach(function(link) {
                if (link.href === currentUrl) {
                    link.parentElement.classList.add('active');
                    ifAlive = true;
                } else if (currentUrl.indexOf("view_item.php") !== -1) {
                    link.parentElement.classList.remove('active');
                    document.getElementById("transaction_active").classList.add('active');
                    ifAlive = true;
                } else {
                    link.parentElement.classList.remove('active');
                }
            });

            if (!ifAlive && menuLinks.length > 0) {
                menuLinks[0].parentElement.classList.add('active');
            }
        }

// DISPLAY IMAGE
fetch("api/get_profile.php")
    .then(response => response.json())
    .then(data => {
        console.log(data);
        const profile = data[0].profile_pic;
        console.log(profile);
        const profileGet = document.getElementById("profileLink").src = profile;
    });

// COUNT OUT OF STICK
fetch("api/get_zero_stock.php")
  .then(response => response.json())
  .then(data => {
    const count = data.count;
    const counterGet = document.getElementById("stockCounter").innerHTML = count;
  });


// DISPLAY OUT OF STICK PRODUCT
fetch('api/get_zero_product.php')
    .then(response =>  response.json())
    .then(data => {
        displayData(data);
    });

function displayData(data) {
    const container = document.getElementById('dropdown-container');

    data.forEach(item => {
        const div = document.createElement('div');
        div.classList.add('dropdown-item');
        const span = document.createElement('span');
        span.textContent = item.product_name;
        const hr = document.createElement('hr');
        hr.classList.add('mt-1', 'mb-1');
        div.appendChild(span);
        div.appendChild(hr);
        container.appendChild(div);
    });
}

    </script>

</body>

</html>