<?php
    $page = "readme";
    
    include ('site-head.php') ?>
    
    
    <main id="content" class="content" role="main">
        <div class="container">
                
            <section class="content--main">
                <article class="typography" style="width: 40em; margin: 0 auto;">


<h1>SCSS Scaffold</h1>

<p>Compass-based SCSS starter package for new projects. Here are the important files and the structure. To view these samples in a browser, visit <a href="//scaffold.highchairdesign.com">http://scaffold.highchairdesign.com</a></p>

<h2>/config.rb</h2>
<p>These are the configuration variables for Compass. If you want to move folders around, change these settings. </p>

<h2>/fonts/</h2>
<p>Store font files here. Start with the IcoMoon starter package and edit as needed. To create a new library of icons, go to <a href="//icomoon.io/app/">icomoon.io/app/</a></p>

<h2>/img/</h2>
<p>Duh, <em>put dem images in deer</em>. </p>

<h2>/js/</h2>
<p>We try to load as few files as possible. This is the way I do it: </p>

<ul>
    <li><code>libs/</code> Has an external libraries that we need. I keep a backup of jQuery here when CDN jQuery does not connect. I also keep Modernizr here. </li>
    <li><code>plugins.js</code> Minify as many of the libraries and plugins that the project needs and put it here. </li>
    <li><code>site.js</code> Initiate any modules in this file. </li>
</ul>

<p>In <code>site-header.php</code> we call for <code>/js/libs/modernizr.js</code>. That's the only time we call for JS in the head.</p>

<p>In <code>site-footer.php</code> we call for jQuery via CDN. Then there is a backup script to load it locally. Finally, we load in <code>plugins.js</code> and <code>site.js</code>. </p>

<h2>/sass/</h2>
The meat of the scaffold. I break it down into the following: 

<h4>Folders</h4>
<ul>
    <li><code>/sass/design/</code> The design files for your project. I break these down into components of the basic templates, including a project mixins and extends file. </li>
    <li><code>/sass/framework/</code> The set up for the project – configuration for compass, resets, debug, and functions and mixins that we want to keep consistent from project to project. </li>
    <li><code>/sass/libraries/</code> External libraries that we want to customize but keep separate from our design. </li>
    <li><code>/sass/project/</code> Project-specific variables and our basic grid structure. </li>
    <li><code>/sass/templates/</code> Template specific files if needed. These should be more specific than anything in <code>/design/</code>. </li>
</ul>

<h4>Files</h4>
<ul>
    <li><code>/sass/_manifest.scss/</code> This file calls all of our other files and gets built by <code>mq</code> and <code>no-mq</code>. </li>
    <li><code>/sass/mce.scss/</code> If needed, a stylesheet for sites that use an admin WYSIWYG editor. This one is configured for TinyMCE but any can be supported. Shared styles from <code>_typography.scss</code> keep things in sync. </li>
    <li><code>/sass/mq.scss/</code> This file imports <code>manifest</code> and spits it out unencumbered. </li>
    <li><code>/sass/no-mq.scss/</code> This file imports <code>manifest</code> but changes two things: <code>$mq-support: false;</code> so no <code>@media</code> rules get passed through, just the contents that we allow, and <code>$old-ie: true;</code> so anything that uses the <code>oldIE()</code> mixin gets output here. </li>
</ul>

<p>In this way, modern browsers get our full set of styles, but older browsers can still be supported – even targeted specifically, so IE8 hacks don't show up in our modern CSS. </p>


<h2>Template parts</h2>
<p>Less of a focus of this scaffold, best practices are here for the header, footer, and a few internal components. Also, some sample files for HTML elements, forms, and the simple grid system. </p>

<ul>
    <li><code>index.php</code> Great set of sample HTML elements. Nearly everything is here. </li>
    <li><code>site-head.php</code> Best practice <code>&lt;head&gt;</code> set up. </li>
    <li><code>site-foot.php</code> Best practice <code>&lt;footer&gt;</code> set up. </li>
    <li><code>fixed-col.php</code> Sample markup of a fixed width column next to a fluid width column. </li>
    <li><code>forms.php</code> A sample form complete with many new HTML5 elements to consider. </li>
    <li><code>humans.txt</code> Site credit file. More at <a href="//humanstxt.org/">humanstxt.org/</a> </li>
    <li><code>robots.txt</code> File for robots. More at <a href="//www.robotstxt.org/">www.robotstxt.org/</a> </li>
</ul>

<h1>A note about the BEM Structure</h1>
<p>To make writing markup easier, this scaffold employs a simple Block Element Modifier structure. Everyone has their own style, but here is how this one works: </p>

<h4>Markup a simple widget:</h4>
<pre><code>&lt;div class=&quot;widget widget__subnav&quot;&gt;
        &lt;h3 class=&quot;widget--title&quot;&gt;About Us&lt;/h3&gt;
        &lt;ul class=&quot;widget--list&quot;&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;widget--link widget--link__disabled&quot;&gt;Our Mission&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href=&quot;#&quot; class=&quot;widget--link&quot;&gt;Our History&lt;/a&gt;&lt;/li&gt;
        &lt;/ul&gt;
    &lt;/div&gt;
</code></pre>

And then our SCSS can be written like this: 

<pre><code>.widget {
    [styles for block]
    
    &--title { [styles for h3] }
    
    &--list { 
        [styles for ul] 
        
        li { [no matter if it is a UL or OL, it has a set of LIs] }
    }
    
    &--link { 
        [styles for link] 
        
        &:hover, 
        &:focus {}
        
        &__disabled { // will compile to .widget--link__disabled for a "selected" looking link
            cursor: default; // make it look unclickable
        }
    }
    
    // Overrides
    &__subnav {} // In case we need to be more specific
}
</code></pre>

<p>This shows how we structure the class names. First, we name the block <code>widget</code>. Everything else gets based on that. We add a modifier in case we need to apply styles specifically to this widget and use underscores to denote it as an override – <code>widget__subnav</code>. </p>

<p>Then, each element inside gets named in a generic way – title, list, link, etc... With the proper block name, all of these generic classes are now more specific, but can easily be repeated as much as needed (just change the block name and you have a new set of titles, lists, and links). </p>

<p>Double hyphens denote nesting, and can go as deep as needed (like <code>.widget--link--icon</code>, for instance). Underscores denote a specific block (the widget subnav block, not the generic widget block) or a change in state (<code>__disabled</code> or <code>__active</code>). </p>

<pre><code>.block {
    
    &--element {
        
        &--element {}
        
        &__modifier {}
    }
    
    &__modifier {} // Overrides just .block when needed
    
    &__modifier &--element {} // Overrides .block--element when needed
}
</code></pre>

<p>Would compile to: </p>

<pre><code>.block {}
.block--element {}
.block--element--element {}
.block--element__modifier {}
.block__modifier {}
.block__modifier .block--element {}
</code></pre>

<h3>Happy coding. </h3>


                </article>
    		</section><!-- end .content--main -->
        		
        </div><!-- end .container -->
    </main><!-- end #content .content -->


<?php include ('site-foot.php') ?>