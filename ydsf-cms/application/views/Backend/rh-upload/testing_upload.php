
                  <form action="<?php echo site_url('upload/testing_upload') ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="control-label">Pembuat</label>
                                <input type="text" name="name">
                            </div>
                            <div class="col-sm-4">
                                <div>
                                      <label class="control-label">Jam</label>
                                  <input type="file" name="userfile" class="form-control">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        <button type="submit" class="btn btn-success">submit</button>
                </form>