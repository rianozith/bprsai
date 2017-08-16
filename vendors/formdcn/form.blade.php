<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Data calon nasabah</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>
<script type="text/javascript" src="calendar.js"></script>
</head>
<body id="main_body" >
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
	
		<h1><a>Data calon nasabah</a></h1>
		<form id="form_1089960" class="appnitro"  method="post" action="">
					<div class="form_description">
			<h2>Data Calon Nasabah</h2>
			<p>Formulir pengisian data calon nasabah BPRS Amanah Insani</p>
		</div>						
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">No REG AO </label>
		<div>
			<input id="element_1" name="element_1" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Nama Komite / AO </label>
		<div>
			<input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Nama Calon Nasabah </label>
		<span>
			<input id="element_3_1" name= "element_3_1" class="element text" maxlength="255" size="8" value=""/>
			<label>First</label>
		</span>
		<span>
			<input id="element_3_2" name= "element_3_2" class="element text" maxlength="255" size="14" value=""/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_7" >
		<label class="description" for="element_7">Tempat lahir </label>
		<div>
			<input id="element_7" name="element_7" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Tanggal lahir </label>
		<span>
			<input id="element_4_1" name="element_4_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_4_1">MM</label>
		</span>
		<span>
			<input id="element_4_2" name="element_4_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_4_2">DD</label>
		</span>
		<span>
	 		<input id="element_4_3" name="element_4_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_4_3">YYYY</label>
		</span>
	
		<span id="calendar_4">
			<img id="cal_img_4" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_4_3",
			baseField    : "element_4",
			displayArea  : "calendar_4",
			button		 : "cal_img_4",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Alamat </label>
		
		<div>
			<input id="element_5_1" name="element_5_1" class="element text large" value="" type="text">
			<label for="element_5_1">Street Address</label>
		</div>
	
		<div>
			<input id="element_5_2" name="element_5_2" class="element text large" value="" type="text">
			<label for="element_5_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="element_5_3" name="element_5_3" class="element text medium" value="" type="text">
			<label for="element_5_3">City</label>
		</div>
	
		<div class="right">
			<input id="element_5_4" name="element_5_4" class="element text medium" value="" type="text">
			<label for="element_5_4">State / Province / Region</label>
		</div>
	
		<div class="left">
			<input id="element_5_5" name="element_5_5" class="element text medium" maxlength="15" value="" type="text">
			<label for="element_5_5">Postal / Zip Code</label>
		</div>
	
		<div class="right">
			<select class="element select medium" id="element_5_6" name="element_5_6"> 
			<option value="" selected="selected"></option>
