// $('#tombol').click(function(){
//               var nilai = $('#nilaibiayainteger').val();
//               document.getElementById("terbilangx").value=nilai;
//               terbilang(nilai);
//             });

// function angkaasli() {
//               var angka = $("#nilaibiaya").val();
//               var number = Number( angka.replace(/[^0-9]+/g,""));
//               $('#nilaibiayainteger').val(number);
//             }

$("#nilaibiaya").on("change keyup keydown keypress paste click ", function(){
    var angka = $("#nilaibiaya").val();
    var number = Number( angka.replace(/[^0-9]+/g,""));
    $('#nilaibiayainteger').val(number);
    var nilai = $('#nilaibiayainteger').val();
    var test = terbilang(nilai);
    document.getElementById("nilaibiayaterbilang").value=test + " Rupiah";
    document.getElementById("nilaibiayaterbilang1").innerHTML=test + " Rupiah";
});

$("#marginbank").on("change keyup keydown keypress paste click ", function(){
    var angka = $("#marginbank").val();
    var number = Number( angka.replace(/[^0-9]+/g,""));
    $('#marginbankinteger').val(number);
    var nilai = $('#marginbankinteger').val();
    var x = terbilang(nilai);    
    document.getElementById("marginbankterbilang").value=x + " Rupiah";
    document.getElementById("marginbankterbilang1").innerHTML=x + " Rupiah";
});

$("#angsuranpokok").on("change keyup keydown keypress paste click ", function(){
    var angka = $("#angsuranpokok").val();
    var number = Number( angka.replace(/[^0-9]+/g,""));
    $('#angsuranpokokinteger').val(number);
    var nilai = $('#angsuranpokokinteger').val();
    var x = terbilang(nilai);    
    document.getElementById("angsuranpokokterbilang").value=x + " Rupiah";
    document.getElementById("angsuranpokokterbilang1").innerHTML=x + " Rupiah";
});

$("#angsuranmargin").on("change keyup keydown keypress paste click ", function(){
    var angka = $("#angsuranmargin").val();
    var number = Number( angka.replace(/[^0-9]+/g,""));
    $('#angsuranmargininteger').val(number);
    var nilai = $('#angsuranmargininteger').val();
    var x = terbilang(nilai);    
    document.getElementById("angsuranmarginterbilang").value=x + " Rupiah";
    document.getElementById("angsuranmarginterbilang1").innerHTML=x + " Rupiah";
});

$("#jtpokok").on("click", function(){
          var a = parseInt($('#nilaibiayainteger').val());
          var b = parseInt($('#angsuranpokokinteger').val());
          var c = parseInt($('#jangkawaktu').val());  
          jatuhtempo = a - (b* (c-1));
          $('#angsuranpokokakhir').val(jatuhtempo);
    var angka = $("#angsuranpokokakhir").val();
    var number = Number( angka.replace(/[^0-9]+/g,""));
    $('#angsuranpokokakhirinteger').val(number);
    var nilai = $('#angsuranpokokakhirinteger').val();
    var x = terbilang(nilai);    
        $('#angsuranpokokakhir').priceFormat({
            prefix: '',
            centsLimit: 0,
            allowNegative: true,
            thousandsSeparator: '.'
        });

    document.getElementById("angsuranpokokakhirterbilang").value=x + " Rupiah";
    document.getElementById("angsuranpokokakhirterbilang1").innerHTML=x + " Rupiah";
});

$("#jtmargin").on("click", function(){
          var a = parseInt($('#marginbankinteger').val());
          var b = parseInt($('#angsuranmargininteger').val());
          var c = parseInt($('#jangkawaktu').val());  
          jatuhtempo = a - (b* (c-1));
          $('#angsuranmarginakhir').val(jatuhtempo);
    var angka = $("#angsuranmarginakhir").val();
    var number = Number( angka.replace(/[^0-9]+/g,""));
    $('#angsuranmarginakhirinteger').val(number);
    var nilai = $('#angsuranmarginakhirinteger').val();
    var x = terbilang(nilai);    
        $('#angsuranmarginakhir').priceFormat({
            prefix: '',
            centsLimit: 0,
            allowNegative: true,
            thousandsSeparator: '.'
        });
    document.getElementById("angsuranmarginakhirterbilang").value=x + " Rupiah";
    document.getElementById("angsuranmarginakhirterbilang1").innerHTML=x + " Rupiah";
        
});

$("#biayatagih").on("change keyup keydown keypress paste click ", function(){
    var angka = $("#biayatagih").val();
    var number = Number( angka.replace(/[^0-9]+/g,""));
    $('#biayatagihinteger').val(number);
    var nilai = $('#biayatagihinteger').val();
    var x = terbilang(nilai);    
    document.getElementById("biayatagihterbilang").value=x + " Rupiah";
    document.getElementById("biayatagihterbilang1").innerHTML=x + " Rupiah";
});

$("#biayaadmin").on("change keyup keydown keypress paste click ", function(){
    var angka = $("#biayaadmin").val();
    var number = Number( angka.replace(/[^0-9]+/g,""));
    $('#biayaadmininteger').val(number);
    var nilai = $('#biayaadmininteger').val();
    var x = terbilang(nilai);    
    document.getElementById("biayaadminterbilang").value=x + " Rupiah";
    document.getElementById("biayaadminterbilang1").innerHTML=x + " Rupiah";
});

