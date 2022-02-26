<?php
//require header for all pages
	require_once dirname(__FILE__,1)."/include/header.inc.php";
?>
<div class="main-container">
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-8 mx-auto">
				<h4 class="alert-heading">About this Simple PHP MVC Framework</h4>
				<div class="accordion" id="about-accordion">
					<div class="accordion-item">
				    <h2 class="accordion-header" id="headingThree">
				      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
				        General Discription #
				      </button>
				    </h2>
				    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#about-accordion">
				      <div class="accordion-body">
				        	<p>This <strong>Simple PHP MVC Frameword</strong> have not various features like famous PHP frameworks. Thus, the main purpose of this framework is:.</p>
				        	<p>For simple project and learing. Special for PHP learner those new for OOP and MVC</p>
				      </div>
				    </div>
				  </div>
				  <div class="accordion-item">
				    <h2 class="accordion-header" id="headingTwo">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
				        Framework Folder Stracture #
				      </button>
				    </h2>
				    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#about-accordion">
				      <div class="accordion-body">
				        <strong>This simple PHP MVC (Model, View, Controller).</strong> framework have three folders. <code>.app</code> is the core folder of the framework.
				        <p>The <code>.app</code> folder containes the following folders: </p>
				        <p>1. <code>.core</code> folder. This folder contains the base controller <code>BaseController</code> which extends by all controllers and <code>Core</code> class. The core class control the routing of the framework. In addition to these two file it contains <code>Model </code>class, it extends by all models</p>
				        <p>2. <code>Controller</code> this folder contains all controller class</p>
				        <p>3. <code>View</code> this folder contains all views</p>
				        <p>4. <code>Model</code> this folder contains all model class</p>
				        <p>5. <code>Config</code> this folder contains database and other configration file</p>
				        <p>6. <code>Helper</code> this folder contains helps file</p>
				      </div>
				    </div>
				  </div>
				  <div class="accordion-item">
				    <h2 class="accordion-header" id="headingThree">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				        Router (Core) #
				      </button>
				    </h2>
				    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#about-accordion">
				      <div class="accordion-body">
				        <strong>The routing is controlled by </strong><code>Core</code> class. All routing is route to index.php. the <code>.htaccess</code> file looks like the following rewrite:
				        <pre>
				        	RewriteEngine on
							# set your rewrite base
							RewriteBase /your-main-folder/

							# Deliver the folder or file directly if it exists on the server
							RewriteCond %{REQUEST_FILENAME} !-f
							RewriteCond %{REQUEST_FILENAME} !-d
							 
							# Push every request to index.php
							RewriteRule ^(.*)$ index.php [QSA]
				        </pre>
				      </div>
				    </div>
				  </div>
				  <div class="accordion-item">
				    <h2 class="accordion-header" id="headingFour">
				      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				        Class Loading #
				      </button>
				    </h2>
				    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#about-accordion">
				      <div class="accordion-body">
				        	<p>I have used <code>composer</code> to load class. But, if you want class manually, you can use <code>classloader</code> file under <code>config</code> folder. If you have used <code>classloader</code> file, you have to inculde the file in index.php</p>
				      </div>
				    </div>
				  </div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require_once dirname(__FILE__,1)."/include/footer.inc.php";
?>