 <script type="text/javascript">

</script>
<?php
wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/js/custom_script.js', array( 'jquery' ));
?>
<script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "Recipe",
      "name": "<?php block_field( 'title' ) ?>",
      "image": [
        "<?php block_field( 'image' ) ?>"
      ],
      "author": {
        "@type": "Organization",
        "name": "Unprofessional Athletes"
      },
      "datePublished": "<?php echo get_the_date( 'Y-m-d' ); ?>",
      "description": "<?php block_field( 'summary' ) ?>",
      "prepTime": "<?php block_field( 'prep-time' ) ?>",
      "cookTime": "<?php block_field( 'cook-time' ) ?>",
      "totalTime": "<?php block_field( 'total-time' ) ?>",
      "keywords": "<?php block_field( 'keywords' ) ?>",
      "recipeYield": "<?php block_field( 'servings' ) ?>",
      "recipeCategory": "<?php block_field( 'category' ) ?>",
      "recipeCuisine": "<?php block_field( 'cuisine' ) ?>",
      "recipeIngredient": [
        "<?php structuredIngredientsList() ?>",
        ],
      "recipeInstructions": [
        <?php recipeInstructions() ?>
      ],
    }
    </script>
<style>
.recipe-content {
	width: 100% !important;
}
#cooking-time {
	background: #005500;
	display:flex;
	justify-content:center;
	min-height: 10rem;
}

#cooking-time * {
	color: #FFFFFF;
}

#cooking-time h5 {
	margin: 0 0 1rem;
	text-align: center;
}

#cooking-time p {
	font-size: 2rem;
	margin: 0;
}

.time-container {
	display:flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
}

.icon-container {
	display: flex;
	align-items: center;
	justify-content: center;
}

.time-container {
	margin: 2rem;
}


#description, .section {
	width: calc(100% - 8rem);
	margin: auto;
	padding: 5rem 0;
}

#recipe-in-page-nav {
	position: sticky;
	top: 0;
	margin: 0;
	display: flex;
	align-items: center;
	justify-content: center;
	background-color: #FFF;
	border: 2px solid #005500;
}

#recipe-in-page-nav li {
	list-style-type: none;
	margin: 0;
	width: 50%;
	display: flex;
	align-items: center;
	justify-content: center;
}


#recipe-in-page-nav a {
	display:flex;
	justify-content:center;
	align-items: center;
	text-decoration: none;
	font-size: 2rem;
	line-height: 3.5;
	color: #005500;
	width: 100%;
}

.active {
	background-color: #005500;
	color: #FFF !important;
}

#ingredients {
	background-color: #005500;
	width: 100%;
	color: #FFF;
}

.ingredients-list {
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	width: calc(100% - 8rem);
	margin: auto;
}

#ingredients h3, #directions h3 {
	text-align: center;
}

#directions h3 {
	color: #005500;
}

#ingredients p {
	display: list-item;
	list-style-type: disc;
	margin-left: 3.5rem;
	margin-bottom: 1rem;
	flex: calc(50% - 3.5rem);
	align-items: center;
	justify-content: center;
	font-size: 1.6rem;
	line-height: 1.2;
}

#directions p {
	display: list-item;
	list-style-type: decimal;
	margin-left: 2.5rem;
	padding-left: 2rem;
	margin-bottom: 3rem;
	
}

</style>
	

<div class="recipe-content">
	<div id="cooking-time">
		<figure class="icon-container">
			<img src="/wp-content/uploads/2020/04/time-icon.png" alt="Time icon">
		</figure>
		<div class="time-container">
			<h5>Preparation</h5>
			<p><?php block_field( 'prep-time' ); ?> min</p>
		</div>
		<div class="time-container">
			<h5>Cooking</h5>
			<p><?php block_field( 'cook-time' ); ?> min</p>
		</div>
	</div>
	
	<div id="description">
		<p><?php block_field( 'description' ); ?></p>
	</div>
	
	<ul id="recipe-in-page-nav">
		<li><a href="#ingredients" class="active">Ingredients</a></li>
		<li><a href="#directions">Directions</a></li>
	</ul>
	
	<div id="ingredients" class="section">
		<h3>Ingredients</h3>
		<div class="ingredients-list">
		<?php block_field( 'ingredients' ); ?>
		</div>
	</div>
	
	<div id="directions" class="section">
		<h3>Directions</h3>
		<?php block_field( 'instructions' ); ?>
	</div>
</div>

