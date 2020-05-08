<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<script src="/index.js"></script>
<link rel="stylesheet" href="index.css">
</head>

<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<body>
   <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container-fluid">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="index.php"><i class="fa fa-home"></i> Home</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="topics.php"><i class="fa fa-edit"></i> Topics</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link" href="notifications.php"><i class="fa fa-bell"></i> Notifications</a>
               </li>
            </ul>
            <form class="form-inline my-2 my-lg-0 col-md-5">
               <input class="myform-control mr-sm-2" type="search" placeholder="Search Q&A site" aria-label="Search">
               <button class="btn btn-light"><i class="fa fa-search"></i></button>
            </form>
            <ul class="navbar-nav ml-auto">
               <li>
               <p><a href="#ex1" rel="modal:open" class="btn mybtn btn-success"> Add a question</a></p>
               </li>
               <li class="avatar-profile d-none d-sm-block ">
                  <a href="profile.php" ><img src="https://a11.t26.net/taringa/avatares/9/1/2/F/7/8/Demon_King1/48x48_5C5.jpg" class="img-responsive" /></a>
               </li>
            </ul>
         </div>
      </div>
   </nav>


<div align="center">
<?php


           ?> <h6 class="my-4"> <?php   echo 'Hello, User, here you can see all of your notifications'; ?> </h6>
<div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
        <tr>
            <th>Type</th>
            <th>Content</th>
            <th>Date</th>
            <th>Mark read</th>
        </tr>
    </thead>
                <tbody>
        <?php
                echo '<tr>';
                echo '<td>';
                // grupa         
                echo 'Upvote';
                echo '</td>';
                echo '<td>';
                // opis          
                echo 'Someone has upvoted your answer!';
                echo '</td>';
                echo '<td>';
                
                echo '20.12.2019';
                echo '</td>';
                echo '<td>';
                
                echo 'MARK';
                echo '</td>';
                echo '<td>';
                
                echo '</tr>';
                
        ?>
        </tbody>
        </table>