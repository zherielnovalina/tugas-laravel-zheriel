<!DOCTYPE html>
<html>

    <head>
        <title>petugas</title>
            <style>
            
                html {
                    margin: 0;
                    font-family: "Source Sans Pro", sans-serif;
                    font-size: 1rem;
                    font-weight: 600;
                    line-height: 1.5;
                    color: #212529;
                    text-align: left;
                    background-color: black;
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
                    background:black;
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
                    <li><a href="/anggota">Anggota</a></li>
                    <li><a href="/petugas" class="nav-link active">Petugas</a></li>
                    <li><a href="/buku">Buku</a></li>
                </ul>
            </nav>

            <!--ISI-->
            <form action="">
                <h2>FORM PETUGAS</h2><br>
                <label for="id">ID Petugas :</label> <br>
                <input type="text" id="id" name="id"><br>
                <br>

                <label for="nama">Nama Petugas :</label> <br>
                <input type="text" id="nama" name="nama"><br>
                <br>

                <label for="jabatan">Jabatan Petugas :</label><br>
                <select name="jabatan" id="jabatan" style="width: 180px;">
                    <option value="">Pilih Jabatan</option>
                    <option value="kepala-perpus">Kepala Perpustakaan</option>
                    <option value="asisten-kepala-perpus">Asisten Kepala Perpustakaan</option>
                    <option value="admin">Administrasi</option>
                    <option value="Lainnya">DLL</option>
                </select> <br>
                <br>

                <label for="no_tlp">No. Telepon Petugas :</label> <br>
                <input type="text" id="no_tlp" name="no_tlp"><br>
                <br>
                
                <label for="alamat">Alamat Petugas :</label> <br>
                <textarea name="alamat" id="alamat" cols="30" rows="5"></textarea><br>
                <input type="submit" value="Submit" style="width: 80px;">
            </form>
        </body>
</html>