<html>
	<head>
		<title>nSpec</title>
		<link rel="stylesheet" href="https://bootswatch.com/flatly/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
		<script
  			src="https://code.jquery.com/jquery-3.2.1.min.js"
  			integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  			crossorigin="anonymous">
  		</script>
	</head>
	<body>
	<nav class="navbar navbar-default">
	  <div class="container">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo base_url(); ?>">nSpec</a>
	    </div>
	    <div id="navbar" class="collapse navbar-collapse">
	      <ul class="nav navbar-nav navbar-left">
	        <li><a href="<?php echo base_url(); ?>">Home</a></li>
	        <li><a href="<?php echo base_url(); ?>properties">Properties</a></li>
	        <li><a href="<?php echo base_url(); ?>surveys">Section Surveys</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a (click)="login()">Login</a></li>
	        <li><a (click)="logout()">Logout</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>

	<div class="container">
