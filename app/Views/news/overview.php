<div class="row">    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      
        <a type="button" class="btn btn-default" href="create">
            Create News
        </a>        
    </div>    
</div>

<div class="row">    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <h2><?= $title ?></h2>        
    </div>    
</div>


<div class="row">    
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <?php if (! empty($news) && is_array($news)) : ?>

            <?php foreach ($news as $news_item): ?>

                    <h3><?= $news_item['title'] ?></h3>

                    <div class="main">
                            <?= $news_item['body'] ?>
                    </div>
                    <p><a href="<?= '/news/'.$news_item['slug'] ?>">View article</a></p>

            <?php endforeach; ?>

            <?php else : ?>

            <h3>No News</h3>

            <p>Unable to find any news for you.</p>

        <?php endif ?>
    </div>    
</div>





