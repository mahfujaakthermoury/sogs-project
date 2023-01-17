<?php
include 'parts/auth.php';
include 'parts/header.php';
include 'lib/db.php';

$sql = "SELECT * FROM member  ";
$allData = $db->query($sql);
?>
<section class="content-section py-5 ">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <h3> Product list</h3>
                <hr>
                <table class="table table-info table-hover">
                    <tr>
                        <th>ID.</th>
                        <th>Name</th>
                        <th>Father name</th>
                        <th>Mother name</th>
                        <th>Action</th>
                    </tr>

                    <?php
                    while ($member = $allData->fetch_assoc()) {
                    ?>

                    <tr>
                        <td>
                            <?php echo $member['id']; ?>
                        </td>
                        <td>
                            <?php echo $member['name']; ?>
                        </td>
                        <td>
                            <?php echo $member['father_name']; ?>
                        </td>
                        <td>
                            <?php echo $member['mother_name']; ?>
                        </td>
                        <td>
                            <a href="edit.php?si_no=<?php echo $member['id']; ?>"
                             class="btn btn-primary bg-opacity-10 btn-sm">Edit</a>

                            <a href="delete.php?si_no=<?php echo $member['id']; ?>"
                                onclick="return confirm('Do you went to delete this data? ')"
                                class="btn btn-danger btn-sm">Delete</a>

                        </td>

                    </tr>

                    <?php
                    }
                    ?>
                </table>

            </div>
        </div>
    </div>
</section>
<?php
include 'parts /footer.php';
?>