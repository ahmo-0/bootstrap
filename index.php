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
   <script src="https://cdn.jsdelivr.net/npm/baffle@0.3.6/dist/baffle.min.js"></script>
    <div class="data">QnA Site</div>
<script>
    const text = baffle(".data");
    text.set({
        // characters : '█>< <█░█▓ ██▒▓░ <▓▓ ▒▓>▒█ ▓▓<> ▓// ██▒█ ▓▓░▓',
        characters : '~!@#$%^&*()-+=[]{}|;:,./<>?+-•~!=*',
        speed: 300
    });
    text.start();
    text.reveal(4000);
</script>
      <div class="container-fluid">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item active">
                  <a class="nav-link" href="#"><i class="fa fa-home"></i> Home</a>
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
   <!-- Page Content -->
 
     <!-- Add a question popup -->
     <div id="ex1" class="modal">
     <div class="container">	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<!-- Start form -->
                    <form>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ask">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Question</label>
                        <input type="text" class="form-control" name="question" id="question" placeholder="Ask">
                      </div>
                      <div class="form-check">
                        <button type="submit" class="btn mybtn btn-success">Submit</button>
                      </div>
                      
                    </form>


			<!-- End form -->
		</div>
		
	
		
	</div>
</div>
 </div>


   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-2">
            <div class=" aff-right">
               <div class="ui-block">
                  <h6 class="my-4">Feeds</h6>
                  <hr>
                  <div class="nav flex-column nav-pills nav-stacked" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                     <a class="nav-link active" data-toggle="pill" href="#"> Top Stories</a>
                     <a class="nav-link" data-toggle="pill" href="#" >New Questions</a>
                     <a class="nav-link" data-toggle="pill" href="#">Bookmarked Answers</a>
                     <a class="nav-link" data-toggle="pill" href="#">Links</a>
                     <a class="nav-link" data-toggle="pill" href="#">Payment Gateways</a>
                     <a class="nav-link" data-toggle="pill" href="#" >Education</a>
                     <a class="nav-link" data-toggle="pill" href="#">E-commerce</a>
                     <a class="nav-link" data-toggle="pill" href="#">Android Applications</a>
                  </div>
               </div>
            </div>
         </div>
         <!-- /.col-lg-3 -->
         <div class="col-lg-7">
            <div class="ui-block">
               <article class="hentry post">
                  <div class="m-link">
                     <a href="#"  target="_blank">
                        <h4>Why should I follow you, in five sentences?</h4>
                     </a>
                  </div>
                  <div class="post__author author vcard inline-items">
                     <img src="https://a11.t26.net/taringa/avatares/9/1/2/F/7/8/Demon_King1/48x48_5C5.jpg" alt="author">
                     <div class="author-date">
                        <a class="h6 post__author-name fn" href="#">Dipendra Singh</a>
                        <div class="post__date">
                           <time class="published" datetime="2004-07-24T18:18">
                           Topic: Internet
                           </time>
                        </div>
                     </div>
                     <div class="more">
                        <a href="#">
                        <i class="fa fa-ellipsis-v"></i>
                        </a>
                     </div>
                  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut
                     labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris consequat.
                  </p>
                  <div class="post-additional-info inline-items">
                     <p>
                        <a href="#" class="btn btn-sm btn-light"><span class="fa fa-pencil"></span> Answer</a>
                     </p>
                  </div>
               </article>
         </div>
      </div>
   </div>
</body>
</html>