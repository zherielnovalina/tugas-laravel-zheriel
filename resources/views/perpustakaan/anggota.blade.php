<!DOCTYPE html>
<html>

    <head>
        <title>anggota</title>
            <style>
            
                html {
                    margin: 0;
                    font-family: "Source Sans Pro", sans-serif;
                    font-size: 1rem;
                    font-weight: 600;
                    line-height: 1.5;
                    color: #212529;
                    text-align: left;
                    background-color: #c7b6c6;
                }

                * {
                    margin:0; 
                    padding:0;
                    color: white;
                }

                nav {
                    margin:auto;
                    text-align: center;
                    width: 100%;
                } 
                
                nav ul {
                    background: #eac1e8;
                    padding: 0 20px;
                    list-style: none;
                    position: relative;
                    display: inline-table;
                    width: 100%;
                }

                nav ul li{
                    float:left;
                }

                nav ul li:hover{
                    background: transparent;
                }

                nav ul li:hover a{
                    color:#F85C70;
                }

                nav ul li a{
                    display: block;
                    padding: 25px;
                    color: white;
                    text-decoration: none;
                }

                .active {
                    color: #F85C70;
                }

                form {
                    margin-left: 20px;
                }

                input, select, option, textarea{
                    color: black;
                    font-weight: 600;
                }
            </style>
    </head>

        <body>
            <!--NAVBAR-->
            <nav>
                <ul>
                    <li><a href="/anggota" class="nav-link active">Anggota</a></li>
                    <li><a href="/petugas">Petugas</a></li>
                    <li><a href="/buku">Buku</a></li>
                </ul>
            </nav>

            <!--ISI-->
            <form action="">
                <h2>FORM ANGGOTA</h2><br>
                <label for="id">ID Anggota :</label> <br>
                <input type="text" id="id" name="id"><br>
                <br>

                <label for="kode">Kode Anggota :</label> <br>
                <input type="text" id="kode" name="kode"><br>
                <br>

                <label for="nama">Nama Anggota :</label> <br>
                <input type="text" id="nama" name="nama"><br>
                <br>

                <label for="jk">Jenis Kelamin Anggota :</label><br>
                <input type="radio" id="laki-laki" name="jk" value="L">
                <label for="laki-laki">L</label><br>
                <input type="radio" id="perempuan" name="jk" value="P">
                <label for="perempuan">P</label><br>
                <br>

                <label for="jurusan">Jurusan Anggota :</label><br>
                <select name="jurusan" id="jurusan" style="width: 180px;">
                    <option value="">Pilih Jurusan</option>
                    <option value="RPL">Rekayasa Perangkat Lunak</option>
                    <option value="TP">Teknik Pemesinan</option>
                    <option value="TFLM">Teknik Pengelasan</option>
                    <option value="DPIB">Desain Bangunan</option>
                    <option value="TO">Teknik Otomotif</option>
                    <option value="Lainnya">Lainnya</option>
                </select> <br>
                <br>

                <label for="no_tlp">No. Telepon Anggota :</label> <br>
                <input type="text" id="no_tlp" name="no_tlp"><br>
                <br>
                
                <label for="alamat">Alamat Anggota :</label> <br>
                <textarea name="alamat" id="alamat" cols="30" rows="5"></textarea><br>
                <input type="submit" value="Submit" style="width: 80px;"><br>
            </form>
        </body>
</html>