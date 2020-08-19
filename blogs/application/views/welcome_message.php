<?php
// echo '<pre>'; print_r($active_blogs); die;
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Khurram Shaikh's Blog</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/blog-home.css" rel="stylesheet">

  <link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'> 
    
    <!-- FontAwesome JS -->
  <script defer src="<?php echo HOME_URL ?>assets/fontawesome/js/all.js"></script>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Blogs</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="https://khurramshaikh.in/">Home
              <span class="sr-only"></span>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

      
        <div class="card my-4">
          <h5 class="card-header">Welcome Visitor's</h5>
          <div class="card-body">
           Welcome to my personal blog section. This is the place where I share my technical knowledge
           with other curious developers like me , who are actually looking forward to get their hands on some of the technologies I have been working with . It is a small attempt by me to give it back to the society, so feel free to navigate through my blogs and comment about your views or suggestions if any :)  
          </div>
        </div>
        <?php
          foreach ($active_blogs as $key => $eachBlog) {
            ?>

              <div class="card mb-4">
                  <img class="card-img-top" src="<?php echo $eachBlog->banner_url; ?>" alt="Card image cap">
                  <div class="card-body">
                    <h2 class="card-title"><?php echo $eachBlog->name; ?></h2>
                    <p class="card-text"><?php echo $eachBlog->description; ?></p>
                    <a href="<?php echo BASE_URL.$eachBlog->blog_url; ?>" class="btn btn-primary">Read More &rarr;</a>
                  </div>
                  <div class="card-footer text-muted">
                    Posted on <?php echo date("F jS, Y", strtotime($eachBlog->created_on)); ?> by
                    <a href="#"><?php echo AUTHOR; ?></a>
                  </div>
              </div>
            <?php
          }
        ?>
       

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <!-- <div class="card my-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div> -->

        <!-- Categories Widget -->
<!--         <div class="card my-4">
          <h5 class="card-header">Statistics</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> Views</a>
                  </li>
                 
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">00</a>
                  </li>
                  <li>
                    <a href="#">CSS</a>
                  </li>
                  <li>
                    <a href="#">Tutorials</a>
                  </li> -->
             <!--    </ul>
              </div>
            </div>
          </div>
        </div>  -->

        <!-- Side Widget -->
      

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Khurram Shaikh </p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
