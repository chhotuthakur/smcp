<?php include 'includes/header.php';?>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #35424a;
            color: white;
            text-align: center;
            padding: 10px;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
    <body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
<?php include 'includes/sidebar.php';?>
  

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">
        <?php include 'includes/topbar.php';?>
          

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-4 text-gray-800">Top Gainers NSE </h1>

                <table>
            <thead>
                <tr>
                    <th>Company</th>
                    <th>Symbol</th>
                    <th>Change (%)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Company A</td>
                    <td>COMP_A</td>
                    <td>+5.00</td>
                </tr>
                <tr>
                    <td>Company B</td>
                    <td>COMP_B</td>
                    <td>+3.50</td>
                </tr>
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

  
     
    </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
    </body>
    <?php include 'includes/footer.php';?>

