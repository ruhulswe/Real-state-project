        <?php 
             require_once (__DIR__.'/inc/header.php');
        ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- projects -->
                <div>
                    <?php 
                        if(session::getter("project_deleted")){ ?> <p style="color: red;font-weight: bold;font-size: 20px;"><?php echo session::getter("project_deleted"); ?></p> <?php }else{ ""; }
                    ?>
                </div>

                <div class="project_area">
                    <h3>Upcomming project that is now show on main page.</h3>
<?php 
    $tbName = "projects";
    $selectArr = array(
      'where' => array('project_cat'=>'ready_project'),
      'return_type' => 'all'
    );
    $selectAll = $db->selection($tbName,$selectArr);
    if($selectAll){
        foreach ($selectAll as $key => $value) {
?>
                    <div class="project_description">
                         <?php echo $value['projects_description'];  ?>
                    </div>
                    <div class="project_img">
                         <img src="../img/project/<?php echo $value['project_img'];  ?>" style="max-width: 500px;margin-bottom: 20px;" alt="">
                    </div>
                    <a href="project_del.php?id=<?php echo $value['id']; ?>&imgsrc=<?php echo $value['project_img']; ?>&type=ready-project ">Delete</a>
                </div>
                <hr><br>

<?php 
            }
        }else 
            { 
                echo "no project yet now."; 
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

    session::unseter("project_error");
    session::unseter("project_success");
    session::unseter("project_deleted");

?>
