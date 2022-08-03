<?php include ('sess.php');?>
<?php include ('head.php');?>

<body>

    <div id="wrapper">

      
              <?php include ('view_banner.php');?>
        <!-- Page Content -->
          <!-- Navigation -->
        <div id="page-wrapper">

    <heading class="menue-select">
            <center>
                <select onchange = "page(this.value)">
                <option disabled selected>Select Candidate Group</option>
                <option value = "candidates/ch.php">CHAIRPERSON</option>
                <option value = "candidates/vc.php">VICE-CHAIRPERSON</option>
                <option value = "candidates/sg.php">SECRETARY GENERAL</option>
                <option value = "candidates/ac.php">ACADEMICS</option>
                <option value = "candidates/fs.php">FINANCE SERCRETRY</option>
                <option value = "candidates/sp.php">SPORTS SERCRETARY</option>
                <option value = "candidates/ew.php">ENTERTAINMENT & WELFARE SECRETARY</option>

                </select>
            </center>

    </heading> 
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <?php    
        include ('footer.php');
        ?>

    <script>
    function page (src){
        window.location=src;
    }
    </script>

</body>

</html>

