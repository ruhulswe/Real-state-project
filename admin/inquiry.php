<?php 
    require_once (__DIR__.'/inc/important_header_file.php');

    if(!session::getter("admin") && !session::getter("email")){
        header("Location:login.php");
    }

    require_once (__DIR__.'/inc/header.php');

    // message deletion 
    if(isset($_GET['del'])){
		$tbName = "inquiry";
		$cond = array('id'=>$_GET['del']);
		$deleted = $db->delete($tbName,$cond);
		if($deleted){
			session::setter("success","message deleted successfully");
		}
    }

    // pagination
    $perpage = 3;
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $start = ($page>1) ? ($page*$perpage)-$perpage : 0;

	$tbName = "inquiry";
	$Arr = array(
	  'return_type' => 'all'
	);
	$total = count($db->selection($tbName,$Arr));
	$pages = ceil($total/$perpage);

?>



		<div id="page-wrapper">

            <div class="container-fluid">

                <h3>Inquiry message list</h3>
                <?php if(session::getter('success')){ ?>
					<p style="color:#DD4D41;font-weight:bold;"><?php echo session::getter('success'); ?></p>
                <?php } ?>
                <div class="post">
                    <form action="" method="POST">
					  <table class="table table-striped">
					    <thead>
					      <tr>
					        <th>name</th>
					        <th>address</th>
					        <th>mobile</th>
					        <th>email</th>
					        <th>message</th>
					        <th>deletion</th>
					      </tr>
					    </thead>
					    <tbody>
						<?php 
							$tbName = "inquiry";
							$selectArr = array(
							  'limit' => array($start,3),
							  'return_type' => 'all'
							);
							$selectAll = $db->selection($tbName,$selectArr);
							if(count($selectAll)) : 
								foreach ($selectAll as $value) :
						?>
						    <tr>
						        <td><?php echo $value["name"]; ?></td>
						        <td><?php echo $value["address"]; ?></td>
						        <td><?php echo $value["mobile"]; ?></td>
						        <td><?php echo $value["email"]; ?></td>
						        <td><a href="" data-toggle="modal" data-target="#myModal">message</a></td>
						        <td><a href="?del=<?php echo $value['id']; ?>">delete</a></td>
						        
								<!-- Modal -->
								<div id="myModal" class="modal fade" role="dialog">
								  <div class="modal-dialog">

								    <!-- Modal content-->
								    <div class="modal-content">
								      <div class="modal-header">
								        <button type="button" class="close" data-dismiss="modal">&times;</button>
								        <h4 class="modal-title">Message</h4>
								      </div>
								      <div class="modal-body">
								        <p><?php echo $value["message"]; ?></p>
								      </div>
								      <div class="modal-body">
								        <p></p>
								      </div>
								      <div class="modal-footer">
								        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								      </div>
								    </div>

								  </div>
								</div>
						    </tr>
						<?php endforeach; 
						else :
							echo "no message available";
						endif; ?>
					    </tbody>
					  </table>
                    </form>
                </div> 

                <div class="pagination_area">
                	<ul class="pagination">
                		<?php for($i=1;$i<=$pages;$i++){ ?>
                			<li class="<?php if($page==$i){ echo 'active'; } ?>"><a href="?page=<?php echo $i; ?>"> <?php echo $i; ?> </a></li>
                		<?php } ?>
                	</ul>
                </div> 

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->





<?php 

    require_once (__DIR__.'/inc/footer.php');
    session::unseter("success");

?>