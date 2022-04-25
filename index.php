<?php
include './admin/dbcon.php';
include './includes/header.php';
$name = "Krupesh"
?>

<!-- quote  section-->
<section class="quote">
    <h2>Welcome<span>, <?= $name ?></span> </h2>
    <h4 id="quote"></h4>
    <h5 id="author"></h5>
</section>

<!-- categories section -->
<section class="categories">
    <h2>Categories</h2>

    <div class="container">

        <div class="row">

        <?php

        $selsqe = "select * from forum_category";
        $result = mysqli_query($con,$selsqe);

        while($row = mysqli_fetch_assoc($result))
        {
            $catname = $row['category_name'];
            $catdesc = $row['category_desc'];

            echo '
            <div class="card col-sm-3 mx-3 mb-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">'.$catname.'</h5>
                <h6 class="card-subtitle mb-2 text-muted">Web Development</h6>
                <p class="card-text">'.substr($catdesc,0,70).'...</p>
                <a href="#" class="card-link btn btn-primary">Visit Category</a>
            </div>
        </div>
            ';
        }
        ?>
            <!-- card 1 -->
            

        </div>
    </div>


</section>

<hr>
<!-- leatest-trending -->
<div class="latest-trending container-fluid">
    <div class="row">
        <!-- latest question -->
        <div class="latest-question col-md-6">
            <h2>Latest Questions</h2>
            <!-- card -->
            <div class="card">
                <div class="card-header">
                    HTML
                </div>
                <div class="card-body">
                    <h5 class="card-title">HTML is not Installing</h5>
                    <p class="card-text">I have cracked my pc with hammer but still my HTML is not working.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    HTML
                </div>
                <div class="card-body">
                    <h5 class="card-title">HTML is not Installing</h5>
                    <p class="card-text">I have cracked my pc with hammer but still my HTML is not working.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    HTML
                </div>
                <div class="card-body">
                    <h5 class="card-title">HTML is not Installing</h5>
                    <p class="card-text">I have cracked my pc with hammer but still my HTML is not working.</p>
                </div>
            </div>
        </div>
        <!-- latest question -->
        <div class="trending col-md-6">
            <h2>Trending Categories</h2>
            <!-- card -->
            <div class="container-fluid">
                <div class="row">
            <div class="card col-sm-3 mx-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">ReactJS</h5>
                    <h6 class="card-subtitle mb-2 text-muted">3,000 Issues</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link btn btn-primary">Visit Category</a>
                </div>
            </div>
            <div class="card col-sm-3 mx-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">ReactJS</h5>
                    <h6 class="card-subtitle mb-2 text-muted">3,000 Issues</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link btn btn-primary">Visit Category</a>
                </div>
            </div>
                
                </div>
            </div>
        </div>

    </div>
</div>


<!-- javascript -->
<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script>
    const text=document.getElementById("quote");
    const author=document.getElementById("author");

const getNewQuote = async () =>
{
    //api for quotes
    var url="https://type.fit/api/quotes";    

    // fetch the data from api
    const response=await fetch(url);

    //convert response to json and store it in quotes array
    const allQuotes = await response.json();

    // Generates a random number between 0 and the length of the quotes array
    const indx = Math.floor(Math.random()*allQuotes.length);

    //Store the quote present at the randomly generated index
    const quote=allQuotes[indx].text;
    
    //Store the author of the respective quote
    const auth=allQuotes[indx].author;

    if(auth==null)
    {
        author = "Anonymous";
    }
 
    //function to dynamically display the quote and the author
    text.innerHTML=quote;
    author.innerHTML="~ "+auth;
}

getNewQuote();
</script>
</body>

</html>