<option value="Afghanistan" >Afghanistan</option>
<option value="Albania" >Albania</option>
<option value="Algeria" >Algeria</option>
<option value="Andorra" >Andorra</option>
<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
<option value="Argentina" >Argentina</option>
<option value="Armenia" >Armenia</option>
<option value="Australia" >Australia</option>
<option value="Austria" >Austria</option>
<option value="Azerbaijan" >Azerbaijan</option>
<option value="Bahamas" >Bahamas</option>
<option value="Bahrain" >Bahrain</option>
<option value="Bangladesh" >Bangladesh</option>
<option value="Barbados" >Barbados</option>
<option value="Belarus" >Belarus</option>
<option value="Belgium" >Belgium</option>
<option value="Belize" >Belize</option>
<option value="Benin" >Benin</option>
<option value="Bhutan" >Bhutan</option>
<option value="Bolivia" >Bolivia</option>
<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
<option value="Botswana" >Botswana</option>
<option value="Brazil" >Brazil</option>
<option value="Brunei" >Brunei</option>
<option value="Bulgaria" >Bulgaria</option>
<option value="Burkina Faso" >Burkina Faso</option>
<option value="Burundi" >Burundi</option>
<option value="Cambodia" >Cambodia</option>
<option value="Cameroon" >Cameroon</option>
<option value="Canada" >Canada</option>
<option value="Cape Verde" >Cape Verde</option>
<option value="Central African Republic" >Central African Republic</option>
<option value="Chad" >Chad</option>
<option value="Chile" >Chile</option>
<option value="China" >China</option>
<option value="Colombia" >Colombia</option>
<option value="Comoros" >Comoros</option>
<option value="Congo" >Congo</option>
<option value="Cook Islands and Niue" >Cook Islands and Niue</option>
<option value="Costa Rica" >Costa Rica</option>
<option value="Côte d'Ivoire" >Côte d'Ivoire</option>
<option value="Croatia" >Croatia</option>
<option value="Cuba" >Cuba</option>
<option value="Cyprus" >Cyprus</option>
<option value="Czech Republic" >Czech Republic</option>
<option value="Denmark" >Denmark</option>
<option value="Djibouti" >Djibouti</option>
<option value="Dominica" >Dominica</option>
<option value="Dominican Republic" >Dominican Republic</option>
<option value="East Timor" >East Timor</option>
<option value="Ecuador" >Ecuador</option>
<option value="Egypt" >Egypt</option>
<option value="El Salvador" >El Salvador</option>
<option value="Equatorial Guinea" >Equatorial Guinea</option>
<option value="Eritrea" >Eritrea</option>
<option value="Estonia" >Estonia</option>
<option value="Ethiopia" >Ethiopia</option>
<option value="Fiji" >Fiji</option>
<option value="Finland" >Finland</option>
<option value="France" >France</option>
<option value="Gabon" >Gabon</option>
<option value="Gambia" >Gambia</option>
<option value="Georgia" >Georgia</option>
<option value="Germany" >Germany</option>
<option value="Ghana" >Ghana</option>
<option value="Greece" >Greece</option>
<option value="Grenada" >Grenada</option>
<option value="Guatemala" >Guatemala</option>
<option value="Guinea" >Guinea</option>
<option value="Guinea-Bissau" >Guinea-Bissau</option>
<option value="Guyana" >Guyana</option>
<option value="Haiti" >Haiti</option>
<option value="Honduras" >Honduras</option>
<option value="Hong Kong" >Hong Kong</option>
<option value="Hungary" >Hungary</option>
<option value="Iceland" >Iceland</option>
<option value="India" >India</option>
<option value="Indonesia" >Indonesia</option>
<option value="Iran" >Iran</option>
<option value="Iraq" >Iraq</option>
<option value="Ireland" >Ireland</option>
<option value="Israel" >Israel</option>
<option value="Italy" >Italy</option>
<option value="Jamaica" >Jamaica</option>
<option value="Japan" >Japan</option>
<option value="Jordan" >Jordan</option>
<option value="Kazakhstan" >Kazakhstan</option>
<option value="Kenya" >Kenya</option>
<option value="Kiribati" >Kiribati</option>
<option value="North Korea" >North Korea</option>
<option value="South Korea" >South Korea</option>
<option value="Kuwait" >Kuwait</option>
<option value="Kyrgyzstan" >Kyrgyzstan</option>
<option value="Laos" >Laos</option>
<option value="Latvia" >Latvia</option>
<option value="Lebanon" >Lebanon</option>
<option value="Lesotho" >Lesotho</option>
<option value="Liberia" >Liberia</option>
<option value="Libya" >Libya</option>
<option value="Liechtenstein" >Liechtenstein</option>
<option value="Lithuania" >Lithuania</option>
<option value="Luxembourg" >Luxembourg</option>
<option value="Macedonia" >Macedonia</option>
<option value="Madagascar" >Madagascar</option>
<option value="Malawi" >Malawi</option>
<option value="Malaysia" >Malaysia</option>
<option value="Maldives" >Maldives</option>
<option value="Mali" >Mali</option>
<option value="Malta" >Malta</option>
<option value="Marshall Islands" >Marshall Islands</option>
<option value="Mauritania" >Mauritania</option>
<option value="Mauritius" >Mauritius</option>
<option value="Mexico" >Mexico</option>
<option value="Micronesia" >Micronesia</option>
<option value="Moldova" >Moldova</option>
<option value="Monaco" >Monaco</option>
<option value="Mongolia" >Mongolia</option>
<option value="Montenegro" >Montenegro</option>
<option value="Morocco" >Morocco</option>
<option value="Mozambique" >Mozambique</option>
<option value="Myanmar" >Myanmar</option>
<option value="Namibia" >Namibia</option>
<option value="Nauru" >Nauru</option>
<option value="Nepal" >Nepal</option>
<option value="Netherlands" >Netherlands</option>
<option value="New Zealand" >New Zealand</option>
<option value="Nicaragua" >Nicaragua</option>
<option value="Niger" >Niger</option>
<option value="Nigeria" >Nigeria</option>
<option value="Norway" >Norway</option>
<option value="Oman" >Oman</option>
<option value="Pakistan" >Pakistan</option>
<option value="Palau" >Palau</option>
<option value="Panama" >Panama</option>
<option value="Papua New Guinea" >Papua New Guinea</option>
<option value="Paraguay" >Paraguay</option>
<option value="Peru" >Peru</option>
<option value="Philippines" >Philippines</option>
<option value="Poland" >Poland</option>
<option value="Portugal" >Portugal</option>
<option value="Puerto Rico" >Puerto Rico</option>
<option value="Qatar" >Qatar</option>
<option value="Romania" >Romania</option>
<option value="Russia" >Russia</option>
<option value="Rwanda" >Rwanda</option>
<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
<option value="Saint Lucia" >Saint Lucia</option>
<option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
<option value="Samoa" >Samoa</option>
<option value="San Marino" >San Marino</option>
<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
<option value="Saudi Arabia" >Saudi Arabia</option>
<option value="Senegal" >Senegal</option>
<option value="Serbia and Montenegro" >Serbia and Montenegro</option>
<option value="Seychelles" >Seychelles</option>
<option value="Sierra Leone" >Sierra Leone</option>
<option value="Singapore" >Singapore</option>
<option value="Slovakia" >Slovakia</option>
<option value="Slovenia" >Slovenia</option>
<option value="Solomon Islands" >Solomon Islands</option>
<option value="Somalia" >Somalia</option>
<option value="South Africa" >South Africa</option>
<option value="Spain" >Spain</option>
<option value="Sri Lanka" >Sri Lanka</option>
<option value="Sudan" >Sudan</option>
<option value="Suriname" >Suriname</option>
<option value="Swaziland" >Swaziland</option>
<option value="Sweden" >Sweden</option>
<option value="Switzerland" >Switzerland</option>
<option value="Syria" >Syria</option>
<option value="Taiwan" >Taiwan</option>
<option value="Tajikistan" >Tajikistan</option>
<option value="Tanzania" >Tanzania</option>
<option value="Thailand" >Thailand</option>
<option value="Togo" >Togo</option>
<option value="Tonga" >Tonga</option>
<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
<option value="Tunisia" >Tunisia</option>
<option value="Turkey" >Turkey</option>
<option value="Turkmenistan" >Turkmenistan</option>
<option value="Tuvalu" >Tuvalu</option>
<option value="Uganda" >Uganda</option>
<option value="Ukraine" >Ukraine</option>
<option value="United Arab Emirates" >United Arab Emirates</option>
<option value="United Kingdom" >United Kingdom</option>
<option value="United States" >United States</option>
<option value="Uruguay" >Uruguay</option>
<option value="Uzbekistan" >Uzbekistan</option>
<option value="Vanuatu" >Vanuatu</option>
<option value="Vatican City" >Vatican City</option>
<option value="Venezuela" >Venezuela</option>
<option value="Vietnam" >Vietnam</option>
<option value="Yemen" >Yemen</option>
<option value="Zambia" >Zambia</option>
<option value="Zimbabwe" >Zimbabwe</option>
	
			</select>
		<label for="element_5_6">Country</label>
	</div> 
		</li>		<li id="li_44" >
		<label class="description" for="element_44">No telepon </label>
		<span>
			<input id="element_44_1" name="element_44_1" class="element text" size="3" maxlength="3" value="" type="text"> -
			<label for="element_44_1">(###)</label>
		</span>
		<span>
			<input id="element_44_2" name="element_44_2" class="element text" size="3" maxlength="3" value="" type="text"> -
			<label for="element_44_2">###</label>
		</span>
		<span>
	 		<input id="element_44_3" name="element_44_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_44_3">####</label>
		</span>
		 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">No KTP / NPWP </label>
		<div>
			<input id="element_6" name="element_6" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_8" >
		<label class="description" for="element_8">Jumlah Biaya yang diajukan </label>
		<span class="symbol">Rp</span>
		<span>
			<input id="element_8_1" name="element_8_1" class="element text currency" size="10" value="" type="text" /> .		
			<label for="element_8_1"><!-- Dollars --></label>
		</span>
		<span>
			<input id="element_8_2" name="element_8_2" class="element text" size="2" maxlength="2" value="" type="text" />
			<label for="element_8_2"><!-- Cents --></label>
		</span>
		 
		</li>		<li id="li_9" >
		<label class="description" for="element_9">Tujuan Penggunaan </label>
		<div>
			<input id="element_9" name="element_9" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_10" >
		<label class="description" for="element_10">Jangka waktu </label>
		<div>
			<input id="element_10" name="element_10" class="element text small" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_45" >
		<label class="description" for="element_45">Jenis pembiayaan </label>
		<div>
		<select class="element select medium" id="element_45" name="element_45"> 
			<option value="" selected="selected"></option>
<option value="1" >Mudhorobah</option>
<option value="2" >Murabahah</option>
<option value="3" >Rahn</option>
<option value="4" >Qordh</option>

		</select>
		</div> 
		</li>		<li id="li_11" >
		<label class="description" for="element_11">Porsi bagi hasil untuk Bank </label>
		<div>
			<input id="element_11" name="element_11" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_12" >
		<label class="description" for="element_12">Porsi bagi hasil untuk nasabah </label>
		<div>
			<input id="element_12" name="element_12" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_13" >
		<label class="description" for="element_13">Total biaya administrasi </label>
		<span class="symbol">Rp</span>
		<span>
			<input id="element_13_1" name="element_13_1" class="element text currency" size="10" value="" type="text" /> .		
			<label for="element_13_1"><!-- Dollars --> </label>
		</span>
		<span>
			<input id="element_13_2" name="element_13_2" class="element text" size="2" maxlength="2" value="" type="text" />
			<label for="element_13_2"><!-- Cents --></label>
		</span>
		 
		</li>		<li id="li_14" >
		<label class="description" for="element_14">Barang jaminan </label>
		<div>
			<textarea id="element_14" name="element_14" class="element textarea small"></textarea> 
		</div> 
		</li>		<li id="li_15" >
		<label class="description" for="element_15">Jumlah marjin / total keuntungan </label>
		<div>
			<input id="element_15" name="element_15" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_46" >
		<label class="description" for="element_46">Tanggal permohonan </label>
		<span>
			<input id="element_46_1" name="element_46_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_46_1">MM</label>
		</span>
		<span>
			<input id="element_46_2" name="element_46_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_46_2">DD</label>
		</span>
		<span>
	 		<input id="element_46_3" name="element_46_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_46_3">YYYY</label>
		</span>
	
		<span id="calendar_46">
			<img id="cal_img_46" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_46_3",
			baseField    : "element_46",
			displayArea  : "calendar_46",
			button		 : "cal_img_46",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_47" >
		<label class="description" for="element_47">Tanggal jangka waktu (akhir) </label>
		<span>
			<input id="element_47_1" name="element_47_1" class="element text " size="2" type="text" maxlength="2" value=""/> : 
			<label>HH</label>
		</span>
		<span>
			<input id="element_47_2" name="element_47_2" class="element text " size="2" type="text" maxlength="2" value=""/> : 
			<label>MM</label>
		</span>
		<span>
			<input id="element_47_3" name="element_47_3" class="element text " size="2" type="text" maxlength="2" value=""/>
			<label>SS</label>
		</span>
		<span>
			<select class="element select" style="width:4em" id="element_47_4" name="element_47_4">
				<option value="AM" >AM</option>
				<option value="PM" >PM</option>
			</select>
			<label>AM/PM</label>
		</span> 
		</li>		<li id="li_18" >
		<label class="description" for="element_18">Angsuran pokok /bulan </label>
		<span class="symbol">Rp</span>
		<span>
			<input id="element_18_1" name="element_18_1" class="element text currency" size="10" value="" type="text" /> .		
			<label for="element_18_1"><!-- Dollars --></label>
		</span>
		<span>
			<input id="element_18_2" name="element_18_2" class="element text" size="2" maxlength="2" value="" type="text" />
			<label for="element_18_2"><!-- Cents --></label>
		</span>
		 
		</li>		<li id="li_19" >
		<label class="description" for="element_19">Angsuran margin /bulan </label>
		<span class="symbol">Rp</span>
		<span>
			<input id="element_19_1" name="element_19_1" class="element text currency" size="10" value="" type="text" /> .		
			<label for="element_19_1"><!-- Dollars --></label>
		</span>
		<span>
			<input id="element_19_2" name="element_19_2" class="element text" size="2" maxlength="2" value="" type="text" />
			<label for="element_19_2"><!-- Cents --></label>
		</span>
		 
		</li>		<li id="li_20" >
		<label class="description" for="element_20">Angsuran pokok saat jatuh tempo </label>
		<span class="symbol">Rp</span>
		<span>
			<input id="element_20_1" name="element_20_1" class="element text currency" size="10" value="" type="text" /> .		
			<label for="element_20_1"><!-- Dollars --></label>
		</span>
		<span>
			<input id="element_20_2" name="element_20_2" class="element text" size="2" maxlength="2" value="" type="text" />
			<label for="element_20_2"><!-- Cents --></label>
		</span>
		 
		</li>		<li id="li_21" >
		<label class="description" for="element_21">Angsuran marjin saat jatuh tempo </label>
		<span class="symbol">Rp</span>
		<span>
			<input id="element_21_1" name="element_21_1" class="element text currency" size="10" value="" type="text" /> .		
			<label for="element_21_1"><!-- Dollars --></label>
		</span>
		<span>
			<input id="element_21_2" name="element_21_2" class="element text" size="2" maxlength="2" value="" type="text" />
			<label for="element_21_2"><!-- Cents --></label>
		</span>
		 
		</li>		<li id="li_22" >
		<label class="description" for="element_22">Biaya penagihan </label>
		<span class="symbol">Rp</span>
		<span>
			<input id="element_22_1" name="element_22_1" class="element text currency" size="10" value="" type="text" /> .		
			<label for="element_22_1"><!-- Dollars --></label>
		</span>
		<span>
			<input id="element_22_2" name="element_22_2" class="element text" size="2" maxlength="2" value="" type="text" />
			<label for="element_22_2"><!-- Cents --></label>
		</span>
		 
		</li>		<li id="li_23" >
		<label class="description" for="element_23">Pemilik jaminan (identitas kuasa) </label>
		<div>
			<textarea id="element_23" name="element_23" class="element textarea small"></textarea> 
		</div> 
		</li>		<li id="li_24" >
		<label class="description" for="element_24">Sifat A </label>
		<div>
			<input id="element_24" name="element_24" class="element text small" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_25" >
		<label class="description" for="element_25">Jenis penggunaan </label>
		<div>
			<input id="element_25" name="element_25" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_26" >
		<label class="description" for="element_26">Golongan (874) </label>
		<div>
			<input id="element_26" name="element_26" class="element text small" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_27" >
		<label class="description" for="element_27">Sektor ekonomi </label>
		<div>
			<input id="element_27" name="element_27" class="element text small" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_28" >
		<label class="description" for="element_28">Agunan </label>
		<div>
			<input id="element_28" name="element_28" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_29" >
		<label class="description" for="element_29">Harga perolehan </label>
		<span class="symbol">Rp</span>
		<span>
			<input id="element_29_1" name="element_29_1" class="element text currency" size="10" value="" type="text" /> .		
			<label for="element_29_1"><!-- Dollars --></label>
		</span>
		<span>
			<input id="element_29_2" name="element_29_2" class="element text" size="2" maxlength="2" value="" type="text" />
			<label for="element_29_2"><!-- Cents --></label>
		</span>
		 
		</li>		<li id="li_30" >
		<label class="description" for="element_30">NJOP </label>
		<div>
			<input id="element_30" name="element_30" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_31" >
		<label class="description" for="element_31">Jenis pengikatan </label>
		<div>
			<input id="element_31" name="element_31" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_32" >
		<label class="description" for="element_32">Wilayah </label>
		<div>
			<input id="element_32" name="element_32" class="element text small" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_33" >
		<label class="description" for="element_33">Biaya administrasi </label>
		<span class="symbol">Rp</span>
		<span>
			<input id="element_33_1" name="element_33_1" class="element text currency" size="10" value="" type="text" /> .		
			<label for="element_33_1"><!-- Dollars --></label>
		</span>
		<span>
			<input id="element_33_2" name="element_33_2" class="element text" size="2" maxlength="2" value="" type="text" />
			<label for="element_33_2"><!--Cents --> </label>
		</span>
		 
		</li>		<li id="li_34" >
		<label class="description" for="element_34">Metode bagi hasil </label>
		<div>
			<input id="element_34" name="element_34" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_35" >
		<label class="description" for="element_35">Peminjam </label>
		<div>
			<input id="element_35" name="element_35" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_36" >
		<label class="description" for="element_36">Tujuan kepemilikan </label>
		<div>
			<input id="element_36" name="element_36" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_37" >
		<label class="description" for="element_37">Lokasi usaha </label>
		
		<div>
			<input id="element_37_1" name="element_37_1" class="element text large" value="" type="text">
			<label for="element_37_1">Street Address</label>
		</div>
	
		<div>
			<input id="element_37_2" name="element_37_2" class="element text large" value="" type="text">
			<label for="element_37_2">Address Line 2</label>
		</div>
	
		<div class="left">
			<input id="element_37_3" name="element_37_3" class="element text medium" value="" type="text">
			<label for="element_37_3">City</label>
		</div>
	
		<div class="right">
			<input id="element_37_4" name="element_37_4" class="element text medium" value="" type="text">
			<label for="element_37_4">State / Province / Region</label>
		</div>
	
		<div class="left">
			<input id="element_37_5" name="element_37_5" class="element text medium" maxlength="15" value="" type="text">
			<label for="element_37_5">Postal / Zip Code</label>
		</div>
	
		<div class="right">
			<select class="element select medium" id="element_37_6" name="element_37_6"> 
			<option value="" selected="selected"></option>
<option value="Afghanistan" >Afghanistan</option>
<option value="Albania" >Albania</option>
<option value="Algeria" >Algeria</option>
<option value="Andorra" >Andorra</option>
<option value="Antigua and Barbuda" >Antigua and Barbuda</option>
<option value="Argentina" >Argentina</option>
<option value="Armenia" >Armenia</option>
<option value="Australia" >Australia</option>
<option value="Austria" >Austria</option>
<option value="Azerbaijan" >Azerbaijan</option>
<option value="Bahamas" >Bahamas</option>
<option value="Bahrain" >Bahrain</option>
<option value="Bangladesh" >Bangladesh</option>
<option value="Barbados" >Barbados</option>
<option value="Belarus" >Belarus</option>
<option value="Belgium" >Belgium</option>
<option value="Belize" >Belize</option>
<option value="Benin" >Benin</option>
<option value="Bhutan" >Bhutan</option>
<option value="Bolivia" >Bolivia</option>
<option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
<option value="Botswana" >Botswana</option>
<option value="Brazil" >Brazil</option>
<option value="Brunei" >Brunei</option>
<option value="Bulgaria" >Bulgaria</option>
<option value="Burkina Faso" >Burkina Faso</option>
<option value="Burundi" >Burundi</option>
<option value="Cambodia" >Cambodia</option>
<option value="Cameroon" >Cameroon</option>
<option value="Canada" >Canada</option>
<option value="Cape Verde" >Cape Verde</option>
<option value="Central African Republic" >Central African Republic</option>
<option value="Chad" >Chad</option>
<option value="Chile" >Chile</option>
<option value="China" >China</option>
<option value="Colombia" >Colombia</option>
<option value="Comoros" >Comoros</option>
<option value="Congo" >Congo</option>
<option value="Cook Islands and Niue" >Cook Islands and Niue</option>
<option value="Costa Rica" >Costa Rica</option>
<option value="Côte d'Ivoire" >Côte d'Ivoire</option>
<option value="Croatia" >Croatia</option>
<option value="Cuba" >Cuba</option>
<option value="Cyprus" >Cyprus</option>
<option value="Czech Republic" >Czech Republic</option>
<option value="Denmark" >Denmark</option>
<option value="Djibouti" >Djibouti</option>
<option value="Dominica" >Dominica</option>
<option value="Dominican Republic" >Dominican Republic</option>
<option value="East Timor" >East Timor</option>
<option value="Ecuador" >Ecuador</option>
<option value="Egypt" >Egypt</option>
<option value="El Salvador" >El Salvador</option>
<option value="Equatorial Guinea" >Equatorial Guinea</option>
<option value="Eritrea" >Eritrea</option>
<option value="Estonia" >Estonia</option>
<option value="Ethiopia" >Ethiopia</option>
<option value="Fiji" >Fiji</option>
<option value="Finland" >Finland</option>
<option value="France" >France</option>
<option value="Gabon" >Gabon</option>
<option value="Gambia" >Gambia</option>
<option value="Georgia" >Georgia</option>
<option value="Germany" >Germany</option>
<option value="Ghana" >Ghana</option>
<option value="Greece" >Greece</option>
<option value="Grenada" >Grenada</option>
<option value="Guatemala" >Guatemala</option>
<option value="Guinea" >Guinea</option>
<option value="Guinea-Bissau" >Guinea-Bissau</option>
<option value="Guyana" >Guyana</option>
<option value="Haiti" >Haiti</option>
<option value="Honduras" >Honduras</option>
<option value="Hong Kong" >Hong Kong</option>
<option value="Hungary" >Hungary</option>
<option value="Iceland" >Iceland</option>
<option value="India" >India</option>
<option value="Indonesia" >Indonesia</option>
<option value="Iran" >Iran</option>
<option value="Iraq" >Iraq</option>
<option value="Ireland" >Ireland</option>
<option value="Israel" >Israel</option>
<option value="Italy" >Italy</option>
<option value="Jamaica" >Jamaica</option>
<option value="Japan" >Japan</option>
<option value="Jordan" >Jordan</option>
<option value="Kazakhstan" >Kazakhstan</option>
<option value="Kenya" >Kenya</option>
<option value="Kiribati" >Kiribati</option>
<option value="North Korea" >North Korea</option>
<option value="South Korea" >South Korea</option>
<option value="Kuwait" >Kuwait</option>
<option value="Kyrgyzstan" >Kyrgyzstan</option>
<option value="Laos" >Laos</option>
<option value="Latvia" >Latvia</option>
<option value="Lebanon" >Lebanon</option>
<option value="Lesotho" >Lesotho</option>
<option value="Liberia" >Liberia</option>
<option value="Libya" >Libya</option>
<option value="Liechtenstein" >Liechtenstein</option>
<option value="Lithuania" >Lithuania</option>
<option value="Luxembourg" >Luxembourg</option>
<option value="Macedonia" >Macedonia</option>
<option value="Madagascar" >Madagascar</option>
<option value="Malawi" >Malawi</option>
<option value="Malaysia" >Malaysia</option>
<option value="Maldives" >Maldives</option>
<option value="Mali" >Mali</option>
<option value="Malta" >Malta</option>
<option value="Marshall Islands" >Marshall Islands</option>
<option value="Mauritania" >Mauritania</option>
<option value="Mauritius" >Mauritius</option>
<option value="Mexico" >Mexico</option>
<option value="Micronesia" >Micronesia</option>
<option value="Moldova" >Moldova</option>
<option value="Monaco" >Monaco</option>
<option value="Mongolia" >Mongolia</option>
<option value="Montenegro" >Montenegro</option>
<option value="Morocco" >Morocco</option>
<option value="Mozambique" >Mozambique</option>
<option value="Myanmar" >Myanmar</option>
<option value="Namibia" >Namibia</option>
<option value="Nauru" >Nauru</option>
<option value="Nepal" >Nepal</option>
<option value="Netherlands" >Netherlands</option>
<option value="New Zealand" >New Zealand</option>
<option value="Nicaragua" >Nicaragua</option>
<option value="Niger" >Niger</option>
<option value="Nigeria" >Nigeria</option>
<option value="Norway" >Norway</option>
<option value="Oman" >Oman</option>
<option value="Pakistan" >Pakistan</option>
<option value="Palau" >Palau</option>
<option value="Panama" >Panama</option>
<option value="Papua New Guinea" >Papua New Guinea</option>
<option value="Paraguay" >Paraguay</option>
<option value="Peru" >Peru</option>
<option value="Philippines" >Philippines</option>
<option value="Poland" >Poland</option>
<option value="Portugal" >Portugal</option>
<option value="Puerto Rico" >Puerto Rico</option>
<option value="Qatar" >Qatar</option>
<option value="Romania" >Romania</option>
<option value="Russia" >Russia</option>
<option value="Rwanda" >Rwanda</option>
<option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
<option value="Saint Lucia" >Saint Lucia</option>
<option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
<option value="Samoa" >Samoa</option>
<option value="San Marino" >San Marino</option>
<option value="Sao Tome and Principe" >Sao Tome and Principe</option>
<option value="Saudi Arabia" >Saudi Arabia</option>
<option value="Senegal" >Senegal</option>
<option value="Serbia and Montenegro" >Serbia and Montenegro</option>
<option value="Seychelles" >Seychelles</option>
<option value="Sierra Leone" >Sierra Leone</option>
<option value="Singapore" >Singapore</option>
<option value="Slovakia" >Slovakia</option>
<option value="Slovenia" >Slovenia</option>
<option value="Solomon Islands" >Solomon Islands</option>
<option value="Somalia" >Somalia</option>
<option value="South Africa" >South Africa</option>
<option value="Spain" >Spain</option>
<option value="Sri Lanka" >Sri Lanka</option>
<option value="Sudan" >Sudan</option>
<option value="Suriname" >Suriname</option>
<option value="Swaziland" >Swaziland</option>
<option value="Sweden" >Sweden</option>
<option value="Switzerland" >Switzerland</option>
<option value="Syria" >Syria</option>
<option value="Taiwan" >Taiwan</option>
<option value="Tajikistan" >Tajikistan</option>
<option value="Tanzania" >Tanzania</option>
<option value="Thailand" >Thailand</option>
<option value="Togo" >Togo</option>
<option value="Tonga" >Tonga</option>
<option value="Trinidad and Tobago" >Trinidad and Tobago</option>
<option value="Tunisia" >Tunisia</option>
<option value="Turkey" >Turkey</option>
<option value="Turkmenistan" >Turkmenistan</option>
<option value="Tuvalu" >Tuvalu</option>
<option value="Uganda" >Uganda</option>
<option value="Ukraine" >Ukraine</option>
<option value="United Arab Emirates" >United Arab Emirates</option>
<option value="United Kingdom" >United Kingdom</option>
<option value="United States" >United States</option>
<option value="Uruguay" >Uruguay</option>
<option value="Uzbekistan" >Uzbekistan</option>
<option value="Vanuatu" >Vanuatu</option>
<option value="Vatican City" >Vatican City</option>
<option value="Venezuela" >Venezuela</option>
<option value="Vietnam" >Vietnam</option>
<option value="Yemen" >Yemen</option>
<option value="Zambia" >Zambia</option>
<option value="Zimbabwe" >Zimbabwe</option>
	
			</select>
		<label for="element_37_6">Country</label>
	</div> 
		</li>		<li id="li_38" >
		<label class="description" for="element_38">Nama pembiayaan </label>
		<span>
			<input id="element_38_1" name= "element_38_1" class="element text" maxlength="255" size="8" value=""/>
			<label>First</label>
		</span>
		<span>
			<input id="element_38_2" name= "element_38_2" class="element text" maxlength="255" size="14" value=""/>
			<label>Last</label>
		</span> 
		</li>		<li id="li_39" >
		<label class="description" for="element_39">Golongan piutang </label>
		<div>
			<input id="element_39" name="element_39" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_40" >
		<label class="description" for="element_40">Tanggal realisasi (legal) </label>
		<span>
			<input id="element_40_1" name="element_40_1" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_40_1">MM</label>
		</span>
		<span>
			<input id="element_40_2" name="element_40_2" class="element text" size="2" maxlength="2" value="" type="text"> /
			<label for="element_40_2">DD</label>
		</span>
		<span>
	 		<input id="element_40_3" name="element_40_3" class="element text" size="4" maxlength="4" value="" type="text">
			<label for="element_40_3">YYYY</label>
		</span>
	
		<span id="calendar_40">
			<img id="cal_img_40" class="datepicker" src="calendar.gif" alt="Pick a date.">	
		</span>
		<script type="text/javascript">
			Calendar.setup({
			inputField	 : "element_40_3",
			baseField    : "element_40",
			displayArea  : "calendar_40",
			button		 : "cal_img_40",
			ifFormat	 : "%B %e, %Y",
			onSelect	 : selectDate
			});
		</script>
		 
		</li>		<li id="li_41" >
		<label class="description" for="element_41">No PP (legal) </label>
		<div>
			<input id="element_41" name="element_41" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_42" >
		<label class="description" for="element_42">No SPH (legal) </label>
		<div>
			<input id="element_42" name="element_42" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_43" >
		<label class="description" for="element_43">No TTUN  </label>
		<div>
			<input id="element_43" name="element_43" class="element text medium" type="text" maxlength="255" value=""/> 
		</div> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="1089960" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		<div id="footer">
			<!-- Generated by <a href="http://www.phpform.org">pForm</a> -->
			Bank Syariah Amanah Insani
		</div>
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
</html>