<?php 
 $kullanici_adi = $_POST['kullanici_adi'];
 $kullanici_sifre = $_POST['kullanici_sifre'];
 if ($kullanici_adi=="" or $kullanici_sifre=="")
	{
		echo "Lütfen Tüm Alanları Doldurun!";	
	}
	else
	{
		if ($kullanici_adi=="b201210057@sakarya.edu.tr" && $kullanici_sifre=="b201210057")
		{
			echo "HOŞGELDİNİZ B201210057";	
		}
		else
		{
			echo "Hatalı Kullanıcı Adı veya Şifre Girdiniz.";	
		}
	}
 ?>