$("#totalwajib").on("click", function(){
          var a = parseInt($('#nilaibiayainteger').val());
          var b = parseInt($('#marginbankinteger').val());
          total = a + b;
          $('#totalkewajiban').val(total);
    var angka = $("#totalkewajiban").val();
    var number = Number( angka.replace(/[^0-9]+/g,""));
    $('#totalkewajibaninteger').val(number);
    var nilai = $('#totalkewajibaninteger').val();
    var x = terbilang(nilai);    
        $('#totalkewajiban').priceFormat({
            prefix: '',
            centsLimit: 0,
            allowNegative: true,
            thousandsSeparator: '.'
        });
    document.getElementById("totalkewajibanterbilang").value=x + " Rupiah";
    document.getElementById("totalkewajibanterbilang1").innerHTML=x + " Rupiah";
        
});

$("#nilaiagunan").on("change keyup keydown keypress paste click ", function(){
    var angka = $("#nilaiagunan").val();
    var number = Number( angka.replace(/[^0-9]+/g,""));
    $('#nilaiagunaninteger').val(number);
    var nilai = $('#nilaiagunaninteger').val();
    var x = terbilang(nilai);    
    document.getElementById("nilaiagunanterbilang").value=x + " Rupiah";
    document.getElementById("nilaiagunanterbilang1").innerHTML=x + " Rupiah";
});

$("#njop").on("change keyup keydown keypress paste click ", function(){
    var angka = $("#njop").val();
    var number = Number( angka.replace(/[^0-9]+/g,""));
    $('#njopinteger').val(number);
    var nilai = $('#njopinteger').val();
    var x = terbilang(nilai);    
    document.getElementById("njopterbilang").value=x + " Rupiah";
    document.getElementById("njopterbilang1").innerHTML=x + " Rupiah";
});

$("#perolehan").on("click", function(){
    $('#hrgperolehan').val($('#nilaibiaya').val());
    var angka = $("#hrgperolehan").val();
    var number = Number( angka.replace(/[^0-9]+/g,""));
    $('#hrgperolehaninteger').val(number);
    var nilai = $('#hrgperolehaninteger').val();
    var x = terbilang(nilai);    
    document.getElementById("hrgperolehanterbilang").value=x + " Rupiah";
    document.getElementById("hrgperolehanterbilang1").innerHTML=x + " Rupiah";
});



function terbilang(nilai){
var bilangan=nilai;
var kalimat="";
var angka   = new Array('0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0');
var kata    = new Array('','Satu','Dua','Tiga','Empat','Lima','Enam','Tujuh','Delapan','Sembilan');
var tingkat = new Array('','Ribu','Juta','Milyar','Triliun');
var panjang_bilangan = bilangan.length;
         
        /* pengujian panjang bilangan */
        if(panjang_bilangan > 15){
            kalimat = "Diluar Batas";
        }else{
            /* mengambil angka-angka yang ada dalam bilangan, dimasukkan ke dalam array */
            for(i = 1; i <= panjang_bilangan; i++) {
                angka[i] = bilangan.substr(-(i),1);
            }
             
            var i = 1;
            var j = 0;
             
            /* mulai proses iterasi terhadap array angka */
            while(i <= panjang_bilangan){
                subkalimat = "";
                kata1 = "";
                kata2 = "";
                kata3 = "";
                 
                /* untuk Ratusan */
                if(angka[i+2] != "0"){
                    if(angka[i+2] == "1"){
                        kata1 = "Seratus";
                    }else{
                        kata1 = kata[angka[i+2]] + " Ratus";
                    }
                }
                 
                /* untuk Puluhan atau Belasan */
                if(angka[i+1] != "0"){
                    if(angka[i+1] == "1"){
                        if(angka[i] == "0"){
                            kata2 = "Sepuluh";
                        }else if(angka[i] == "1"){
                            kata2 = "Sebelas";
                        }else{
                            kata2 = kata[angka[i]] + " Belas";
                        }
                    }else{
                        kata2 = kata[angka[i+1]] + " Puluh";
                    }
                }
                 
                /* untuk Satuan */
                if (angka[i] != "0"){
                    if (angka[i+1] != "1"){
                        kata3 = kata[angka[i]];
                    }
                }
                 
                /* pengujian angka apakah tidak nol semua, lalu ditambahkan tingkat */
                if ((angka[i] != "0") || (angka[i+1] != "0") || (angka[i+2] != "0")){
                    subkalimat = kata1+" "+kata2+" "+kata3+" "+tingkat[j]+" ";
                }
                 
                /* gabungkan variabe sub kalimat (untuk Satu blok 3 angka) ke variabel kalimat */
                kalimat = subkalimat + kalimat;
                i = i + 3;
                j = j + 1;
            }
             
            /* mengganti Satu Ribu jadi Seribu jika diperlukan */
            if ((angka[5] == "0") && (angka[6] == "0")){
                kalimat = kalimat.replace("Satu Ribu","Seribu");
            }
        }
        // document.getElementById("terbilang").innerHTML=kalimat + " Rupiah";
        return kalimat;
    }