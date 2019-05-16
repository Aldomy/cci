
<nav class="navbar o-header sticky-top  navbar-expand-lg navbar-dark scrolling-navbar" style="z-index: 1000;">
      <div class="container">

        <!-- Brand -->
        <a  href="index.php" class="mr-4">
          <img class="w-100 logo " src="img/logo.png" alt="">
        </a>

        <!-- Collapse -->
        <button class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
          aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse  navbar-collapse" id="navbarSupportedContent">

          <div class="d-flex flex-column w-100">

              <!-- Up -->
              <div class="row p-3">

                  <!-- Sign In/out -->
                  <div class="dropdown col-12 col-sm-3 ">


                        <a class=" my-0 my-sm-0  nav-link text-white font-weight-bold mx-auto  dropdown-toggle " href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Sign In
                        </a>
                        <div class="main-menu">
                          <ul class="dropdown-menu">
                              <li> <a href="#"  data-toggle="modal" data-target="#loginModalForm">Sign In</a></li>
                              <li><a href="#" data-toggle="modal" data-target="#registerModalForm" >Sign Up</a></li>
                              <li><a href="subscribe1.php"  >New Subscribe</a></li>
                              <li><a href="subscribe2.php"  >Update Subscribe</a></li>
                          </ul>
                        </div>


                  </div>
                  <!-- Sign In/out -->

                  <!-- Search and language -->
                  <div class="navbar-nav nav-flex-icons col-12 col-sm-9 mb-sm-2 mt-2 mt-sm-0">

                    <form class="form-inline ml-auto">

                        <div class=" input-group-sm ">
                            <button class="btn  btn-sm my-sm-0 " style="margin-top: 10px;" type="submit"><i style="font-size: 1; " class=" fa fa-search text-white"></i></button>
                        </div>
                        <div class=" input-group-sm ">
                            <input class="form-control mt-1 mt-sm-0 search" type="search" placeholder="Search" aria-label="Search">
                        </div>
                    </form>

                    <!-- Language -->
                    <div class="navbar-nav nav-flex-icons ">

                        <div class="mx-2 ">
                          <a class="my-2 my-sm-0 w-100   text-white font-weight-bold  " href="<?php echo ($lang=='ar'? "index.php" : "ar.php"); ?>" role="button" id="dropdownMenuLink" >
                             <?php echo ($lang=='ar'? "English" : "العربية"); ?>

                          </a>
                        </div>

                    </div>
                    <!-- Language -->

                  </div>
                  <!-- Search and language -->


              </div>


                <!-- Down -->
                <div  >
                  <ul class="navbar-nav  main-menu" >

                    <li class="nav-item active home">
                      <a class="nav-link" href="index.php">Home
                        <span class="sr-only">(current)</span>
                      </a>
                    </li>

                      <!-- level 1 -->
                      <li class="nav-item dropdown  ">
                          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                          About Us
                          </a>
                          <ul class="dropdown-menu <?php echo ($lang!='ar')? 'pop-right' : 'pop-left'; ?> ">

                            <li class="nav-item "><a  class="nav-link" href="#">Action</a></li>

                            <li class="nav-item"><a  class="nav-link" href="#">Another action</a></li>


                            <!-- level 2 -->
                            <li class="nav-item dropdown d-none d-md-block">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Submenu</a>
                                <ul class="dropdown-menu <?php echo ($lang!='ar')? 'pop-right' : 'pop-left'; ?> ">
                                <li class="nav-item"><a class="nav-link" href="#">Submenu action</a></li>

                                <li class="nav-item"><a class="nav-link" href="#">Another sub</a></li>


                                    <!-- level 3 -->
                                    <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Second sub</a>
                                        <ul class="dropdown-menu <?php echo ($lang!='ar')? 'pop-right' : 'pop-left'; ?> ">
                                          <li class="nav-item"><a class="nav-link" href="#">Subsubmenu</a></li>
                                          <li class="nav-item"><a class="nav-link" href="#">Another sub</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                          </ul>
                      </li>


                      <li class="nav-item">
                        <a class="nav-link" href="marketplace.php"  >Market Place</a>
                      </li>

                      <!-- level 1 -->
                      <li class="nav-item dropdown  ">
                          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                          Raw Matrials Suppliers
                          </a>
                          <ul class="dropdown-menu <?php echo ($lang==='ar')? 'pop-right' : 'pop-left'; ?> ">

                            <li class="nav-item "><a  class="nav-link" href="#">Action</a></li>

                            <li class="nav-item"><a  class="nav-link" href="#">Another action</a></li>


                            <!-- level 2 -->
                            <li class="nav-item dropdown d-none d-md-block">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Submenu</a>
                                <ul class="dropdown-menu <?php echo ($lang!='ar')? 'pop-right' : 'pop-left'; ?> ">
                                <li class="nav-item"><a class="nav-link" href="#">Submenu action</a></li>

                                <li class="nav-item"><a class="nav-link" href="#">Another sub</a></li>


                                    <!-- level 3 -->
                                    <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Second sub</a>
                                        <ul class="dropdown-menu <?php echo ($lang==='ar')? 'pop-right' : 'pop-left'; ?> ">
                                          <li class="nav-item"><a class="nav-link" href="#">Subsubmenu</a></li>
                                          <li class="nav-item"><a class="nav-link" href="#">Another sub</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                          </ul>
                      </li>


                      <li class="nav-item">
                          <a class="nav-link" href="" >Industry Institutions & associations</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="" >Machinery, Equipment & Molds</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="" >Services / Service Providers</a>
                      </li>

                      <li class="nav-item">
                          <a class="nav-link" href="" >Industry Updates</a>
                      </li>


                      <!-- level 1 -->
                      <li class="nav-item dropdown  ">
                          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                          Product Category
                          </a>
                          <ul class="dropdown-menu <?php echo ($lang==='ar')? 'pop-right' : 'pop-left'; ?> ">

                            <li class="nav-item "><a  class="nav-link" href="#">Action</a></li>

                            <li class="nav-item"><a  class="nav-link" href="#">Another action</a></li>


                            <!-- level 2 -->
                            <li class="nav-item dropdown d-none d-md-block">
                              <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Submenu</a>
                                <ul class="dropdown-menu <?php echo ($lang==='ar')? 'pop-right' : 'pop-left'; ?> ">
                                <li class="nav-item"><a class="nav-link" href="#">Submenu action</a></li>

                                <li class="nav-item"><a class="nav-link" href="#">Another sub</a></li>


                                    <!-- level 3 -->
                                    <li class="nav-item dropdown">
                                      <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Second sub</a>
                                        <ul class="dropdown-menu <?php echo ($lang==='ar')? 'pop-right' : 'pop-left'; ?> ">
                                          <li class="nav-item"><a class="nav-link" href="#">Subsubmenu</a></li>
                                          <li class="nav-item"><a class="nav-link" href="#">Another sub</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                          </ul>
                      </li>




                  </ul>
                </div>



          </div>

        </div>
      </div>
    </nav>
    <!-- Navbar -->

