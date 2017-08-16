                
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">                        
                        <li <?php echoActiveClassIfRequestMatches("indexcalonasabah")?>>
                            <a href="#" data-toggle="modal" data-target="#myModal"><i class="icon-chevron-right"></i> Data Calon Nasabah</a>
                            <!-- Modal -->
                            <div id="myModal" class="modal fade" role="dialog">
                              <div class="modal-dialog ">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Calon Nasabah</h4>
                                  </div>

                                  <div class="modal-body" style="text-align:center">
                                    <div class="span6 batas-left" >
                                        <a class="btn btn-success tengah" role="button" href="{{url('pembiayaan/indexnasabah')}}" title="">Cari Nasabah</a>
                                    </div>
                                    <div class="span6" style="text-align:center">
                                        <a class="btn btn-success tengah" role="button" href="{{url('pembiayaan/createnasabah')}}" title="">Buat Nasabah Baru</a>
                                    </div>
                                  </div>

                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                  </div>
                                </div>

                              </div>
                            </div>
                            <!-- end modal -->
                            
                        </li>
                        <li <?php echoActiveClassIfRequestMatches("indexpembiayaan")?>>
                            <a href="{{ url('pembiayaan/indexpembiayaan') }}"><i class="icon-chevron-right"></i>Index Pembiayaan</a>
                        </li>
                        <li <?php echoActiveClassIfRequestMatches("akad_pembiayaan")?>>
                            <a href="{{ url('/akad_pembiayaan') }}"><i class="icon-chevron-right"></i> Akad Pembiayaan</a>
                        </li>
                    </ul>


                
<?php 
function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI']);

    if ($current_file_name == $requestUri)
        echo 'class="active"';
}
?>