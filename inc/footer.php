<html>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/script.js"></script>
        <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        
<script>
new DataTable('#example');

if (document.querySelector('.sidebar-nav')) {
    var currentUrl = window.location.href;
    var menuLinks = document.querySelectorAll('.sidebar-nav li a');
    
    var ifAlive = false;
    
    menuLinks.forEach(function(link) {
        if (link.href === currentUrl) {
            link.parentElement.classList.add('active');
            ifAlive  = true;
        } else {
            link.parentElement.classList.remove('active');
        }
    });

    if (!ifAlive  && menuLinks.length > 0) {
        menuLinks[0].parentElement.classList.add('active');
    }
}

</script>

    </body>
</html>