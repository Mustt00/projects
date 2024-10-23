<html>

<head>
    <title> To Do App </title>
</head>
<h3 style="margin-left: 350px">yaptığnız görevleri yazarak yapıldı butonuna, yapmadığınız görevleri yazarak ise yapılmadı
    butonuna basınız</h3>

<body>
    <h1 style="margin-left: 677px; margin-top: 170px">GÖREVLER</h1>
    <div style="margin-left: 619px; margin-bottom: 20px;">
        <input id="myInput"
            placeholder="Görevler..."style="width: 300px; height: 35px; border-radius: 20px; padding: 10px; " />
    </div>
    <div class="form-group" style="margin-left: 619px;">
        <button onclick="yapilmadi()" id="myButton"
            style="width: 300px; height: 35px; background-color: rgb(255, 0, 0); border-radius: 20px; display: block; margin-top: -10px;">
            yapılmadı
        </button>
        <button onclick="yapildi()" id="myButton"
            style="width: 300px; height: 35px; background-color: aqua; border-radius: 20px; display: block; margin-top: 10px;">
            yapıldı
        </button>
        <button onclick="sayfaGecisi2()" id="myButton"
            style="width: 300px; height: 35px; background-color: rgb(255, 0, 0); border-radius: 20px; display: block; margin-top: 10px;">
            önceki ekrana dön
        </button>
        <div id="output" style="margin-left: 100px;"></div>

        <script>
            function yapildi() {
                var inputValue = document.getElementById("myInput").value;

                if (inputValue.trim() !== "") {
                    var newParagraph = document.createElement("p");
                    newParagraph.textContent = inputValue + " : yapıldı";

                    newParagraph.onclick = function() {
                        this.remove();
                    };

                    document.getElementById("output").appendChild(newParagraph);

                    document.getElementById("myInput").value = '';
                } else {
                    alert("Lütfen bir görev girin!");
                }
            }

            function yapilmadi() {
                var inputValue = document.getElementById("myInput").value;

                if (inputValue.trim() !== "") {
                    var newParagraph = document.createElement("p");
                    newParagraph.textContent = inputValue + " : yapılmadı";

                    newParagraph.onclick = function() {
                        this.remove();
                    };

                    document.getElementById("output").appendChild(newParagraph);

                    document.getElementById("myInput").value = '';
                } else {
                    alert("Lütfen bir görev girin!");
                }
            }

            function sayfaGecisi2() {
                window.location.href = "/";
            }
        </script>
    </div>
</body>

</html>
