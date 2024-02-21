









<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<!-- Option 2: Separate Popper and Bootstrap JS -->

<!-- slick slider  -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script type="text/javascript">
    $('.my_slider').slick();
    autoSlide: 2000;
    loop:true;
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const dropdowns = document.querySelectorAll('.sidebar ul li');
    dropdowns.forEach(dropdown => {
        dropdown.addEventListener('click', function() {
        const submenu = this.querySelector('.dropdown');
        if (submenu) {
            submenu.style.display = (submenu.style.display === 'block') ? 'none' : 'block';
        }
        });
    });
    });

</script>

<!-- secount slider system js -->
<!-- <script>
    // Initialization for ES Users
    import { Carousel, initMDB } from "mdb-ui-kit";
    initMDB({ Carousel });
</script> -->

</body>

</html>