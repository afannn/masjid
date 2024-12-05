<script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<script src="assets/js/main.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="assets/vendor/carousel/dist/owl.carousel.min.js"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script>
    $(document).ready(function () {
        $(".owl-carousel").owlCarousel({
            autoplay: true,
            animateIn: true
        });
    });
</script>


<script>
    const ctx = document.getElementById('chart');

    new Chart(ctx, {
        type: 'bar',
        data: {
            datasets: [{
                type: 'bar',
                label: 'Pemasukan',
                data: [<?php echo $rPemasukan['total']; ?>],
                backgroundColor: '#02A43F',
            }, {
                type: 'bar',
                label: 'Pengeluaran',
                data: [<?php echo $rPengeluaran['total']; ?>],
                backgroundColor: '#3EB86C',
            },
            {
                type: 'bar',
                label: 'Kas Bulanan',
                data: [<?php echo $rKas['total']; ?>],
                backgroundColor: '#94D5AC',
            }],
            <?php $month = date('m');
                if ($month == 1) {
                    echo "labels: ['Januari']";
                } else if ($month == 2) {
                    echo "labels: ['Februari']";
                } else if ($month == 3) {
                    echo "labels: ['Maret']";
                } else if ($month == 4) {
                    echo "labels: ['April']";
                } else if ($month == 5) {
                    echo "labels: ['Mei']";
                } else if ($month == 6) {
                    echo "labels: ['Juni']";
                } else if ($month == 7) {
                    echo "labels: ['Juli']";
                } else if ($month == 8) {
                    echo "labels: ['Agustus']";
                } else if ($month == 9) {
                    echo "labels: ['September']";
                } else if ($month == 10) {
                    echo "labels: ['November']";
                } else if ($month == 11) {
                    echo "labels: ['Desember']";
                }
            ?>
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    }); 
</script>
<script>
    $(document).ready(function () {
        $('#table').DataTable();
    });
</script>

</body>

</html>