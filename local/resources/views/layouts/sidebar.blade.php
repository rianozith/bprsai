                
                    <ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
                        <li <?php echoActiveClassIfRequestMatches("home")?>>
                            <a href="home"><i class="icon-chevron-right"></i> Dashboard</a>
                        </li>
                        <li <?php echoActiveClassIfRequestMatches("mup")?>>
                            <a href="mup"><i class="icon-chevron-right"></i> Mup</a>
                        </li>
                        <li <?php echoActiveClassIfRequestMatches("analisa_kuantitatif")?>>
                            <a href="analisa_kuantitatif"><i class="icon-chevron-right"></i> Analisa Kuantitatif</a>
                        </li>
                        <li <?php echoActiveClassIfRequestMatches("")?>>
                            <a href="#"><i class="icon-chevron-right"></i> Aspek Hukum dan Manajemen</a>
                        </li>
                        <li <?php echoActiveClassIfRequestMatches("")?>>
                            <a href="#"><i class="icon-chevron-right"></i> Aspek Penjualan</a>
                        </li>
                        <li <?php echoActiveClassIfRequestMatches("")?>>
                            <a href="#"><i class="icon-chevron-right"></i> Aspek Pembelian</a>
                        </li>
                        <li <?php echoActiveClassIfRequestMatches("")?>>
                            <a href="#"><i class="icon-chevron-right"></i> Aspek Jaminan</a>
                        </li>
                        <li <?php echoActiveClassIfRequestMatches("")?>>
                            <a href="#"><i class="icon-chevron-right"></i> Penjelasan Lain</a>
                        </li>
                        <li <?php echoActiveClassIfRequestMatches("")?>>
                            <a href="#"><i class="icon-chevron-right"></i> Permasalahan</a>
                        </li>
                        <li <?php echoActiveClassIfRequestMatches("")?>>
                            <a href="#"><i class="icon-chevron-right"></i> Kebutuhan Piutang</a>
                        </li>
                        <li <?php echoActiveClassIfRequestMatches("")?>>
                            <a href="#"><i class="icon-chevron-right"></i> Analisa Usaha Nasabah</a>
                        </li>
                        <li <?php echoActiveClassIfRequestMatches("")?>>
                            <a href="#"><i class="icon-chevron-right"></i> Analisa Resiko</a>
                        </li>
                        <li <?php echoActiveClassIfRequestMatches("")?>>
                            <a href="#"><i class="icon-chevron-right"></i> Rekomendasi dan Usulan</a>
                        </li>
                        <li <?php echoActiveClassIfRequestMatches("")?>>
                            <a href="#"><i class="icon-chevron-right"></i> Tanggapan Anggota Panitia</a>
                        </li>
                        <li <?php echoActiveClassIfRequestMatches("")?>>
                            <a href="#"><i class="icon-chevron-right"></i> Proyeksi Bagi Hasil</a>
                        </li>
                        <li <?php echoActiveClassIfRequestMatches("")?>>
                            <a href="#"><i class="icon-chevron-right"></i> Cetak MUP</a>
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