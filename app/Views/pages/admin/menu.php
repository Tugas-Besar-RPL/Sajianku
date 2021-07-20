<?= $this->extend('layout/admin'); ?>

<?= $this->section('content'); ?>

<!-- Main Content -->
<div class="content-heading">
    <h5>Menus</h5>
</div>
<div class="card">
    <div class="card-header d-flex flex-row align-items-center">
        <h6 class="m-0 text-custom">Menu List</h6>
        <button class="btn btn-custom ms-auto px-4" data-bs-toggle="modal" data-bs-target="#modalAdd">Add Menu</button>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-hover table-responsive">
            <thead>
                <tr class="text-center">
                    <th scope="col">NO</th>
                    <th scope="col">Kode Menu</th>
                    <th scope="col">Nama Menu</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row" class="text-center">1</td>
                    <td>10226</td>
                    <td>Grilled Cheese</td>
                    <td>Rp. 55000</td>
                    <td>
                        <h6><span class="badge bg-success py-2 px-2 w-100">Tersedia</span></h6>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-custom"><i class="far fa-eye"></i></button>
                        <button type="button" class="btn btn-success"><i class="far fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">2</td>
                    <td>10227</td>
                    <td>Youghurt Susu Kambing</td>
                    <td>Rp. 15000</td>
                    <td>
                        <h6><span class="badge bg-success py-2 px-2 w-100">Tersedia</span></h6>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-custom"><i class="far fa-eye"></i></button>
                        <button type="button" class="btn btn-success"><i class="far fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">3</td>
                    <td>10228</td>
                    <td>Sosis Bakar Biryani</td>
                    <td>Rp. 18000</td>
                    <td>
                        <h6><span class="badge bg-success py-2 px-2 w-100">Tersedia</span></h6>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-custom"><i class="far fa-eye"></i></button>
                        <button type="button" class="btn btn-success"><i class="far fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">4</td>
                    <td>10229</td>
                    <td>Ayam Goreng</td>
                    <td>Rp. 20000</td>
                    <td>
                        <h6><span class="badge bg-danger py-2 px-2 w-100">Tidak Tersedia</span></h6>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-custom"><i class="far fa-eye"></i></button>
                        <button type="button" class="btn btn-success"><i class="far fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">5</td>
                    <td>10230</td>
                    <td>Bir Pletok</td>
                    <td>Rp. 15000</td>
                    <td>
                        <h6><span class="badge bg-danger py-2 px-2 w-100">Tidak Tersedia</span></h6>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-custom"><i class="far fa-eye"></i></button>
                        <button type="button" class="btn btn-success"><i class="far fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">2</td>
                    <td>10231</td>
                    <td>Nasi Goreng</td>
                    <td>Rp. 28000</td>
                    <td>
                        <h6><span class="badge bg-success py-2 px-2 w-100">Tersedia</span></h6>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-custom"><i class="far fa-eye"></i></button>
                        <button type="button" class="btn btn-success"><i class="far fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">2</td>
                    <td>10231</td>
                    <td>Nasi Goreng</td>
                    <td>Rp. 28000</td>
                    <td>
                        <h6><span class="badge bg-success py-2 px-2 w-100">Tersedia</span></h6>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-custom"><i class="far fa-eye"></i></button>
                        <button type="button" class="btn btn-success"><i class="far fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
                <tr>
                    <td scope="row" class="text-center">2</td>
                    <td>10231</td>
                    <td>Nasi Goreng</td>
                    <td>Rp. 28000</td>
                    <td>
                        <h6><span class="badge bg-success py-2 px-2 w-100">Tersedia</span></h6>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-custom"><i class="far fa-eye"></i></button>
                        <button type="button" class="btn btn-success"><i class="far fa-edit"></i></button>
                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?= $this->endSection(); ?>