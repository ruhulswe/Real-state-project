<?php 
    require_once (__DIR__.'/inc/important_header_file.php');

    if(!session::getter("admin") && !session::getter("email")){
        header("Location:login.php");
    }

    require_once (__DIR__.'/inc/header.php');
?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- projects -->
                <div>
                    <?php 
                        if(session::getter("feature_deleted")){ ?> <p style="color: red;font-weight: bold;font-size: 20px;"><?php echo session::getter("feature_deleted"); ?></p> <?php }else{ ""; }
                    ?>
                </div>

                <div class="project_area">
                    <h3>Upcomming project that is now show on main page.</h3>
                    <?php 
                        $tbName = "features";
                        $selectArr = array(
                          'where' => array('feature_cat'=>'typical'),
                          'return_type' => 'all'
                        );
                        $selectAll = $db->selection($tbName,$selectArr);
                        if($selectAll){
                            foreach ($selectAll as $key => $value) {
                    ?>
                    <div class="project_description">
                         <?php echo $value['feature_description'];  ?>
                    </div>
                    <a href="feature_del.php?id=<?php echo $value['id']; ?>&type=structural ">Delete</a>
                </div>
                <hr><br>

                    <?php 
                            }
                        }else{ 
                            echo "no ongoing-project yet now."; 
                        } 
                    ?>
                <!-- projects -->  


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

 



        <?php 
             require_once (__DIR__.'/inc/footer.php');
        ?>


<?php 

    session::unseter("project_deleted");

?>
