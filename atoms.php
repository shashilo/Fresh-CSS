<?php include 'public/_inc/_header.inc.php'; ?>
<?php include 'public/_inc/_nav.inc.php'; ?>

    <main class="main col-xs-12 col-sm-10 offset-sm-2 col-md-11 offset-md-1">
        <section class="intro">
            <h1>ATOMS</h1>
            <p>These are all the individual elements a website usually uses.</p>
        </section>

        <section id="grid">
            <h2>Grid</h2>
            <p>Bootstrap includes a responsive, mobile first fluid grid system that appropriately scales up to 12 columns as the device or viewport size increases. It includes predefined classes for easy layout options, as well as powerful mixins for generating more semantic layouts.</p>

            <h3>12 Column Grid</h3>
            <?php include 'public/_inc/atoms/_grid.inc.php'; ?>

            <div class="source-code">
                <a class="btn btn-primary" href="#">View Source</a>
                <pre class="prettyprint lang-html linenums"><?php echo htmlspecialchars(file_get_contents('public/_inc/atoms/_grid.inc.php')); ?></pre>
            </div>
        </section>
        
        <?php include 'public/_inc/atoms/_buttons.inc.php'; ?>
        <?php include 'public/_inc/atoms/_tabular-data.inc.php'; ?>

    </main>

<?php include 'public/_inc/_footer.inc.php'; ?>
