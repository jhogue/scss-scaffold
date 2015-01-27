<?php
    $page = "forms";
    
    include ('site-head.php') ?>
    
    <section id="content" class="content">
        <div class="container">
                
            <article class="content--main" role="main" style="width: 40em; margin: 0 auto;">


                <form class="form">
                    <fieldset>
                        <legend class="form--legend">Form Legend</legend>
                        <p class="form--input-group">
                            <label for="">A Label</label>
                            <input class="form--input" type="text" placeholder="Text input" value="">
                        </p>
                        <p class="form--input-group">
                            <label for="">Search input</label>
                            <input class="form--input" type="search" placeholder="Text input for search" value="">
                        </p>
                        <p class="form--input-group">
                            <label for="">Email input</label>
                            <input class="form--input" type="email" placeholder="Text input for email" value="">
                        </p>
                        <p class="form--input-group">
                            <label for="">Telephone input</label>
                            <input class="form--input" type="tel" placeholder="Text input for telephone" value="">
                        </p>
                        <p class="form--input-group">
                            <label for="">URL input</label>
                            <input class="form--input" type="url" placeholder="Text input for URL" value="">
                        </p>
                        <p class="form--input-group">
                            <label for="">Number input</label>
                             <input class="form--input form--input--number" type="number" min="0" max="10" step="1" value="0">
                        </p>
                        <p class="form--input-group">
                            <label for="">Range input</label>
                             <input class="form--input form--input--range" type="range" min="0" max="10" step="1" value="0">
                        </p>
                    </fieldset>
                    <fieldset>
                        <legend class="form--legend">Required fields</legend>
                        <p class="form--input-group">
                            <label for="">A Label</label>
                            <input class="form--input" type="text" placeholder="Text input" value="" required>
                        </p>
                        <p class="form--input-group">
                            <label for="">Search input</label>
                            <input class="form--input" type="search" placeholder="Text input for search" value="" required>
                        </p>
                        <p class="form--input-group">
                            <label for="">Email input</label>
                            <input class="form--input" type="email" placeholder="Text input for email" value="" required>
                        </p>
                        <p class="form--input-group">
                            <label for="">Telephone input</label>
                            <input class="form--input" type="tel" placeholder="Text input for telephone" value="" required>
                        </p>
                        <p class="form--input-group">
                            <label for="">URL input</label>
                            <input class="form--input" type="url" placeholder="Text input for URL" value="" required>
                        </p>
                    </fieldset>
                    <p class="form--submit-group">
                        <input class="primary-action" type="submit" value="Submit (primary)"> 
                        <input class="secondary-action" type="reset" value="Clear form"> 
                        <input class="primary-action" type="button" value="Input Button (primary)"> 
                        <button class="secondary-action" value="Go">Button (secondary)</button>
                    </p>
                </form>
            
            
            </article>
        </div><!-- end .container -->
    </section><!-- end #content .content -->

<?php include ('site-foot.php') ?>