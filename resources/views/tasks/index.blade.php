<html>

<head>
    <title> To Do App </title>
</head>
<h3 style="margin-left: 550px">Silmek istediğiniz yazının üzerine tıklayarak silebilirsiniz</h3>

<body>
    <h1 style="margin-left: 677px; margin-top: 170px">GÖREVLER</h1>
    <div style="margin-left: 619px; margin-bottom: 20px;">
        <input id="myInput"
            placeholder="Görevler..."style="width: 300px; height: 35px; border-radius: 20px; padding: 10px; " />
    </div>
    <div class="form-group" style="margin-left: 619px;">
        <button onclick="sayfaGecisi()" id="myButton"
            style="width: 300px; height: 35px; background-color: rgb(255, 0, 0); border-radius: 20px; display: block; margin-top: -10px;">
            diğer ekrana git
        </button>
        <button onclick="yazdir()" id="myButton"
            style="width: 300px; height: 35px; background-color: aqua; border-radius: 20px; display: block; margin-top: 10px;">
            görev yarat
        </button>
        <div id="output" style="margin-left: 100px;"></div>
        <script>
            function yazdir() {
                var inputValue = document.getElementById("myInput").value;

                if (inputValue.trim() !== "") {
                    var newParagraph = document.createElement("p");
                    newParagraph.textContent = inputValue;

                    newParagraph.onclick = function() {
                        this.remove();
                    };

                    document.getElementById("output").appendChild(newParagraph);

                    document.getElementById("myInput").value = '';
                } else {
                    alert("Lütfen bir görev girin!");
                }
            }

            function sayfaGecisi() {
                window.location.href = "/index2";
            }
        </script>
    </div>
</body>

</html>
