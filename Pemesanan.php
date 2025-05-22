<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Pemesanan - GENBA WEB</title>
	<link rel="stylesheet" href="style Pemesanan.css" type="text/css" charset="utf-8" />
	
</head>

<body>
  <div id="wrapper">
    <div id="header"> </div>
    <div id="left">
      <div id="logo">
        <h1>GENBA WEB</h1>
        <p>Media Seputar Genteng & Batubata</p>
      </div>
      <div id="nav">
        <ul>
          <li><a href="index.html">Beranda</a></li>
          <li><a href="#">Produk</a></li>
          <li><a href="#">Keunggulan</a></li>
          <li><a href="#">Tentang Kami</a></li>
          <li><a href="Pemesanan.html">Pemesanan</a></li>
        </ul>
      </div>
      <div id="news">
        <h2>Pengiriman Terakhir</h2>
        <h3>02/03/07</h3>
        <p>Even more websites all about website templates on <a href="#">Just Web Templates</a>.</p>
        <div class="hr-dots"> </div>
        <h3>01/03/07</h3>
        <p>If you're looking for beautiful and professionally made templates you can find them at <a href="#">Template Beauty</a>.</p>
        <p class="more"><a href="#">more</a></p>
      </div>
      <div id="support">
        <p>Call: 082139228760</p>
      </div>
    </div>
    <div id="right">
      <h2>Pemesanan</h2>
      <div id="welcome">
        <form name="fm-input" method="post" action="Pemesanan3.php">
          <table>
            <tr>
              <td><label for="Nama">Nama</label></td>
              <td>:<input type="text" size="40" name="Nama" id="Nama" required/></td>
            </tr>

            <tr>
              <td><label for="Alamat">Alamat</label></td>
              <td>:<textarea name="Alamat" id="Alamat" rows="3" cols="39" required></textarea></td>
            </tr>
                
            <tr>
              <td><label for="Tipe">Tipe</label></td>
              <td>:<select name="tipe" id="Tipe" required>
                <option value="">Pilih Tipe</option>
                <option value="1">Genteng Talang</option>
                <option value="2">Genteng Magase</option>
                <option value="3">Genteng Karangpilang</option>
                <option value="4">Genteng Wuwung</option>
                <option value="5">Batubata</option>
              </select>
              </td>
            </tr>

            <tr>
              <td><label for="No_telp">No.Telp/HP</label></td>
              <td>:<input type="text" size="40" name="No_telp" id="No_telp" required/></td>
            </tr>
            
            <tr>
              <td><label for="Jumlah">Jumlah</label></td>
              <td>:<input type="number" size="40" name="Jumlah" id="Jumlah" min="1" required/></td>
            </tr>

            <tr>
              <td><label for="Id_Pengiriman">Metode Pengiriman</label></td>
              <td>:<select name="Id_Pengiriman" id="Id_Pengiriman" required>
                <option value="">Pilih Metode Pengiriman</option>
                <option value="1">Reguler</option>
                <option value="2">Express</option>
                <option value="3">Ditempat</option>
              </select>
              </td>
            </tr>

            <tr>
              <td><label for="Id_Mitra">Mitra</label></td>
              <td>:<select name="Id_Mitra" id="Id_Mitra" required>
                <option value="">Pilih Mitra</option>
                <option value="1">Mitra A</option>
                <option value="2">Mitra B</option>
                <option value="3">Mitra C</option>
              </select>
              </td>
            </tr>

            <tr>
              <td colspan="2" style="padding-top: 20px;">
                <input type="submit" name="simpan" value="Simpan" />
                <input type="reset" name="reset" value="Reset" />
              </td>
            </tr>
          </table>
        </form>
      </div>
    </div>
    <div class="clear"> </div>
    <div id="spacer"> </div>
    <div id="footer">
      <div id="copyright">
        Copyright &copy; 2025 GENBA WEB All rights reserved.
      </div>
      <div id="footerline"></div>
    </div>
  </div>
</body>
</html>