<div class="content-wrapper">
    <section class="content-header">
        <h1>Edit Status Pasien</h1>
    </section>
    <section class="content">
        <form action="<?= base_url('pasien/update_status/'.$pasien['idpasien']); ?>" method="post">
        <div class="form-group">
        <label for="dokter">Dokter Spesialis</label>
        <select class="form-control" name="dokter" required>
            <?php foreach ($dokter_pasien as $d): ?>
                <option value="<?= $d->dokter; ?>" <?= $d->dokter == $pasien->dokter ? 'selected' : ''; ?>>
                    <?= $d->dokter; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="<?= base_url('pasien'); ?>" class="btn btn-secondary">Batal</a>
        </form>
    </section>
</div>
