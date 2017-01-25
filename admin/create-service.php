<?php 
    require_once (__DIR__.'/inc/important_header_file.php');

    if(!session::getter("admin") && !session::getter("email")){
        header("Location:login.php");
    }

    require_once (__DIR__.'/inc/header.php');
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <h1>Create a service ... .. .</h1>
                <div>
                    <?php 
                        if(session::getter("service_success")){ ?> <p style="color: red;font-weight: bold;font-size: 20px;"><?php echo session::getter("service_success"); ?></p> <?php }else{ ""; }
 
                        if(session::getter("service_error")){ ?> <p style="color: red;font-weight: bold;font-size: 20px;"><?php echo session::getter("service_error"); ?></p> <?php }else{ ""; }
                    ?>
                </div>
                <div class="post">
                    <form action="service-process.php" method="POST">
                    <table id="projects_table">
                        <tr>
                            <td>
                                <textarea id="summernote" class="form-control" placeholder="write daily work" name="service_description" id="service_description"></textarea>
                            </td>
                        </tr>
                        <tr class="select_catagory">
                            <td>
                                <select name="service_cat" id="service_cat" required>
                                    <option value="bank">bank</option>
                                    <option value="legal">legal</option>
                                    <option value="maintenance">maintenance</option>
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
    session::unseter("service_error");
    session::unseter("service_success");

?>
