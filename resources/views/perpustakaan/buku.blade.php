<!DOCTYPE html>
<html>

    <head>
        <title>buku</title>
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
                    <li><a href="/petugas">Petugas</a></li>
                    <li><a href="/buku" class="nav-link active">Buku</a></li>
                </ul>
            </nav>

            <!--ISI-->
            <form action="">
                <h2>FORM BUKU</h2><br>
                <label for="id">ID Buku :</label> <br>
                <input type="text" id="id" name="id"><br>
                <br>

                <label for="kode">Kode Buku :</label> <br>
                <input type="text" id="kode" name="kode"><br>
                <br>

                <label for="judul">Judul Buku :</label> <br>
                <input type="text" id="judul" name="judul"><br>
                <br>

                <label for="penulis">Penulis Buku :</label> <br>
                <input type="text" id="penulis" name="penulis"><br>
                <br>

                <label for="penerbit">Penerbit Buku :</label> <br>
                <input type="text" id="penerbit" name="penerbit"><br>
                <br>
                
                <label for="tahun">Tahun Terbit :</label> <br>
                <input type="text" id="tahun" name="tahun"><br>
                <br>

                <label for="stok">Stok :</label> <br>
                <input type="text" id="stok" name="stok"><br>
                <br>
                <input type="submit" value="Submit" style="width: 80px;"><br>
            </form>
        </body>