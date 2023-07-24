<?php
/**
 * Template Name: States List
 * Template Post Type: page
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <div class="container">
            <h1>List of US States and Territories:</h1>
            <ul>
                <?php
                $states_and_territories = fetch_states_and_territories();
                if ($states_and_territories) {
                    foreach ($states_and_territories as $state) {
                        echo '<li>' . $state['fields']['name'] . '</li>';
                    }
                } else {
                    echo '<li>Unable to fetch data. Please try again later.</li>';
                }
                ?>
            </ul>
        </div>
    </main>
</div>

<?php
get_footer();
?>
