<?php include("partials/navbar.php"); ?>
        <!-- Main Content Start -->
        <div class="main-content">
            <div class="wrapper">
                <h1>Manage Admin</h1>
                <a href="add-admin.php" class="btn-primary">Add Admin</a>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Permissions</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="add-admin.php" class="btn-primary">Add Admin</a>
                            <a href="#" class="btn-primary">Delete Admin</a>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <!-- Main Content End -->
<?php include("partials/footer.php"); ?>