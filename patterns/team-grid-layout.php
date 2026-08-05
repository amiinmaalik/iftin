<?php
/**
 * Title: Team Grid Layout
 * Slug: iftin/team-grid-layout
 * Description: Team section showcasing core members with profile images, names and roles.
 * Categories: iftin-team, iftin-heroes
 * Keywords: team, members, company, founders
 * Viewport Width: 1500
 * Inserter: true
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:40px;padding-bottom:40px"><!-- wp:heading {"style":{"typography":{"textAlign":"center"}}} -->
<h2 class="wp-block-heading has-text-align-center">Meet The Silent Warriors</h2>
<!-- /wp:heading -->

<!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"50px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:50px"><!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"width":"400px","sizeSlug":"medium","linkDestination":"none","align":"center","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}}} -->
<figure class="wp-block-image aligncenter size-medium is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/team-ceo.webp' ) ); ?>" alt="Amiin Maalik, CEO and Core Architect" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;width:400px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"textAlign":"center"}}} -->
<h3 class="wp-block-heading has-text-align-center">Amiin Maalik</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center">CEO &amp; Core Architect</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"width":"400px","sizeSlug":"medium","linkDestination":"none","align":"center","style":{"border":{"radius":{"topLeft":"20px","topRight":"20px","bottomLeft":"20px","bottomRight":"20px"}}}} -->
<figure class="wp-block-image aligncenter size-medium is-resized has-custom-border"><img src="<?php echo esc_url( get_theme_file_uri( '/assets/images/team-cto.webp' ) ); ?>" alt="ONKOD Engine, Lead Cloud Engineer" style="border-top-left-radius:20px;border-top-right-radius:20px;border-bottom-left-radius:20px;border-bottom-right-radius:20px;width:400px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"style":{"typography":{"textAlign":"center"}}} -->
<h3 class="wp-block-heading has-text-align-center">ONKOD Engine</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"typography":{"textAlign":"center"}}} -->
<p class="has-text-align-center">Lead Cloud Engineer</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->