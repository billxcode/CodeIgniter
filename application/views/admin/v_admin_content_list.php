<?php $this->load->view('template/v_admin_header.php'); ?>

				<div class="span12">&nbsp;</div>
			        <div class="span3">
						<?php $this->load->view('template/v_admin_sidebar'); ?>
			        </div><!--/span-->
				<div class="span8">
						<table class="table table-hover">
							<tr>
								<th>Title</th>
								<th>Content</th>
								<th>Author</th>
								<th>Action</th>
							</tr>
							<?php foreach ($articles->result() as $key => $value) {
								?>	
								<tr>
									<td><?php echo $value->title ?></td>
									<td><?php echo $value->content ?></td>
									<td><?php echo $value->author ?></td>
									<td><a href="<?php base_url('index.php/admin/contentdelete') ?>" clas
									btn btn-danger>Delete</a></td>
									<td><a href="<?php base_url('index.php/admin/contentedit') ?>" clas
									btn btn-danger>Edit</a></td>
								</tr>
								<?php	
							} ?>
							
						</table>
				</div>
				
<?php $this->load->view('template/v_admin_footer.php'); ?>
