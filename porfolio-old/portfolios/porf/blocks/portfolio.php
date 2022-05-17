<div class="d-flex flex-wrap ">
	<div class="row">
		<?php 
			for ($i=0; $i < 4; $i++):
		?>

	
			
			<div class="col-lg-4 mt-3" data-aos="fade-up" data-aos-offset="<?php echo $i*150 ?>">
				<div class="card shadow-sm">
	            <img src="assets/img/<?php echo $i+1 ?>.png" alt="" class="img-thumbnail"><title>Placeholder</title>

	            <div class="card-body">
	            	<h3>Название сайта</h3>
	              <p class="card-text">Описание сайта This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
	              <div class="d-flex justify-content-between align-items-center">
	                <div class="btn-group">
	                  <button type="button" class="btn btn-sm btn-outline-secondary text-info">GitHub</button>
	                  <button type="button" class="btn btn-sm btn-outline-secondary">Host</button>
	                </div>
	                
			              </div>
		            </div>
		        </div>
			</div>



	
		<?php endfor; ?>
	</div>
</div>
