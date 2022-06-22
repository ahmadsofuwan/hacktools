<table class="table table-responsive-sm" id="dataTable">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">User Id</th>
            <th scope="col">Rekening</th>
            <th scope="col">Bank</th>
            <th scope="col">Phone</th>
            <th scope="col">Event</th>
            <th scope="col">Promo Event</th>
            <th scope="col" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1;
        foreach ($dataList as $value) { ?>
            <tr>
                <th scope="row"><?php echo $i++ ?></th>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $value['userid'] ?></td>
                <td><?php echo $value['rek'] ?></td>
                <td><?php echo $value['bank'] ?></td>
                <td><?php echo $value['phone'] ?></td>
                <td><?php echo $value['event'] ?></td>
                <td><?php echo $value['game'] ?></td>
                <td style="width: 180px;" class="text-center">
                    <button class="btn btn-danger" name="delete" data='<?php echo $tableName ?>' value="<?php echo $value['pkey'] ?>">Delete</button>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $('tbody').find('[name=delete]').click(function() {
        var pkey = $(this).val();
        var obj = $(this);
        var tbl = obj.attr('data');
        Swal.fire({
            title: 'yakin?',
            text: "Data Akan Di Hapus Secara Permanen",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                        url: '<?= base_url('Admin/ajax') ?>',
                        type: 'POST',
                        data: {
                            action: 'delete',
                            pkey: pkey,
                            tbl: tbl,
                        },
                    })
                    .done(function(a) {
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Berhasil Di Deleted',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        obj.closest('tr').remove();
                        $.each($('tbody').find('tr > th'), function(index, elemt) {
                            $(elemt).html(index + 1)
                        });
                    })
                    .fail(function(a) {
                        console.log("error");
                        console.log(a);
                    })



            }
        })
    })
    $('tbody').find('[name=status]').click(function() {

        var obj = $(this);
        var value = $(obj).val();
        var arrCheckBox = $('tbody').find('input:checkbox');
        $.each(arrCheckBox, function(key, value) {
            $(value).prop('checked', false);
        })


        $.ajax({
                url: '<?= base_url('Admin/ajax') ?>',
                type: 'POST',
                data: {
                    action: 'statusContent',
                    pkey: value
                },
            })
            .done(function() {
                $(obj).prop('checked', true);
                console.log('success');
            })
            .fail(function() {
                console.log('error');
            })



    })
</script>