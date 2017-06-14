<?php
	$params = App::getRouter()->getParams();

	if(isset($params[0])){

		$param1 = $params[0];

		switch ($param1) {

			case "set_column":
?>

<div class="col-sm-12 main_content">
	<div class="col-sm-8 content">
		<div class="cat_form" class="col-sm-12">
			<form action="" method="post" enctype="multipart/form-data">

				<div class="form-group">
					<label for="database">Select Database :</label>
					<input type="text" name="database_name" class="form-control maxWidth" placeholder="Database name" required />
				</div>

				<div class="form-group">
					<label for="table_name">Table Name :</label>
					<input type="text" name="table_name" class="form-control maxWidth" placeholder="Insert new Table Name" required />
				</div>

				<div class="form-group">
					<label for="table_column">Column Number:</label>
					<input type="text" name="column_length" class="form-control maxWidth" placeholder="Column number must be integer" required />
				</div>
								
				<input type="submit" name="set_column" class="btn btn-success btn-lg" value="CREATE TABLE" />
			</form>
		</div>
	</div>

	<div class="col-sm-2 widget"></div>
</div>

<?php

				break;

			case "display_fields":
?>

<form name="table_fields" method="post" action="">
					
					<div class="col-lg-12">
							<div class="col-lg-1">
								<h2>Name</h2>
							</div>
							<div class="col-lg-1">
								<h2>Type</h2>
							</div>
							
							<div class="col-lg-1">
								<h2>Length</h2>
							</div>

							<div class="col-lg-1">
								<h2>Default</h2>
							</div>

							<div class="col-lg-1">
								<h2>Collation</h2>
							</div>

							<div class="col-lg-1">
								<h2>Attribute</h2>
							</div>

							<div class="col-lg-1">
								<h2>Null</h2>
							</div>

							<div class="col-lg-1">
								<h2>Index</h2>
							</div>

							<div class="col-lg-1">
								<h2>A_I</h2>
							</div>

							<div class="col-lg-1">
								<h2>Comments</h2>
							</div>
							<div class="col-lg-1">column11</div>
							<div class="col-lg-1">column12</div>
					</div>

					<?php $i =1; echo "";?>

					<?php while($i<=Session::get('column_length')):?>

					<div class="col-lg-12">

							<div class="col-lg-1">
								<input type="text" class="form-control" name="name<?php echo $i?>" placeholder="name<?php echo $i?>" required/>
							</div>
							<div class="col-lg-1">
								<select class="form-control" name='type<?php echo $i?>'>
									<option value='INT'>INT</option>
									<option value='TEXT'>TEXT</option>
									<option value='VARCHAR'>VARCHAR</option>
									<option value='DATE'>DATE</option>
									<option value='DATETIME'>DATETIME</option>
									<option value='TIMESTAMP'>TIMESTAMP</option>
									<option value='ENUM'>ENUM</option>
								</select>
							</div>
							
							<div class="col-lg-1">
								<input type='text' class="form-control" name='length<?php echo $i?>' />
							</div>

							<div class="col-lg-1">
								<input type="text" class="form-control" name="default<?php echo $i?>"/>
							</div>

							<div class="col-lg-1">
								<select class="form-control" name='collation<?php echo $i?>'>
										<option value="">Collation</option>
										<option value=""></option>
										<optgroup label="utf8" title="UTF-8 Unicode">
											<option value="utf8-utf8_bin" title="Unicode (multilingual), Binary">utf8_bin</option>
											<option value="utf8-utf8_croatian_ci" title="Croatian, case-insensitive">utf8_croatian_ci</option>
											<option value="utf8-utf8_czech_ci" title="Czech, case-insensitive">utf8_czech_ci</option>
											<option value="utf8-utf8_danish_ci" title="Danish, case-insensitive">utf8_danish_ci</option>
											<option value="utf8-utf8_esperanto_ci" title="Esperanto, case-insensitive">utf8_esperanto_ci</option>
											<option value="utf8-utf8_estonian_ci" title="Estonian, case-insensitive">utf8_estonian_ci</option>
											<option value="utf8-utf8_general_ci" title="Unicode (multilingual), case-insensitive">Bangla</option>
											<option value="utf8-utf8_general_mysql500_ci" title="Unicode (multilingual)">utf8_general_mysql500_ci</option>
											<option value="utf8-utf8_german2_ci" title="German (phone book), case-insensitive">utf8_german2_ci</option>
											<option value="utf8-utf8_hungarian_ci" title="Hungarian, case-insensitive">utf8_hungarian_ci</option>
											<option value="utf8-utf8_icelandic_ci" title="Icelandic, case-insensitive">utf8_icelandic_ci</option>
											<option value="utf8-utf8_latvian_ci" title="Latvian, case-insensitive">utf8_latvian_ci</option>
											<option value="utf8-utf8_lithuanian_ci" title="Lithuanian, case-insensitive">utf8_lithuanian_ci</option>
											<option value="utf8-utf8_persian_ci" title="Persian, case-insensitive">utf8_persian_ci</option>
											<option value="utf8-utf8_polish_ci" title="Polish, case-insensitive">utf8_polish_ci</option>
											<option value="utf8-utf8_roman_ci" title="West European, case-insensitive">utf8_roman_ci</option>
											<option value="utf8-utf8_romanian_ci" title="Romanian, case-insensitive">utf8_romanian_ci</option>
											<option value="utf8-utf8_sinhala_ci" title="unknown, case-insensitive">utf8_sinhala_ci</option>
											<option value="utf8-utf8_slovak_ci" title="Slovak, case-insensitive">utf8_slovak_ci</option>
											<option value="utf8-utf8_slovenian_ci" title="Slovenian, case-insensitive">utf8_slovenian_ci</option>
											<option value="utf8-utf8_spanish2_ci" title="Traditional Spanish, case-insensitive">utf8_spanish2_ci</option>
											<option value="utf8-utf8_spanish_ci" title="Spanish, case-insensitive">utf8_spanish_ci</option>
											<option value="utf8-utf8_swedish_ci" title="Swedish, case-insensitive">utf8_swedish_ci</option>
											<option value="utf8-utf8_turkish_ci" title="Turkish, case-insensitive">utf8_turkish_ci</option>
											<option value="utf8-utf8_unicode_520_ci" title="Unicode (multilingual)">utf8_unicode_520_ci</option>
											<option value="utf8-utf8_unicode_ci" title="Unicode (multilingual), case-insensitive">utf8_unicode_ci</option>
											<option value="utf8-utf8_vietnamese_ci" title="unknown, case-insensitive">utf8_vietnamese_ci</option>
										</optgroup>

										<optgroup label="armscii8" title="ARMSCII-8 Armenian">
											<option value="armscii8-armscii8_bin" title="Armenian, Binary">armscii8_bin</option>
											<option value="armscii8-armscii8_general_ci" title="Armenian, case-insensitive">armscii8_general_ci</option>
										</optgroup>
										<optgroup label="ascii" title="US ASCII">
											<option value="ascii-ascii_bin" title="West European (multilingual), Binary">ascii_bin</option>
											<option value="ascii-ascii_general_ci" title="West European (multilingual), case-insensitive">ascii_general_ci</option>
										</optgroup>
										<optgroup label="big5" title="Big5 Traditional Chinese">
											<option value="big5-big5_bin" title="Traditional Chinese, Binary">big5_bin</option>
											<option value="big5-big5_chinese_ci" title="Traditional Chinese, case-insensitive">big5_chinese_ci</option>
										</optgroup>
										<optgroup label="binary" title="Binary pseudo charset">
											<option value="binary-binary" title="Binary">binary</option>
										</optgroup>
										<optgroup label="cp1250" title="Windows Central European">
											<option value="cp1250-cp1250_bin" title="Central European (multilingual), Binary">cp1250_bin</option>
											<option value="cp1250-cp1250_croatian_ci" title="Croatian, case-insensitive">cp1250_croatian_ci</option>
											<option value="cp1250-cp1250_czech_cs" title="Czech, case-sensitive">cp1250_czech_cs</option>
											<option value="cp1250-cp1250_general_ci" title="Central European (multilingual), case-insensitive">cp1250_general_ci</option>
											<option value="cp1250-cp1250_polish_ci" title="Polish, case-insensitive">cp1250_polish_ci</option>
										</optgroup>
										<optgroup label="cp1251" title="Windows Cyrillic">
											<option value="cp1251-cp1251_bin" title="Cyrillic (multilingual), Binary">cp1251_bin</option>
											<option value="cp1251-cp1251_bulgarian_ci" title="Bulgarian, case-insensitive">cp1251_bulgarian_ci</option>
											<option value="cp1251-cp1251_general_ci" title="Cyrillic (multilingual), case-insensitive">cp1251_general_ci</option>
											<option value="cp1251-cp1251_general_cs" title="Cyrillic (multilingual), case-sensitive">cp1251_general_cs</option>
											<option value="cp1251-cp1251_ukrainian_ci" title="Ukrainian, case-insensitive">cp1251_ukrainian_ci</option>
										</optgroup>
										<optgroup label="cp1256" title="Windows Arabic">
											<option value="cp1256-cp1256_bin" title="Arabic, Binary">cp1256_bin</option>
											<option value="cp1256-cp1256_general_ci" title="Arabic, case-insensitive">cp1256_general_ci</option>
										</optgroup>
										<optgroup label="cp1257" title="Windows Baltic">
											<option value="cp1257-cp1257_bin" title="Baltic (multilingual), Binary">cp1257_bin</option>
											<option value="cp1257-cp1257_general_ci" title="Baltic (multilingual), case-insensitive">cp1257_general_ci</option>
											<option value="cp1257-cp1257_lithuanian_ci" title="Lithuanian, case-insensitive">cp1257_lithuanian_ci</option>
										</optgroup>
										<optgroup label="cp850" title="DOS West European">
											<option value="cp850-cp850_bin" title="West European (multilingual), Binary">cp850_bin</option>
											<option value="cp850-cp850_general_ci" title="West European (multilingual), case-insensitive">cp850_general_ci</option>
										</optgroup>
										<optgroup label="cp852" title="DOS Central European">
											<option value="cp852-cp852_bin" title="Central European (multilingual), Binary">cp852_bin</option>
											<option value="cp852-cp852_general_ci" title="Central European (multilingual), case-insensitive">cp852_general_ci</option>
										</optgroup>
										<optgroup label="cp866" title="DOS Russian">
											<option value="cp866-cp866_bin" title="Russian, Binary">cp866_bin</option>
											<option value="cp866-cp866_general_ci" title="Russian, case-insensitive">cp866_general_ci</option>
										</optgroup>
										<optgroup label="cp932" title="SJIS for Windows Japanese">
											<option value="cp932-cp932_bin" title="Japanese, Binary">cp932_bin</option>
											<option value="cp932-cp932_japanese_ci" title="Japanese, case-insensitive">cp932_japanese_ci</option>
										</optgroup>
										<optgroup label="dec8" title="DEC West European">
											<option value="dec8-dec8_bin" title="West European (multilingual), Binary">dec8_bin</option>
											<option value="dec8-dec8_swedish_ci" title="Swedish, case-insensitive">dec8_swedish_ci</option>
										</optgroup>
										<optgroup label="eucjpms" title="UJIS for Windows Japanese">
											<option value="eucjpms-eucjpms_bin" title="Japanese, Binary">eucjpms_bin</option>
											<option value="eucjpms-eucjpms_japanese_ci" title="Japanese, case-insensitive">eucjpms_japanese_ci</option>
										</optgroup>
										<optgroup label="euckr" title="EUC-KR Korean">
											<option value="euckr-euckr_bin" title="Korean, Binary">euckr_bin</option>
											<option value="euckr-euckr_korean_ci" title="Korean, case-insensitive">euckr_korean_ci</option>
										</optgroup>
										<optgroup label="gb2312" title="GB2312 Simplified Chinese">
											<option value="gb2312-gb2312_bin" title="Simplified Chinese, Binary">gb2312_bin</option>
											<option value="gb2312-gb2312_chinese_ci" title="Simplified Chinese, case-insensitive">gb2312_chinese_ci</option>
										</optgroup>
										<optgroup label="gbk" title="GBK Simplified Chinese">
											<option value="gbk-gbk_bin" title="Simplified Chinese, Binary">gbk_bin</option>
											<option value="gbk-gbk_chinese_ci" title="Simplified Chinese, case-insensitive">gbk_chinese_ci</option>
										</optgroup>
										<optgroup label="geostd8" title="GEOSTD8 Georgian">
											<option value="geostd8-geostd8_bin" title="Georgian, Binary">geostd8_bin</option>
											<option value="geostd8-geostd8_general_ci" title="Georgian, case-insensitive">geostd8_general_ci</option>
										</optgroup>
										<optgroup label="greek" title="ISO 8859-7 Greek">
											<option value="greek-greek_bin" title="Greek, Binary">greek_bin</option>
											<option value="greek-greek_general_ci" title="Greek, case-insensitive">greek_general_ci</option>
										</optgroup>
										<optgroup label="hebrew" title="ISO 8859-8 Hebrew">
											<option value="hebrew-hebrew_bin" title="Hebrew, Binary">hebrew_bin</option>
											<option value="hebrew-hebrew_general_ci" title="Hebrew, case-insensitive">hebrew_general_ci</option>
										</optgroup>
										<optgroup label="hp8" title="HP West European">
											<option value="hp8-hp8_bin" title="West European (multilingual), Binary">hp8_bin</option>
											<option value="hp8-hp8_english_ci" title="English, case-insensitive">hp8_english_ci</option>
										</optgroup>
										<optgroup label="keybcs2" title="DOS Kamenicky Czech-Slovak">
											<option value="keybcs2-keybcs2_bin" title="Czech-Slovak, Binary">keybcs2_bin</option>
											<option value="keybcs2-keybcs2_general_ci" title="Czech-Slovak, case-insensitive">keybcs2_general_ci</option>
										</optgroup>
										<optgroup label="koi8r" title="KOI8-R Relcom Russian">
											<option value="koi8r-koi8r_bin" title="Russian, Binary">koi8r_bin</option>
											<option value="koi8r-koi8r_general_ci" title="Russian, case-insensitive">koi8r_general_ci</option>
										</optgroup>
										<optgroup label="koi8u" title="KOI8-U Ukrainian">
											<option value="koi8u-koi8u_bin" title="Ukrainian, Binary">koi8u_bin</option>
											<option value="koi8u-koi8u_general_ci" title="Ukrainian, case-insensitive">koi8u_general_ci</option>
										</optgroup>
										<optgroup label="latin1" title="cp1252 West European">
											<option value="latin1-latin1_bin" title="West European (multilingual), Binary">latin1_bin</option>
											<option value="latin1-latin1_danish_ci" title="Danish, case-insensitive">latin1_danish_ci</option>
											<option value="latin1-latin1_general_ci" title="West European (multilingual), case-insensitive">latin1_general_ci</option>
											<option value="latin1-latin1_general_cs" title="West European (multilingual), case-sensitive">latin1_general_cs</option>
											<option value="latin1-latin1_german1_ci" title="German (dictionary), case-insensitive">latin1_german1_ci</option>
											<option value="latin1-latin1_german2_ci" title="German (phone book), case-insensitive">latin1_german2_ci</option>
											<option value="latin1-latin1_spanish_ci" title="Spanish, case-insensitive">latin1_spanish_ci</option>
											<option value="latin1-latin1_swedish_ci" title="Swedish, case-insensitive">latin1_swedish_ci</option>
										</optgroup>

										<optgroup label="latin2" title="ISO 8859-2 Central European">
											<option value="latin2-latin2_bin" title="Central European (multilingual), Binary">latin2_bin</option>
											<option value="latin2-latin2_croatian_ci" title="Croatian, case-insensitive">latin2_croatian_ci</option>
											<option value="latin2-latin2_czech_cs" title="Czech, case-sensitive">latin2_czech_cs</option>
											<option value="latin2-latin2_general_ci" title="Central European (multilingual), case-insensitive">latin2_general_ci</option>
											<option value="latin2-latin2_hungarian_ci" title="Hungarian, case-insensitive">latin2_hungarian_ci</option>
										</optgroup>

										<optgroup label="latin5" title="ISO 8859-9 Turkish">
											<option value="latin5-latin5_bin" title="Turkish, Binary">latin5_bin</option>
											<option value="latin5-latin5_turkish_ci" title="Turkish, case-insensitive">latin5_turkish_ci</option>
										</optgroup>

										<optgroup label="latin7" title="ISO 8859-13 Baltic">
											<option value="latin7-latin7_bin" title="Baltic (multilingual), Binary">latin7_bin</option>
											<option value="latin7-latin7_estonian_cs" title="Estonian, case-sensitive">latin7_estonian_cs</option>
											<option value="latin7-latin7_general_ci" title="Baltic (multilingual), case-insensitive">latin7_general_ci</option>
											<option value="latin7-latin7_general_cs" title="Baltic (multilingual), case-sensitive">latin7_general_cs</option>
										</optgroup>

										<optgroup label="macce" title="Mac Central European">
											<option value="macce-macce_bin" title="Central European (multilingual), Binary">macce_bin</option>
											<option value="macce-macce_general_ci" title="Central European (multilingual), case-insensitive">macce_general_ci</option>
										</optgroup>

										<optgroup label="macroman" title="Mac West European">
											<option value="macroman-macroman_bin" title="West European (multilingual), Binary">macroman_bin</option>
											<option value="macroman-macroman_general_ci" title="West European (multilingual), case-insensitive">macroman_general_ci</option>
										</optgroup>

										<optgroup label="sjis" title="Shift-JIS Japanese">
											<option value="sjis-sjis_bin" title="Japanese, Binary">sjis_bin</option>
											<option value="sjis-sjis_japanese_ci" title="Japanese, case-insensitive">sjis_japanese_ci</option>
										</optgroup>

										<optgroup label="swe7" title="7bit Swedish">
											<option value="swe7-swe7_bin" title="Swedish, Binary">swe7_bin</option>
											<option value="swe7-swe7_swedish_ci" title="Swedish, case-insensitive">swe7_swedish_ci</option>
										</optgroup>

										<optgroup label="tis620" title="TIS620 Thai">
											<option value="tis620-tis620_bin" title="Thai, Binary">tis620_bin</option>
											<option value="tis620-tis620_thai_ci" title="Thai, case-insensitive">tis620_thai_ci</option>
										</optgroup>

										<optgroup label="ucs2" title="UCS-2 Unicode">
											<option value="ucs2-ucs2_bin" title="Unicode (multilingual), Binary">ucs2_bin</option>
											<option value="ucs2-ucs2_croatian_ci" title="Croatian, case-insensitive">ucs2_croatian_ci</option>
											<option value="ucs2-ucs2_czech_ci" title="Czech, case-insensitive">ucs2_czech_ci</option>
											<option value="ucs2-ucs2_danish_ci" title="Danish, case-insensitive">ucs2_danish_ci</option>
											<option value="ucs2-ucs2_esperanto_ci" title="Esperanto, case-insensitive">ucs2_esperanto_ci</option>
											<option value="ucs2-ucs2_estonian_ci" title="Estonian, case-insensitive">ucs2_estonian_ci</option>
											<option value="ucs2-ucs2_general_ci" title="Unicode (multilingual), case-insensitive">ucs2_general_ci</option>
											<option value="ucs2-ucs2_general_mysql500_ci" title="Unicode (multilingual)">ucs2_general_mysql500_ci</option>
											<option value="ucs2-ucs2_german2_ci" title="German (phone book), case-insensitive">ucs2_german2_ci</option>
											<option value="ucs2-ucs2_hungarian_ci" title="Hungarian, case-insensitive">ucs2_hungarian_ci</option>
											<option value="ucs2-ucs2_icelandic_ci" title="Icelandic, case-insensitive">ucs2_icelandic_ci</option>
											<option value="ucs2-ucs2_latvian_ci" title="Latvian, case-insensitive">ucs2_latvian_ci</option>
											<option value="ucs2-ucs2_lithuanian_ci" title="Lithuanian, case-insensitive">ucs2_lithuanian_ci</option>
											<option value="ucs2-ucs2_persian_ci" title="Persian, case-insensitive">ucs2_persian_ci</option>
											<option value="ucs2-ucs2_polish_ci" title="Polish, case-insensitive">ucs2_polish_ci</option>
											<option value="ucs2-ucs2_roman_ci" title="West European, case-insensitive">ucs2_roman_ci</option>
											<option value="ucs2-ucs2_romanian_ci" title="Romanian, case-insensitive">ucs2_romanian_ci</option>
											<option value="ucs2-ucs2_sinhala_ci" title="unknown, case-insensitive">ucs2_sinhala_ci</option>
											<option value="ucs2-ucs2_slovak_ci" title="Slovak, case-insensitive">ucs2_slovak_ci</option>
											<option value="ucs2-ucs2_slovenian_ci" title="Slovenian, case-insensitive">ucs2_slovenian_ci</option>
											<option value="ucs2-ucs2_spanish2_ci" title="Traditional Spanish, case-insensitive">ucs2_spanish2_ci</option>
											<option value="ucs2-ucs2_spanish_ci" title="Spanish, case-insensitive">ucs2_spanish_ci</option>
											<option value="ucs2-ucs2_swedish_ci" title="Swedish, case-insensitive">ucs2_swedish_ci</option>
											<option value="ucs2-ucs2_turkish_ci" title="Turkish, case-insensitive">ucs2_turkish_ci</option>
											<option value="ucs2-ucs2_unicode_520_ci" title="Unicode (multilingual)">ucs2_unicode_520_ci</option>
											<option value="ucs2-ucs2_unicode_ci" title="Unicode (multilingual), case-insensitive">ucs2_unicode_ci</option>
											<option value="ucs2-ucs2_vietnamese_ci" title="unknown, case-insensitive">ucs2_vietnamese_ci</option>
										</optgroup>

										<optgroup label="ujis" title="EUC-JP Japanese">
											<option value="ujis-ujis_bin" title="Japanese, Binary">ujis_bin</option>
											<option value="ujis-ujis_japanese_ci" title="Japanese, case-insensitive">ujis_japanese_ci</option>
										</optgroup>

										<optgroup label="utf16" title="UTF-16 Unicode">
											<option value="utf16-utf16_bin" title="unknown, Binary">utf16_bin</option>
											<option value="utf16-utf16_croatian_ci" title="Croatian, case-insensitive">utf16_croatian_ci</option>
											<option value="utf16-utf16_czech_ci" title="Czech, case-insensitive">utf16_czech_ci</option>
											<option value="utf16-utf16_danish_ci" title="Danish, case-insensitive">utf16_danish_ci</option>
											<option value="utf16-utf16_esperanto_ci" title="Esperanto, case-insensitive">utf16_esperanto_ci</option>
											<option value="utf16-utf16_estonian_ci" title="Estonian, case-insensitive">utf16_estonian_ci</option>
											<option value="utf16-utf16_general_ci" title="unknown, case-insensitive">utf16_general_ci</option>
											<option value="utf16-utf16_german2_ci" title="German (phone book), case-insensitive">utf16_german2_ci</option>
											<option value="utf16-utf16_hungarian_ci" title="Hungarian, case-insensitive">utf16_hungarian_ci</option>
											<option value="utf16-utf16_icelandic_ci" title="Icelandic, case-insensitive">utf16_icelandic_ci</option>
											<option value="utf16-utf16_latvian_ci" title="Latvian, case-insensitive">utf16_latvian_ci</option>
											<option value="utf16-utf16_lithuanian_ci" title="Lithuanian, case-insensitive">utf16_lithuanian_ci</option>
											<option value="utf16-utf16_persian_ci" title="Persian, case-insensitive">utf16_persian_ci</option>
											<option value="utf16-utf16_polish_ci" title="Polish, case-insensitive">utf16_polish_ci</option>
											<option value="utf16-utf16_roman_ci" title="West European, case-insensitive">utf16_roman_ci</option>
											<option value="utf16-utf16_romanian_ci" title="Romanian, case-insensitive">utf16_romanian_ci</option>
											<option value="utf16-utf16_sinhala_ci" title="unknown, case-insensitive">utf16_sinhala_ci</option>
											<option value="utf16-utf16_slovak_ci" title="Slovak, case-insensitive">utf16_slovak_ci</option>
											<option value="utf16-utf16_slovenian_ci" title="Slovenian, case-insensitive">utf16_slovenian_ci</option>
											<option value="utf16-utf16_spanish2_ci" title="Traditional Spanish, case-insensitive">utf16_spanish2_ci</option>
											<option value="utf16-utf16_spanish_ci" title="Spanish, case-insensitive">utf16_spanish_ci</option>
											<option value="utf16-utf16_swedish_ci" title="Swedish, case-insensitive">utf16_swedish_ci</option>
											<option value="utf16-utf16_turkish_ci" title="Turkish, case-insensitive">utf16_turkish_ci</option>
											<option value="utf16-utf16_unicode_520_ci" title="Unicode (multilingual)">utf16_unicode_520_ci</option>
											<option value="utf16-utf16_unicode_ci" title="Unicode (multilingual), case-insensitive">utf16_unicode_ci</option>
											<option value="utf16-utf16_vietnamese_ci" title="unknown, case-insensitive">utf16_vietnamese_ci</option>
										</optgroup>

										<optgroup label="utf16le" title="UTF-16LE Unicode">
											<option value="utf16le-utf16le_bin" title="unknown, Binary">utf16le_bin</option>
											<option value="utf16le-utf16le_general_ci" title="unknown, case-insensitive">utf16le_general_ci</option>
										</optgroup>

										<optgroup label="utf32" title="UTF-32 Unicode">
											<option value="utf32-utf32_bin" title="unknown, Binary">utf32_bin</option>
											<option value="utf32-utf32_croatian_ci" title="Croatian, case-insensitive">utf32_croatian_ci</option>
											<option value="utf32-utf32_czech_ci" title="Czech, case-insensitive">utf32_czech_ci</option>
											<option value="utf32-utf32_danish_ci" title="Danish, case-insensitive">utf32_danish_ci</option>
											<option value="utf32-utf32_esperanto_ci" title="Esperanto, case-insensitive">utf32_esperanto_ci</option>
											<option value="utf32-utf32_estonian_ci" title="Estonian, case-insensitive">utf32_estonian_ci</option>
											<option value="utf32-utf32_general_ci" title="unknown, case-insensitive">utf32_general_ci</option>
											<option value="utf32-utf32_german2_ci" title="German (phone book), case-insensitive">utf32_german2_ci</option>
											<option value="utf32-utf32_hungarian_ci" title="Hungarian, case-insensitive">utf32_hungarian_ci</option>
											<option value="utf32-utf32_icelandic_ci" title="Icelandic, case-insensitive">utf32_icelandic_ci</option>
											<option value="utf32-utf32_latvian_ci" title="Latvian, case-insensitive">utf32_latvian_ci</option>
											<option value="utf32-utf32_lithuanian_ci" title="Lithuanian, case-insensitive">utf32_lithuanian_ci</option>
											<option value="utf32-utf32_persian_ci" title="Persian, case-insensitive">utf32_persian_ci</option>
											<option value="utf32-utf32_polish_ci" title="Polish, case-insensitive">utf32_polish_ci</option>
											<option value="utf32-utf32_roman_ci" title="West European, case-insensitive">utf32_roman_ci</option>
											<option value="utf32-utf32_romanian_ci" title="Romanian, case-insensitive">utf32_romanian_ci</option>
											<option value="utf32-utf32_sinhala_ci" title="unknown, case-insensitive">utf32_sinhala_ci</option>
											<option value="utf32-utf32_slovak_ci" title="Slovak, case-insensitive">utf32_slovak_ci</option>
											<option value="utf32-utf32_slovenian_ci" title="Slovenian, case-insensitive">utf32_slovenian_ci</option>
											<option value="utf32-utf32_spanish2_ci" title="Traditional Spanish, case-insensitive">utf32_spanish2_ci</option>
											<option value="utf32-utf32_spanish_ci" title="Spanish, case-insensitive">utf32_spanish_ci</option>
											<option value="utf32-utf32_swedish_ci" title="Swedish, case-insensitive">utf32_swedish_ci</option>
											<option value="utf32-utf32_turkish_ci" title="Turkish, case-insensitive">utf32_turkish_ci</option>
											<option value="utf32-utf32_unicode_520_ci" title="Unicode (multilingual)">utf32_unicode_520_ci</option>
											<option value="utf32-utf32_unicode_ci" title="Unicode (multilingual), case-insensitive">utf32_unicode_ci</option>
											<option value="utf32-utf32_vietnamese_ci" title="unknown, case-insensitive">utf32_vietnamese_ci</option>
										</optgroup>

										<optgroup label="utf8mb4" title="UTF-8 Unicode">
											<option value="utf8mb4-utf8mb4_bin" title="Unicode (multilingual), Binary">utf8mb4_bin</option>
											<option value="utf8mb4-utf8mb4_croatian_ci" title="Croatian, case-insensitive">utf8mb4_croatian_ci</option>
											<option value="utf8mb4-utf8mb4_czech_ci" title="Czech, case-insensitive">utf8mb4_czech_ci</option>
											<option value="utf8mb4-utf8mb4_danish_ci" title="Danish, case-insensitive">utf8mb4_danish_ci</option>
											<option value="utf8mb4-utf8mb4_esperanto_ci" title="Esperanto, case-insensitive">utf8mb4_esperanto_ci</option>
											<option value="utf8mb4-utf8mb4_estonian_ci" title="Estonian, case-insensitive">utf8mb4_estonian_ci</option>
											<option value="utf8mb4-utf8mb4_general_ci" title="Unicode (multilingual), case-insensitive">utf8mb4_general_ci</option>
											<option value="utf8mb4-utf8mb4_german2_ci" title="German (phone book), case-insensitive">utf8mb4_german2_ci</option>
											<option value="utf8mb4-utf8mb4_hungarian_ci" title="Hungarian, case-insensitive">utf8mb4_hungarian_ci</option>
											<option value="utf8mb4-utf8mb4_icelandic_ci" title="Icelandic, case-insensitive">utf8mb4_icelandic_ci</option>
											<option value="utf8mb4-utf8mb4_latvian_ci" title="Latvian, case-insensitive">utf8mb4_latvian_ci</option>
											<option value="utf8mb4-utf8mb4_lithuanian_ci" title="Lithuanian, case-insensitive">utf8mb4_lithuanian_ci</option>
											<option value="utf8mb4-utf8mb4_persian_ci" title="Persian, case-insensitive">utf8mb4_persian_ci</option>
											<option value="utf8mb4-utf8mb4_polish_ci" title="Polish, case-insensitive">utf8mb4_polish_ci</option>
											<option value="utf8mb4-utf8mb4_roman_ci" title="West European, case-insensitive">utf8mb4_roman_ci</option>
											<option value="utf8mb4-utf8mb4_romanian_ci" title="Romanian, case-insensitive">utf8mb4_romanian_ci</option>
											<option value="utf8mb4-utf8mb4_sinhala_ci" title="unknown, case-insensitive">utf8mb4_sinhala_ci</option>
											<option value="utf8mb4-utf8mb4_slovak_ci" title="Slovak, case-insensitive">utf8mb4_slovak_ci</option>
											<option value="utf8mb4-utf8mb4_slovenian_ci" title="Slovenian, case-insensitive">utf8mb4_slovenian_ci</option>
											<option value="utf8mb4-utf8mb4_spanish2_ci" title="Traditional Spanish, case-insensitive">utf8mb4_spanish2_ci</option>
											<option value="utf8mb4-utf8mb4_spanish_ci" title="Spanish, case-insensitive">utf8mb4_spanish_ci</option>
											<option value="utf8mb4-utf8mb4_swedish_ci" title="Swedish, case-insensitive">utf8mb4_swedish_ci</option>
											<option value="utf8mb4-utf8mb4_turkish_ci" title="Turkish, case-insensitive">utf8mb4_turkish_ci</option>
											<option value="utf8mb4-utf8mb4_unicode_520_ci" title="Unicode (multilingual)">utf8mb4_unicode_520_ci</option>
											<option value="utf8mb4-utf8mb4_unicode_ci" title="Unicode (multilingual), case-insensitive">utf8mb4_unicode_ci</option>
											<option value="utf8mb4-utf8mb4_vietnamese_ci" title="unknown, case-insensitive">utf8mb4_vietnamese_ci</option>
										</optgroup>
								</select>
							</div>

							<div class="col-lg-1">
								<select class="form-control" name='attributes<?php echo $i?>' style="max-width:150px;">
									<option value=''></option>
									<option value='BINARY'>BINARY</option>
									<option value='UNSIGNED'>UNSIGNED</option>
									<option value='UNSIGNED ZEROFILL'>UNSIGNED ZEROFILL</option>
									<option value='on update CURRENT_TIMESTAMP'>on update CURRENT_TIMESTAMP</option>
								</select>
							</div>

							<div class="col-lg-1">
								<input class="form-control" type='checkbox' value='NULL' name='null<?php echo $i?>' />
							</div>

							<div class="col-lg-1">
								<select class="form-control" name='index<?php echo $i?>'>
									<option value=''>Select</option>
									<option value='PRIMARY KEY'>PRIMARY</option>
									<option value='UNIQUE KEY'>UNIQUE</option>
									<option value='INDEX'>INDEX</option>
									<option value='FULLTEXT'>FULLTEXT</option>
								</select>
							</div>

							<div class="col-lg-1">
								<input class="form-control" type='checkbox' value='AUTO_INCREMENT' name='auto_increment<?php echo $i?>' />
							</div>

							<div class="col-lg-1">
								<input class="form-control" type='text' name='comments<?php echo $i?>' />
							</div>
							<div class="col-lg-1"></div>
							<div class="col-lg-1"></div>
						</div>
						<?php $i++;?>
						<?php endwhile?>
					<div class="col-lg-12">

							<div class="form-group col-lg-6">
								<label>Select Database Ingine : </label>
								<select class="form-control" name='engine_name'>
									<option value='InnoDB'>InnoDB</option>
									<option value='MRG_MYISAM'>MRG_MYISAM</option>
									<option value='MyIsam'>MyIsam</option>
									<option value='CSV'>CSV</option>
									<option value='MEMORY'>MEMORY</option>
									<option value='BLACKHOLE'>ARCHIVE</option>
									<option value='InoDB'>InoDB</option>
								</select>
							</div>
							<div class="form-group col-lg-6">
								<label>Select Database Collation : </label>
								<select class="form-control" name='engine_collation'>
									<option value="">Collation</option>
										<option value=""></option>
										<optgroup label="utf8" title="UTF-8 Unicode">
											<option value="utf8-utf8_bin" title="Unicode (multilingual), Binary">utf8_bin</option>
											<option value="utf8-utf8_croatian_ci" title="Croatian, case-insensitive">utf8_croatian_ci</option>
											<option value="utf8-utf8_czech_ci" title="Czech, case-insensitive">utf8_czech_ci</option>
											<option value="utf8-utf8_danish_ci" title="Danish, case-insensitive">utf8_danish_ci</option>
											<option value="utf8-utf8_esperanto_ci" title="Esperanto, case-insensitive">utf8_esperanto_ci</option>
											<option value="utf8-utf8_estonian_ci" title="Estonian, case-insensitive">utf8_estonian_ci</option>
											<option value="utf8-utf8_general_ci" title="Unicode (multilingual), case-insensitive">Bangla</option>
											<option value="utf8-utf8_general_mysql500_ci" title="Unicode (multilingual)">utf8_general_mysql500_ci</option>
											<option value="utf8-utf8_german2_ci" title="German (phone book), case-insensitive">utf8_german2_ci</option>
											<option value="utf8-utf8_hungarian_ci" title="Hungarian, case-insensitive">utf8_hungarian_ci</option>
											<option value="utf8-utf8_icelandic_ci" title="Icelandic, case-insensitive">utf8_icelandic_ci</option>
											<option value="utf8-utf8_latvian_ci" title="Latvian, case-insensitive">utf8_latvian_ci</option>
											<option value="utf8-utf8_lithuanian_ci" title="Lithuanian, case-insensitive">utf8_lithuanian_ci</option>
											<option value="utf8-utf8_persian_ci" title="Persian, case-insensitive">utf8_persian_ci</option>
											<option value="utf8-utf8_polish_ci" title="Polish, case-insensitive">utf8_polish_ci</option>
											<option value="utf8-utf8_roman_ci" title="West European, case-insensitive">utf8_roman_ci</option>
											<option value="utf8-utf8_romanian_ci" title="Romanian, case-insensitive">utf8_romanian_ci</option>
											<option value="utf8-utf8_sinhala_ci" title="unknown, case-insensitive">utf8_sinhala_ci</option>
											<option value="utf8-utf8_slovak_ci" title="Slovak, case-insensitive">utf8_slovak_ci</option>
											<option value="utf8-utf8_slovenian_ci" title="Slovenian, case-insensitive">utf8_slovenian_ci</option>
											<option value="utf8-utf8_spanish2_ci" title="Traditional Spanish, case-insensitive">utf8_spanish2_ci</option>
											<option value="utf8-utf8_spanish_ci" title="Spanish, case-insensitive">utf8_spanish_ci</option>
											<option value="utf8-utf8_swedish_ci" title="Swedish, case-insensitive">utf8_swedish_ci</option>
											<option value="utf8-utf8_turkish_ci" title="Turkish, case-insensitive">utf8_turkish_ci</option>
											<option value="utf8-utf8_unicode_520_ci" title="Unicode (multilingual)">utf8_unicode_520_ci</option>
											<option value="utf8-utf8_unicode_ci" title="Unicode (multilingual), case-insensitive">utf8_unicode_ci</option>
											<option value="utf8-utf8_vietnamese_ci" title="unknown, case-insensitive">utf8_vietnamese_ci</option>
										</optgroup>

										<optgroup label="armscii8" title="ARMSCII-8 Armenian">
											<option value="armscii8-armscii8_bin" title="Armenian, Binary">armscii8_bin</option>
											<option value="armscii8-armscii8_general_ci" title="Armenian, case-insensitive">armscii8_general_ci</option>
										</optgroup>
										<optgroup label="ascii" title="US ASCII">
											<option value="ascii-ascii_bin" title="West European (multilingual), Binary">ascii_bin</option>
											<option value="ascii-ascii_general_ci" title="West European (multilingual), case-insensitive">ascii_general_ci</option>
										</optgroup>
										<optgroup label="big5" title="Big5 Traditional Chinese">
											<option value="big5-big5_bin" title="Traditional Chinese, Binary">big5_bin</option>
											<option value="big5-big5_chinese_ci" title="Traditional Chinese, case-insensitive">big5_chinese_ci</option>
										</optgroup>
										<optgroup label="binary" title="Binary pseudo charset">
											<option value="binary-binary" title="Binary">binary</option>
										</optgroup>
										<optgroup label="cp1250" title="Windows Central European">
											<option value="cp1250-cp1250_bin" title="Central European (multilingual), Binary">cp1250_bin</option>
											<option value="cp1250-cp1250_croatian_ci" title="Croatian, case-insensitive">cp1250_croatian_ci</option>
											<option value="cp1250-cp1250_czech_cs" title="Czech, case-sensitive">cp1250_czech_cs</option>
											<option value="cp1250-cp1250_general_ci" title="Central European (multilingual), case-insensitive">cp1250_general_ci</option>
											<option value="cp1250-cp1250_polish_ci" title="Polish, case-insensitive">cp1250_polish_ci</option>
										</optgroup>
										<optgroup label="cp1251" title="Windows Cyrillic">
											<option value="cp1251-cp1251_bin" title="Cyrillic (multilingual), Binary">cp1251_bin</option>
											<option value="cp1251-cp1251_bulgarian_ci" title="Bulgarian, case-insensitive">cp1251_bulgarian_ci</option>
											<option value="cp1251-cp1251_general_ci" title="Cyrillic (multilingual), case-insensitive">cp1251_general_ci</option>
											<option value="cp1251-cp1251_general_cs" title="Cyrillic (multilingual), case-sensitive">cp1251_general_cs</option>
											<option value="cp1251-cp1251_ukrainian_ci" title="Ukrainian, case-insensitive">cp1251_ukrainian_ci</option>
										</optgroup>
										<optgroup label="cp1256" title="Windows Arabic">
											<option value="cp1256-cp1256_bin" title="Arabic, Binary">cp1256_bin</option>
											<option value="cp1256-cp1256_general_ci" title="Arabic, case-insensitive">cp1256_general_ci</option>
										</optgroup>
										<optgroup label="cp1257" title="Windows Baltic">
											<option value="cp1257-cp1257_bin" title="Baltic (multilingual), Binary">cp1257_bin</option>
											<option value="cp1257-cp1257_general_ci" title="Baltic (multilingual), case-insensitive">cp1257_general_ci</option>
											<option value="cp1257-cp1257_lithuanian_ci" title="Lithuanian, case-insensitive">cp1257_lithuanian_ci</option>
										</optgroup>
										<optgroup label="cp850" title="DOS West European">
											<option value="cp850-cp850_bin" title="West European (multilingual), Binary">cp850_bin</option>
											<option value="cp850-cp850_general_ci" title="West European (multilingual), case-insensitive">cp850_general_ci</option>
										</optgroup>
										<optgroup label="cp852" title="DOS Central European">
											<option value="cp852-cp852_bin" title="Central European (multilingual), Binary">cp852_bin</option>
											<option value="cp852-cp852_general_ci" title="Central European (multilingual), case-insensitive">cp852_general_ci</option>
										</optgroup>
										<optgroup label="cp866" title="DOS Russian">
											<option value="cp866-cp866_bin" title="Russian, Binary">cp866_bin</option>
											<option value="cp866-cp866_general_ci" title="Russian, case-insensitive">cp866_general_ci</option>
										</optgroup>
										<optgroup label="cp932" title="SJIS for Windows Japanese">
											<option value="cp932-cp932_bin" title="Japanese, Binary">cp932_bin</option>
											<option value="cp932-cp932_japanese_ci" title="Japanese, case-insensitive">cp932_japanese_ci</option>
										</optgroup>
										<optgroup label="dec8" title="DEC West European">
											<option value="dec8-dec8_bin" title="West European (multilingual), Binary">dec8_bin</option>
											<option value="dec8-dec8_swedish_ci" title="Swedish, case-insensitive">dec8_swedish_ci</option>
										</optgroup>
										<optgroup label="eucjpms" title="UJIS for Windows Japanese">
											<option value="eucjpms-eucjpms_bin" title="Japanese, Binary">eucjpms_bin</option>
											<option value="eucjpms-eucjpms_japanese_ci" title="Japanese, case-insensitive">eucjpms_japanese_ci</option>
										</optgroup>
										<optgroup label="euckr" title="EUC-KR Korean">
											<option value="euckr-euckr_bin" title="Korean, Binary">euckr_bin</option>
											<option value="euckr-euckr_korean_ci" title="Korean, case-insensitive">euckr_korean_ci</option>
										</optgroup>
										<optgroup label="gb2312" title="GB2312 Simplified Chinese">
											<option value="gb2312-gb2312_bin" title="Simplified Chinese, Binary">gb2312_bin</option>
											<option value="gb2312-gb2312_chinese_ci" title="Simplified Chinese, case-insensitive">gb2312_chinese_ci</option>
										</optgroup>
										<optgroup label="gbk" title="GBK Simplified Chinese">
											<option value="gbk-gbk_bin" title="Simplified Chinese, Binary">gbk_bin</option>
											<option value="gbk-gbk_chinese_ci" title="Simplified Chinese, case-insensitive">gbk_chinese_ci</option>
										</optgroup>
										<optgroup label="geostd8" title="GEOSTD8 Georgian">
											<option value="geostd8-geostd8_bin" title="Georgian, Binary">geostd8_bin</option>
											<option value="geostd8-geostd8_general_ci" title="Georgian, case-insensitive">geostd8_general_ci</option>
										</optgroup>
										<optgroup label="greek" title="ISO 8859-7 Greek">
											<option value="greek-greek_bin" title="Greek, Binary">greek_bin</option>
											<option value="greek-greek_general_ci" title="Greek, case-insensitive">greek_general_ci</option>
										</optgroup>
										<optgroup label="hebrew" title="ISO 8859-8 Hebrew">
											<option value="hebrew-hebrew_bin" title="Hebrew, Binary">hebrew_bin</option>
											<option value="hebrew-hebrew_general_ci" title="Hebrew, case-insensitive">hebrew_general_ci</option>
										</optgroup>
										<optgroup label="hp8" title="HP West European">
											<option value="hp8-hp8_bin" title="West European (multilingual), Binary">hp8_bin</option>
											<option value="hp8-hp8_english_ci" title="English, case-insensitive">hp8_english_ci</option>
										</optgroup>
										<optgroup label="keybcs2" title="DOS Kamenicky Czech-Slovak">
											<option value="keybcs2-keybcs2_bin" title="Czech-Slovak, Binary">keybcs2_bin</option>
											<option value="keybcs2-keybcs2_general_ci" title="Czech-Slovak, case-insensitive">keybcs2_general_ci</option>
										</optgroup>
										<optgroup label="koi8r" title="KOI8-R Relcom Russian">
											<option value="koi8r-koi8r_bin" title="Russian, Binary">koi8r_bin</option>
											<option value="koi8r-koi8r_general_ci" title="Russian, case-insensitive">koi8r_general_ci</option>
										</optgroup>
										<optgroup label="koi8u" title="KOI8-U Ukrainian">
											<option value="koi8u-koi8u_bin" title="Ukrainian, Binary">koi8u_bin</option>
											<option value="koi8u-koi8u_general_ci" title="Ukrainian, case-insensitive">koi8u_general_ci</option>
										</optgroup>
										<optgroup label="latin1" title="cp1252 West European">
											<option value="latin1-latin1_bin" title="West European (multilingual), Binary">latin1_bin</option>
											<option value="latin1-latin1_danish_ci" title="Danish, case-insensitive">latin1_danish_ci</option>
											<option value="latin1-latin1_general_ci" title="West European (multilingual), case-insensitive">latin1_general_ci</option>
											<option value="latin1-latin1_general_cs" title="West European (multilingual), case-sensitive">latin1_general_cs</option>
											<option value="latin1-latin1_german1_ci" title="German (dictionary), case-insensitive">latin1_german1_ci</option>
											<option value="latin1-latin1_german2_ci" title="German (phone book), case-insensitive">latin1_german2_ci</option>
											<option value="latin1-latin1_spanish_ci" title="Spanish, case-insensitive">latin1_spanish_ci</option>
											<option value="latin1-latin1_swedish_ci" title="Swedish, case-insensitive">latin1_swedish_ci</option>
										</optgroup>

										<optgroup label="latin2" title="ISO 8859-2 Central European">
											<option value="latin2-latin2_bin" title="Central European (multilingual), Binary">latin2_bin</option>
											<option value="latin2-latin2_croatian_ci" title="Croatian, case-insensitive">latin2_croatian_ci</option>
											<option value="latin2-latin2_czech_cs" title="Czech, case-sensitive">latin2_czech_cs</option>
											<option value="latin2-latin2_general_ci" title="Central European (multilingual), case-insensitive">latin2_general_ci</option>
											<option value="latin2-latin2_hungarian_ci" title="Hungarian, case-insensitive">latin2_hungarian_ci</option>
										</optgroup>

										<optgroup label="latin5" title="ISO 8859-9 Turkish">
											<option value="latin5-latin5_bin" title="Turkish, Binary">latin5_bin</option>
											<option value="latin5-latin5_turkish_ci" title="Turkish, case-insensitive">latin5_turkish_ci</option>
										</optgroup>

										<optgroup label="latin7" title="ISO 8859-13 Baltic">
											<option value="latin7-latin7_bin" title="Baltic (multilingual), Binary">latin7_bin</option>
											<option value="latin7-latin7_estonian_cs" title="Estonian, case-sensitive">latin7_estonian_cs</option>
											<option value="latin7-latin7_general_ci" title="Baltic (multilingual), case-insensitive">latin7_general_ci</option>
											<option value="latin7-latin7_general_cs" title="Baltic (multilingual), case-sensitive">latin7_general_cs</option>
										</optgroup>

										<optgroup label="macce" title="Mac Central European">
											<option value="macce-macce_bin" title="Central European (multilingual), Binary">macce_bin</option>
											<option value="macce-macce_general_ci" title="Central European (multilingual), case-insensitive">macce_general_ci</option>
										</optgroup>

										<optgroup label="macroman" title="Mac West European">
											<option value="macroman-macroman_bin" title="West European (multilingual), Binary">macroman_bin</option>
											<option value="macroman-macroman_general_ci" title="West European (multilingual), case-insensitive">macroman_general_ci</option>
										</optgroup>

										<optgroup label="sjis" title="Shift-JIS Japanese">
											<option value="sjis-sjis_bin" title="Japanese, Binary">sjis_bin</option>
											<option value="sjis-sjis_japanese_ci" title="Japanese, case-insensitive">sjis_japanese_ci</option>
										</optgroup>

										<optgroup label="swe7" title="7bit Swedish">
											<option value="swe7-swe7_bin" title="Swedish, Binary">swe7_bin</option>
											<option value="swe7-swe7_swedish_ci" title="Swedish, case-insensitive">swe7_swedish_ci</option>
										</optgroup>

										<optgroup label="tis620" title="TIS620 Thai">
											<option value="tis620-tis620_bin" title="Thai, Binary">tis620_bin</option>
											<option value="tis620-tis620_thai_ci" title="Thai, case-insensitive">tis620_thai_ci</option>
										</optgroup>

										<optgroup label="ucs2" title="UCS-2 Unicode">
											<option value="ucs2-ucs2_bin" title="Unicode (multilingual), Binary">ucs2_bin</option>
											<option value="ucs2-ucs2_croatian_ci" title="Croatian, case-insensitive">ucs2_croatian_ci</option>
											<option value="ucs2-ucs2_czech_ci" title="Czech, case-insensitive">ucs2_czech_ci</option>
											<option value="ucs2-ucs2_danish_ci" title="Danish, case-insensitive">ucs2_danish_ci</option>
											<option value="ucs2-ucs2_esperanto_ci" title="Esperanto, case-insensitive">ucs2_esperanto_ci</option>
											<option value="ucs2-ucs2_estonian_ci" title="Estonian, case-insensitive">ucs2_estonian_ci</option>
											<option value="ucs2-ucs2_general_ci" title="Unicode (multilingual), case-insensitive">ucs2_general_ci</option>
											<option value="ucs2-ucs2_general_mysql500_ci" title="Unicode (multilingual)">ucs2_general_mysql500_ci</option>
											<option value="ucs2-ucs2_german2_ci" title="German (phone book), case-insensitive">ucs2_german2_ci</option>
											<option value="ucs2-ucs2_hungarian_ci" title="Hungarian, case-insensitive">ucs2_hungarian_ci</option>
											<option value="ucs2-ucs2_icelandic_ci" title="Icelandic, case-insensitive">ucs2_icelandic_ci</option>
											<option value="ucs2-ucs2_latvian_ci" title="Latvian, case-insensitive">ucs2_latvian_ci</option>
											<option value="ucs2-ucs2_lithuanian_ci" title="Lithuanian, case-insensitive">ucs2_lithuanian_ci</option>
											<option value="ucs2-ucs2_persian_ci" title="Persian, case-insensitive">ucs2_persian_ci</option>
											<option value="ucs2-ucs2_polish_ci" title="Polish, case-insensitive">ucs2_polish_ci</option>
											<option value="ucs2-ucs2_roman_ci" title="West European, case-insensitive">ucs2_roman_ci</option>
											<option value="ucs2-ucs2_romanian_ci" title="Romanian, case-insensitive">ucs2_romanian_ci</option>
											<option value="ucs2-ucs2_sinhala_ci" title="unknown, case-insensitive">ucs2_sinhala_ci</option>
											<option value="ucs2-ucs2_slovak_ci" title="Slovak, case-insensitive">ucs2_slovak_ci</option>
											<option value="ucs2-ucs2_slovenian_ci" title="Slovenian, case-insensitive">ucs2_slovenian_ci</option>
											<option value="ucs2-ucs2_spanish2_ci" title="Traditional Spanish, case-insensitive">ucs2_spanish2_ci</option>
											<option value="ucs2-ucs2_spanish_ci" title="Spanish, case-insensitive">ucs2_spanish_ci</option>
											<option value="ucs2-ucs2_swedish_ci" title="Swedish, case-insensitive">ucs2_swedish_ci</option>
											<option value="ucs2-ucs2_turkish_ci" title="Turkish, case-insensitive">ucs2_turkish_ci</option>
											<option value="ucs2-ucs2_unicode_520_ci" title="Unicode (multilingual)">ucs2_unicode_520_ci</option>
											<option value="ucs2-ucs2_unicode_ci" title="Unicode (multilingual), case-insensitive">ucs2_unicode_ci</option>
											<option value="ucs2-ucs2_vietnamese_ci" title="unknown, case-insensitive">ucs2_vietnamese_ci</option>
										</optgroup>

										<optgroup label="ujis" title="EUC-JP Japanese">
											<option value="ujis-ujis_bin" title="Japanese, Binary">ujis_bin</option>
											<option value="ujis-ujis_japanese_ci" title="Japanese, case-insensitive">ujis_japanese_ci</option>
										</optgroup>

										<optgroup label="utf16" title="UTF-16 Unicode">
											<option value="utf16-utf16_bin" title="unknown, Binary">utf16_bin</option>
											<option value="utf16-utf16_croatian_ci" title="Croatian, case-insensitive">utf16_croatian_ci</option>
											<option value="utf16-utf16_czech_ci" title="Czech, case-insensitive">utf16_czech_ci</option>
											<option value="utf16-utf16_danish_ci" title="Danish, case-insensitive">utf16_danish_ci</option>
											<option value="utf16-utf16_esperanto_ci" title="Esperanto, case-insensitive">utf16_esperanto_ci</option>
											<option value="utf16-utf16_estonian_ci" title="Estonian, case-insensitive">utf16_estonian_ci</option>
											<option value="utf16-utf16_general_ci" title="unknown, case-insensitive">utf16_general_ci</option>
											<option value="utf16-utf16_german2_ci" title="German (phone book), case-insensitive">utf16_german2_ci</option>
											<option value="utf16-utf16_hungarian_ci" title="Hungarian, case-insensitive">utf16_hungarian_ci</option>
											<option value="utf16-utf16_icelandic_ci" title="Icelandic, case-insensitive">utf16_icelandic_ci</option>
											<option value="utf16-utf16_latvian_ci" title="Latvian, case-insensitive">utf16_latvian_ci</option>
											<option value="utf16-utf16_lithuanian_ci" title="Lithuanian, case-insensitive">utf16_lithuanian_ci</option>
											<option value="utf16-utf16_persian_ci" title="Persian, case-insensitive">utf16_persian_ci</option>
											<option value="utf16-utf16_polish_ci" title="Polish, case-insensitive">utf16_polish_ci</option>
											<option value="utf16-utf16_roman_ci" title="West European, case-insensitive">utf16_roman_ci</option>
											<option value="utf16-utf16_romanian_ci" title="Romanian, case-insensitive">utf16_romanian_ci</option>
											<option value="utf16-utf16_sinhala_ci" title="unknown, case-insensitive">utf16_sinhala_ci</option>
											<option value="utf16-utf16_slovak_ci" title="Slovak, case-insensitive">utf16_slovak_ci</option>
											<option value="utf16-utf16_slovenian_ci" title="Slovenian, case-insensitive">utf16_slovenian_ci</option>
											<option value="utf16-utf16_spanish2_ci" title="Traditional Spanish, case-insensitive">utf16_spanish2_ci</option>
											<option value="utf16-utf16_spanish_ci" title="Spanish, case-insensitive">utf16_spanish_ci</option>
											<option value="utf16-utf16_swedish_ci" title="Swedish, case-insensitive">utf16_swedish_ci</option>
											<option value="utf16-utf16_turkish_ci" title="Turkish, case-insensitive">utf16_turkish_ci</option>
											<option value="utf16-utf16_unicode_520_ci" title="Unicode (multilingual)">utf16_unicode_520_ci</option>
											<option value="utf16-utf16_unicode_ci" title="Unicode (multilingual), case-insensitive">utf16_unicode_ci</option>
											<option value="utf16-utf16_vietnamese_ci" title="unknown, case-insensitive">utf16_vietnamese_ci</option>
										</optgroup>

										<optgroup label="utf16le" title="UTF-16LE Unicode">
											<option value="utf16le-utf16le_bin" title="unknown, Binary">utf16le_bin</option>
											<option value="utf16le-utf16le_general_ci" title="unknown, case-insensitive">utf16le_general_ci</option>
										</optgroup>

										<optgroup label="utf32" title="UTF-32 Unicode">
											<option value="utf32-utf32_bin" title="unknown, Binary">utf32_bin</option>
											<option value="utf32-utf32_croatian_ci" title="Croatian, case-insensitive">utf32_croatian_ci</option>
											<option value="utf32-utf32_czech_ci" title="Czech, case-insensitive">utf32_czech_ci</option>
											<option value="utf32-utf32_danish_ci" title="Danish, case-insensitive">utf32_danish_ci</option>
											<option value="utf32-utf32_esperanto_ci" title="Esperanto, case-insensitive">utf32_esperanto_ci</option>
											<option value="utf32-utf32_estonian_ci" title="Estonian, case-insensitive">utf32_estonian_ci</option>
											<option value="utf32-utf32_general_ci" title="unknown, case-insensitive">utf32_general_ci</option>
											<option value="utf32-utf32_german2_ci" title="German (phone book), case-insensitive">utf32_german2_ci</option>
											<option value="utf32-utf32_hungarian_ci" title="Hungarian, case-insensitive">utf32_hungarian_ci</option>
											<option value="utf32-utf32_icelandic_ci" title="Icelandic, case-insensitive">utf32_icelandic_ci</option>
											<option value="utf32-utf32_latvian_ci" title="Latvian, case-insensitive">utf32_latvian_ci</option>
											<option value="utf32-utf32_lithuanian_ci" title="Lithuanian, case-insensitive">utf32_lithuanian_ci</option>
											<option value="utf32-utf32_persian_ci" title="Persian, case-insensitive">utf32_persian_ci</option>
											<option value="utf32-utf32_polish_ci" title="Polish, case-insensitive">utf32_polish_ci</option>
											<option value="utf32-utf32_roman_ci" title="West European, case-insensitive">utf32_roman_ci</option>
											<option value="utf32-utf32_romanian_ci" title="Romanian, case-insensitive">utf32_romanian_ci</option>
											<option value="utf32-utf32_sinhala_ci" title="unknown, case-insensitive">utf32_sinhala_ci</option>
											<option value="utf32-utf32_slovak_ci" title="Slovak, case-insensitive">utf32_slovak_ci</option>
											<option value="utf32-utf32_slovenian_ci" title="Slovenian, case-insensitive">utf32_slovenian_ci</option>
											<option value="utf32-utf32_spanish2_ci" title="Traditional Spanish, case-insensitive">utf32_spanish2_ci</option>
											<option value="utf32-utf32_spanish_ci" title="Spanish, case-insensitive">utf32_spanish_ci</option>
											<option value="utf32-utf32_swedish_ci" title="Swedish, case-insensitive">utf32_swedish_ci</option>
											<option value="utf32-utf32_turkish_ci" title="Turkish, case-insensitive">utf32_turkish_ci</option>
											<option value="utf32-utf32_unicode_520_ci" title="Unicode (multilingual)">utf32_unicode_520_ci</option>
											<option value="utf32-utf32_unicode_ci" title="Unicode (multilingual), case-insensitive">utf32_unicode_ci</option>
											<option value="utf32-utf32_vietnamese_ci" title="unknown, case-insensitive">utf32_vietnamese_ci</option>
										</optgroup>

										<optgroup label="utf8mb4" title="UTF-8 Unicode">
											<option value="utf8mb4-utf8mb4_bin" title="Unicode (multilingual), Binary">utf8mb4_bin</option>
											<option value="utf8mb4-utf8mb4_croatian_ci" title="Croatian, case-insensitive">utf8mb4_croatian_ci</option>
											<option value="utf8mb4-utf8mb4_czech_ci" title="Czech, case-insensitive">utf8mb4_czech_ci</option>
											<option value="utf8mb4-utf8mb4_danish_ci" title="Danish, case-insensitive">utf8mb4_danish_ci</option>
											<option value="utf8mb4-utf8mb4_esperanto_ci" title="Esperanto, case-insensitive">utf8mb4_esperanto_ci</option>
											<option value="utf8mb4-utf8mb4_estonian_ci" title="Estonian, case-insensitive">utf8mb4_estonian_ci</option>
											<option value="utf8mb4-utf8mb4_general_ci" title="Unicode (multilingual), case-insensitive">utf8mb4_general_ci</option>
											<option value="utf8mb4-utf8mb4_german2_ci" title="German (phone book), case-insensitive">utf8mb4_german2_ci</option>
											<option value="utf8mb4-utf8mb4_hungarian_ci" title="Hungarian, case-insensitive">utf8mb4_hungarian_ci</option>
											<option value="utf8mb4-utf8mb4_icelandic_ci" title="Icelandic, case-insensitive">utf8mb4_icelandic_ci</option>
											<option value="utf8mb4-utf8mb4_latvian_ci" title="Latvian, case-insensitive">utf8mb4_latvian_ci</option>
											<option value="utf8mb4-utf8mb4_lithuanian_ci" title="Lithuanian, case-insensitive">utf8mb4_lithuanian_ci</option>
											<option value="utf8mb4-utf8mb4_persian_ci" title="Persian, case-insensitive">utf8mb4_persian_ci</option>
											<option value="utf8mb4-utf8mb4_polish_ci" title="Polish, case-insensitive">utf8mb4_polish_ci</option>
											<option value="utf8mb4-utf8mb4_roman_ci" title="West European, case-insensitive">utf8mb4_roman_ci</option>
											<option value="utf8mb4-utf8mb4_romanian_ci" title="Romanian, case-insensitive">utf8mb4_romanian_ci</option>
											<option value="utf8mb4-utf8mb4_sinhala_ci" title="unknown, case-insensitive">utf8mb4_sinhala_ci</option>
											<option value="utf8mb4-utf8mb4_slovak_ci" title="Slovak, case-insensitive">utf8mb4_slovak_ci</option>
											<option value="utf8mb4-utf8mb4_slovenian_ci" title="Slovenian, case-insensitive">utf8mb4_slovenian_ci</option>
											<option value="utf8mb4-utf8mb4_spanish2_ci" title="Traditional Spanish, case-insensitive">utf8mb4_spanish2_ci</option>
											<option value="utf8mb4-utf8mb4_spanish_ci" title="Spanish, case-insensitive">utf8mb4_spanish_ci</option>
											<option value="utf8mb4-utf8mb4_swedish_ci" title="Swedish, case-insensitive">utf8mb4_swedish_ci</option>
											<option value="utf8mb4-utf8mb4_turkish_ci" title="Turkish, case-insensitive">utf8mb4_turkish_ci</option>
											<option value="utf8mb4-utf8mb4_unicode_520_ci" title="Unicode (multilingual)">utf8mb4_unicode_520_ci</option>
											<option value="utf8mb4-utf8mb4_unicode_ci" title="Unicode (multilingual), case-insensitive">utf8mb4_unicode_ci</option>
											<option value="utf8mb4-utf8mb4_vietnamese_ci" title="unknown, case-insensitive">utf8mb4_vietnamese_ci</option>
										</optgroup>
								</select>
							</div>
						
					</div>
					<div class="col-lg-12">
						<input type="submit" class="btn btn-success" name="create_feilds" value="Submit" />
						</div>
				</form>
<?php

				break;
		}
	}
?>