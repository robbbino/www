    <script type="application/ld+json">
	
	<!-- Set up all block fields as variable and error check them before adding them to the schema. -->
    {
      "@context": "https://schema.org/",
      "@type": "Recipe",
      "name": "<?php block_field( 'title' ); ?>",
      "image": [
        "<?php block_field( 'image' ); ?>"
      ],
      "author": {
        "@type": "Organization",
        "name": "<?php block_field( 'author' ); ?>"
      },
      "datePublished": "<?php echo get_the_date( 'Y-m-d' ); ?>",
      "description": "This coffee cake is awesome and perfect for parties.",
      "prepTime": "PT20M",
      "cookTime": "PT30M",
      "totalTime": "PT50M",
      "keywords": "cake for a party, coffee",
      "recipeYield": "10",
      "recipeCategory": "Dessert",
      "recipeCuisine": "American",
      "nutrition": {
        "@type": "NutritionInformation",
        "calories": "270 calories"
      },
      "recipeIngredient": [
        "2 cups of flour",
        "3/4 cup white sugar",
        "2 teaspoons baking powder",
        "1/2 teaspoon salt",
        "1/2 cup butter",
        "2 eggs",
        "3/4 cup milk"
        ],
      "recipeInstructions": [
        {
          "@type": "HowToStep",
          "name": "Preheat",
          "text": "Preheat the oven to 350 degrees F. Grease and flour a 9x9 inch pan.",
          "url": "https://example.com/party-coffee-cake#step1",
          "image": "https://example.com/photos/party-coffee-cake/step1.jpg"
        },
        {
          "@type": "HowToStep",
          "name": "Mix dry ingredients",
          "text": "In a large bowl, combine flour, sugar, baking powder, and salt.",
          "url": "https://example.com/party-coffee-cake#step2",
          "image": "https://example.com/photos/party-coffee-cake/step2.jpg"
        },
        {
          "@type": "HowToStep",
          "name": "Add wet ingredients",
          "text": "Mix in the butter, eggs, and milk.",
          "url": "https://example.com/party-coffee-cake#step3",
          "image": "https://example.com/photos/party-coffee-cake/step3.jpg"
        },
        {
          "@type": "HowToStep",
          "name": "Spread into pan",
          "text": "Spread into the prepared pan.",
          "url": "https://example.com/party-coffee-cake#step4",
          "image": "https://example.com/photos/party-coffee-cake/step4.jpg"
        },
        {
          "@type": "HowToStep",
          "name": "Bake",
          "text": "Bake for 30 to 35 minutes, or until firm.",
          "url": "https://example.com/party-coffee-cake#step5",
          "image": "https://example.com/photos/party-coffee-cake/step5.jpg"
        },
        {
          "@type": "HowToStep",
          "name": "Enjoy",
          "text": "Allow to cool and enjoy.",
          "url": "https://example.com/party-coffee-cake#step6",
          "image": "https://example.com/photos/party-coffee-cake/step6.jpg"
        }
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "5",
        "ratingCount": "18"
      },
      "video": {
        "@type": "VideoObject",
        "name": "How to make a Party Coffee Cake",
        "description": "This is how you make a Party Coffee Cake.",
        "thumbnailUrl": [
          "https://example.com/photos/1x1/photo.jpg",
          "https://example.com/photos/4x3/photo.jpg",
          "https://example.com/photos/16x9/photo.jpg"
         ],
        "contentUrl": "http://www.example.com/video123.mp4",
        "embedUrl": "http://www.example.com/videoplayer?video=123",
        "uploadDate": "2018-02-05T08:00:00+08:00",
        "duration": "PT1M33S",
        "interactionStatistic": {
          "@type": "InteractionCounter",
          "interactionType": { "@type": "http://schema.org/WatchAction" },
          "userInteractionCount": 2347
        },
        "expires": "2019-02-05T08:00:00+08:00"
      }
    }
    </script>
<div class="recipe-content">
	<h3><?php block_field( 'title' ); ?></h3>
	<p class="servings"><?php block_field( 'servings' ); ?></p>
	<p><?php block_field( 'summary' ); ?></p>
	<p class="prep-time"><?php block_field( 'preparation-time' ); ?></p>
	<p><?php block_field( 'cooking-time' ); ?></p>
	<div class="ingredients-list">
		<h4>Ingredients</h4>
		<?php block_field( 'ingredients' ); ?>
	</div>
</div>