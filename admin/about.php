<?php 
     require_once (__DIR__.'/inc/header.php');
     if(!empty($_POST)){
        extract($_POST);
        if(!empty($about_text)){
            $tbName = "aboutus";
            $cond = array(
              "about_text" => $about_text
            );
            $isInserted = $db->insertion($tbName,$cond);
            if($isInserted){
                session::setter("about_success","about us updated.");
            }else{
                session::setter("about_error","about us not updated.");
            }
        }else{
            session::setter("about_error","about us text is required.");
        }
     }

    $tbName = "aboutus";
    $selectArr = array(
      //'select' => array('id','task','time'),
      //'where' => array('id'=>1,'task'=>'task one'),
      'order_by' => 'id DESC',
      'limit' => array('0','1'),
      'return_type' => 'one'
    );
    $selectAll = $db->selection($tbName,$selectArr);
    if(!$selectAll){
        $selectAll["about_text"] = "";
    }
?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <h1>Create a upcomming project ... .. .</h1>
                <div>
                    <?php 
                        if(session::getter("about_success")){ ?> <p style="color: red;font-weight: bold;font-size: 20px;"><?php echo session::getter("about_success"); ?></p> <?php }else{ ""; }
 
                        if(session::getter("about_error")){ ?> <p style="color: red;font-weight: bold;font-size: 20px;"><?php echo session::getter("about_error"); ?></p> <?php }else{ ""; }
                    ?>
                </div>
                <div class="post">
                    <form action="" method="POST">
                    <table>
                        <tr>
                            <td>
                                <textarea id="summernote" class="form-control" name="about_text" value="<?php echo $selectAll['about_text']; ?>" > </textarea>
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

    session::unseter("about_error");
    session::unseter("about_success");

?>
