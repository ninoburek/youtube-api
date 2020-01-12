<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
   
	  <div class="container">
	  	<div class="row">
		  	<div class="col">
				<h1><i class="fab fa-youtube-square"></i> <?=$h1?></h1>
				<h5><?=$h5?></h5>
								
				<form class="form-inline searchform" style="margin-top:13px">

					<input type="hidden" id="maxResults" value="<?=$maxResults?>">
					
					<div class="input-group mb-4" style="padding:5px;width:100%">
					  <input type="text" id="query" required class="form-control hidden" placeholder="<?=$searchyoutube?>" aria-label="Search" aria-describedby="basic-addon2">
					  <div class="input-group-append">
						<button type="submit" class="input-group-text" id="basic-addon2"><i class="fas fa-search"></i></button>
					  </div>
					</div>

			</form>
				
			</div>
		 </div>
		  
		  
			<div id="writediv"></div> <? //containter for Youtube search results ?>
			 
		  
		</div>
	  
	  
	 
	