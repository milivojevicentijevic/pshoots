<?php include 'parts/header.php'; ?>

<div class="container col-md-8 offset-md-2 mt-2">
    <div class="row">
    <h2>Users</h2>
        <table class="table caption-top">
            <caption>Data</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Lat Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($results->num_rows > 0): 
                    while ($row = $results->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['firstname']; ?></td>
                            <td><?php echo $row['lastname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['gender']; ?></td>
                            <td>
                                <a href="update.php?id=<?php echo $row['id']; ?>" class="btn btn-info" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit the entry">Edit</a>&nbsp;
                                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Delete the entry">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile;
                endif; ?>
            </tbody>
        </table>
    </div>
</div> 
<?php include 'parts/footer.php'; ?>

 

