<script src="<?php echo e(asset('js/tinymce/tinymce.min.js')); ?>" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea#myeditorinstance',
            plugins: 'code table lists',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table',
            height: 300,
            setup: function (editor) {
                editor.on('change', function () {
                    editor.save(); 
                });
            }
        });
    </script><?php /**PATH C:\wamp64\www\blog-management-system-2\resources\views/components/head/tinymce-config.blade.php ENDPATH**/ ?>