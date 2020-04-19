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

.featured-media {
	display:none;
}
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
	width: 100%;
	background-color: #efefef;
	color: #005500;
}

.ingredients-list {
	display: flex;
	flex-wrap: wrap;
	align-items: center;
	width: 40rem;
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

/* Desktop */
@media (min-width: 1220px) {
	.recipe-content {
		position: relative;
		display: flex;
		flex-wrap: wrap;
		align-content: space-between;
		margin-top: 4rem;
	}
	#recipe-image {
		width: 45rem;
		height: 45rem;
	}
	
	#recipe-image img {
		width: 100%;
		height: 100%;
		object-fit: cover;
	}
	
	#cooking-time {
		position: absolute;
		right: 0;
		display:block;
		padding-top:2rem;
		width: 17rem;
		border-radius: 0 0 0 5rem;
	}
	
	#description {
		width: 75rem;
		margin: 0;
		padding: 0 20rem 2rem 5rem;
	}
	
	#recipe-in-page-nav {
		display: none;
	}
	
	#ingredients {
		position: absolute;
		top: 45rem;
		left:0;
		width:45rem;
		border-radius: 0 0 5rem 5rem;
	}
	
	#ingredients h3, #directions h3 {
		text-align: left;
		margin-left: 3.5rem;
	}
	
	.ingredients-list {
		display: block;
	}
	
	#ingredients p {
		font-size: 2rem;
		line-height: 2;
	}
	
	#directions {
		width: 60%;
		margin-left: 45rem;
	}
	
	#directions h3 {
		margin-left: 4.5rem;
	}
	
	.section {
		margin: 0;
		padding: 0 5rem 5rem;
	}
	
}


</style>
	

<div class="recipe-content">
	<div id="recipe-image">
	<img src="<?php block_field( 'image' ); ?>" />
	</div>
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

