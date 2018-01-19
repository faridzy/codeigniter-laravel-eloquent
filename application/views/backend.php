<div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class='col-md-12'>
                    <div class="box box-primary">
                        <div class="box-header">
                            <h3 class="box-title">
                                Test
                            </h3>
                        </div>
                        <div id="main-content" class="box-body">
                            <?php echo date('Y-m-d H:i:s') ?>
                            <?php var_dump($this->session->userdata('activeUser')) ?>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>