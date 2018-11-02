<!-- ######################     Main Navigation   ########################## -->
<nav>
    <ol>
        <?php
        // This sets a class for current page so you can style it differently
        
        print '<li ';
        if ($PATH_PARTS['filename'] == 'lab4') {
            print ' class="activePage" ';
        }
        print '><a href="index.php">Home Lab4</a></li>';
        
        print '<li ';
        if ($PATH_PARTS['filename'] == 'sitemap') {
            print ' class="activePage" ';
        }
        print '><a href="../sitemap.php">Sitemap</a></li>';
       
        print '<li ';
        if ($PATH_PARTS['filename'] == 'sampleQuery2') {
            print ' class="activePage" ';
        }
        print '><a href="sampleQuery2.php">Sample INSERT</a></li>';
        
        print '<li ';
        if ($PATH_PARTS['filename'] == 'sampleQuery3') {
            print ' class="activePage" ';
        }
        print '><a href="sampleQuery3.php">Sample SELECT (with ORDER clause)</a></li>';
        
        print '<li ';
        if ($PATH_PARTS['filename'] == 'sampleQuery4') {
            print ' class="activePage" ';
        }
        print '><a href="sampleQuery4.php">Sample test (fails)</a></li>';
        
        print '<li ';
        if ($PATH_PARTS['filename'] == 'tables') {
            print ' class="activePage" ';
        }
        print '><a href="tables.php">Tables</a></li>';

        ?>
    </ol>
</nav>
<!-- #################### Ends Main Navigation    ########################## -->

