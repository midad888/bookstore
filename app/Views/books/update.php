<?= $this->extend('master') ?>
<?= $this->section('pageBody') ?>


<div class="container">
    <div class="col-12">


        <div class="card">
            <form action="<?php echo base_url('book/updateBook') . '/' . base64_encode($book['books_id']);  ?>" method="post">
                <div class="card-content">
                    <div class="card-header">
                        <h5 class="card-title">Edit User</h5>

                    </div>

                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">ISBN </label>
                            <input required type="text" class="form-control" value="<?php echo $book['isbn'];  ?>" name="isbn" placeholder="Isbn No">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Book Name</label>
                            <input required type="text" class="form-control" value="<?php echo $book['book_name'];  ?>" name="name" placeholder="Book name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Category</label>
                            <input required type="text" class="form-control" value="<?php echo $book['category'];  ?>" name="category" placeholder="Category">
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Author</label>
                            <input required type="text" class="form-control" value="<?php echo $book['author'];  ?>"  name="author" placeholder="Auther name">

                        </div>

                    </div>

                    <div class="footer">
                        <div class="row">
                            <div class="col-9">
                            </div>
                            <div class="col-3">
                                <a href="<?php echo base_url('book') ?>" class="btn btn-link link-secondary">
                                    Cancel
                                </a>
                                <button type="submit" class="btn btn-primary ">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <line x1="12" y1="5" x2="12" y2="19" />
                                        <line x1="5" y1="12" x2="19" y2="12" />
                                    </svg>
                                    Update Book
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>

<?= $this->endSection() ?>