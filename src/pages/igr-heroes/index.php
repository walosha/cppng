<?php
    include_once PAGE_PARTIALS_PATH . DS . 'header.php';
?>


</div>
<div class="row">
    <div class="col-12">
        <div class="page-title-box">            
            <h4 class="page-title">REVENUE CHAMPIONS</h4>
        </div>
    </div>
</div>     
<!-- end page title --> 

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="row justify-content-between">
                    <div class="col-md-8">
                        <form class="d-flex flex-wrap align-items-center">
                            <label class="form-label">Previous Month</label>
                            <div class="me-sm-3">
                                <select class="form-control my-1 my-md-0" id="hero_month">
                                    <option>Select</option>
                                    <option value="january">January</option>
                                    <option value="february">Febuary</option>
                                    <option value="march">March</option>
                                    <option>April</option>
                                    <option>May</option>
                                    <option>June</option>
                                    <option>July</option>
                                    <option>August</option>
                                    <option>September</option>
                                    <option>October</option>
                                    <option>November</option>
                                    <option>December</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <div class="text-md-end mt-3 mt-md-0">
                            <!-- <button type="button" class="btn btn-success waves-effect waves-light me-1"><i class="mdi mdi-cog"></i></button> -->
                            <a href="/igr-heroes" class="btn btn-primary waves-effect waves-light me-1"><i class="mdi mdi-users me-1"></i> MDA Rewards</a>
                            <a href="/igr-heroes/individual" class="btn btn-info waves-effect waves-light me-1"><i class="mdi mdi-users me-1"></i> Individual Rewards</a>
                        </div>
                    </div><!-- end col-->
                </div> <!-- end row -->
            </div>
        </div> <!-- end card -->
    </div><!-- end col-->
</div>


<div class="row">
    <div class="col-xl-12">
        <div class="card-box">
            
            <h4 class="header-title mb-3">PLATEAU STATE REVENUE CHAMPIONS</h4>

            <div class="table-responsive">
                <table class="table table-borderless table-hover table-nowrap table-centered m-0" id="januray">

                    <thead class="thead-light">
                        <tr>
                            <th class="font-weight-medium">S/N</th>
                            <th class="font-weight-medium">MDA</th>
                            <th class="font-weight-medium">Reward Disbursed</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-soft-success">
                            <td style="width: 36px;">1</td>
                            <td><h5 class="m-0 font-weight-normal">PLATEAU STATE MUSLIM PILGRIMS WELFARE</h5></td>    
                            <td> 3 Cars</td>
                        </tr>

                        <tr class="bg-soft-success">
                            <td style="width: 36px;">2</td>
                            <td><h5 class="m-0 font-weight-normal">PLATEAU STATE AUDIT DEPARTMENT</h5></td>
                            <td>2 Cars</td>                            
                        </tr>
                        <tr class="bg-soft-success">
                            <td style="width: 36px;">3</td>
                            <td><h5 class="m-0 font-weight-normal">KABONG MARKET</h5></td>
                            <td>1 Car</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-borderless table-hover table-nowrap table-centered m-0" id="february">

                    <thead class="thead-light">
                        <tr>
                            <th class="font-weight-medium">S/N</th>
                            <th class="font-weight-medium">MDA</th>
                            <th class="font-weight-medium">Reward Disbursed</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-soft-success">
                            <td style="width: 36px;">1</td>
                            <td><h5 class="m-0 font-weight-normal">KABONG MARKET</h5></td>    
                            <td> 3 Cars</td>
                        </tr>

                        <tr class="bg-soft-success">
                            <td style="width: 36px;">2</td>
                            <td><h5 class="m-0 font-weight-normal">PLATEAU STATE AUDIT DEPARTMENT</h5></td>
                            <td>2 Cars</td>                            
                        </tr>
                        <tr class="bg-soft-success">
                            <td style="width: 36px;">3</td>
                            <td><h5 class="m-0 font-weight-normal">PLATEAU STATE MUSLIM PILGRIMS WELFARE</h5></td>
                            <td>1 Car</td>
                        </tr>
                    </tbody>
                </table>

                <table class="table table-borderless table-hover table-nowrap table-centered m-0" id="march">

                    <thead class="thead-light">
                        <tr>
                            <th class="font-weight-medium">S/N</th>
                            <th class="font-weight-medium">MDA</th>
                            <th class="font-weight-medium">Reward Disbursed</th>                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-soft-success">
                            <td style="width: 36px;">1</td>
                            <td><h5 class="m-0 font-weight-normal">PLATEAU STATE MUSLIM PILGRIMS WELFARE</h5></td>    
                            <td> 3 Cars</td>
                        </tr>

                        <tr class="bg-soft-success">
                            <td style="width: 36px;">2</td>
                            <td><h5 class="m-0 font-weight-normal">KABONG MARKET</h5></td>
                            <td>2 Cars</td>                            
                        </tr>
                        <tr class="bg-soft-success">
                            <td style="width: 36px;">3</td>
                            <td><h5 class="m-0 font-weight-normal">PLATEAU STATE AUDIT DEPARTMENT</h5></td>
                            <td>1 Car</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#hero_month').on('change', function () {
                let selectedMonth = $(this).children("option:selected").val();

                if(selectedMonth == 'january'){
                    console.log('month', selectedMonth)
                    $('#january').show();
                } else {
                    $('#january').hide();
                }
                
                if(selectedMonth == 'february'){
                    console.log('month', selectedMonth)
                    $('#february').show();
                } else {
                    $('#february').hide();
                }
                
                if(selectedMonth == 'march'){
                    console.log('month', selectedMonth)
                    $('#feb').show();
                } else {
                    $('#feb').hide();
                }
            });
        });
    </script>
<?php
    include_once PAGE_PARTIALS_PATH . DS . 'footer.php';
?>