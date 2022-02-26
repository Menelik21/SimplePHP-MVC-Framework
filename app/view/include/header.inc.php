<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME;?></title>
    <link href="<?php echo APP_ROOT_PATH.'asset/css/style.css';?>" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo APP_ROOT_PATH.'asset/bootstrap/css/bootstrap.min.css';?>">
</head>
<body>
    <div class="header-container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo(APP_ROOT_PATH);?>"><?php echo SITE_NAME;?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="<?php echo(APP_ROOT_PATH);?>">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo(APP_ROOT_PATH).'index.php/about';?>">Doc</a>
                    </li>
                  </ul>
                <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" aria-current="page" target="_blank" href="https://www.linkedin.com/in/menelikbelete/" data-bs-toggle="tooltip" data-bs-placement="top" title="Go to my LinkedIn Page">LinkedIn</a>
                    </li>
                   <li class="nav-item">
                      <a class="nav-link" target="_blank" href="https://github.com/Menelik21/" data-bs-toggle="tooltip" data-bs-placement="top" title="Go to my GitHub page">GitHub</a>
                    </li>
                    
                 </ul>
            </div>
          </div>
        </nav>
    </div>
   