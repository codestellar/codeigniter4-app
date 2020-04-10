
<div class="row">
    
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <h2><?= esc($title); ?></h2>

        <?= \Config\Services::validation()->listErrors(); ?>

        <form action="/news/create" method="post" class="form-group">

            <label for="title">Title</label>
            <input type="input" class="form-control" name="title" /><br />

            <label for="body">Text</label>
            <textarea name="body" class="form-control"></textarea><br />

            <input type="submit" class="btn btn-primary" name="submit" value="Create news item" />

        </form>        

    </div>
    
</div>

