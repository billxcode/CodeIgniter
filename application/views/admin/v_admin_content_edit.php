<?php $this->load->view('template/v_admin_header.php'); ?>

				<div class="span12">&nbsp;</div>
			        <div class="span3">
						<?php $this->load->view('template/v_admin_sidebar'); ?>
			        </div><!--/span-->
				<div class="span8">
				<?php $data = $article->row(); ?>
						<form class="form" method="POST" action="<?php echo base_url('index.php/admin/contentedit/'.$data->id) ?>" >
							<div class="form-group">
								<input type="text" class="form-control span5" name="title" placeholder="title" value="<?php echo $data->title; ?>">
							</div>
							<div class="form-group">
								<textarea placeholder="Content" class="form-control span8" name="content"><?php echo $data->content ?></textarea>
							</div>
							<div class="form-group">
								<button class="btn btn-primary pull-right">Submit</button>
							</div>
						</form>
				</div>
				
<?php $this->load->view('template/v_admin_footer.php'); ?>
