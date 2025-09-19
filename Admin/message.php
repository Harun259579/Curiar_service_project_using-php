<!DOCTYPE html>
<html lang="en">

<?php include 'pages/head.php'; ?>
<?php include 'admin.php'; ?>

<?php
require __DIR__ .'/../server/inc/connection.php';
$con->query("UPDATE contact SET is_read = 1 WHERE is_read = 0");

?>




<body>
<div id="app">
    <div id="sidebar" class="active">
        <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between mt-0 px-2">

                        <h1 class="mb-0"><a href="index.php" class="text-warning h5 mb-0 px-2 ">Royal Express </a></h1>

                    </div>
                </div>
            <div class="sidebar-menu">
                <ul class="menu">
                    <li class="sidebar-item active">
                        <a href="index.php" class="sidebar-link">
                            <i class="bi bi-grid-fill"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="customer.php" class="sidebar-link">
                            <i class="bi bi-people-fill"></i>
                            <span>Customer</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="price.php" class="sidebar-link">
                            <i class="bi bi-table"></i>
                            <span>Price Table</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="courier.php" class="sidebar-link">
                            <i class="bi bi-truck"></i>
                            <span>Courier</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="message.php" class="sidebar-link">
                            <i class="bi bi-chat"></i>
                            
                            <span>Message</span> 
                            <span id="fbCount" class="badge rounded-pill bg-danger ms-2">0</span>
  
                            
                        </a>
                    </li>
                    <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == 'admin') : ?>
                         <li class="sidebar-item">
                            <a href="DeliveryMan.php" class='sidebar-link'>
                                <i class="bi bi-person-fill"></i>
                                <span>DeliveryMan </span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="branch.php" class="sidebar-link">
                                <i class="bi bi-columns"></i>
                                <span>Branches</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <li class="sidebar-item">
                        <a href="employee.php" class="sidebar-link">
                            <i class="bi bi-person-fill"></i>
                            <span>Employee</span>
                        </a>
                    </li>
                    <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == 'admin') : ?>
                        <li class="sidebar-item">
                            <a href="area.php" class="sidebar-link">
                                <i class="bi bi-geo-alt-fill"></i>
                                <span>Area</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a href="gallery.php" class="sidebar-link">
                                <i class="bi bi-images"></i>
                                <span>Gallery</span>
                            </a>
                        </li>
                    <?php endif; ?>
                    <li class="sidebar-item">
                        <a href="settings.php" class="sidebar-link">
                            <i class="bi bi-gear-fill"></i>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="logout.php" class="sidebar-link">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Log Out</span>
                        </a>
                    </li>
                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>

    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>Message</h3>
        </div>

        <div class="page-content">
            <section class="row">
                <div class="col-12 col-lg-12">
                    <div class="row">
                        <table id="datatablesSimple" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $getall = getAllMessages();
                                while ($row = mysqli_fetch_assoc($getall)) { ?>
                                    <tr>
                                        <td><?= htmlspecialchars($row['name']) ?></td>
                                        <td><?= htmlspecialchars($row['email']) ?></td>
                                        <td><?= htmlspecialchars($row['subject']) ?></td>
                                        <td><?= htmlspecialchars($row['message']) ?></td>
                                        <td><?= htmlspecialchars($row['date_updated']) ?></td>
                                        <td>
                                            <button type="button" onclick="permenantdeleteData(<?= $row['contact_id'] ?>, 'contact', 'contact_id')" class="btn btn-darkblue">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>

        <?php include 'pages/footer.php'; ?>
    </div>
</div>

<!-- JS libraries -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/vendors/apexcharts/apexcharts.js"></script>
<script src="assets/js/pages/dashboard.js"></script>
<script src="assets/js/main.js"></script>

        <!-- AJAX for dynamic message count -->
<script>
function updateFbCount() {
    $.ajax({
        url: 'ajax/message_count.php',
        method: 'GET',
        dataType: 'json'
    }).done(function(d) {
        $('#fbCount').text(d.count ?? 0);
    }).fail(function() {
        console.error('Failed to fetch message count');
    });
}

// Run immediately on page load
updateFbCount();

// Poll every 2 seconds
setInterval(updateFbCount, 2000);
</script>

</body>
</html>
