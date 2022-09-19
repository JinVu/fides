<?php include 'view/admin_header.php'; ?>

<div class="d-flex justify-content-center">
    <div class="col-md-auto">
        <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header text-center bg-dark text-white"> <h3 class="text-center font-weight-light my-4" style="color:white;">Neuigkeiten verfassen</h3></div>
            <div class="card-body">

                <form method="POST">
                    <input type="text" name="title" class="form-control mb-3" placeholder="Überschrift">
                <div class="col-md-12" style="margin:auto; float:none;">
                    <div class="form-group text-center">
                        <textarea name="content" id="editor" class="form-control" style="height:500px;"></textarea>
                        <script>
                            ClassicEditor
                                .create(document.querySelector('#editor'))
                                .catch(error => {
                                    console.error(error);
                                });

                            CKEDITOR.replace( 'editor1', {
                                width :1000,
                                height: 700
                            });

                        </script>
                    </div>
                    </form>
            </div>
            </div>

        </div>
    </div>
</div>

<?php include 'view/footer.php'; ?>
