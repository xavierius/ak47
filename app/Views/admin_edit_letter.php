<?= $this->extend('layout/admin/admin_layout') ?>

<?= $this->section('content') ?>

<form action="" method="post" id="text-editor">
    <input type="hidden" name="id" value="<?= $letter['id'] ?>" />
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" placeholder="letter title" value="<?= $letter['title'] ?>" required>
    </div>
    <div class="form-group">
        <label for="title">alamat</label>
        <input type="text" name="alamat" class="form-control" placeholder="letter title" value="<?= $letter['alamat'] ?>" required>
    </div>
    <div class="form-group">
        <label for="title">no</label>
        <input type="text" name="no" class="form-control" placeholder="letter title" value="<?= $letter['no'] ?>" required>
    </div>
    <div class="form-group">
        <label for="title">perihal</label>
        <input type="text" name="perihal" class="form-control" placeholder="letter title" value="<?= $letter['perihal'] ?>" required>
    </div>
    <div class="form-group">
        <label for="title">lampiran</label>
        <input type="text" name="lampiran" class="form-control" placeholder="letter title" value="<?= $letter['lampiran'] ?>" required>
    </div>
    <div class="form-group">
        <label for="title">content</label>
        <textarea name="content" class="form-control" cols="30" rows="10" placeholder="content"><?= $letter['content'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="title">tanggal</label>
        <input type="text" name="tanggal" class="form-control" placeholder="letter title" value="<?= $letter['tanggal'] ?>" required>
    </div>
    <div class="form-group">
        <label for="title">pengirim</label>
        <input type="text" name="pengirim" class="form-control" placeholder="letter title" value="<?= $letter['pengirim'] ?>" required>
    </div>
    <div class="form-group">
        <label for="title">status</label>
        <input type="text" name="status" class="form-control" placeholder="letter title" value="<?= $letter['status'] ?>" required>
    </div>
    <div class="form-group">
        <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Write a great letter!"><?= $letter['content'] ?></textarea>
    </div>
    <div class="form-group">
        <button type="submit" name="status" value="published" class="btn btn-primary">Publish</button>
        <button type="submit" name="status" value="draft" class="btn btn-secondary">Save to Draft</button>
    </div>
</form>


<?= $this->endSection() ?>