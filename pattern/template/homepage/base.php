<div class="u-wrapper">
<?php printPattern('component/header/base'); ?>
<?php printPattern('component/banner/base'); ?>
<?php printPattern('component/search-bar/base'); ?>

<section>
    <div class="u-container">
        <div class="grid g-gutter-lg">
            <div class="g-col-sm-6 g-col-md-3">
                <?php printPattern('component/card/bordered'); ?>
            </div>
            <div class="g-col-sm-6 g-col-md-3">
                <?php printPattern('component/card/bordered'); ?>
            </div>
            <div class="g-col-sm-6 g-col-md-3">
                <?php printPattern('component/card/bordered'); ?>
            </div>
            <div class="g-col-sm-6 g-col-md-3">
                <?php printPattern('component/card/bordered'); ?>
            </div>
        </div>
        
        <div class="grid g-gutter-lg">
            <div class="g-col-xs-12 g-col-md-8">
                <?php printPattern('utility/ratio/16x9'); ?>
            </div>
            <div class="g-col-xs-12 g-col-md-4">
                <?php printPattern('base/blockquote/base'); ?>
                <a href="#" class="btn btn--buff btn--gradient btn--sm">Read more</a>
            </div>
        </div>
    </div>
    
</section>

<section class="u-fill-neutral-lightest u-clearfix">
    <div class="u-container u-section-xs">
        
        <div class="grid g-gutter-lg">
            <div class="g-col-md-4">
                
                <div class="card card--bordered">
                    <div class="card__header">
                        <h3>Top 5 questions being asked</h3>
                    </div>
                    <div class="card__body">
                        <ul class="u-list-unstyled">
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit erat a ornare tincidunt?</a></li>
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit erat a ornare tincidunt?</a></li>
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit erat a ornare tincidunt?</a></li>
                            <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit erat a ornare tincidunt?</a></li>
                        </ul>
                    </div>
                    <div class="card__footer">
                        <a href="#" class="btn btn--buff btn--gradient">View all holiday questions</a>
                    </div>
                </div>
                
            </div>
            <div class="g-col-md-4">
                
                <div class="card card--bordered">
                    <div class="card__header">
                        <h3>Featured park</h3>
                    </div>
                    <div class="card__body">
                        <img src="//placehold.it/768x300" alt="Featured Park" />
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut suscipit erat a ornare tincidunt?</p>
                    </div>
                    <div class="card__footer">
                        <a href="#" class="btn btn--buff btn--gradient">View all holiday questions</a>
                    </div>
                </div>
                
            </div>
            <div class="g-col-md-4">
                
                <div class="card card--bordered">
                    <div class="card__header">
                        <h3>Upcoming availability</h3>
                    </div>
                    <div class="card__footer">
                        items
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</section>

<?php printPattern('component/footer/base'); ?>
</div>