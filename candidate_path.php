
<?php include ('head.php');?>

<body>

    <div id="wrapper">

      
              <?php include ('view_banner.php');?>
       
        <div id="page-wrapper">

    <heading class="menue-select">
            <center>
                <select onchange = "page(this.value)">
                <option disabled selected>Select Candidate Group</option>
                <option value = "candidates/ch.php">Chairperson</option>
                <option value = "candidates/vc.php">Vice Chairperson</option>
                <option value = "candidates/sg.php">Secretary General</option>
                <option value = "candidates/ac.php">Academics</option>
                <option value = "candidates/fs.php">Finance Secretary</option>
                <option value = "candidates/sp.php">Sports Secretary</option>
                <option value = "candidates/ew.php">Entertainment & Welfare Secretary</option>
    
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

