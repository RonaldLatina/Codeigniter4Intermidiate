<!--MASTER PAGE -->
<?= $this->extend('layout/main') ?>
<!-- CONTENT -->
<?= $this->section('content') ?>
<!-- CONTAINER -->
<h1>Edit New Book</h1>
<form action="<?= base_url() ?>books/update/<?= $books['id'] ?>" method="POST">
    <div class=" mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="text" name="txtTitle" class="form-control" id="txtTitle" value="<?= $books['title'] ?>" placeholder="Enter title of the book">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput2" class="form-label">Author</label>
        <input type="text" name="txtAuthor" class="form-control" id="txtAuthor" value="<?= $books['author'] ?>" placeholder="Enter Author">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput3" class="form-label">Year</label>
        <input type="text" name="txtYear" class="form-control" id="txtYear" value="<?= $books['year'] ?>" placeholder="Enter Year">
    </div>
    <div class="col-12">
        <button class="btn btn-primary" type="submit">Save Book</button>
    </div>
</form>

<?= $this->endSection('content') ?>