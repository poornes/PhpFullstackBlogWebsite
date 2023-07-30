<?php 
session_start();
    include('includes/header.php');
    include('includes/navbar.php');
    include('admin/config/dbcon.php');
?>

<div class="py-5">
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <?php 
                    include('message.php')
                ?>
                <!----------------------------------- HERO SECTION------------------------------- -->
                <div class="container col-md-12 col-sm-12" id="home">
                    <h1 class="hero-heading mt-5">Explore the posibilities <br> with our all in one <br> <span class="hero-span"> AI collec<span class="hero-span-1">tion</span></span></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-sm-6 mt-lg-5 mt-md-4 mt-sm-3">
                <div class="community mt-5 text-center"id="Communities">
                    <h6>Find every tool all <br> around the web</h6>
                    <div class="social-icons mt-4 ">
                        <a href="#"><i class="fa-brands fa-discord fa-beat"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter fa-beat"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube fa-beat"></i></a>
                    </div>
                    <h6 class="mt-3">Join our <span class="join-text">communities </span></h6>    
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mt-lg-5 mt-md-4 mt-sm-3">
                <div class="community mt-5 text-center">
                    <h2>The tools we are providing for you are <br> <span class="auto-type"></span></h2>  
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 mt-lg-5 ms-auto mt-md-4 mt-sm-3">
                <div class="community mt-5  text-center">
                    <h6 class="text-center join-text">200+</h6>
                    <h6>AI tools are currently listed in <br>Search.ai</h6>
                </div>
                <h6 class="community text-center mt-3">
                    24/7 <br>
                    Supported community
                </h6>
            </div>    
        </div>
    </div>
    <!--Why us/ how we are going to help you-->
    <div class="container">
        <div class="row">
            <h1 class="text-capitalize mt-5 yUs-text text-center bold">Why Us? How we are going to help you</h1>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card yUs-text">
                <h1 class="bold text-center m-3 text-light">1</h1>
                    <div class="card-body">
                        <h5 class="card-title">AI tools</h5>
                        <p class="card-text">SearchAI provides you with more than 200+ AI tools in one platform</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card yUs-text">
                <h1 class="bold text-center m-3 text-light">2</h1>
                    <div class="card-body">
                        <h5 class="card-title">Reason 1</h5>
                        <p class="card-text">Every induvidual can easily find how to use every tool provided here, How? we are going to conduct 3 webinars everyday to explain about each tool here</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <div class="card yUs-text">
                <h1 class="bold text-center m-3 text-light">3</h1>
                    <div class="card-body">
                        <h5 class="card-title">Simplified</h5>
                        <p class="card-text">We have given a simple discription of every tool with 7 to 8, so user can get more clarity within short time</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------Resources and tools--------------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mt-5 bold tools-heading">
                <h1>Resources/Tools</h1>
                <span>This is all in one AI tool dictionary, where you can find almost all the ai tools and we are divided all the AI tools with respect to their categories. So that a user can easily apporach to their desire tool without any confusion.</span>
            </div>
        </div>

        <section id="tools container">
                <div class="button-group" id="filters">
                    <button class="btn active-filter mx-3" data-filter="*">All catergories</button>
                    <?php
                        $filter_btn = "SELECT DISTINCT name FROM category";
                        $filter_btn_run = mysqli_query($con, $filter_btn);

                        if(mysqli_num_rows($filter_btn_run)>0){
                            foreach($filter_btn_run as $filter){
                                ?>
                                    <button class="btn mx-3" name="filter" data-filter=".<?=$filter['name'];?>"><?=$filter['name'];?></button>
                                <?php
                            }
                        }
                        ?>
                </div>
                <div class="grid">
                    <?php 
                    if(!isset($_POST['filter'])){
                        $query = "SELECT * FROM category";
                        $query_run = mysqli_query($con, $query);
                        if(mysqli_num_rows($query_run)>0) {
                          foreach($query_run as $run){
                                ?>
                                <div class="grid-item border text-center mx-4 m-3 pb-2 <?=$run['name'];?>">
                                    <div class="item py-2">
                                        <div class="product-details text-center">
                                            <h6><?=$run['tool_name'];?></h6>
                                            <span class="mx-2 spanDescription">
                                                <?=$run['description'];?><br>
                                            </span>
                                            <a target="_blank" href="<?=$run['slug']?>"><i class="fa-sharp fa-solid fa-link m-3 text-light" <?=$run['slug']?> title="Click to navigate official website of <?=$run['tool_name'];?>"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                    } else {
                        echo 'Something went wrong';
                    }
                    ?>
                </div>
        </section>
    </div>
</div>



<?php 
    include('includes/footer.php');
?>

<style>
    .hero-heading {
        font-family: 'Source sans 3', cursive;
        font-size: 75px;
        text-align: center !important;
        color: #160647;
        font-weight: bold;
    }
    .hero-span {
        background: -webkit-linear-gradient(teal, #333);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .hero-span-1{
        background: -webkit-linear-gradient(teal, #dacd87);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .join-text,.auto-type {
        background: -webkit-linear-gradient(teal, #333);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .fa-discord,.fa-twitter,.fa-youtube,.fa-telegram,.fa-instagram {
        font-size: 25px;
        background: #160647;
        color: #f2f2f4 !important;
        border-radius: 20px;
        padding: 10px;
        background: -webkit-linear-gradient(blue, #000);
        -webkit-background-clip: background;
        -webkit-text-fill-color: #f2f2f4;
    }
    .fa-youtube {
        -webkit-text-fill-color: red;
    }
    .fa-twitter,.fa-telegram {
        -webkit-text-fill-color: skyblue;
    }
    .fa-instagram {
        background: -webkit-linear-gradient(blue, #000);
        -webkit-background-clip: background;
        -webkit-text-fill-color: white;
    }
    .community h6{
        font-size: 20px;
        color: #160647; 
    }
    .hero {
        display: inline-block !important;
    }
    h6,h5,h4,h3,h2,h1{
        color: #160647;
    }
    .yUs-text {
        margin-top: 100px !important;
    }
    .yUs-text h5 {
        font-size: 30px;
        margin-bottom: 10px;
        color: #f2f2f4;
    }
    .card {
       margin-top: 60px !important;
        font-family: 'Source sans 3', sans;
        background-color: #7761b4;
        height: 40vh;
        color: #f2f2f4;
        font-size: 18px;
    }
    .tools-heading h1{
        font-size: 65px;
        margin-top: 70px !important;
        margin-bottom: 70px !important;
    }
    .button-group button {
        margin-top: 100px;
        margin-bottom: 50px;
        background-color: teal;
        color: #f2f2f4;
        border-radius: 25px;
    }
    .button-group button:hover {
        transition: all 0.5s ease-in-out;
        background: -webkit-linear-gradient(teal, #333);
        -webkit-background-clip: background;
        -webkit-text-fill-color: #f2f2f4;
        border: none;
    }
    #tools .grid-item {
        width: 300px !important;
        border: none !important;
    }
    .item a{
        text-decoration: none;
    }
    .product-details,.spanDescription {
        font-size: 15px;
        text-align: left !important;
        color: #f2f2f4;
        margin: 20px !important;
    }
    .item a {
        color: #160647;
    }
    .item h6 {
        font-size: 30px;
        color: #f2f2f4;
        padding: 10px;
    }
    .product-details h6:hover {
        transition: all .3s ease;
        transform : scale(1.1);
    }
    .item {
        font-family: 'Source sans 3',cursive;
        background-color: #7761b4;
        margin: 0;   
        color: #160647;    
        border-radius: 10px;
        width: 300px !important;
        height: 50vh !important;
        font-size: 20px;
        letter-spacing: 1px;
        line-height: 25px;
    }
    .item:hover {
        cursor: pointer;
        box-shadow: 0px 10px 40px #0ff;
        transition: all 0.3s ease-in-out;
    }
    .grid-item {
        border: none !important;
    }
    #tools {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        margin-left: 50px;
    }











@media screen and (max-width: 992px) {
    .hero-heading {
        font-size: 55px;
    }
}
@media screen and (max-width: 408px) {
    .hero-heading {
        margin-top: 10px !important;
    }
}
@media screen and (max-width: 772px) {
    .hero-heading {
        font-size: 35px;
    }
}
@media screen and (max-width: 758px) {
    .community {
        margin-top: 30px;
    }
}
@media screen and (max-width: 778px) {
    .tools-heading h1{
        font-size: 50px;
        margin-top: 20px !important;
    }
}
@media screen and (max-width: 450px) {
    .tools-heading h1{
        font-size: 40px;
    }
}

</style>


















<script>
    var typed = new Typed(".auto-type",{
        strings : ['Photo Editing','Video editing','All the categories will display here'],
        typeSpeed : 50,
        backSpeed : 50,
        loop : true,
    })

    $(document).ready(function(){
        let grid = $('.grid').isotope({
            itemSelector: '.grid-item',
		    layoutMode : 'fitRows',
        });
        $("#filters").on('click','button',function(){
            let filterValue = $(this).attr('data-filter');
            grid.isotope({filter: filterValue});
            removeActiveFilter();
		    $(this).addClass('active-filter');
        });
    })

    //remove active-filter class

    function removeActiveFilter(){
        const buttons = document.querySelectorAll('#filters button');
        buttons.forEach(btn => {
            btn.classList.remove('active-filter');
        })
    }

</script>

<!--ISOTOPE jquery cdn link-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>