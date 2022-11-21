<?= $this->extend('layout/tamplate'); ?>

<?= $this->section('konten'); ?>
<div class="col-xl col-lg">
    <div class="card shadow mb-4">
        <!-- Card Header - Dropdown -->
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Maps</h6>
        </div>
        <!-- Card Body -->
        <div class="container">
            <div class="row">
                <div class="col">
                    <table class="map">
                        <div id="map" style="width:auto; height: 450px;"></div>
                        <script>
                            var map = L.map('map').setView([0.918852549205202, 104.46498537835079], 14);

                            L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                            }).addTo(map);

                            const marker = L.marker([0.9185974057464835, 104.4523796759699]).addTo(map)
                                .bindPopup('<b>Hello world!</b><br />I am a popup.').openPopup();
                        </script>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>