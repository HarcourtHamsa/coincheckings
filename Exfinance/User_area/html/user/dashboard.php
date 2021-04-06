<?php include 'code.php'; ?>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Home</h4>
                            
                    </div>
                    <div class="col-7 align-self-center">

                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Info Boxes -->
                <!-- ============================================================== -->
                 <div class="row">
                    <!-- balance card -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card" style="background-color: gold">
                            <div class="card-body">
                                 <div class="" >
                                     <span class="small_header text-white">Your Balance:</span>
                                     <h2 class="text-white">$<?php echo $balance; ?></h2>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <!-- Invested card -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card bg-cyan">
                            <div class="card-body">
                                  <div class="">
                                      <span class="small_header text-white">Amount Invested:</span>
                                      <h2 class="text-white">$<?php echo $invested; ?></h2>
                                  </div>
                            </div>
                        </div>
                    </div>
                    <!-- crypto -->
                    <div class="col-sm-12 col-lg-4">
                        <div class="card" style="background-color: green">
                            <div class="card-body">
                              <div class="">
                                  <span class="small_header text-white"><?php echo $currency; ?> Balance:</span>
                                  <h2 class="text-white">$<?php echo $btc; ?></h2>   
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div>
                    <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div id="tradingview_a65a5"></div>
  <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/NASDAQ-AAPL/" rel="noopener" target="_blank"><span class="blue-text">AAPL Chart</span></a> by TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
  <script type="text/javascript">
  new TradingView.widget(
  {
  "width": 960,
  "height": 500,
  "symbol": "NASDAQ:AAPL",
  "interval": "D",
  "timezone": "Etc/UTC",
  "theme": "light",
  "style": "1",
  "locale": "en",
  "toolbar_bg": "#f1f3f6",
  "enable_publishing": false,
  "allow_symbol_change": true,
  "container_id": "tradingview_a65a5"
}
  );
  </script>
</div>
<!-- TradingView Widget END -->
                </div>
                <!-- ============================================================== -->
                <!-- Sales Summery -->
                <!-- ============================================================== -->
               <!--<div style="height:560px; background-color: #FFFFFF; overflow:hidden; box-sizing: border-box; border: 1px solid #56667F; border-radius: 4px; text-align: right; line-height:14px; font-size: 12px; font-feature-settings: normal; text-size-adjust: 100%; box-shadow: inset 0 -20px 0 0 #56667F;padding:1px;padding: 0px; margin: 0px; width: 100%;"><div style="height:540px; padding:0px; margin:0px; width: 100%;"><iframe src="https://widget.coinlib.io/widget?type=chart&theme=light&coin_id=859&pref_coin_id=1505" width="100%" height="536px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;line-height:14px;"></iframe></div><div style="color: #FFFFFF; line-height: 14px; font-weight: 400; font-size: 11px; box-sizing: border-box; padding: 2px 6px; width: 100%; font-family: Verdana, Tahoma, Arial, sans-serif;"><a href="https://coinlib.io" target="_blank" style="font-weight: 500; color: #FFFFFF; text-decoration:none; font-size:11px">Cryptocurrency Prices</a>&nbsp;by Coinlib</div></div>-->
                <!-- ============================================================== -->
                <!-- place order / Exchange -->
                <!-- ============================================================== -->

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Coincheckings .
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- customizer Panel -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script data-cfasync="false" src="../../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script>
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="../../dist/js/app.min.js"></script>
    <!-- Theme settings -->
    <script src="../../dist/js/app.init.js"></script>
    <script src="../../dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/feather.min.js"></script>
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--Morris JavaScript -->
    <script src="../../assets/libs/raphael/raphael.min.js"></script>
    <script src="../../assets/libs/morris.js/morris.min.js"></script>
    <script src="../../assets/extra-libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../../dist/js/pages/dashboards/dashboard3.js"></script>
    <script>
        $(function () {
            $('#cc-table').DataTable({});
        });
    </script>
   <!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
</body>

<!-- Mirrored from www.wrappixel.com/demos/admin-templates/xtreme-admin/html/ltr/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 21 May 2020 17:38:29 GMT -->

</html>