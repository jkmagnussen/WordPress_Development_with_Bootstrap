<footer>
    <div class="footer-calltoaction text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2 overflow-hidden">
                    <p class="sub-title">Join the course</p>
                    <h2>Bootstrap to WordPress 2.0</h2>
                    <p>Learn how to design and build custom, beautiful & responsive WordPress websites and themes
                        for beginners in 2021 and beyond!</p>
                    <a href="#" class="btn btn-primary">Join now -&gt;</a>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright text-center">
        <p><?php echo wp_kses_post(get_theme_mod('footer_copyright', 'Footer Example JKMagnussen.')); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>