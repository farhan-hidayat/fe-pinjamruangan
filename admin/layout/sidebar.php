<div class="border-right" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
        <img src="/images/dashboard-store-logo.svg" alt="" class="my-4" />
    </div>
    <div class="list-group list-group-flush">
        <a href="dashboard.php" class="list-group-item list-group-item-action <?php if ($page == "Dashboard") echo "active"; ?>">
            Dashboard
        </a>
        <a href="ruangan.php" class="list-group-item list-group-item-action <?php if ($page == "Data Ruangan") echo "active"; ?>">
            Data Ruangan
        </a>
        <a href="pinjaman.php" class="list-group-item list-group-item-action <?php if ($page == "Pinjaman") echo "active"; ?>">
            Transaksi
        </a>
        <!-- <a href="pinjaman.php" class="list-group-item list-group-item-action <?php if ($page == "Pinjaman") echo "active"; ?>">
            Pinjaman
        </a>
        <a href="pengembalian.php" class="list-group-item list-group-item-action <?php if ($page == "Pengembalian") echo "active"; ?>">
            Pengembalian
        </a> -->
        <a href="pengguna.php" class="list-group-item list-group-item-action <?php if ($page == "Data Pengguna") echo "active"; ?>">
            Pengguna
        </a>
    </div>
</div>