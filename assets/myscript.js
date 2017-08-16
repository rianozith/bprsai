$('#jnspmbiayaan').on('change', function() {
              if ( this.value == 'mudhorobah')
              {
                $("#bagihasil1").show("slow");
                $("#bagihasil2").show("slow");
              }
              else
              {
                $("#bagihasil1").hide("slow");
                $("#bagihasilbank").val(0);

                $("#bagihasil2").hide("slow");
                $("#bagihasilnasabah").val(0);
              } 
            });

            $(".del").click(function(){
                if (!confirm("Yakin Untuk Delete?")){
                  return false;
                }else { return true;}
            });

            $('#nilaibiaya, #hrgperolehan, #biayaadmin, #biayatagih, #angsuranmargin, #angsuranpokok, #marginbank, #nilaiagunan, #njop').priceFormat({
                prefix: '',
                centsLimit: 0,
                allowNegative: true,
                thousandsSeparator: '.'
            });
                // $('#hrgperolehan').priceFormat({
                //     prefix: '',
                //     centsLimit: 0,
                //     allowNegative: true,
                //     thousandsSeparator: '.'
                // });
                // $('#biayaadmin').priceFormat({
                //     prefix: '',
                //     centsLimit: 0,
                //     allowNegative: true,
                //     thousandsSeparator: '.'
                // });
                // $('#biayatagih').priceFormat({
                //     prefix: '',
                //     centsLimit: 0,
                //     allowNegative: true,
                //     thousandsSeparator: '.'
                // });
            // $('#angsuranmarginakhir').priceFormat({
            //     prefix: '',
            //     centsLimit: 0,
            //     allowNegative: true,
            //     thousandsSeparator: '.'
            // });
            // $('#angsuranpokokakhir').priceFormat({
            //     prefix: '',
            //     centsLimit: 0,
            //     allowNegative: true,
            //     thousandsSeparator: '.'
            // });
                // $('#angsuranmargin').priceFormat({
                //     prefix: '',
                //     centsLimit: 0,
                //     allowNegative: true,
                //     thousandsSeparator: '.'
                // });
                // $('#angsuranpokok').priceFormat({
                //     prefix: '',
                //     centsLimit: 0,
                //     allowNegative: true,
                //     thousandsSeparator: '.'
                // });
                // $('#marginbank').priceFormat({
                //     prefix: '',
                //     centsLimit: 0,
                //     allowNegative: true,
                //     thousandsSeparator: '.'
                // });
            // $('#totalkewajiban').priceFormat({
            //     prefix: '',
            //     centsLimit: 0,
            //     allowNegative: true,
            //     thousandsSeparator: '.'
            // });
                // $('#nilaiagunan').priceFormat({
                //     prefix: '',
                //     centsLimit: 0,
                //     allowNegative: true,
                //     thousandsSeparator: '.'
                // });
                // $('#njop').priceFormat({
                //     prefix: '',
                //     centsLimit: 0,
                //     allowNegative: true,
                //     thousandsSeparator: '.'
                // });
            
            $('#agunan').on('change', function() {
              if ( this.value == 'Tanah dan Bangunan')
              {
                $("#njop1").show("slow");
                

              }
              else
              {
                $("#njop1").hide("slow");
                $("#njop").val(0);
              }
            });
            
            // $('input[type="radio"]').on('click', function() {
            //    if($("#jaminanradio2").is(':checked'))  {
            //         $('#identitasjaminan1').show();
            //    }

            //    else {
            //         $('#identitasjaminan1').hide();   
            //    }
            // });

            $("#jaminanradio1").click(function () {
                $("#identitasjaminan1").hide("slow");
                $("#jaminannama,#jaminanumur,#jaminanpekerjaan,#jaminanalamat,#jaminanktp").val("");
            });

            $("#jaminanradio2").click(function () {
                $("#identitasjaminan1").show("slow");
            });


            $("#bagihasilbank").on('keyup', function() {
                var x = $('#bagihasilbank').val();
                $('#bagihasilnasabah').val(100-x);
            });

            $("#bagihasilnasabah").on('keyup', function() {
                var x = $('#bagihasilnasabah').val();
                $('#bagihasilbank').val(100-x);
            });

