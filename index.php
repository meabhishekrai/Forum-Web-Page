<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iForum</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include 'partials/header.php' ?>

    <?php include 'partials/dbconnect.php'?>


    <!-- Slider starts here -->

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://i.ytimg.com/vi/YfO28Ihehbk/maxresdefault.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ14NOGUNC6NwbJjz0HVZZU7jwkCGIux31m_liSw5kVyw&s"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://www.freecodecamp.org/news/content/images/2022/04/virtual-env-python.png"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container my-3">
        <h2 class="text-center my-3">iForum-Categories</h2>
        <div class="row ">
            <!-- Fetch all the categories -->
            <?php 
                  $sql = "SELECT * FROM `categories`";

                $result = mysqli_query($conn, $sql);
                
                while($row = mysqli_fetch_assoc($result)){
                echo $row ['category_id'];
                echo $row ['category_name'];
                $id = $row['category_id'];
                $cat = $row ['category_name'];
                $desc = $row ['category_description'];
                echo '<div class="col-md-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="https://cdn1.vectorstock.com/i/1000x1000/95/40/php-coding-on-black-vector-15269540.jpg"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href ="thread.php?catid = ' . $id . ' "> ' . $cat. ' </a></h5>
                        <p class="card-text">' . substr($desc, 0, 90). '</p>
                        <a href="thread.php?catid = ' . $id . '" class="btn btn-primary">View Thread</a>
                    </div>
                </div>
            </div>';
                }
            ?>


          
        </div>
    </div>
    <?php include 'partials/footer.php' ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>