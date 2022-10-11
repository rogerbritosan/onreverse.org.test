    <?php
    wp_footer();
    ?>
    <footer class="footer">

        <div class="container-xl">
            <div class="row">
                <div class="col">
                    <p class="copyright"><?php echo get_bloginfo('name'); ?></p>
                    <?php
                    dynamic_sidebar('footer-1');
                    ?>
                </div>
            </div>
        </div>

    </footer>

    </body>

    </html>