
<section class="companies container my-5">

    <h2>Companies Directory</h2>

    <!-- Search -->
    <div class="row my-3 p-3 bg-light">

        <div class="col-12 col-sm-6 col-md-3 mb-2">
            <h5>Comapny Name</h5>
            <input type="text" autofocus class="form-control calendar">
        </div>

        <div class="col-12 col-sm-6 col-md-3 mb-2">
            <h5>Governorate</h5>
            <select class="form-control calendar">
            <option value="">Select</option>
            <option value="">1</option>
            <option value="">2</option>
            </select>
        </div>

        <div class="col-12 col-sm-6 col-md-3 mb-2">
            <h5>City</h5>
            <select class="form-control calendar">
            <option value="">Select</option>
            <option value="">1</option>
            <option value="">2</option>
            </select>
        </div>

        <div class="col-12 col-sm-6 col-md-3 mb-2">
            <h5>Address</h5>
            <input type="text" autofocus class="form-control calendar">
        </div>

        <div class="col-12 col-sm-6 col-md-4 mb-2">
            <h5>Sector</h5>
            <select class="form-control calendar">
            <option value="">Select</option>
            <option value="">1</option>
            <option value="">2</option>
            </select>
        </div>

        <div class="col-12 col-sm-6 col-md-4 mb-2">
            <h5>Activities</h5>
            <select class="test form-control calendar" multiple="multiple">
                <option value="1">Option 1</option>
                <option value="2" selected>Option 2</option>
                <option value="3">Option 3</option>
                <option value="4" disabled>Manège</option>
                <option value="5">Bête</option>
            </select>

        </div>
        <div class="col-12 col-sm-6 col-md-4 w-100 mb-2" >
            <h5>Products</h5>
            <select class="test form-control calendar" multiple="multiple">
                <option value="1">Option 1</option>
                <option value="2" selected>Option 2</option>
                <option value="3">Option 3</option>
                <option value="4" disabled>Manège</option>
                <option value="5">Bête</option>
            </select>
        </div>

        <div class="col-12 col-sm-6 col-md-4 w-100 mb-2" >
            <h5>Value chain</h5>
            <select class="test form-control calendar" multiple="multiple">
                <option value="1">Option 1</option>
                <option value="2" selected>Option 2</option>
                <option value="3">Option 3</option>
                <option value="4" disabled>Manège</option>
                <option value="5">Bête</option>
            </select>
        </div>

        <div class="col-12 col-sm-6 col-md-4 w-100 mb-2" >
            <h5>Category</h5>
            <select class="test form-control calendar" multiple="multiple">
                <option value="1">Option 1</option>
                <option value="2" selected>Option 2</option>
                <option value="3">Option 3</option>
                <option value="4" disabled>Manège</option>
                <option value="5">Bête</option>
            </select>
        </div>


        <div class="col-12  col-sm-6 col-md-4 px-3 pr-4 mt-2">

            <button class="btn btn-primary form-control w-100 mt-4">Search</button>
        </div>



    </div>



    <!-- The Companies -->
    <div class="mt-5">

        <div class="row  py-2 co-row">
            <div class="col-12 col-sm-4  pb-1 pb-0 px-5 ">
            <div class="co-img m-auto pt-3">
            <img src="img/co_logos/05.png" class="w-100 " alt="">
            </div>
            </div>
            <div class="col-12 col-sm-8 px-3 mt-2">
                <a href="co-details.php" class="h4-responsive">Abu Zaabl Co. for Speciality Chemicals</a>
                <p class="mt-4">Member ID:</p>
                <p class="">Headquarter:</p>
            </div>
        </div>

        <div class="row  py-2 co-row ">
            <div class="col-12 col-sm-4  pb-1 pb-0 px-5 ">
            <div class="co-img m-auto pt-3">
            <img src="img/co_logos/01.png" class="w-100" alt="">
            </div>

            </div>
            <div class="col-12 col-sm-8 px-3 mt-2">
                <a href="" class="h4-responsive">Al-Zahraa Modern Technical Starchy Materials & Chemicals Factory</a>
                <p class="mt-4">Member ID:</p>
                <p class="">Headquarter:</p>
            </div>
        </div>

        <div class="row  py-2 co-row ">
            <div class="col-12 col-sm-4  pb-1 pb-0 px-5 ">
            <div class="co-img m-auto pt-3">
            <img src="img/co_logos/02.png" class="w-100" alt="">
            </div>

            </div>
            <div class="col-12 col-sm-8 px-3 mt-2">
            <a href="" class="h4-responsive">Abu Zaabl Co. for Speciality Chemicals</a>
                <p class=" mt-4">Member ID:</p>
                <p class="">Headquarter:</p>
            </div>
        </div>
        <div class="row  py-2 co-row ">
            <div class="col-12 col-sm-4  pb-1 pb-0 px-5 ">
            <div class="co-img m-auto pt-3">
            <img src="img/co_logos/01.png" class="w-100" alt="">
            </div>

            </div>
            <div class="col-12 col-sm-8 px-3 mt-2">
                <a href="" class="h4-responsive border-bottom border-primary ">Abu Zaabl Co. for Speciality Chemicals</a>
                <p class=" mt-4">Member ID:</p>
                <p class=" ">Headquarter:</p>
            </div>
        </div>
    </div>
    <!-- The Companies -->

</section>

<?php include_once('sections/pagination.php'); ?>