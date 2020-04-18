	
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

	

<div class="recipe-content">
	<div id="cooking-time">
		<img src="C:\Users\robin\OneDrive\Digital Spider\Unprofessional Athletes\Recipes\Mock-up\Icon ionic-md-time@2x.png" alt="Time icon">
		<h5>Preparation time</h5>
		<p><?php block_field( 'prep-time' ); ?></p>
		<h5>Cooking time</h5>
		<p><?php block_field( 'cook-time' ); ?></p>
	</div>
	
	<p><?php block_field( 'description' ); ?></p>
	
	<ul>
		<li>Ingredients</li>
		<li>Directions</li>
	</ul>
	
	<div id="ingredienst-list">
		<h3>Ingredients</h3>
		<?php block_field( 'ingredients' ); ?>
	</div>
	
	<div id="directions-list">
		<h3>Directions</h3>
		<?php block_field( 'instructions' ); ?>
	</div>
</div>