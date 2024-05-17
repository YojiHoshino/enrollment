<?php
  include 'action.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="author" content="Sahil Kumar">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ASIATECH Subjects</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.css" />

  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.18/datatables.min.js"></script>
</head>

  <!-- <style>
    div.dt-container {
        width: 800px;
        margin: 0 auto;
    }
  </style> -->

<body>
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-md-10">
        <h3 class="text-center text-dark mt-2">Senior High School Subject Records Curriculum AY. 2023 - 2024</h3>
        <hr>
        <?php if (isset($_SESSION['response'])) { ?>
        <div class="alert alert-<?= $_SESSION['res_type']; ?> alert-dismissible text-center">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <b><?= $_SESSION['response']; ?></b>
        </div>
        <?php } unset($_SESSION['response']); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <h3 class="text-center text-info">Add Subject</h3>
        <form action="action.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?= $id; ?>">
          <div class="form-group">
            <input type="text" name="subject" value="<?= $subject; ?>" class="form-control" placeholder="Enter subject" required>
          </div>
          <div class="form-group">
            <input type="number" name="grade" value="<?= $grade; ?>" class="form-control" placeholder="Enter grade" required>
          </div>
          <div class="form-group">
            <input type="text" name="strand" value="<?= $strand; ?>" class="form-control" placeholder="Enter strand" required>
          </div>
          <div class="form-group">
            <input type="number" name="section" value="<?= $section; ?>" class="form-control" placeholder="Enter section" required>
          </div>
          <div class="form-group">
            <input type="text" name="teacher" value="<?= $teacher; ?>" class="form-control" placeholder="Enter teacher" required>
          </div>
          <div class="form-group">
            <input type="text" name="room" value="<?= $room; ?>" class="form-control" placeholder="Enter room" required>
          </div>
          <div class="form-group">
            <input type="text" name="day" value="<?= $day; ?>" class="form-control" placeholder="Enter day" required>
          </div>
          <div class="form-group">
            <input type="text" name="stime" value="<?= $stime; ?>" class="form-control" placeholder="Enter time" required>
          </div>
          <div class="form-group">
            <?php if ($update == true) { ?>
            <input type="submit" name="update" class="btn btn-success btn-block" value="Update Record">
            <?php } else { ?>
            <input type="submit" name="add" class="btn btn-primary btn-block" value="Add Record">
            <?php } ?>
          </div>
        </form>
      </div>
      <div class="col-md-8">
        <?php
          $query = 'SELECT * FROM subject';
          $stmt = $conn->prepare($query);
          $stmt->execute();
          $result = $stmt->get_result();
        ?>
        <h3 class="text-center text-info">Records Present In The Database</h3>
        <table class="table dt-responsive responsive table-hover table-style display data-height-750" id="data-table">
          <thead>
            <tr>
              <th>#</th>
              <th>Subject</th>
              <th>Grade</th>
              <th>Strand</th>
              <th>Section</th>
              <th>Teacher</th>
              <th>Room</th>
              <th>Day</th>
              <th>Time</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?= $row['id']; ?></td>
              <td><?= $row['subject']; ?></td>
              <td><?= $row['grade']; ?></td>
              <td><?= $row['strand']; ?></td>
              <td><?= $row['section']; ?></td>
              <td><?= $row['teacher']; ?></td>
              <td><?= $row['room']; ?></td>
              <td><?= $row['day']; ?></td>
              <td><?= $row['stime']; ?></td>
              <td>
                <!-- <a href="details.php?details=<?= $row['id']; ?>" class="badge badge-primary p-2">Details</a> | -->
                <a href="action.php?delete=<?= $row['id']; ?>" class="badge badge-danger p-2" onclick="return confirm('Do you want delete this subject?');">Delete</a> |
                <a href="index.php?edit=<?= $row['id']; ?>" class="badge badge-success p-2">Edit</a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  $(document).ready(function() {
    $('#data-table').DataTable({
      paging: true
      // scrollX: true
    });
  });
  </script>
</body>

</html>