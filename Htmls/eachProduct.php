<!-- add quesionmark  -->
<?php include 'header.php' ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Each product</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="../Css/eachProduct.css">
</head>

<body>
  <div class="poster_and_description">

    <!-- movie poster and description -->
    <div class="coverphoto">
      <img class="stImage" src="../images//posterone.jpg" alt="image">
    </div>

    <div class="descriptionContainer">

      <!-- left section of the description container -->
      <div class="leftSection">
        <div class="filmDescription">
          <!-- above the horizontal line -->
          <div class="aboveLine">
            <div class="title">
              <h1 class="d-inline">Avatar: The Last Airbender </h1>
              <p class="movieName d-inline"> <b>2019</b></p>
              <p class="m-0"> <i class="fa-solid fa-film"></i> Action / Adventure / Comedy</p>
            </div>
            <div class="titleRight">
              <button type="button" class="btn btn-primary p-10"><i class="fa-solid fa-share-nodes"></i></button>
              <button type="button" class="btn btn-danger me-4 p-10">Add to watchlist +</button>
            </div>
          </div>

          <hr>

          <!-- bellow the horizontal line -->
          <div class="bellowLine">
            <!-- left section -->
            <div class="budget ms-3 mt-2">
              <p>
                <i class="fa-solid fa-money-bill"></i>
                BUDGET
                <span class="amount">$160,000,000</span>
              </p>
            </div>
            <div class="sharingIocns fs-3 me-4">
              <i class="fa-brands fa-facebook text-primary"></i>
              <i class="fa-brands fa-youtube text-danger"></i>
              <i class="fa-brands fa-square-snapchat text-warning"></i>
              <i class="fa-brands fa-square-x-twitter text-info"></i>
            </div>
          </div>
        </div>

        <!-- summary of the movie: -->
        <div class="detailedInfo">
          <p class="summary_label">Summary</p>
          <hr>

          <h1 class="text-secondary">Storyline</h1>

          <p class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Est quas repudiandae, perferendis distinctio sunt cum quo quasi voluptatibus. Nesciunt hic delectus eligendi, repudiandae voluptatem quaerat? Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis autem rem, cupiditate reprehenderit distinctio laudantium excepturi illum non qui similique aperiam saepe unde quas iusto.
            <br><br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sapiente aliquid dolores accusamus explicabo incidunt, aliquam corporis nostrum est molestias possimus doloremque commodi unde aperiam. Architecto:
          </p>
          <ul class="text-secondary">
            <li>Property number one</li>
            <li>Property number two</li>
            <li>Property number three</li>
            <li>Property number four</li>
          </ul>
          <p class="text-secondary">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quos dolorum hic aperiam sequi aliquid ut doloremque iure cumque vitae delectus consequatur sit, porro fugit, consectetur eaque animi illum doloribus. Optio, iste. Deserunt consectetur saepe culpa at nesciunt corrupti voluptate a error temporibus? Neque iste quibusdam rerum at, fugiat debitis cumque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat porro hic, minima tenetur est quae excepturi praesentium maxime asperiores error, doloremque dolorum nisi impedit sapiente.
          </p>
        </div>
      </div>

      <!-- right section of the description container -->
      <div class="rightSection">
        <img class="miniPoster" src="../images/Gordon.jpg" alt="image">

        <div class="director mt-3">
          <h5 class="m-0">Director</h5>
          <p class="text-secondary">John Watts</p>
        </div>

        <div class="writers mt-3">
          <h5 class="m-0">Writers</h5>
          <p class="text-secondary">Erik Sommers, Stan Lee, John Doe</p>
        </div>

        <div class="cast mt-3">
          <h5 class="m-0">Cast</h5>
          <p class="text-secondary">Robert Downey Johnson, Robert Downey Junior</p>
        </div>

        <div class="Plot mt-3">
          <h5 class="m-0">Plot</h5>
          <p class="text-secondary">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Odit veniam fuga culpa magnam reprehenderit qui?John Watts</p>
        </div>
      </div>
    </div>
  </div>

  <!-- cards -->
  <div class="text-center m-4">
    <h2 class="underline_effect">Actors</h2>
  </div>

  <div class="actors">

    <div class="card" style="width: 18rem;">
      <img src="../images/MV5BNzIxNGU4M2ItZDdhMi00YmJjLThlNzItMmM0NTljM2RkMjA2XkEyXkFqcGdeQXVyMTA0OTI3NTYw._V1_.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5>Actor Name</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="../images/Kia.jpeg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5>Actor Name</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="../images/mathew.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5>Actor Name</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>

    <div class="card" style="width: 18rem;">
      <img src="../images/Amber.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5>Actor Name</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      </div>
    </div>
  </div>

  <!-- Trailer -->
  <div class="text-center m-4">
    <h2 class="underline_effect">Link to Trailer</h2>
  </div>
  
  <div class="trailer">
    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/ByAn8DF8Ykk?si=5N75v9W2USBT4pzF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen>
    </iframe>
  </div>

  <!-- Reviews -->
  <div class="text-center m-4">
    <h2 class="underline_effect">Reviews</h2>
  </div>

  <div class="container">
    	<div class="card">
    		<div class="card-header">Sample Product</div>
    		<div class="card-body">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Reviews</h3>
    				</div>
    				<div class="col-sm-4">
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>

                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                            
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>
    				<div class="col-sm-4 text-center">
    					<h3 class="mt-4 mb-3">Write Review Here</h3>
    					<button type="button" name="add_review" id="add_review" class="btn btn-primary">Review</button>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
    </div>
</body>
</html>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>


<?php include 'footer.php' ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function(){

   
    var rating_data = 0;

$('#add_review').click(function(){

    $('#review_modal').modal('show');

});

$(document).on('mouseenter', '.submit_star', function(){

    var rating = $(this).data('rating');

    reset_background();

    for(var count = 1; count <= rating; count++)
    {

        $('#submit_star_'+count).addClass('text-warning');

    }

});

function reset_background()
{
    for(var count = 1; count <= 5; count++)
    {

        $('#submit_star_'+count).addClass('star-light');

        $('#submit_star_'+count).removeClass('text-warning');

    }
}

$(document).on('mouseleave', '.submit_star', function(){

    reset_background();

    for(var count = 1; count <= rating_data; count++)
    {

        $('#submit_star_'+count).removeClass('star-light');

        $('#submit_star_'+count).addClass('text-warning');
    }

});

$(document).on('click', '.submit_star', function(){

    rating_data = $(this).data('rating');

});

$('#save_review').click(function(){

    var user_name = $('#user_name').val();

    var user_review = $('#user_review').val();

    if(user_name == '' || user_review == '')
    {
        alert("Please Fill Both Field");
        return false;
    }
    else
    {
        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
            success:function(data)
            {
                $('#review_modal').modal('hide');

                load_rating_data();

                alert(data);
            }
        })
    }
});

load_rating_data();

function load_rating_data()
    {
        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{action:'load_data'},
            dataType:"JSON",
            success:function(data)
          {
            $('#average_rating').text(data.average_rating);
            $('#total_review').text(data.total_review);

            var count_star = 0;

            $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3">';

                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                        html += '<div class="col-sm-11">';

                        html += '<div class="card">';

                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';

                        html += data.review_data[count].user_review;

                        html += '</div>';

                        html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }



          }
        })
      }


});


  </script>
</body>

</html>

