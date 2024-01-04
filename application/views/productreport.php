<div class="container-fluid">
    <!DOCTYPE html>
    <html>

    <head>
    <title>Contact Report</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.3.2/css/buttons.dataTables.min.css">
</head>



    <?php
$con=mysqli_connect("localhost","root","","reg");
if($con){
    // echo 'success'; //short connection file
}
else{
    echo 'failed';
}
?>

    <body>
        <h3>Product Report</h3>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>product_id</th>
                    <th>p_name</th>
                    <th>P_descri</th>
                    <th>Gsm</th>
                    <th>Coating</th>
                    <th>Packaging</th>
                    <th>Color</th>

                </tr>
            </thead>
            <tbody>

                <?php
// include('includes/dbconnection.php');
$showemps="SELECT * FROM `product`";
$showempsrun=mysqli_query($con,$showemps);
while($row=mysqli_fetch_array($showempsrun)){
    ?>
                <tr>
                    <td><?php echo $row['product_id'];?></td>
                    <td><?php echo $row['p_name'];?></td>
                    <td><?php echo $row['p_descri'];?></td>
                    <td><?php echo $row['gsm'];?></td>
                    <td><?php echo $row['coating'];?></td>
                    <td><?php echo $row['packaging'];?></td>
                    <td><?php echo $row['color'];?></td>
                </tr>
                <?php } ?>

            </tbody>
        </table>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>


        <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
        });
        </script>
    </body>

    </html>
</div>