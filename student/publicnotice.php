<?
include 'db.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.6/css/dataTables.bootstrap5.css">
    <title>publicnotice</title>
</head>
<body>
<div class="container">
    
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">message</th>
                    <th scope="col">Notice from</th>
                    <th scope="col">attachment</th>
                    <th scope="col">Download</th>
                </tr>
            </thead>
            <?php
            $sql = "Select * from `notices`";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $counter=1;
                
                while ($row = mysqli_fetch_assoc($result)) {
                    $notice_title = $row['notice_title'];
                    $notice_msg = $row['name'];
                    $teacher_id = $row['teacher_id'];
                    $attachment = $row['attachment'];
                    echo ' <tr>
                <th scope="row">' . $counter . '</th>
                <td>' . $notice_tittle . '</td>
                <td>' . $notice_msg . '</td>
                <td>' . $teacher_id . '</td>
                <td>' . $attachment . '</td>
                <td>
                <button class="btn btn-primary"><a class="text-light">Download</a></button>
                </td>
                </tr>';
                $counter++;
                }
            }
            ?>
            
        </table>
    </div>
    
</body>
</html>