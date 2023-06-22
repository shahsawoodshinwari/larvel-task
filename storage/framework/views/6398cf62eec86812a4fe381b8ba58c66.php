<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="alert alert-warning d-none overflow-alert" role="alert">
                Please scroll horizentally to see the remaining the contents of the excel file.
            </div>
            <div id="excel-container" class="shadow-lg" style="overflow-x: auto;"></div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
<script src="https://unpkg.com/xlsx/dist/xlsx.full.min.js"></script>
<script>
    var url = "<?php echo e($uploadedFile->path); ?>";
    const excelContainer = document.getElementById('excel-container');

    // Load the Excel file using XHR
    var xhr = new XMLHttpRequest();
    xhr.open('GET', url, true);
    xhr.responseType = 'arraybuffer';

    xhr.onload = function(e) {
        if (xhr.status === 200) {
            var data = new Uint8Array(xhr.response);
            var workbook = XLSX.read(data, {
                type: 'array'
            });

            // Get the first sheet of the workbook
            var sheetName = workbook.SheetNames[0];
            var sheet = workbook.Sheets[sheetName];

            // Convert the sheet data to HTML
            var html = XLSX.utils.sheet_to_html(sheet);

            // Render the HTML in the container
            excelContainer.innerHTML = html;
        }
    };

    xhr.onloadend = function(e) {
        excelContainer
            .querySelector('table').classList
            .add('table', 'table-bordered', 'table-striped', 'shadow-sm');
        if (excelContainer.querySelector('table').offsetWidth > excelContainer.offsetWidth) {
            document.querySelector('.overflow-alert').classList.remove('d-none');
        }
    };

    xhr.send();
</script>

<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/laravel-task/resources/views/upload-excel/view.blade.php ENDPATH**/ ?>