        <?php 
             require_once (__DIR__.'/inc/header.php');
        ?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <h1>Create a upcomming project ... .. .</h1>
                <div>
                    <?php 
                        if(session::getter("project_success")){ ?> <p style="color: red;font-weight: bold;font-size: 20px;"><?php echo session::getter("project_success"); ?></p> <?php }else{ ""; }
 
                        if(session::getter("project_error")){ ?> <p style="color: red;font-weight: bold;font-size: 20px;"><?php echo session::getter("project_error"); ?></p> <?php }else{ ""; }

                        if(session::getter("project_deleted")){ ?> <p style="color: red;font-weight: bold;font-size: 20px;"><?php echo session::getter("project_deleted"); ?></p> <?php }else{ ""; }
                    ?>
                </div>
                <div class="post">
                    <form action="project-process.php" method="POST" enctype="multipart/form-data">
                    <table id="projects_table">
                        <tr>
                            <td>
                                <textarea id="summernote" class="form-control" placeholder="write daily work" name="project_description" id="project_description"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="project-img">project image(if have)</label>
                                <input type="file" name="project_img" class="" id="project-img" required="required">
                            </td>
                        </tr>
                        <tr class="select_catagory">
                            <td>
                                <select name="project_cat" id="project_cat" required>
                                    <option >select catagory</option>
                                    <option value="comming_project">comming project</option>
                                    <option value="ongoing_project">ongoing project</option>
                                    <option value="ready_project">ready project</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <button class="btn btn-primary" name="submit">POST</button>
                            </td>
                        </tr>
                    </table>
                    </form>
                </div>   


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
