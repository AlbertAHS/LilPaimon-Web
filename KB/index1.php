<!DOCTYPE html>
<html lang="en">
    <body>
        <?php
            $servername = "localhost";
            $username = "root";
            $password = "root";
            $dbname = "LilPaimon";

            $conn = mysqli_connect($servername, $username, $password, $dbname);
            if (!$conn){
                die("Connection Failed: ". mysqli_connect_error());
            } else {
                $sql = "SELECT * FROM cat";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
            }?>

            <table>
                <?php
                while ($row = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                    <td><?php echo $row['nama']; ?></td>
                    <td><?php echo $row['harga']; ?></td>
                    <td><?php echo $row['gambar']; ?></td>
                    <td><?php echo $row['deskripsi']; ?></td>
                    </tr>
                <?php } ?>
            </table>

    </body>


</html>