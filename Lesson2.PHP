<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 2</title>
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="container p-5 my-5 bg-dark text-white">
    <h1>Database show data on Web : Lesson 2</h1>
    <p>6401102053101 MRS.Nittaya Sansrichai</p>
  </div>

  <?php
  require "connect.php";
  $query = "SELECT * FROM tb_section ORDER BY SECT_NAME";
  $statement = $pdo->prepare($query);
  $statement->execute();
  $results = $statement->fetchAll(PDO::FETCH_ASSOC);

  ?>

  <div class="container mt-3">
    <h2>Section Data</h2>
    <p>แสดงข้อมูลเฉพาะ SECT_TELEPHONE และ SECT_NAME โดยเรียงจาก SECT_NAME จาก A-Z
</p>
    <div class="btn-group btn-group-lg">
      <button type="button" class="btn btn-primary" onclick="window.location.href ='index.php'" >กลับไปยังหน้าหลัก</button>
      <button type="button" class="btn btn-primary" onclick="window.location.href ='Lesson2.php'">Lesson 2 : แสดงข้อมูลเฉพาะ SECT_TELEPHONE และ SECT_NAME โดยเรียงจาก SECT_NAME จาก A-Z</button>
      <button type="button" class="btn btn-primary" onclick="window.location.href ='Lesson3.php'">Lesson 3 : แสดงข้อมูลทั้งหมด โดยเลือกเฉพาะที่ SECT_TELEPHONE มีเลข 12 และเรียงข้อมูลจาก SECT_NAME จาก Z-A</button>
    </div>

    <br><br>

    <table class="table">
      <thead class="table-dark">
        <tr>
        <th>SECT_TELEPHONE</th>
          <th>SECT_NAME</th>
          </tr>
      </thead>
      <tbody>
        <?php foreach ($results as $row) { ?>
          <tr>
            <td> <?php echo $row['SECT_TELEPHONE']; ?></td>
            <td><?php echo $row['SECT_NAME']; ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

  </div>
</body>

=======
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 2</title>
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <div class="container p-5 my-5 bg-dark text-white">
    <h1>Database show data on Web : Lesson 2</h1>
    <p>6401102053101 MRS.Nittaya Sansrichai</p>
  </div>

  <?php
  require "connect.php";
  $query = "SELECT
              tb_section.SECT_TELEPHONE, 
              tb_section.SECT_NAME
            FROM
              tb_section
            ORDER BY
              tb_section.SECT_NAME ASC";
  $statement = $pdo->prepare($query);
  $statement->execute();
  $results = $statement->fetchAll(PDO::FETCH_ASSOC);

  ?>

  <div class="container mt-3">
    <h2>Section Data</h2>
    <p>แสดงข้อมูลเฉพาะ SECT_TELEPHONE และ SECT_NAME
        โดยเรียงจาก SECT_NAME จาก A-Z</p>

    <div class="btn-group my-2">
      <a href="http://localhost/datbase_2web/" class="btn btn-outline-dark">กลับไปยังหน้าหลัก</a>
      <a href="http://localhost/datbase_2web/lesson1.php/index.php" class="btn btn-outline-dark">Lesson 1 : แสดงข้อมูลทั้งหมดโดยเรียงจาก SECT_ID
        จากมากไปหาน้อย</a>
      <a href="http://localhost/datbase_2web/lesson3.php/index.php" class="btn btn-outline-dark">Lesson 3 : แสดงข้อมูลทั้งหมด โดยเลือกเฉพาะที่ SECT_TELEPHONE
        มีเลข 12 และเรียงข้อมูลจาก SECT_NAME จาก Z-A</a> 
    </div>

    <br><br>
    
    <table class="table">
      <thead class="table-dark">
        <tr>
          <th>SECT_TELEPHONE</th>
          <th>SECT_NAME</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($results as $row) { ?>
          <tr>
          <td>
              <?php echo $row['SECT_TELEPHONE']; ?>
            </td>
            <td>
              <?php echo $row['SECT_NAME']; ?>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>

  </div>
</body>

>>>>>>> 2891ec2d5179193021fff897d73739dce4dc5fb7
</html>