<!doctype html>
<html lang="en">
<head>
    <title>jrDash</title>
    <link rel="stylesheet" href="<?=base_url()?>public/third-party/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>public/css/style.css" />
    
    <script src="<?=base_url()?>public/third-party/js/jquery.js"></script>
    <script src="<?=base_url()?>public/third-party/js/bootstrap.js"></script>
    <script src="<?=base_url()?>public/js/dashboard/result.js"></script>
    <script src="<?=base_url()?>public/js/dashboard/event.js"></script>
    <script src="<?=base_url()?>public/js/dashboard/template.js"></script>
    <script src="<?=base_url()?>public/js/dashboard.js"></script>
    <script>
    $(function() {
        // Init the Dashboard Application
        var dashboard = new Dashboard();
    });
    </script>
</head>
<body>
    
<nav class="navbar">
    <div class="navbar-inner">
    <span class="brand">jrDash</span>
    <ul class="nav">
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">User</a></li>
        <li><a href="<?=site_url('dashboard/logout')?>">Logout</a></li>
    </ul>
    </div>
</nav>
    
<!-- start:wrapper -->
<div class="wrapper">
    
    <div id="error" class="alert alert-error hide"></div>
    <div id="success" class="alert alert-succes hide"></div>