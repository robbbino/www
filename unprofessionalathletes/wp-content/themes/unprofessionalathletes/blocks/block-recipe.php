	
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
	?>
<div class="recipe-content">
	<h3><?php block_field( 'title' ); ?></h3>
	<p class="servings"><?php block_field( 'servings' ); ?></p>
	<p><?php block_field( 'summary' ); ?></p>
	<p class="prep-time"><?php block_field( 'preparation-time' ); ?></p>
	<p><?php block_field( 'cooking-time' ); ?></p>
	<div class="ingredients-list">
		<h4>Ingredients</h4>
		<p>Just for testing purposes</p>
		<?php block_field( 'ingredients' ); ?>
	</div>
		<div class="instructions">
		<h4>Instructions</h4>
		<?php block_field( 'instructions' ); ?>
	</div>
</div>