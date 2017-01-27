<?php 
    require_once (__DIR__.'/inc/important_header_file.php');

    if(!session::getter("admin") && !session::getter("email")){
        header("Location:login.php");
    }
    
    require_once (__DIR__.'/inc/header.php');
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <h1>Create a feature project ... .. .</h1>
                <div>
                    <?php 
                        if(session::getter("feature_success")){ ?> <p style="color: red;font-weight: bold;font-size: 20px;"><?php echo session::getter("feature_success"); ?></p> <?php }else{ ""; }
 
                        if(session::getter("feature_error")){ ?> <p style="color: red;font-weight: bold;font-size: 20px;"><?php echo session::getter("feature_error"); ?></p> <?php }else{ ""; }
                    ?>
                </div>
                <div class="post">
                    <form action="feature-process.php" method="POST">
                    <table id="projects_table">
                        <tr>
                            <td>
                                <textarea id="summernote" class="form-control" placeholder="write daily work" name="feature_description" id="feature_description"></textarea>
                            </td>
                        </tr>
                        <tr class="select_catagory">
                            <td>
                                <select name="feature_cat" id="feature_cat" required>
                                    <option value="structural">structural</option>
                                    <option value="common">common</option>
                                    <option value="typical">typical</option>
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
    session::unseter("feature_error");
    session::unseter("feature_success");

?>