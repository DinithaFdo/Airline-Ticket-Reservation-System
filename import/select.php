<div class="toolbar-space">
    <div class="toolbar" id="border">
        <a class="active" href="search.php" target="_blank"><i class="fa fa-plane"></i>Search Flight</a>

        <?php
        if (isset($_SESSION['fname'])) {
            echo '
                <a href="manage.php" target="_blank"><i class="fa fa-fw fa-search"></i>Manage Booking</a>
                <a href="checkin.php" target="_blank"><i class="fa fa-check-circle"></i>Check In</a>
                <a href="status.php" target="_blank"><i class="fa fa-fw fa-user"></i>Flight Status</a>';
        } else {
            echo '
                <a href="redirect.login.php"><i class="fa fa-fw fa-search"></i>Manage Booking</a>
                <a href="redirect.login.php"><i class="fa fa-check-circle"></i>Check In</a>
                <a href="redirect.login.php"><i class="fa fa-fw fa-user"></i>Flight Status</a>';
        }
        ?>

    </div>
</div>