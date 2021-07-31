<?php

include('includes/header.php'); ?>
<?php include('includes/sidebar.php'); ?>
<?php include('includes/tutorials.php'); ?>
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-secondary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>
<div class="container-fluid">
    <div class="row welcome text-center">
        <div class="col-12">
            <h2 class="display-4">Built with ease.</h2>
        </div>
        <hr>
        <div class="col-12">
            <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit dolorem quidem minus ab quod nostrum, minima repellendus velit illum. Vero praesentium nihil a accusamus quas facere necessitatibus dignissimos, earum architecto!</p>
        </div>
    </div>

    <div class="content-section">
            <div class="section" id="<?php echo $section['section_id']; ?>">
            <div class="section-head">
                <h2 class="display-4"><?php echo $section['section_head']; ?></h2>
                <span class="byline"><?php echo $section['byline']; ?></span>
            </div>
            
            <?php foreach( $posts as $post){ ?>
            <article class="post-expert">
                <section class="post-head"><h3 id="<?php echo $post['post_id'] ?>"><?php echo $post['post_head']; ?></h3></section>
                <section class="post-content"><?php echo $post['post_content']; ?></section>
                <section class="post-footer"><hr></section>
            </article>
            <?php } ?>
        </div>
    </div>
</div>


<?php include('includes/footer.php'); ?>