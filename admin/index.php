<?php 

    require_once (__DIR__.'/inc/important_header_file.php');

    if(!session::getter("admin") && !session::getter("email")){
        header("Location:login.php");
    }

    require_once (__DIR__.'/inc/header.php');
    
?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <h1>admin panel for berklay homes.</h1>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php 

     require_once (__DIR__.'/inc/footer.php');

?>