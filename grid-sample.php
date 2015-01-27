<?php
    $page = "grid-sample";
    
    include ('site-head.php') ?>
    
    
    <section id="content" class="content">
        <div class="container">
                
            <!-- Grid sample... Start with the container (above) and now add a col-row-->
            <div class="default-col typography">
                <h2 class="not-column">Default (asymmetric) Group</h2>
                <article class="column" role="main"><div class="column--content"><h3>Main Article</h3></div></article>
                <aside class="column" role="complementary"><div class="column--content"><h3>Complementary Aside</h3></div></aside>
            </div>
            
            <div class="default-col typography">
                <h2 class="not-column">Default (asymmetric) Group option</h2>
                <article class="column pull-right" role="main"><div class="column--content"><h3>Main Article, first in markup, with <code>.pull-right</code></h3></div></article>
                <aside class="column" role="complementary"><div class="column--content"><h3>Complementary Aside</h3></div></aside>
            </div>
            
            <div class="two-col typography">
                <h2 class="not-column">Two-column Group</h2>
                <div class="column"><div class="column--content"><h3>Column 1 of 2</h3></div></div>
                <div class="column"><div class="column--content"><h3>Column 2 of 2</h3></div></div>
            </div>
            
            <div class="three-col typography">
                <h2 class="not-column">Three-column Group</h2>
                <div class="column"><div class="column--content"><h3>Column 1 of 3</h3></div></div>
                <div class="column"><div class="column--content"><h3>Column 2 of 3</h3></div></div>
                <div class="column"><div class="column--content"><h3>Column 3 of 3</h3></div></div>
            </div>
            
            <div class="four-col typography">
                <h2 class="not-column">Four-column Group</h2>
                <div class="column"><div class="column--content"><h3>Column 1 of 4</h3></div></div>
                <div class="column"><div class="column--content"><h3>Column 2 of 4</h3></div></div>
                <div class="column"><div class="column--content"><h3>Column 3 of 4</h3></div></div>
                <div class="column"><div class="column--content"><h3>Column 4 of 4</h3></div></div>
            </div>
            
            <div class="six-col typography">
                <h2 class="not-column">Six-column Group</h2>
                <div class="column"><div class="column--content"><h4>Column 1 of 6</h4></div></div>
                <div class="column"><div class="column--content"><h4>Column 2 of 6</h4></div></div>
                <div class="column"><div class="column--content"><h4>Column 3 of 6</h4></div></div>
                <div class="column"><div class="column--content"><h4>Column 4 of 6</h4></div></div>
                <div class="column"><div class="column--content"><h4>Column 5 of 6</h4></div></div>
                <div class="column"><div class="column--content"><h4>Column 6 of 6</h4></div></div>
            </div>
        		
        </div><!-- end .container -->
    </section><!-- end #content .content -->


<?php include ('site-foot.php') ?>