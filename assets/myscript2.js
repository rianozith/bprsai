$('#jnspmbiayaan').on('change', function() {
              if ( this.value == 'mudhorobah')
              {
                $("#bagihasil1").show();
                $("#bagihasil2").show();
              }
              else
              {
                $("#bagihasil1").hide();
                $("#bagihasil2").hide();
              }
            });
            $('#nilaibiaya').priceFormat({
                prefix: '',
                centsLimit: 0,
                thousandsSeparator: '.'
            });
            $('#hrgperolehan').priceFormat({
                prefix: '',
                centsLimit: 0,
                thousandsSeparator: '.'
            });
            $('#biayaadmin').priceFormat({
                prefix: '',
                centsLimit: 0,
                thousandsSeparator: '.'
            });
            $('#biayatagih').priceFormat({
                prefix: '',
                centsLimit: 0,
                thousandsSeparator: '.'
            });
            $('#angsuranmarginakhir').priceFormat({
                prefix: '',
                centsLimit: 0,
                thousandsSeparator: '.'
            });
            $('#angsuranpokokakhir').priceFormat({
                prefix: '',
                centsLimit: 0,
                thousandsSeparator: '.'
            });
            $('#angsuranmargin').priceFormat({
                prefix: '',
                centsLimit: 0,
                thousandsSeparator: '.'
            });
            $('#angsuranpokok').priceFormat({
                prefix: '',
                centsLimit: 0,
                thousandsSeparator: '.'
            });
            $('#marginbank').priceFormat({
                prefix: '',
                centsLimit: 0,
                thousandsSeparator: '.'
            });
            $('#totalkewajiban').priceFormat({
                prefix: '',
                centsLimit: 0,
                thousandsSeparator: '.'
            });
            $('#nilaiagunan').priceFormat({
                prefix: '',
                centsLimit: 0,
                thousandsSeparator: '.'
            });
            $('#njop').priceFormat({
                prefix: '',
                centsLimit: 0,
                thousandsSeparator: '.'
            });
            
            $('#agunan').on('change', function() {
              if ( this.value == 'Tanah dan Bangunan')
              {
                $("#njop1").show();
                

              }
              else
              {
                $("#njop1").hide();
              }
            });
            $('#agunan').on('change', function() {
              if ( this.value == 'Kendaraan Bermotor')
              {
                // $("#ikat1").html("<option value='fidusia' >FIDUSIA</option>");
                $("#ikat1").hide();
              }
              else
              {
                $("#ikat1").html("<option value='skjnotariil'>SKJ Notariil</option><option value='skmth'>SKMTH</option><option value='apht'>APHT</option><option value='fiducia'>FIDUCIA</option><option value='lain lain'>Lain - Lain</option>");
              }
            });
            $(function() {                                       // <== Doc Ready
              $("#nilaibiaya").keyup(function() {                  // ketika diketik
              $('#hrgperolehan').val(this.value);               // copy ke input berbeda
            });
              
            

            

});