 <?php include 'header.php'; ?>

    <section class="py-5 bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">String Word Count</div>
                        <div class="card-body">
                            <form action="action.php" method="POST">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label bg-info">your string</label>
                                    <div class="col-md-9">
                                        <input type="text" name="string" value="<?php echo isset($result['string']) ?  $result['string']: ' '; ?>" class="form-control" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label bg-danger">Total word</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo isset($result['word']) ? $result['word']:' '; ?>" />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label bg-secondary">Total Character</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" value="<?php echo isset($result['character']) ?  $result['character']: ' '; ?>" />
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-9">
                                        <input type="submit" name="btn" class="btn btn-outline-success" value="submit" />
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   <?php include 'footer.php'; ?>
